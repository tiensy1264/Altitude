<h1>Contact</h1>
<?php 
echo $form->row([
    $form->column([
        $form->text('Sub Title'),
        $form->text('Title'),
    ]),
    $form->column([
        $form->text('Title 2')->setLabel('Title'),
        $form->editor('Description'),
        $form->repeater('Items')->setFields([
            $form->text('Button'),
            $form->text('Link'),
        ])->setLimit(2),
    ]),
]);