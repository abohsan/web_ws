<!-- 
    The following file is used to style this side bar. 
        1.   '1.css'
        2.   '1.js'
        3.    'https://use.fontawesome.com/releases/v5.3.1/css/all.css'
-->

<div class="sidebar1_Wrapper">
    <div class="sidebar">

        <li class="item">
            <div class="btn" id="profile"><i class="far fa-user"></i><?php echo $lang['profile'] ?></div>
            <div class="smenu" id="profile1">
                <a href=""> <?php echo $lang['update'] ?></a>
                <a href=""> <?php echo $lang['changepassword'] ?></a>
            </div>
        </li>
        <li class="item">
            <div id="messages" class="btn"><i class="far fa-envelope"></i><?php echo $lang['messages'] ?></div>
            <div class="smenu" id="messages1">
                <a href=""> <?php echo $lang['sent'] ?></a>
                <a href=""> <?php echo $lang['receive'] ?></a>
                <a href=""> <?php echo $lang['spam'] ?></a>
            </div>
        </li>
        <li class="item">
            <div id="settings" class="btn"><i class="fas fa-cog"></i><?php echo $lang['sitting'] ?></div>
            <div class="smenu" id="settings1">
                <a href=""> <?php echo $lang['notification'] ?></a>
                <a href=""> <?php echo $lang['privacy'] ?></a>
            </div>
        </li>
        <li class="item">

           
            <a href="#" class="btn1"><i class="fas fa-sign-out-alt"></i><?php echo $lang['logout'] ?></a>

        </li>
    </div>
</div>