<?php
$id = $_GET['id'];
$table =  $_GET['table'];

$connection = mysqli_connect("localhost","root","root", "Jajjiprofessor") or die("Couldn't connect to DB");

$sql = "DELETE FROM $table WHERE id = '$id'";
$result = mysqli_query($connection,$sql);
if($result){
    header('location:./index.php?page='. $_GET['page']. '/index');
}else{
    echo "Failed to delete";
}

?>