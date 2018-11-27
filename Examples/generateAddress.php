<?php

require_once '../src/FolmPHP/FolmECDSA/FolmECDSA.php';

use FolmPHP\FolmECDSA\FolmECDSA;

$folmECDSA = new FolmECDSA();
$folmECDSA->generateRandomPrivateKey(); //generate new random private key
$address = $folmECDSA->getAddress(); //compressed Folm address
echo "Address: " . $address . PHP_EOL;

//Validate an address (Verify the checksum)
if($folmECDSA->validateAddress($address)) {
    echo "The address is valid" . PHP_EOL;
} else {
    echo "The address is invalid" . PHP_EOL;
}