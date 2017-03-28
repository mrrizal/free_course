<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Articles <a href="<?php echo BASE_URL.'index.php/admin/artikel' ?>" class="btn btn-default" role="button">Add</a></h1>
                <?php 
                
                if (!session_id()) @session_start();
                $msg = new \Plasticbrain\FlashMessages\FlashMessages();
                $msg->display();
                session_unset();
                session_destroy();

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
			    	foreach ($artikel as $row) {
			    		?>
			    		<tr>
				    		<td><?php echo $counter; ?></td>
				    		<td><?php echo $row['title']; ?></td>
				    		<td>
				    			<center>
				        			<a href="<?php echo BASE_URL.'index.php/admin/'; ?>update_artikel/<?php echo str_replace(' ', '-', $row['title']); ?>" class="btn-sm btn-primary" 
				        			role="button">Edit</a>&nbsp;
				        			
				        			<a href="<?php echo BASE_URL.'index.php/admin/'; ?>delete_artikel/<?php echo str_replace(' ', '-', $row['title']); ?>" class="btn-sm btn-danger" 
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
            </div>
        </div>
    </div>
</div>
