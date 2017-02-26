<?php 
include('../php/db.php');
include('meta.php');
include('sidebar.php');
require 'php/vendor/plasticbrain/php-flash-messages/src/FlashMessages.php';


$sql_select_artikel = "SELECT id, title FROM `article` ORDER BY `id` ASC";
$query = $pdo->prepare($sql_select_artikel);
$query->execute();
$row = $query->fetchAll();
?>
<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Articles <a href="form_article.php" class="btn btn-default" role="button">Add</a></h1>
                 <?php 
                    if (!session_id()) @session_start();
                    $msg = new \Plasticbrain\FlashMessages\FlashMessages();
                    $msg->display();
                    session_unset();
                    session_destroy();
                ?>
                <?php  
				if($row==false) {
					echo "Belum ada artikel";
				}                
				else {
					?>
					<table class="table table-bordered">
					    <thead>
					     	<tr>
					        	<th>No</th>
						        <th><center>Title</center></th>
						        <th><center>Action</center></th>
					      	</tr>
					    </thead>
					    <tbody>
					    	<?php
					    	$counter = 1;
					    	foreach($row as $data) {
					    		?>
					    		<tr>
						        	<td><?php echo $counter; ?></td>
						        	<td><?php echo $data['title']; ?></td>
						        	<td>
						        		<center>
						        			<a href="form_article.php?id=<?php echo $data['id']; ?>" class="btn-sm btn-primary" 
						        			role="button">Edit</a>&nbsp;
						        			
						        			<a href="php/delete.php?id=<?php echo $data['id']; ?>" class="btn-sm btn-danger" 
						        			role="button">Delete</a>
						        		</center>
						        	</td>
					        	</tr>
					    		<?php
					    		$counter++;
					    	}
					    	?>
					    </tbody>
				  	</table>	
					<?php
				}
                ?>
                
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->
<?php
include('footer.php');
?>