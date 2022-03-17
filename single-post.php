<?php get_header() ?>
<main class="site__main">

          <h1>---- single-post.php ------</h1>
     <?php if (have_posts()): the_post(); ?>
     <article class="article">
     <h1 class="article__titre"><?= get_the_title(); ?> </h1>   
     <div class="article__contenu">
     <?php if (has_post_thumbnail()): ?> 
               <figure class="article__contenu__figure">
                    <?php the_post_thumbnail('large'); ?>
               </figure>
          <?php endif; ?>   
     <?php endif ?>
     <?php the_content() ?>
     </div> 
     </article>
          
</main>
<?php get_footer() ?>