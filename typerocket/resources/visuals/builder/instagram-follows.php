<section class="section-instagram overflow-hidden">
    <div class="container text-center">
        <?php if(!empty($data['sub_title'])){ ?>
        <div class="sub-title-al">
           <?= $data['sub_title'] ?>
        </div>
        <?php }if(!empty($data['title'])){ ?>
        <div class="title-al_smaller mt-10">
        <?= $data['title'] ?>
        </div>
        <?php } ?>
    </div>
    <?php if(!empty($data['instagram_shortcode'])) {?>
    <div class=" mt-50">
        <?= do_shortcode($data['instagram_shortcode']) ?>
    </div>
    <?php }?>
</section>