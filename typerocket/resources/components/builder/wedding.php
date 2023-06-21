<h1>Wedding</h1>
<?php 
echo $form->image('Thumbnail')->setHelp('Size: 1920x600');
echo $form->text('Link');
echo $form->file('File')->setSetting('type', 'video');
echo $form->editor('Description');