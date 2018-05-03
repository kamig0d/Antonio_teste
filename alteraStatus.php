<?php

include_once("conecta.php");

$status  = (isset($_POST['status']))? $_POST['status']: '';
$id  = (isset($_POST['id']))? $_POST['id']: '';

$sql = "update motorista set status='$status' where id='$id' ";

$altera_status = mysqli_query($conn,$sql);

mysqli_close($conn);


?>