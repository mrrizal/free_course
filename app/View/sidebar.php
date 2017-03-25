	<div id="site_content">	

      <div id="header_image"></div>	  

	  <div class="sidebar_container">       
		
		<div class="sidebar">
            <div class="sidebar_item">
                <h2>New Website</h2>
                <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
            </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		
		<div class="sidebar">
            <div class="sidebar_item">
                <h2>Latest Update</h2>
		    </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		
        <?php 
        foreach ($artikel_terakhir as $row) {
                $string = $row['content'];
                if (strlen($string) > 100) {

                    // truncate string
                    $stringCut = substr($string, 0, 100);

                    // make sure it ends in a word so assassinate doesn't become ass...
                    $string = substr($stringCut, 0, strrpos($stringCut, ' ')); 
                }
            ?>
            <div class="sidebar">
                <div class="sidebar_item">
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $string; ?></p>         
                </div><!--close sidebar_item--> 
            </div><!--close sidebar-->  
            <?php
        }
        ?>
		
      </div><!--close sidebar_container-->		  
