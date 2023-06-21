<h1>Our Services Slider</h1>
<?php 
echo $form->image('Background')->setHelp('Size: 1338x483');
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
        $form->gallery('Gallery')->setHelp('Size: 363x363'),
    ]),
]);