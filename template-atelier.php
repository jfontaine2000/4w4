<?php
/**
* Template Name: Atelier
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>

<?php get_header() ?>
<main class="site__main">
    <article class="atelier">
    <?php if (have_posts()): the_post(); ?>
        <h1><?php the_title() ?></h1>
        <h2>Description de l'atelier</h2>
         <p class="atelier__animateur">
              L'animateur de l'atelier: <?php the_field('animateur'); ?>
          </p>
          <p class="atelier__local">
              L'atelier sera donné au local: <?php the_field('local'); ?>
          </p>
          <section class="atelier__description">
               <?php the_field('description'); ?>
          </section>

          <h2>Horaire et date de l'atelier</h2>
          <p class="atelier__duree">
              Durée de chacune des séances est de <?php the_field('duree'); ?> heures
          </p>
          <p class="atelier__debut">
              Date de début: <?php the_field('debut_atelier'); ?>
          </p>
          <p class="atelier__fin">
              Date de fin: <?php the_field('fin_atelier'); ?>
          </p>
          <p class="atelier__jours">
               La formation se donnera: <?php the_field('jours_semaine'); ?>
          </p>
          <p class="atelier__heures">
              L'horaire <?php the_field('heure_debut'); ?> à <?php the_field('heure_fin'); ?>
          </p>
    </article>   
   <?php endif ?>
</main>
<?php get_footer() ?>