<?php
  require('inc/db_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('inc/links.php')?>
    <link rel="stylesheet" href="common.css">
    <style>
        div.Login-form{
            position: absolute;
            top:50% ;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;

        }
    </style>
</head>
<body class="bg-light">
    
    <div class="Login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">Admin Login panel</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control  text-center shadow-none" placeholder="password">
                </div>
                <button name="login" type="submit" class="btn  bg-dark text-white shadow-none">
                    LOGIN
                </button>
            </div>
        </form>
    </div>

    <?php
      if(isset($_POST['login']))
    {
        $frm_data = filteration($_POST);
        $query = "SELECT * FROM `admin` WHERE `admin_name`=? AND `admin_pass`=?";
        $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
        $res = select($query, $values, 'ss');
        if($res->num_rows == 1){
            print_r($frm_data);
        }
    }
    ?>



<?php require('inc/script.php')?>
</body>
</html>