<?php

require_once '../src/FolmPHP/FolmECDSA/FolmECDSA.php';

use FolmPHP\FolmECDSA\FolmECDSA;

$folmECDSA = new FolmECDSA();
$folmECDSA->generateRandomPrivateKey(); //generate new random private key

$wif = $folmECDSA->getWif();
$address = $folmECDSA->getAddress();
echo "Address : " . $address . PHP_EOL;
echo "WIF : " . $wif . PHP_EOL;

unset($folmECDSA); //destroy instance

//import wif
$folmECDSA = new FolmECDSA();
if($folmECDSA->validateWifKey($wif)) {
    $folmECDSA->setPrivateKeyWithWif($wif);
    $address = $folmECDSA->getAddress();
    echo "imported address : " . $address . PHP_EOL;
} else {
    echo "invalid WIF key" . PHP_EOL;
}
