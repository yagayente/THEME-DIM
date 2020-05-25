<?php
/**
 * The template for displaying the footer
 */
?>

  <div class="logo1">
    <div class="boxlogo">
<img class="logoiledefrance" <?php awesome_acf_responsive_image(get_field( 'partenaire_2', 'option' ),'2-width','640px'); ?>  alt="text" />

    </div>
  </div>

  <div class="logo2">
      <div class="boxlogo">
        <img class="logosorbonne" <?php awesome_acf_responsive_image(get_field( 'partenaire_1', 'option' ),'2-width','640px'); ?>  alt="text" />


  </div>
  </div>



  <div class="logo4">
    Copyright &#169; <?php bloginfo('name'); ?> <?php echo date('Y'); ?><br>
    <?php if( have_rows('reseaux_sociaux', 'option') ): while ( have_rows('reseaux_sociaux', 'option') ) : the_row();?>
    <a href="<?php the_sub_field('lien_vers_le_reseau_social');?>" target="_blank"><?php the_sub_field('nom_du_reseau_social');?></a>
  <?php endwhile; else : endif; ?><br>
    Conception graphique & développement : Julienne Richard et Simon Bouchard
  </div>


</div><!-- #fin de structure de page - grille spéciale-->

</div><!-- #page OK-->
<?php wp_footer(); ?>

</body>
</html>
