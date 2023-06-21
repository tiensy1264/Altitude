<h1>Gallery</h1>
<?php 
echo $form->image('Background')->setHelp('Size: 1920x1160');
echo $form->text('Sub Title');
echo $form->text('Title');
echo $form->repeater('Gallery')->setFields([
    $form->repeater('Images')->setFields([
        $form->image('Image')->setHelp('Size: 363x338(2 images) | Size: 594x750(1 image)'),
    ])->setLimit(2),
]);