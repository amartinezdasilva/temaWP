<?php get_header(); ?>
    <p><h1>BIENVENIDO A LA MEJOR WEB DEL MUNDO</h1></p>
   <div id="index"
    <?php wp_nav_menu(array('menu'=>'Menua'));?>
        <?php 
        if (have_posts()) {
         while (have_posts()) {
            the_post(); ?>
            <h2 id="post-<?php the_ID(); ?>">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
            <?php the_title(); ?></a></h2>
            <small><?php the_time('F jS, Y') ?>  by <?php the_author() ?> </small>
            <?php the_content();
         }
        }?>
  </div>
<?php get_sidebar();?>
<?php get_footer();?>