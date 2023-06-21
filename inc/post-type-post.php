<?php
$argsSupport = array('title', 'editor', 'thumbnail');
$custom_post = tr_post_type('Post');
$custom_post->setSupports($argsSupport);
$custom_post->setTitlePlaceholder('Enter title here');
$custom_post->setRest();

tr_meta_box('Custom Post')->apply($custom_post)->setCallback(function () {
    $form = tr_form();
    echo $form->text('Time Title');
    echo $form->text('Link');
	
});
