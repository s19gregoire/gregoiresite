<?php
require 'healt.php';
use Appwrite\Services\Database;
$database = new Database($client);
$res = $database->listDocuments('605606fdab150', array(), 1, 0, "", "", "", "grgoire");
header('Content-Type: application/json');
echo json_encode($res);