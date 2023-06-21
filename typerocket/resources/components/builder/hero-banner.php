<h1>Hero Banner</h1>
<?php
echo $form->repeater('Banner')->setFields([
    $form->image('Background')->setHelp('Size: 1720x800'),
    $form->text('Sub Title'),
    $form->editor('Title'),
    $form->editor('Description'),
    $form->text('Button'),
    $form->text('Link'),
]);
