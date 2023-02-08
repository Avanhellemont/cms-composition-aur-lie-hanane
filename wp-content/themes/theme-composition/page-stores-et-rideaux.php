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
