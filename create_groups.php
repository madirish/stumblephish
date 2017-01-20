<?php
// create_group.php
require_once "bootstrap.php";
require_once "src/Groups.php";
require_once "src/Target.php";

$newGroupsName = $argv[1];

$groups = new Groups();
$groups->setName($newGroupsName);

$target = new Target();
$target->setFName("James");
$target->setLName("Bond");
$target->setEmail("bondj@mi6.gov.uk");

$groups->addTarget($target);

print_r("Set the name to $newGroupsName");

$entityManager->persist($target);
$entityManager->persist($groups);
$entityManager->flush();

echo "Created group with ID " . $groups->getId() . "\n";
