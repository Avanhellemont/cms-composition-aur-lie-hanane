<?php get_header() ?>

<main>

<!-- DIAPORAMA PART -->

<!--  ETUDE D'ARCHI PART  -->
<?php 
$etude_archi = get_field('etude_archi');
if( $etude_archi['etude_titre'] && $etude_archi['etude_soustitre'] && $etude_archi['etude_texte'] && $etude_archi['etude_liste']):
?>
 <section class="etude">
    <h2 class="etude__titre"><?php echo $etude_archi['etude_titre']; ?></h2>
    <p class="etude__sous-titre"><?php echo $etude_archi['etude_soustitre']; ?></p>
    <p class="etude__text"><?php echo $etude_archi['etude_texte']; ?></p>
    <div class="etude__liste"><?php echo $etude_archi['etude_liste']; ?></div>
</section>
    <?php endif; ?>

<!-- NGHI&STEPHAN PART -->

<?php 
$stephan = get_field('stephan');
if( $stephan['stephan_image'] && $stephan['stephan_titre'] && $stephan['stephan_soustitre'] && $stephan['stephan_texte']):
?>
 <section class="stephan">
    <img class="stephan_image" src="<?php echo $stephan['stephan_image']['sizes']['taille_slide']; ?>">
    <h2 class="stephan__titre"><?php echo $stephan['stephan_titre']; ?></h2>
    <p class="stephan__sous-titre"><?php echo $stephan['stephan_soustitre']; ?></p>
    <p class="stephan__texte"><?php echo $stephan['stephan_texte']; ?></p>
</section>
    <?php endif; ?>

<!-- TISSUS ET ARTISANAT PART -->
<?php 
$tissus = get_field('tissus');
if( $tissus['tissus_image'] && $tissus['tissus_titre'] && $tissus['tissus_soustitre'] && $tissus['tissus_texte']):
?>
 <section class="tissus">
    <img class="tissus_image" src="<?php echo $tissus['tissus_image']['sizes']['taille_slide']; ?>">
    <h2 class="tissus__titre"><?php echo $tissus['tissus_titre']; ?></h2>
    <p class="tissus__sous-titre"><?php echo $tissus['tissus_soustitre']; ?></p>
    <p class="tissus__texte"><?php echo $tissus['tissus_texte']; ?></p>
</section>
    <?php endif; ?>





</main>
<?php get_footer() ?>





  