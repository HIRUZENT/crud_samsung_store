<?php
include('../crud.php');

$crud = new Crud();

if(isset($_GET['id'])) 
{
	$id = $_GET['id'];

	$hasil = $crud->delete('smartphone','id',$id);
	if($hasil)
	{
		header('Location: ../index.php');
	}
	else
	{
		echo "Gagal Hapus";
	}
}
?>