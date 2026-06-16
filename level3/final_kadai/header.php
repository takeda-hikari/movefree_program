<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポートフォリオサイト</title>
    
    <?php wp_head(); ?>
</head>
<body>

    <header class="site-header">
        <div class="header-logo">Portfolio</div>
        <nav class="header-nav">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'main-menu', 
                'container'      => false, 
                'menu_class'     => 'nav-list',
            ) );
            ?>
        </nav>
    </header>