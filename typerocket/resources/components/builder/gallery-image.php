<h1>Gallery Images</h1>
<?php 
echo $form->toggle('Text Center');
echo $form->text('Sub Title');
echo $form->text('Title');
echo $form->search('Search Gallery')->setTaxonomy('category_gallery');