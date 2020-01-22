<?php

use HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput;
use HubSpot\Crm\ObjectType;

$hubSpot = Helpers\HubspotClientHelper::createFactory();

if (!isset($_GET['id'])) {
    throw new \Exception('Contact id is not specified');
}
$contactId = $_GET['id'];

if (isset($_POST['buttonDelete'])) {
    $hubSpot->crm()->contacts()->basicApi()->archive($contactId);
    header('Location: /');
    exit();
}

if (isset($_POST['email'])) {
    $newProperties = new SimplePublicObjectInput();
    $newProperties->setProperties($_POST);
    $hubSpot->crm()->contacts()->basicApi()->update($contactId, $newProperties);
    header('Location: /contacts/show.php?updated=true&id='.$contactId);
    exit();
}

$properties = $hubSpot->crm()->properties()->coreApi()->getAll(ObjectType::CONTACTS)->getResults();
$propertiesToDisplay = ['hubspot_owner_id'];
foreach ($properties as $property) {
    if ('string' === $property->getType() && false === $property->getModificationMetadata()->getReadOnlyValue()) {
        $propertiesToDisplay[] = $property->getName();
    }
}

$contact = $hubSpot->crm()->contacts()->basicApi()->getById($contactId, implode(',', $propertiesToDisplay));
$owners = $hubSpot->crm()->owners()->defaultApi()->getPage()->getResults();

$created = $_GET['created'] ?: false;
$updated = $_GET['updated'] ?: false;

include __DIR__.'/../../views/contacts/show.php';
