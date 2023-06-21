<h1>Spaces</h1>
<?php 
echo $form->image('Background')->setHelp('Size : 1920x720');
echo $form->row([
    $form->column([
        $form->image('Image')->setHelp('Size: 960x720'),
    ]),
    $form->column([
        $form->text('Sub Title'),
        $form->text('Title'),
        $form->editor('Description'),
    ]),
]);
 
 