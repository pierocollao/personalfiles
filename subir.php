<?php
require 'vendor/autoload.php';

use Google\Cloud\Storage\StorageClient;

$storage = new StorageClient();

$bucketName = 'mi-bucket-archivos';
$bucket = $storage->bucket($bucketName);

$archivoLocal = 'documento.pdf';
$nombreEnBucket = 'uploads/documento.pdf';

$bucket->upload(
    fopen($archivoLocal, 'r'),
    [
        'name' => $nombreEnBucket
    ]
);

echo "Archivo subido correctamente 🚀";