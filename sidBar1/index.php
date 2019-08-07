<?php
require_once 'core/init.php';
// echo 'hello';


?>

<!DOCTYPE html>
<html lang="<?php echo $lang['lang']?>" dir="<?php echo $lang['dir']?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Side Bar 1</title>
</head>

<body>


        <div class="sidebar">
            <li class="sidebar-item" id="profile">
                <a href="#profile" class="sidebar-btn"><i class="far fa-user"></i><?php echo $lang['profile']?></a>
                <div class="sidebar-smenu">
                    <a href="#"> <?php echo $lang['update']?></a>
                    <a href="#"> <?php echo $lang['changepassword']?></a>
                </div>
            </li>
            <li class="sidebar-item" id="messages">
                <a href="#messages" class="sidebar-btn"><i class="far fa-envelope"></i><?php echo $lang['messages']?></a>
                <div class="sidebar-smenu">
                    <a href="#"> <?php echo $lang['sent']?></a>
                    <a href="#"> <?php echo $lang['receive']?></a>
                    <a href="#"> <?php echo $lang['spam']?></a>
                </div>
            </li>
            <li class="sidebar-item" id="settings">
                <a href="#settings" class="sidebar-btn"><i class="fas fa-cog"></i><?php echo $lang['sitting']?></a>
                <div class="sidebar-smenu">
                    <a href="#"> <?php echo $lang['notification']?></a>
                    <a href="#"> <?php echo $lang['privacy']?></a>
                </div>
            </li>
            <li class="sidebar-item">
                <a href="" class="sidebar-btn"><i class="fas fa-sign-out-alt"></i> <?php echo $lang['logout']?></a>
            </li>
        </div>
    

</body>

</html>