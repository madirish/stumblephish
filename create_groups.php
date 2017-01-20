<?php
// create_group.php
require_once "bootstrap.php";
require_once "src/Groups.php";

$newGroupsName = $argv[1];

$groups = new Groups();
$groups->setName($newGroupsName);

print_r("Set the name to $newGroupsName");

$entityManager->persist($groups);
$entityManager->flush();

echo "Created group with ID " . $groups->getId() . "\n";