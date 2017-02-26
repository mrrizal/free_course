<?php include('meta.php') ?>
	
	<?php include('header.php') ?>

	<section id="herotext">
		<h1>Welcome to the Jungle</h1>
		<h2>Here's you will find more about you</h2>
	</section>
	<section id="content" class="container">
		<article id="artikel">
		<?php 
			include('php/db.php'); 

			if(isset($_GET['article']) & $_GET['article'] != '') {
				$article = "SELECT * FROM `article` WHERE `id`=".$_GET['article'];
			}
			else {
				$article = "SELECT * FROM `article` ORDER BY `id` DESC LIMIT 1";
			}
			
			$query = $pdo->prepare($article);
			$query->execute();
			$row = $query->fetchAll(PDO::FETCH_ASSOC);
			
			if ($row==false){
				echo 'Belum ada artikel';
			} 
			else {
				foreach ($row as $data) {
					?>
					<h2 class="judul"><?php echo $data['title']; ?></h2>
					<div class="isi-artikel">
						<p><?php echo $data['content']; ?><p>
					</div>
					<?php
				}
			}
		?>
		</article>
	</section>

	<?php include('sidebar.php') ?>

<?php include('footer.php') ?>