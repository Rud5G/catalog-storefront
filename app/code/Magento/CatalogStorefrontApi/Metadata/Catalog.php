<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catalog.proto

namespace Magento\CatalogStorefrontApi\Metadata;

class Catalog
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab9240a0d636174616c6f672e70726f746f12226d6167656e746f2e6361" .
            "74616c6f6753746f726566726f6e744170692e70726f746f228d090a0750" .
            "726f64756374120a0a02696418012001280912180a106174747269627574" .
            "655f7365745f696418022001280912130a0b6861735f6f7074696f6e7318" .
            "032001280812120a0a637265617465645f617418052001280912120a0a75" .
            "7064617465645f6174180620012809120b0a03736b75180720012809120f" .
            "0a07747970655f6964180820012809120e0a067374617475731809200128" .
            "0912140a0c73746f636b5f737461747573180a20012809120c0a046e616d" .
            "6518112001280912130a0b6465736372697074696f6e1812200128091219" .
            "0a1173686f72745f6465736372697074696f6e181320012809120f0a0775" .
            "726c5f6b657918142001280912140a0c7461785f636c6173735f6964181c" .
            "20012809120e0a06776569676874181d2001280212380a05696d61676518" .
            "1f2001280b32292e6d6167656e746f2e636174616c6f6753746f72656672" .
            "6f6e744170692e70726f746f2e496d616765123e0a0b736d616c6c5f696d" .
            "61676518202001280b32292e6d6167656e746f2e636174616c6f6753746f" .
            "726566726f6e744170692e70726f746f2e496d616765123c0a097468756d" .
            "626e61696c18212001280b32292e6d6167656e746f2e636174616c6f6753" .
            "746f726566726f6e744170692e70726f746f2e496d61676512140a0c7377" .
            "617463685f696d61676518222001280912120a0a7669736962696c697479" .
            "18252001280912550a1264796e616d69635f617474726962757465731832" .
            "2003280b32392e6d6167656e746f2e636174616c6f6753746f726566726f" .
            "6e744170692e70726f746f2e44796e616d69634174747269627574655661" .
            "6c756512180a106d6574615f6465736372697074696f6e18162001280912" .
            "140a0c6d6574615f6b6579776f726418172001280912120a0a6d6574615f" .
            "7469746c6518182001280912180a1072657175697265645f6f7074696f6e" .
            "7318462001280912120a0a637265617465645f696e184a2001280912120a" .
            "0a757064617465645f696e184b2001280912210a197175616e746974795f" .
            "616e645f73746f636b5f737461747573184c2001280912190a116f707469" .
            "6f6e735f636f6e7461696e6572184d2001280912260a1e6d7372705f6469" .
            "73706c61795f61637475616c5f70726963655f74797065184e2001280912" .
            "150a0d69735f72657475726e61626c65184f2001280912120a0a75726c5f" .
            "737566666978185020012809123b0a076f7074696f6e7318512003280b32" .
            "2a2e6d6167656e746f2e636174616c6f6753746f726566726f6e74417069" .
            "2e70726f746f2e4f7074696f6e12440a0c75726c5f726577726974657318" .
            "522003280b322e2e6d6167656e746f2e636174616c6f6753746f72656672" .
            "6f6e744170692e70726f746f2e55726c52657772697465123d0a08766172" .
            "69616e747318532003280b322b2e6d6167656e746f2e636174616c6f6753" .
            "746f726566726f6e744170692e70726f746f2e56617269616e7412540a14" .
            "636f6e666967757261626c655f6f7074696f6e7318542003280b32362e6d" .
            "6167656e746f2e636174616c6f6753746f726566726f6e744170692e7072" .
            "6f746f2e436f6e666967757261626c654f7074696f6e2299040a064f7074" .
            "696f6e12110a096f7074696f6e5f696418012001280912120a0a70726f64" .
            "7563745f6964180220012809120c0a047479706518032001280912120a0a" .
            "69735f72657175697265180420012809120b0a03736b7518052001280912" .
            "1c0a146d61785f63686172616374657273737472696e6718062001280912" .
            "1c0a1466696c655f657874656e73696f6e737472696e6718072001280912" .
            "1a0a12696d6167655f73697a655f78737472696e67180820012809121a0a" .
            "12696d6167655f73697a655f79737472696e6718092001280912120a0a73" .
            "6f72745f6f72646572180a2001280912150a0d64656661756c745f746974" .
            "6c65180b2001280912130a0b73746f72655f7469746c65180c2001280912" .
            "0d0a057469746c65180d2001280912150a0d64656661756c745f70726963" .
            "65180e20012809121a0a1264656661756c745f70726963655f7479706518" .
            "0f2001280912190a1173746f72655f7072696365737472696e6718102001" .
            "2809121e0a1673746f72655f70726963655f74797065737472696e671811" .
            "20012809120d0a05707269636518122001280912120a0a70726963655f74" .
            "79706518132001280912100a08726571756972656418142001280912130a" .
            "0b70726f647563745f736b75181520012809123e0a0576616c7565181620" .
            "03280b322f2e6d6167656e746f2e636174616c6f6753746f726566726f6e" .
            "744170692e70726f746f2e4f7074696f6e56616c75652293030a0b4f7074" .
            "696f6e56616c756512110a096f7074696f6e5f696418012001280912120a" .
            "0a70726f647563745f6964180220012809120c0a04747970651803200128" .
            "0912120a0a69735f72657175697265180420012809120b0a03736b751805" .
            "2001280912160a0e6d61785f636861726163746572731806200128091216" .
            "0a0e66696c655f657874656e73696f6e18072001280912140a0c696d6167" .
            "655f73697a655f7818082001280912140a0c696d6167655f73697a655f79" .
            "18092001280912120a0a736f72745f6f72646572180a2001280912150a0d" .
            "64656661756c745f7469746c65180b2001280912130a0b73746f72655f74" .
            "69746c65180c20012809120d0a057469746c65180d2001280912150a0d64" .
            "656661756c745f7072696365180e20012809121a0a1264656661756c745f" .
            "70726963655f74797065180f2001280912130a0b73746f72655f70726963" .
            "6518102001280912180a1073746f72655f70726963655f74797065181120" .
            "012809120d0a05707269636518122001280912120a0a70726963655f7479" .
            "706518132001280922e5010a12436f6e666967757261626c654f7074696f" .
            "6e120a0a026964180120012809120d0a056c6162656c1802200128091210" .
            "0a08706f736974696f6e18032001280912130a0b7573655f64656661756c" .
            "7418042001280912120a0a70726f647563745f696418052001280912160a" .
            "0e6174747269627574655f636f646518062001280912140a0c6174747269" .
            "627574655f6964180720012809124b0a0676616c75657318082003280b32" .
            "3b2e6d6167656e746f2e636174616c6f6753746f726566726f6e74417069" .
            "2e70726f746f2e436f6e666967757261626c654f7074696f6e56616c7565" .
            "22ae010a17436f6e666967757261626c654f7074696f6e56616c75651213" .
            "0a0b76616c75655f696e646578180120012809120d0a056c6162656c1802" .
            "2001280912150a0d64656661756c745f6c6162656c18032001280912130a" .
            "0b73746f72655f6c6162656c18042001280912190a117573655f64656661" .
            "756c745f76616c756518052001280912140a0c6174747269627574655f69" .
            "6418062001280912120a0a70726f647563745f696418072001280922640a" .
            "0756617269616e74120f0a0770726f6475637418012001280912480a0a61" .
            "74747269627574657318022003280b32342e6d6167656e746f2e63617461" .
            "6c6f6753746f726566726f6e744170692e70726f746f2e56617269616e74" .
            "41747472696275746522440a1056617269616e7441747472696275746512" .
            "0d0a056c6162656c180120012809120c0a04636f64651802200128091213" .
            "0a0b76616c75655f696e64657818032001280922660a0a55726c52657772" .
            "697465120b0a0375726c180120012809124b0a0a706172616d6574657273" .
            "18022003280b32372e6d6167656e746f2e636174616c6f6753746f726566" .
            "726f6e744170692e70726f746f2e55726c52657772697465506172616d65" .
            "74657222320a1355726c52657772697465506172616d65746572120c0a04" .
            "6e616d65180120012809120d0a0576616c756518022001280922260a084b" .
            "657956616c7565120b0a036b6579180120012809120d0a0576616c756518" .
            "022001280922340a1544796e616d696341747472696275746556616c7565" .
            "120c0a04636f6465180120012809120d0a0576616c756518022001280922" .
            "230a05496d616765120b0a0375726c180120012809120d0a056c6162656c" .
            "18022001280922490a1250726f647563747347657452657175657374120b" .
            "0a03696473180120032809120d0a0573746f726518022001280912170a0f" .
            "6174747269627574655f636f646573180320032809224f0a1150726f6475" .
            "637473476574526573756c74123a0a056974656d7318012003280b322b2e" .
            "6d6167656e746f2e636174616c6f6753746f726566726f6e744170692e70" .
            "726f746f2e50726f6475637422a3010a15496d706f727450726f64756374" .
            "7352657175657374123d0a0870726f647563747318012003280b322b2e6d" .
            "6167656e746f2e636174616c6f6753746f726566726f6e744170692e7072" .
            "6f746f2e50726f64756374120d0a0573746f7265180220012809123c0a06" .
            "706172616d7318062001280b322c2e6d6167656e746f2e636174616c6f67" .
            "53746f726566726f6e744170692e70726f746f2e4b657956616c75652239" .
            "0a16496d706f727450726f6475637473526573706f6e7365120e0a067374" .
            "61747573180120012808120f0a076d65737361676518022001280922d303" .
            "0a0843617465676f7279120a0a026964180120012809120c0a0470617468" .
            "18022001280912100a08706f736974696f6e180320012805120d0a056c65" .
            "76656c18042001280512160a0e6368696c6472656e5f636f756e74180520" .
            "012805120c0a046e616d6518062001280912140a0c646973706c61795f6d" .
            "6f646518072001280912170a0f64656661756c745f736f72745f62791808" .
            "20012809120f0a0775726c5f6b657918092001280912100a0875726c5f70" .
            "617468180a2001280912110a0969735f616374697665180b200128081211" .
            "0a0969735f616e63686f72180c2001280812170a0f696e636c7564655f69" .
            "6e5f6d656e75180d2001280812190a11617661696c61626c655f736f7274" .
            "5f6279180e2003280912430a0b62726561646372756d6273180f2003280b" .
            "322e2e6d6167656e746f2e636174616c6f6753746f726566726f6e744170" .
            "692e70726f746f2e42726561646372756d6212130a0b6465736372697074" .
            "696f6e18102001280912150a0d63616e6f6e6963616c5f75726c18112001" .
            "280912150a0d70726f647563745f636f756e7418122001280312100a0863" .
            "68696c6472656e181320032809120d0a05696d6167651814200128091211" .
            "0a09706172656e745f69641815200128092285010a0a4272656164637275" .
            "6d6212130a0b63617465676f72795f696418012001280912150a0d636174" .
            "65676f72795f6e616d6518022001280912160a0e63617465676f72795f6c" .
            "6576656c18032001280512180a1063617465676f72795f75726c5f6b6579" .
            "18042001280912190a1163617465676f72795f75726c5f70617468180520" .
            "012809225a0a1443617465676f7269657347657452657175657374120b0a" .
            "03696473180120032809120d0a056c6576656c180220012805120d0a0573" .
            "746f726518032001280912170a0f6174747269627574655f636f64657318" .
            "042003280922540a1543617465676f72696573476574526573706f6e7365" .
            "123b0a056974656d7318012003280b322c2e6d6167656e746f2e63617461" .
            "6c6f6753746f726566726f6e744170692e70726f746f2e43617465676f72" .
            "79329e030a07436174616c6f67127e0a0b47657450726f64756374731236" .
            "2e6d6167656e746f2e636174616c6f6753746f726566726f6e744170692e" .
            "70726f746f2e50726f6475637473476574526571756573741a352e6d6167" .
            "656e746f2e636174616c6f6753746f726566726f6e744170692e70726f74" .
            "6f2e50726f6475637473476574526573756c7422001289010a0e496d706f" .
            "727450726f647563747312392e6d6167656e746f2e636174616c6f675374" .
            "6f726566726f6e744170692e70726f746f2e496d706f727450726f647563" .
            "7473526571756573741a3a2e6d6167656e746f2e636174616c6f6753746f" .
            "726566726f6e744170692e70726f746f2e496d706f727450726f64756374" .
            "73526573706f6e736522001286010a0d47657443617465676f7269657312" .
            "382e6d6167656e746f2e636174616c6f6753746f726566726f6e74417069" .
            "2e70726f746f2e43617465676f72696573476574526571756573741a392e" .
            "6d6167656e746f2e636174616c6f6753746f726566726f6e744170692e70" .
            "726f746f2e43617465676f72696573476574526573706f6e736522004228" .
            "e202254d6167656e746f5c436174616c6f6753746f726566726f6e744170" .
            "695c4d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
