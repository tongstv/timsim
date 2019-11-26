<?php
ini_set("display_errors", 1);
include "config.php";

// Authenticating with a keyfile path.
$storage = new Google\Cloud\Storage\StorageClient([
    'keyFilePath' => './891b9da07620.json',
        'projectId' => 'valid-alpha-253206'
]);

$storage->registerStreamWrapper();

//$contents = file_put_contents("gs://stvvn/file_backup2.txt", "1111");

$f=fopen("gs://stvvn/stvinc", "wb");
fwrite($f, '1111');
fclose($f);
copy(__DIR__."/vendor.zip", "gs://stvvn/vendor.zip");
/*
$bucket = $storage->bucket('stvvn');

// Upload a file to the bucket.


// Using Predefined ACLs to manage object permissions, you may
// upload a file and give read access to anyone with the URL.
$bucket=$bucket->upload(
    '999999999999999999999',
    [
        'predefinedAcl' => 'publicRead',
        'name' => 'tongstv'
    ]
);
print_r($bucket);
// Download and store an object from the bucket locally.
//$object = $bucket->object('file_backup.txt');
//$object->downloadToFile('/data/file_backup.txt');



