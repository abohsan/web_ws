<!-- 
    The following file is used to style this side bar. 
        1.   '2.css'
        2.   '2.js'
        3.   'https://use.fontawesome.com/releases/v5.3.1/css/all.css'
-->


<div class="sidebar2-wrapper">
    <div class="sidebar-menu">
        <li class="sidebar-item" id="profile">
            <a href="#profile" class="sidebar-btn"><i class="far fa-user"></i><?php echo $lang['profile'] ?></a>
            <div class="sidebar-smenu">
                <a href="#"> <?php echo $lang['picture'] ?></a>
            </div>
        </li>
        <li class="sidebar-item" id="messages">
            <a href="#messages" class="sidebar-btn"><i class="far fa-envelope"></i><?php echo $lang['messages'] ?></a>
            <div class="sidebar-smenu">
                <a href="#"> <?php echo $lang['sent'] ?></a>
                <a href="#"> <?php echo $lang['receive'] ?></a>
                <a href="#"> <?php echo $lang['spam'] ?></a>
            </div>
        </li>
        <li class="sidebar-item" id="settings">
            <a href="#settings" class="sidebar-btn"><i class="fas fa-cog"></i><?php echo $lang['sitting'] ?></a>
            <div class="sidebar-smenu">
                <a href="#"> <?php echo $lang['password'] ?></a>
                <a href="#"> <?php echo $lang['language'] ?></a>
            </div>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-btn"><i class="fas fa-sign-out-alt"></i><?php echo $lang['logout'] ?></a>
        </li>
    </div>
</div>