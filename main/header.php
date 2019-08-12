<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

    <a class="navbar-brand" href="#">
        <img src="img/images.png" alt="Logo" style="width:40px;">
    </a>
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $lang['home'];  ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <form action="" method="post">
                    <input type="hidden" name="currentSidebar" value="<?php echo $_POST['currentSidebar'];  ?>">
                    <input type="hidden" name="lang" value="<?php echo $lang['lang'];  ?>">
                    <input type="hidden" name="currentMenu" id="currentMenu" value="<?php echo $_POST['currentMenu'];  ?>">
                    <input type="hidden" name="currentSubMenu" id="currentSubMenu" value="<?php echo $_POST['currentSubMenu'];  ?>">
                    <input type="submit" value="<?php echo $lang['langDisplay'] ?>">
                </form>
            </a>
        </li>
    </ul>
    <!-- images.png -->
    <!-- Navbar text-->
    <span class="navbar-text">
        <!-- Navbar text -->
    </span>

</nav>