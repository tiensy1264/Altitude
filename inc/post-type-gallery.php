<?php
$argsSupport = array('title');
$gallery = tr_post_type('gallery');
$gallery->setIcon('image');
$gallery->setSupports($argsSupport);
$gallery->setTitlePlaceholder('Enter Title here');
$gallery->setRest();
$gallery->setArchivePostsPerPage(-1);

tr_meta_box('gallery Info')->apply($gallery)->setCallback(function () {
    $form = tr_form();
    echo $form->image('Image');
});

$gallery_cat = tr_taxonomy('Category Gallery','Categories Gallery'); 
$gallery_cat->setHierarchical();
$gallery_cat->apply($gallery);
