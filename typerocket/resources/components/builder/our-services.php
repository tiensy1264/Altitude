<h1>Our Services</h1>
<?php 
echo $form->image('Background')->setHelp('Size : 1920x720');
echo $form->row([
    $form->column([
        $form->text('Sub Title'),
        $form->text('Title'),
        $form->repeater('Items')->setFields([
            $form->text('Title'),
            $form->editor('Description'),
        ]),
    ]),
    $form->column([
        $form->image('Image')->setHelp('Size: 888x666'),
    ]),
]);
