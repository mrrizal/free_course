		<?php
		include('php/db.php');
		$article = "SELECT id, title, LEFT(content, 150) as description FROM `article` ORDER BY `id`";
		$query = $pdo->prepare($article);
		$query->execute();
		$row = $query->fetchAll();
		?>
		<aside id="sidebar">
			<?php
			foreach ($row as $data) {
			?>
				<div class="item">
					<h3 class="title"><?php echo $data['title']; ?></h3>
					<p class="description"><?php echo $data['description']; ?></p>
					<a class="readmore" href="index.php?article=<?php echo $data['id']; ?>">Read More</a>
				</div>
			<?php
			}
			?>
		</aside>