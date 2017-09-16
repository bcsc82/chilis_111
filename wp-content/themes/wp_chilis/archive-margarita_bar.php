<?php get_header(); ?>

<div class="home-slider">
   <?php if(get_field('imagen_1')): ?>
    <img src="<?php echo get_field('imagen_1') ?>" class="img-slider" alt="Always Happy">
    <?php endif; ?>
    <?php if(get_field('imagen_2')): ?>
    <img src="<?php echo get_field('imagen_2') ?>" class="img-slider" alt="Always Happy">
    <?php endif; ?>
    <?php if(get_field('imagen_3')): ?>
    <img src="<?php echo get_field('imagen_3') ?>" class="img-slider" alt="Always Happy">
    <?php endif; ?>
</div>

<section class="platos-principales">
    <div class="container">

        <div class="row">

            <?php while (have_posts()): the_post(); ?>

            <div class="col-md-3 list-item">
                <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Ver más</a>
            </div>
            
            <?php endwhile; ?>

        </div>

    </div>
</section>

<?php get_footer(); ?>
