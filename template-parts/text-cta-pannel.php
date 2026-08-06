<?php if( get_sub_field( 'text-cta-pannel-include' ) == 'Yes' ) :?>
    <section class="text-cta-pannel">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php if(!empty(get_sub_field('text-cta-pannel-heading'))): ?>
                        <h2><?php echo get_sub_field('text-cta-pannel-heading'); ?></h2>
                    <?php endif; ?>
                    <?php if(!empty(get_sub_field('text-cta-pannel-heading'))): ?>
                        <p><?php echo get_sub_field('text-cta-pannel-text'); ?></p>
                    <?php endif; ?>
                    <?php if(get_sub_field('text-cta-pannel-button')) : ?>  
                        <a href="<?php echo get_sub_field('text-cta-pannel-button')['url']; ?>" target="<?php echo get_sub_field('text-cta-pannel-button')['target']; ?>" class="btn"><?php echo get_sub_field('text-cta-pannel-button')['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div> 
    </section>
<?php endif; ?>