<h1>Newsletter</h1>
<?php 
echo $form->image('Background')->setHelp('Size: 1920x485');
echo $form->text('Sub Title');
echo $form->text('Title');
echo $form->editor('Description');
echo $form->text('Shortcode');