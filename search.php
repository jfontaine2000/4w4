<?php get_header(); ?>

<main class="site__main">
    <h1>------search.php-------</h1>
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post()?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> 
        <p><?php echo wp_trim_words( get_the_content(), 20, "...>" ) ?></p>
        <hr>
    <?php endwhile ?>
    <?php else : ?>
        <p class="no-result">Aucun Résultat</p>
    <?php endif ?>

</main>

<?php get_footer() ?>