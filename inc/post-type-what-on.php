<?php
$argsSupport = array('title','editor', 'thumbnail');
$what_on = tr_post_type("What On");
$what_on->setIcon('graduation');
$what_on->setSupports($argsSupport);
$what_on->setTitlePlaceholder('Enter Title here');
$what_on->setRest();
$what_on->setArchivePostsPerPage(-1);

tr_meta_box('What On Info')->apply($what_on)->setCallback(function () {
    $form = tr_form();
    echo $form->text('Sub Title');
    echo $form->text('Button');
    echo $form->text('Link');
});