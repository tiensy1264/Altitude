<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title><?php wp_title(' | ', true, 'right');
            bloginfo('name'); ?></title>

    <?php wp_head(); ?>
    <script>
        ;
        (function() {
            function id(v) {
                return document.getElementById(v);
            }

            function loadbar() {
                var ovrl = id("loader-container"),
                    prog = id("progress-bar"),
                    stat = id("progress-percent"),
                    img = document.images,
                    c = 0,
                    tot = img.length;
                if (tot == 0) return doneLoading();

                function imgLoaded() {
                    c += 1;
                    var perc = ((100 / tot * c) << 0) + "%";
                    prog.style.width = perc;
                    stat.innerHTML = perc;
                    if (c === tot) return doneLoading();
                }

                function doneLoading() {
                    ovrl.style.opacity = 0;
                    setTimeout(function() {
                        ovrl.style.display = "none";
                    }, 1200);

                }
                for (var i = 0; i < tot; i++) {
                    var tImg = new Image();
                    tImg.onload = imgLoaded;
                    tImg.onerror = imgLoaded;
                    tImg.src = img[i].src;
                }
            }
            document.addEventListener('DOMContentLoaded', loadbar, false);
        }());
    </script>
</head>

<body <?php body_class(); ?>>
    <div id="loader-container">
        <div class="loader">
            <div class="loader__logo"><span></span><span></span><span></span></div>
            <div class="loader__progress">
                <div id="progress-bar">
                    <div id="progress-percent"></div>
                </div>
            </div>
        </div>
    </div>
    <header class="header">
        <nav class="navbar d-flex align-items-center justify-content-between">
            <div class="container-bigger">
                <div class="d-flex align-items-center justify-content-between py-30 ">
                    <?php if(!empty(tr_options_field('theme_options.header_logo'))){ ?>
                    <a class="navbar__logo" href="<?php echo get_site_url() ?>">
                        <?= wp_get_attachment_image(tr_options_field('theme_options.header_logo'),'medium')?>
                    </a>
                    <?php } ?>
                    <div class="d-flex align-items-center justify-content-between gap-45">
                    <?php $mainMenuItems = get_menu_items_by_slug('main-menu');
                    //$urlCurrent = home_url($_SERVER['REQUEST_URI']);
                    $urlCurrent = home_url($wp->request) . '/';
                    if (!empty($mainMenuItems)) { ?>
                        <ul class="navbar__list d-lg-flex d-none align-items-center gap-45 ml-lg-115 ">
                        <?php foreach ($mainMenuItems as $menu) { ?>
                            <li class="navbar__item <?php if ($urlCurrent == $menu['url']) echo ' active' ?>">
                                <a class="navbar__link py-20 font--oswald" href="<?= $menu['url'] ?>">
                                    <?= $menu['title'] ?>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php }if((!empty(tr_options_field('theme_options.button_header'))) || (!empty(tr_options_field('theme_options.link_button_header')))){ ?>
                        <a href="<?= tr_options_field('theme_options.link_button_header') ?>" class="navbar__cta btn btn-smallest d-none d-lg-block">
                           <?= tr_options_field('theme_options.button_header') ?>
                        </a>
                        <?php } ?>
                    </div>
                    <?php if((!empty(tr_options_field('theme_options.button_header'))) || (!empty(tr_options_field('theme_options.link_button_header')))){ ?>
                    <a href="<?= tr_options_field('theme_options.link_button_header') ?>" class="navbar__cta btn btn-smallest mx-lg-0 ms-auto me-40 py-20 d-lg-none">
                        <?= tr_options_field('theme_options.button_header') ?>
                    </a>
                    <?php } ?>
                    <div class="navbar__icon hover-target d-lg-none">
                        <span class="navbar__icon-line navbar__icon-line--left"></span>
                        <span class="navbar__icon-line"></span>
                        <span class="navbar__icon-line navbar__icon-line--right"></span>
                    </div>
                </div>
            </div>
        </nav>
        <?php $mainMenuItems = get_menu_items_by_slug('main-menu');
        $urlCurrent = home_url($wp->request) . '/';
        if (!empty($mainMenuItems)) { ?>                   
        <nav class="navbar-mobile d-lg-none d-block ">
            <div class="navbar-mobile__content">
                <ul class="navbar-mobile__list d-flex flex-column  align-items-center gap-20 color--cream h-100 overflow-auto">
                    <?php foreach ($mainMenuItems as $menu) { ?>
                    <li class="navbar-mobile__item <?php echo ($urlCurrent == $menu['url']) ? ' active' : '' ?>">
                        <a href="<?= $menu['url'] ?>" class="navbar__link py-20 fs--40 text-uppercase">
                        <?= $menu['title'] ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <?php } ?>
    </header>
    <main>