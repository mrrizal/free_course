<?php 
include('../../php/db.php');
require 'vendor/plasticbrain/php-flash-messages/src/FlashMessages.php';


if (!session_id()) @session_start();
$msg = new \Plasticbrain\FlashMessages\FlashMessages();

if(isset($_POST['title']) & isset($_POST['content']) & isset($_POST['id'])) {
	if($_POST['title'] == '' or $_POST['content'] == '' ) {
		$msg->error('Data tidak lengkap!', '../form_article.php?id='.$_POST['id']); 	
	}
	else {
		$sql_update = "UPDATE `article` SET `title` = ?, `content` = ? WHERE `id` = ?";
		$query = $pdo->prepare($sql_update);
		$query->bindParam(1, $_POST['title']);
		$query->bindParam(2, $_POST['content']);
		$query->bindParam(3, $_POST['id']);
		$query->execute();

		$msg->success('Data berhasil di update', '../form_article.php?id='.$_POST['id']);
	}
}
else {
	$msg->error('Data tidak lengkap!', '../form_article.php?id='.$_POST['id']); 	
}


?>