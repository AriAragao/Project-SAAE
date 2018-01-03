<?php 

require_once '../classes/conexao.class.php';

$conn = new conexao();
$link = $conn->Conecta();

$from = $_GET['from'];
$id = $_GET['id'];
	
$query = mysqli_query($link,"DELETE FROM ".$from." WHERE id =".$id) or die(mysqli_error());
	header("Location: ".$_GET['next'].".php");
?>