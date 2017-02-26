<?php 
include('../php/db.php');
include('meta.php');
include('sidebar.php');
require 'php/vendor/plasticbrain/php-flash-messages/src/FlashMessages.php';
?>
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

                    if(isset($_GET['id']) & $_GET['id'].trim() != "")  {
                        $id_artikel = $_GET['id'];
                        $sql_select_artikel = "SELECT * FROM `article` WHERE `id` = ?";
                        $query = $pdo->prepare($sql_select_artikel);
                        $query->execute(array($id_artikel));
                        $row = $query->fetch();

                        $title = '';
                        $content = '';
                        $id = '';

                        if ($row==false){
                            $msg->error('ID article salah!');
                            $msg->display();
                        }
                        else {
                            $id = $row['id'];
                            $title = $row['title'];
                            $content = $row['content'];
                        }
                        ?>
                        <!-- UNTUK UPDATE -->
                        <h1>Update Article</h1>
                        <form method="post" action="php/update.php">
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
                        <!-- UNTUK ADD -->
                        <h1>Add Article</h1>
                        <form method="post" action="php/add.php">
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
<!-- /#page-content-wrapper -->
<?php
include('footer.php');
?>