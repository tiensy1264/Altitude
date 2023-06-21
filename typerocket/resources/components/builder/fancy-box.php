<h1>Fancy Box</h1>
<?php 

echo $form->image('Background')->setHelp('Size: 1920x600');
echo $form->text('Link');
echo $form->file('File')->setSetting('type', 'video');
echo $form->text('Sub Title');
echo $form->text('Title');