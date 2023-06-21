<h1>Altitude Coast</h1>
<?php 
echo $form->image('Background')->setHelp('Size : 1920x591');
echo $form->text('Sub Title');
echo $form->text('Title');
echo $form->editor('Description');
echo $form->repeater('Items')->setFields([
     $form->text('Button'),
    $form->text('Link'),
])->setLimit(2);