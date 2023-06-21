<h1>Live The High</h1>
<?php 
    echo $form->image('Background')->setHelp('Size: 1920x1060');
    echo $form->row([
        $form->column([
            $form->image('Image')->setHelp('Size: 655x845'),
        ]),
        $form->column([
            $form->text('Sub Title'),
            $form->text('Title'),
            $form->editor('Description'),
            $form->repeater('Buttons')->setFields([
                $form->text('Button'),
                $form->text('Link'),
            ]),
        ]),
    ]);