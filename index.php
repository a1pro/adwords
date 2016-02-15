<?php
include('header.php');
$add = $_GET['add'];
$name = $_GET['name'];
$amount = $_GET['amount'];
if($add="1"){
AddCampaigns($user, $name, $amount);

}


?>

