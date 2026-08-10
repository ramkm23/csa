<?php if (get_sub_field('include-background-image-slider') == 'Yes') : ?>

<div id="hero-slider">

    <!-- Hero Content -->
    <div class="hero-slider-content">

        <div class="hero-slider-banner-content">

            <!-- Heading -->
            <?php if (!empty(get_sub_field('background-image-slider-heading'))) : ?>
                <h1>
                    <?php echo get_sub_field('background-image-slider-heading'); ?>
                </h1>
            <?php endif; ?>


            <!-- Text -->
            <?php if (!empty(get_sub_field('background-image-slider-text'))) : ?>
                <p>
                    <?php echo get_sub_field('background-image-slider-text'); ?>
                </p>
            <?php endif; ?>


            <!-- Buttons -->
            <div class="hero-slider-buttons">

                <?php
                $primary_button = get_sub_field('background-slider-primary-button');

                if ($primary_button) :
                ?>
                    <a
                        href="<?php echo $primary_button['url']; ?>"
                        target="<?php echo $primary_button['target']; ?>"
                        class="btn-get-started scrollto"
                    >
                        <?php echo $primary_button['title']; ?>
                    </a>
                <?php endif; ?>


                <?php
                $secondary_button = get_sub_field('background-slider-secondary-button');

                if ($secondary_button) :
                ?>
                    <a
                        href="<?php echo $secondary_button['url']; ?>"
                        target="<?php echo $secondary_button['target']; ?>"
                        class="btn-projects scrollto"
                    >
                        <?php echo $secondary_button['title']; ?>
                    </a>
                <?php endif; ?>

            </div>

        </div>

    </div>


    <!-- Previous Arrow -->
    <button class="hero-prev" type="button" aria-label="Previous slide">
        <i class="fa fa-angle-left"></i>
    </button>


    <!-- Next Arrow -->
    <button class="hero-next" type="button" aria-label="Next slide">
        <i class="fa fa-angle-right"></i>
    </button>


    <!-- Slider Dots -->
    <div class="hero-dots"></div>

</div>

<?php endif; ?>