<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

// study
echo $collection->getDatabaseName(), '<br>';

// test
echo $collection->getCollectionName(), '<br>';

// study.test
echo $collection->getNamespace(), '<br>';




