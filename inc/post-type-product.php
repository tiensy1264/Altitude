<?php
$argsSupport = array( 'title');
$product = tr_post_type('product');
$product->setSupports($argsSupport);
$product->setRest();

tr_meta_box('Custom Product')->apply($product)->setCallback(function () {
    $form = tr_form();
    echo $form->text('Button');
    echo $form->text('Link');
});
