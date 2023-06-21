<h1>Get In Touch</h1>
<?php 
echo $form->image('Background')->setHelp('Size : 1920x761');
echo $form->text('Sub Title');
echo $form->text('Title');
echo $form->text('Text');
echo $form->editor('Description');