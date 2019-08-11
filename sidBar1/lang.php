<div class="first">
    <form action="" method="post">
        <input type="hidden" name="currentSidebar" value="<?php echo $_POST['currentSidebar'];  ?>">

        <input type="hidden" name="lang" value="<?php echo $lang['lang'];  ?>">
        <input type="submit" value="<?php echo $lang['langDisplay'] ?>">

    </form>

    <form action="" method="post">

        <div>
            <input type="hidden" name="currentSidebar" value="<?php echo $_POST['currentSidebar'];  ?>">

            <input type="text" name="sidebar" value="<?php echo $_POST['sidebar'] ?>">
        </div>
        <div>
            <input type="submit" value="<?php echo $lang['submit'] ?>">
        </div>
    </form>
    <?php if ($error) {
        echo "'" . $_POST['sidebar'] . '.php' . "' not found";
    } ?>
</div>