<header class="main">
    <a href="javascript:;" data-menu-status="false" class="menu_switch"><i class="fa fa-bars"></i></a>
    <h1>
        <?= $text_dashboard ?>
        <?php if(isset($title)): ?>
        <?= ' > ' . $title ?>
        <?php endif; ?>
    </h1>

    <div class="dropdown">
        <button class="dropbtn"><?= $text_welcome ?> كريم<i class="fa fa-angle-down"></i></button>
        <div class="dropdown-content">
            <a href="#"><i class="fa fa-user"></i><?= $text_profile ?></a>
            <a href="#"><i class="fa fa-key"></i><?= $text_change_password ?></a>
            <a href="#"><i class="fa fa-cog"></i><?= $text_settings ?></a>
            <a href="#"><i class="fa fa-sign-out"></i><?= $text_logout ?></a>
        </div>
    </div>
    <a class="icons" href=""><i class="fa fa-bell"></i></a>
    <a class="icons" href="/language"><i class="fa fa-globe"></i></a>
    <a class="icons" href=""><i class="fa fa-envelope"></i></a>
</header>