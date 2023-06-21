<h1>Reservation</h1>
<?php 
echo $form->image('Background')->setHelp('Size: 1920x600');
echo $form->text('Sub Title');
echo $form->text('Title');
echo $form->row([
    $form->column([
        $form->image('Image')->setHelp('Size : 525x500'),
    ]),
    $form->column([
        $form->text('Title 2')->setLabel('Title'),
        $form->editor('Description'),
        $form->image('Image 2')->setLabel('Image')->setHelp('Size : 655x330'),
    ]),
]);