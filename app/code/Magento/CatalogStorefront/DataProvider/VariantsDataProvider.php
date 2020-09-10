<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CatalogStorefront\DataProvider;

use Magento\CatalogStorefront\Model\Storage\Client\Config\Variant;
use Magento\CatalogStorefront\Model\Storage\Client\QueryInterface;
use Magento\CatalogStorefront\Model\Storage\State;
use Magento\Framework\Exception\NotFoundException;
use Psr\Log\LoggerInterface;

/**
 * Variants storage reader.
 */
class VariantsDataProvider
{
    /**
     * @var QueryInterface
     */
    private $query;

    /**
     * @var State
     */
    private $storageState;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param QueryInterface $query
     * @param State $storageState
     * @param LoggerInterface $logger
     */
    public function __construct(
        QueryInterface $query,
        State $storageState,
        LoggerInterface $logger
    ) {
        $this->query = $query;
        $this->storageState = $storageState;
        $this->logger = $logger;
    }

    /**
     * Fetch variants data from storage
     *
     * @param array $variantIds
     * @param array $attributes
     * @param array $scopes
     * @return array
     * @throws \Magento\Framework\Exception\FileSystemException
     * @throws \Magento\Framework\Exception\RuntimeException
     * @throws \Throwable
     */
    public function fetch(array $variantIds, array $attributes, array $scopes): array
    {
        $items = [];
        if (!$variantIds) {
            return $items;
        }
        $storageName = $this->storageState->getCurrentDataSourceName([$scopes['store'], Variant::ENTITY_NAME]);
        try {
            $entities = $this->query->getEntries(
                $storageName,
                Variant::ENTITY_NAME,
                $variantIds,
                $this->getFirstLevelAttributes($attributes)
            );
        } catch (NotFoundException $notFoundException) {
            $this->logger->error(
                \sprintf(
                    'Cannot find variants for ids "%s" in the scope "%s"',
                    \implode(', ', $variantIds),
                    \implode(', ', \array_keys($scopes))  . ':' . \implode(', ', $scopes)
                ),
                ['exception' => $notFoundException]
            );
            return [];
        } catch (\Throwable $e) {
            $this->logger->error($e);
            throw $e;
        }

        return $entities->toArray();
    }

    /**
     * Get attributes of first level
     *
     * @param array $attributes
     * @return array
     */
    private function getFirstLevelAttributes($attributes): array
    {
        $firstLevel = ['entity_id', 'sku', 'type_id'];
        foreach ($attributes as $name => $value) {
            if (\is_array($value)) {
                $firstLevel[] = \strpos($name, '.') !== false ? \explode('.', $name)[1] : $name;
            } else {
                $firstLevel[] = $value;
            }
        }

        return $firstLevel;
    }
}