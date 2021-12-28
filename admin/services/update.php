<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>
    <?php 
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $serv_id = $_POST['serv_id'];
            $notEmpty = checkEmpty($name);
            if($notEmpty)
            {
                $less = checkLess($name,3);
                if($less)
                {
                    $sql = "UPDATE services SET `serv_name`='$name' WHERE `serv_id`='$serv_id' ";
                    $success_message = db_update($sql);
                }
                else 
                {
                    $error_message = "Please Enter a three-letter word ! ";
                }
            }
            else 
            {
                $error_message = "Please Type Service Name";
            }
            require BL.'functions/messages.php';
        }
    ?>
    <div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Service</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name Of Service</label>
                <input type="text" name="name" class="form-control" >
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>  
    </div>
<?php require BLA.'inc/footer.php';  ?>

