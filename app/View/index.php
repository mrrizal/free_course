	  <div id="content">
        
		<div class="content_item">
			<h1>Welcome To Your Website</h1> 
	      	<p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under the Creative Commons Attribution 3.0 Licence), which means that you are free to download and use it for anything you want (including modifying and amending it). If you wish to remove the &lsquo;ARaynorDesign&rsquo; link in the footer of the template, all I ask is for a donation of &pound;20.00 GBP.</p>
			  
			<?php 
				foreach ($artikel as $row) {
					$string = $row['content'];
					$title = str_replace(' ', '-', $row['title']);
					if (strlen($string) > 500) {

					    // truncate string
					    $stringCut = substr($string, 0, 500);

					    // make sure it ends in a word so assassinate doesn't become ass...
					    $string = substr($stringCut, 0, strrpos($stringCut, ' ')); 
					}
				?>
					<div class="content_container">
					    <p><?php echo $string; ?></p>
					  	<div class="button_small">
					      <a href="<?php echo BASE_URL.'index.php/page/artikel/'.$title; ?>">Read more</a>
					    </div><!--close button_small-->
			  		</div><!--close content_container-->
				<?php
			  	}
			?>
		</div><!--close content_item-->

	  </div><!--close content--> 
	  
	</div><!--close site_content--> 
  
  </div><!--close main-->
  
  