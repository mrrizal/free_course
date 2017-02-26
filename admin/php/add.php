<?php 
include('../../php/db.php');
require 'vendor/plasticbrain/php-flash-messages/src/FlashMessages.php';


if (!session_id()) @session_start();
$msg = new \Plasticbrain\FlashMessages\FlashMessages();

if(isset($_POST['title']) & isset($_POST['content'])) {
	if($_POST['title'] == '' or $_POST['content'] == '' ) {
		$msg->error('Data tidak lengkap!', '../form_article.php'); 
			
	}
	else {
		$sql_insert = "INSERT INTO `article` (`title`,`content`) VALUES (?,?)";
		$query = $pdo->prepare($sql_insert);
		$query->bindParam(1, $_POST['title']);
		$query->bindParam(2, $_POST['content']);
		$query->execute();
		 
		$msg->success('Tambah data berhasil.', '../form_article.php'); 
	}
}
else {
	$msg->error('Data tidak lengkap!', '../form_article.php'); 
}
?>
