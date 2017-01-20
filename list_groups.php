<?php
// list_groups.php
require_once "bootstrap.php";
require_once "src/Groups.php";

$productRepository = $entityManager->getRepository('Groups');
$groups = $productRepository->findAll();

foreach ($groups as $group) {
    echo sprintf("-%s\n", $group->getName());
}