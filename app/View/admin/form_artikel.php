<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php  
                if (!session_id()) @session_start();
                $msg = new \Plasticbrain\FlashMessages\FlashMessages();
                $msg->display();
                session_unset();
                session_destroy();
                if(isset($id)) {
                    ?>
                    <h1>Update Article</h1>
                    <form method="post" action="<?php echo BASE_URL.'index.php/admin/update_artikel'; ?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="form-group col-xs-9">
                            <label>Title:</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                        </div>
                        <div class="form-group col-xs-9">
                            <label>Content:</label>
                            <textarea rows="14" name="content"><?php echo $content; ?></textarea>
                        </div>
                        <div class="form-group col-xs-9">
                            <button type="submit" class="btn btn-default">update</button>&nbsp;
                            <button type="reset" class="btn btn-danger">Cancel</button> 
                        </div>
                    </form>
                    <?php
                }
                else {
                    ?>
                    <h1>Add Article</h1>
                    <form method="post" action="<?php echo BASE_URL.'index.php/admin/add_artikel'; ?>">
                        <div class="form-group col-xs-9">
                            <label>Title:</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group col-xs-9">
                            <label>Content:</label>
                            <textarea rows="14" name="content"></textarea>
                        </div>
                        <div class="form-group col-xs-9">
                            <button type="submit" class="btn btn-default">Add</button>&nbsp;
                            <button type="reset" class="btn btn-danger">Cancel</button> 
                        </div>
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
