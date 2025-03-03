<?php
require __DIR__ . "/incl/lib/connection.php";
$query = $db->prepare("SELECT roleID FROM roleassign WHERE accountID=:id");
$query->execute([":id" => intval($_GET["id"])]);
if($query->rowCount() == 0) exit("0");
echo $query->fetchColumn();
exit;