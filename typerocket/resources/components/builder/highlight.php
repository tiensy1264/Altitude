<h1>Highlight</h1>
<?php 
echo $form->row([
    $form->column([
        $form->text('Sub Title'),
        $form->text('Title'),
    ]),
    $form->column([
        $form->text('Button'),
        $form->text('Link'),
    ]),
]);
echo $form->links('Search Blogs')->setPostType('post');