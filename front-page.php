<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <div class="animation__bloc">
       <p class="animation__bloc__un">C</p> 
    </div>
    <div class="animation__bloc">
        <p class="animation__bloc__deux">L</p> 
    </div>
    <div class="animation__bloc">
        <p class="animation__bloc__trois">O</p> 
    </div>
    <div class="animation__bloc">
        <p class="animation__bloc__quatre">W</p> 
    </div>
    <div class="animation__bloc">
        <p class="animation__bloc__cinq">N</p> 
    </div>
</section>

    <h1>---- Front-page.php ------</h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>