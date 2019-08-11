<?php
require_once 'core/init.php';
$load;
$error = false;
if (!empty($_POST['sidebar'])) {
    if (in_array($_POST['sidebar'], $sidebarsArray)) {
        $_POST['currentSidebar'] = $_POST['sidebar'];
        $load = $_POST['sidebar'];
    } else if (!empty($_POST['currentSidebar'])) {
        $load = $_POST['currentSidebar'];
        $error = true;
    }
} else if (!empty($_POST['currentSidebar'])) {
    $load = $_POST['currentSidebar'];
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang['lang'] ?>" dir="<?php echo $lang['dir'] ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Begin link tag-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="my_css/genral.css">

    <!-- Begin side bar 1-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="my_css/1.css">

    <!-- End side bar 1-->


    <!-- Begin side bar 2-->
    <!-- The following link has been included above -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> -->

    <link rel="stylesheet" href="my_css/2.css">
    <!-- End side bar 2-->

    <!-- Begin side bar 3-->
    <link rel="stylesheet" href="my_css/3.css">
    <!-- <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet"> -->
    <!-- End side bar 3-->

    <!-- Begin side bar 4-->
    <link rel="stylesheet" href="my_css/4.css">
    <!-- <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet"> -->
    <!-- End side bar 4-->


    <!-- End link tag--->



    <title>Side Bar</title>
</head>

<body>


    <?php if (!empty($load)) {
        include 'sidebarsPHP/' . $load . '.php'; } ?>
    <div class="mycontainer">
        <div class="container-fluid"><?php echo $lang['text'] ?>
            <?php include 'lang.php'?>
        </div>

    
    </div>


    <!--Begin script tag  -->



    <!-- Begin sidebar 1-->
    <script src="my_js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="my_js/1.js"></script>
    <!-- End sidebar 1-->

    <!-- Begin sidebar 2-->
    <script src="my_js/2.js"></script>
    <!-- End sidebar 2-->

    <!-- Begin sidebar 3-->
    <script src="my_js/3.js"></script>
    <!-- <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <!-- <script src="my_js/jquery-3.4.1.min.js"></script> -->
    <!-- End sidebar3-->

    <!-- Begin sidebar 4-->
    <script src="my_js/4.js"></script>
    <!-- <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <!-- <script src="my_js/jquery-3.4.1.min.js"></script> -->
    <!-- End sidebar4-->

    <!--End script tag  -->

</body>

</html>