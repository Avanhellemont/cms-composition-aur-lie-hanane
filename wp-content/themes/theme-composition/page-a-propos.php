<?php get_header() ?>

<main>

<!-- FIRST PART -->
<?php 
$firstpart = get_field('firstpart');
if( $firstpart['titre'] && $firstpart['image'] ):
?>
 <section class="firstpart">
    <h1><?php echo $firstpart['titre']; ?></h1>
    <img class="firstpart__image" src="<?php echo $firstpart['image']['sizes']['taille_slide']; ?>">
</section>

    <?php endif; ?>

    
<!--  SECOND PART  -->
<?php 
$secondpart = get_field('secondpart');
if( $secondpart['secondpart_titre'] && $secondpart['secondpart_soustitre'] && $secondpart['secondpart_texte'] && $secondpart['secondpart_liste']):
?>
 <section class="secondpart">
    <div class="secondpart__content--left">
        <h2 class="secondpart__titre"><?php echo $secondpart['secondpart_titre']; ?></h2>
        <p class="secondpart-titre"><?php echo $secondpart['secondpart_soustitre']; ?></p>
        <p><?php echo $secondpart['secondpart_texte']; ?></p>
    </div>
    <div class="secondpart__content--right">
        <div class="secondpart__liste"><?php echo $secondpart['secondpart_liste']; ?></div>
    </div>
</section>
    <?php endif; ?>

<!-- LAST PART -->

<?php 
$lastpart = get_field('lastpart');
if( $lastpart['lastpart_image'] && $lastpart['lastpart_titre'] && $lastpart['lastpart_soustitre'] && $lastpart['lastpart_texte']):
?>
 <section class="lastpart">
    <img class="lastpart__image" src="<?php echo $lastpart['lastpart_image']['sizes']['taille_slide']; ?>">
    <div class="lastpart__content--right">
        <h2 class="lastpart__titre"><?php echo $lastpart['lastpart_titre']; ?></h2>
        <p class="lastpart__sous-titre"><?php echo $lastpart['lastpart_soustitre']; ?></p>
        <p class="lastpart__texte"><?php echo $lastpart['lastpart_texte']; ?></p>
    </div>
</section>
    <?php endif; ?>
    <?php get_template_part("/template-parts/callback") ?>

</main>
<?php get_footer() ?>


