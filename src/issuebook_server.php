<?php

include("data_class.php");

$book=$_POST['book'];
$userselect= $_POST['userselect'];
$getdate= date("Y-m-d");
$days= $_POST['days'];

$returnDate=Date('Y-m-d', strtotime('+'.$days.'days'));

$obj=new data();
$obj->setconnection();
$obj->issuebook($book,$userselect,$days,$getdate,$returnDate);
