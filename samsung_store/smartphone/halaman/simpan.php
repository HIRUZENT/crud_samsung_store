<?php
include('../crud.php');

$crud = new Crud();
if($_POST['action'] == 'simpan') {
	$arrData = array('id'=>$_POST['id'],
					'tipe'=>$_POST['tipe'],
					'processor'=>$_POST['processor'],
					'memory'=>$_POST['memory'], 'color'=>$_POST['color'],'price'=>$_POST['price']);

	$hasil = $crud->simpan('smartphone',$arrData); } 

	else { 
$arrData = array ("tipe='".$_POST['tipe']."'", "processor='".$_POST
	['processor']."'", "memory='".$_POST['memory']."'", "color='".$_POST
	['color']."'", "price='".$_POST['price']."'"); 
$idvalue = $_POST['id']; 
$hasil = $crud->update('smartphone',$arrData,'id',$idvalue); }

if($hasil)
{
	header('Location: ../index.php #tabel1');
}
else
{
	echo "Gagal Simpan";
}
?>