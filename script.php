<?php

require 'vendor/autoload.php';

use Aws\S3\S3Client;
 
$aws = new Aws($config);

print "hello";
// Get a resource representing the S3 service.
$s3 = $aws->s3;

$s3 = new S3Client(['version' => 'latest', 'region' => 'eu-central-2']);
$bucket = $aws->s3->bucket('1000genomes');

$objects = $bucket->object(substr('BRCA2-001', 0, 5));

$count = 0;
foreach($bucket -> objects() as $object) {
	$count++;
	echo "This is person number {$person[$count]}.\n";
}
print "Total number of patients are $count";
?>
