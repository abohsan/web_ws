<?php
require_once 'core/init.php';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang['lang'] ?>" dir="<?php echo $lang['dir'] ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <title>Side Bar 1</title>
</head>

<body>
    <div class="language">
        <a href=" <?php echo $_SERVER['PHP_SELF'] . '?lang=' . $lang['lang'];  ?>"> <?php echo $lang['langDisplay'] ?></a>

    </div>

    <div class="wrapperSideBar">

        <li class="item">
            <div class="btn" id="profile"><i class="far fa-user"></i><?php echo $lang['profile'] ?></div>
            <div class="smenu" id="profile1">
                <a href="#"> <?php echo $lang['update'] ?></a>
                <a href="#"> <?php echo $lang['changepassword'] ?></a>
            </div>
        </li>
        <li class="item">
            <div href="#messages" id="messages" class="btn"><i class="far fa-envelope"></i><?php echo $lang['messages'] ?></div>
            <div class="smenu" id="messages1">
                <a href="#"> <?php echo $lang['sent'] ?></a>
                <a href="#"> <?php echo $lang['receive'] ?></a>
                <a href="#"> <?php echo $lang['spam'] ?></a>
            </div>
        </li>
        <li class="item">
            <div href="#settings" id="settings" class="btn"><i class="fas fa-cog"></i><?php echo $lang['sitting'] ?></div>
            <div class="smenu" id="settings1">
                <a href="#"> <?php echo $lang['notification'] ?></a>
                <a href="#"> <?php echo $lang['privacy'] ?></a>
                <a href="#"> <?php echo $lang['privacy'] ?></a>
            </div>
        </li>
        <li class="item">
         
        <!-- the redirecting URL has been disabled using JS at mine.js -->
            <a href="" class="btn"><i class="fas fa-sign-out-alt"></i><?php echo $lang['logout'] ?></a>

        </li>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/mine.js"></script>

</body>

</html>