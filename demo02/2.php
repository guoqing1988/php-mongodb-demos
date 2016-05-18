<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

/** @var MongoDB\Database $db */
$db = $client->selectDatabase('study');

/** @var MongoDB\Model\CollectionInfoLegacyIterator $collections */
$collections = $db->listCollections();

/**
 * @var MongoDB\Model\CollectionInfo $collection
 */
foreach($collections as $collection) {
    echo $collection->getName(), '<br>';
}



