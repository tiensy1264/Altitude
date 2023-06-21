<h1>Event</h1>
<?php 
echo $form->image('Background')->setHelp('Size: 1920x1111');
echo $form->row([
    $form->column([
        $form->image('Image')->setHelp('Size: 655x875'),
    ]),
    $form->column([
        $form->text('Sub Title'),
        $form->text('Title'),
        $form->editor('Description'),
        $form->text('Button'),
        $form->text('Link'),
        $form->repeater('Count Up')->setFields([
            $form->text('Number')->setType('number'),
            $form->text('Special characters'),
            $form->editor('Description'),
        ]),
    ]),
]);