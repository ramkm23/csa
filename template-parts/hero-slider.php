<section id="hero">
    <div class="hero-content">
        <div class="hero-banner-content">
            <?php if(!empty(get_sub_field('hero-slider-heading'))): ?>
                <h1><?php echo get_sub_field('hero-slider-heading'); ?></h1>
            <?php endif; ?>
            <?php if(!empty(get_sub_field('hero-slider-text'))): ?>
                <p><?php echo get_sub_field('hero-slider-text'); ?></p>
            <?php endif; ?>
        </div>
        <div>
            <?php if(get_sub_field('hero-slider-primary-button')) : ?>  
                <a href="<?php echo get_sub_field('hero-slider-primary-button')['url']; ?>" target="<?php echo get_sub_field('hero-slider-primary-button')['target']; ?>" class="btn-get-started scrollto"><?php echo get_sub_field('hero-slider-primary-button')['title']; ?></a>
            <?php endif; ?>

            <?php if(get_sub_field('hero-slider-secondary-button')) : ?>  
                <a href="<?php echo get_sub_field('hero-slider-secondary-button')['url']; ?>" target="<?php echo get_sub_field('hero-slider-secondary-button')['target']; ?>" class="btn-projects scrollto"><?php echo get_sub_field('hero-slider-secondary-button')['title']; ?></a>
            <?php endif; ?>    
        </div>
    </div>

    <div id="hero-carousel" class="owl-carousel">
        <?php if(have_rows('hero-slider-image')): ?>
            <?php while(have_rows('hero-slider-image')): the_row(); ?>
                <div class="item" style="background-image: url('<?php echo get_sub_field('hero-slider-image-item')['url']; ?>')"></div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</section>