<h1>Information</h1>
<?php 
echo $form->image('Background')->setHelp('Size : 1920x1000');
echo $form->row([
    $form->column([
        $form->text('Sub Title'),
        $form->text('Title'),
    ]),
    $form->column([
        $form->editor('Description'),
    ]),
]);
echo $form->gallery('Gallery')->setHelp('Size: 500x660');
echo $form->text('Sub Title 2')->setLabel('Sub Title');
echo $form->text('Title 2')->setLabel('Title');
echo $form->repeater('Items')->setFields([
    $form->image('Icon')->setHelp('Size : 80x80'),
    $form->text('Title'),
    $form->editor('Description'),
]);