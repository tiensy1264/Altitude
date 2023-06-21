<h1>Contact Information</h1>
<?php 
echo $form->repeater('Content')->setFields([
    $form->row([
        $form->column([
            $form->image('Image')->setHelp('Size: 960x600'),
        ]),
        $form->column([
            $form->text('Sub Title'),
            $form->text('Title'),
            $form->text('Button'),
            $form->text('Link'),
            $form->editor('Description'),
        ]),
    ]),
]);