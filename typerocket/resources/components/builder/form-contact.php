<h1>Form Contact</h1>
<?php 
echo $form->image('Background')->setHelp('Size: 1920x600');
echo $form->text('Sub Title');
echo $form->text('Title');
echo $form->editor('Description');
echo $form->text('Form Contact');