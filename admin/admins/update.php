<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>
    <?php 
        if(isset($_POST['submit']))
        {
            $serv_id = $_POST['serv_id'];
            $name = $_POST['name'];
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
                    $error_message = "Please Type Correct Service";
                }
            }
            else 
            {
                $error_message = "Please Type Service Name";
            }
            require BL.'functions/messages.php';
        }
    ?>
<?php require BLA.'inc/footer.php';  ?>


