<?php 
include('../../php/db.php');
require 'vendor/plasticbrain/php-flash-messages/src/FlashMessages.php';


if (!session_id()) @session_start();
$msg = new \Plasticbrain\FlashMessages\FlashMessages();

if(isset($_GET['id']) & $_GET['id'].trim()!='') {
	$id_artikel = $_GET['id'];
	$sql_select_artikel = "SELECT * FROM `article` WHERE `id` = ?";
	$query = $pdo->prepare($sql_select_artikel);
	$query->execute(array($id_artikel));
	$row = $query->fetch();

	if ($row==false){
		$msg->error('ID article salah!', '../');
	} 
	else {
		$sql_delete = "DELETE FROM `article` WHERE `id` = ?";
		$query = $pdo->prepare($sql_delete);
		$query->execute(array($row['id']));
		
		$msg->success('Data berhasil dihapus.', '../');
	}
} 
else {	 
	$msg->error('Data gagal dihapus.', '../');

}

?>