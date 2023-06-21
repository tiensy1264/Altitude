<?php
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

$form = tr_form()->useJson()->setGroup($this->getName());
?>

<h1>Theme Options</h1>
<div class="typerocket-container">
    <?php
    echo $form->open();

    // Header
    $header = function () use ($form) {
        echo $form->image('Header Logo')->setHelp('Size: 250x120');
        echo $form->text('Button Header');
        echo $form->text('Link Button Header');
    };




    //Footer
    $footer = function () use ($form) {
        $footer_logo = function () use ($form) {
            echo  $form->image('Background')->setHelp('Size: 1920x700');
            echo  $form->image('Logo Footer')->setHelp('Size: 230x95');
            
        };
        $footer_contact = function () use ($form) {
            echo $form->repeater('Contact')->setFields([
                $form->image('Icon')->setHelp('Size: 30x30'),
                 $form->editor('Content'),
             ]);
            
        };
        $footer_open= function () use ($form) {
            echo $form->editor('Opening');
        };
        $footer_social= function () use ($form) {
            echo $form->repeater('Social')->setFields([
                $form->image('Icon')->setHelp('Size: 30x30'),
                 $form->text('Link'),
             ]);
        };
        
        $footer_copyright = function () use ($form) {
            
            echo $form->text('Copyright');
        };

        tr_tabs()
            ->addTab('Logo Footer', $footer_logo)
            ->addTab('Contact', $footer_contact)
            ->addTab('Opening', $footer_open)
            ->addTab('Social', $footer_social)
            ->addTab('Copyright', $footer_copyright)
            ->render();
    };
    $banner = function () use ($form) {
        $banner_what_on = function () use ($form) {
            echo  $form->image('Background Banner What On')->setHelp('Size: 1920x600');
            echo  $form->text('Sub Title Banner What On');
            echo  $form->text('Title Banner What On');
            
        };
        $banner_shop = function () use ($form) {
            echo  $form->image('Background Banner Shop')->setHelp('Size: 1920x600');
            echo  $form->text('Sub Title Banner Shop');
            echo  $form->text('Title Banner Shop');
            
        };
        $banner_shop_detail = function () use ($form) {
            echo  $form->image('Background Banner Shop Detail')->setHelp('Size: 1920x600');
            echo  $form->text('Sub Title Banner Shop Detail');
            echo  $form->text('Title Banner Shop Detail');
            
        };

        tr_tabs()
            ->addTab('Banner What On', $banner_what_on)
            ->addTab('Banner Shop', $banner_shop)
            ->addTab('Banner Shop Detail', $banner_shop_detail)
            ->render();
    };
    $popup = function () use ($form){
        echo $form->toggle('Turn On');
        echo $form->text('Day')->setType('number');
        echo $form->row([
            $form->column([
                $form->image('Image Popup')->setHelp('Size:  771x850'),
            ]),
            $form->column([
                $form->text('Title Popup'),
                $form->text('Button Popup'),
                $form->text('Button Popup Link'),
                $form->repeater('Items Popup')->setFields([
                    $form->text('Title'),
                    $form->editor('Description'),
                ]),
            ]),
        ]);
    };
    //404 Page
    $not_found = function () use ($form) {
        echo $form->editor('Not Found Title');
        echo $form->editor('Not Found Description');
    };


    // Save
    $save = $form->submit('Save');

    // Layout
    tr_tabs()->setSidebar($save)
        ->addTab('Header', $header)
        ->addTab('Footer', $footer)
        ->addTab('Banner', $banner)
        ->addTab('Pop Up', $popup)
        ->addTab('404', $not_found)
        ->render('box');
    echo $form->close();
    ?>

</div>