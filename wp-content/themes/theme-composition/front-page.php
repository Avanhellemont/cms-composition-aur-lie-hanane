<?php get_header() ?>
<main>
    
<?php 
$bandeau = get_field('bandeau');

if( $bandeau['image_g'] && ['image_d'] && ['titre_g'] && ['titre_g']):
// var_dump($bandeau['image_g']);
?>
<div class="banniere__img">
    <img class="banniere__img--g" src="<?php echo $bandeau['image_g']['sizes']['taille_slide']; ?>">
    <img class="image__img--d" src="<?php echo $bandeau['image_d']['sizes']['taille_slide']; ?>">
    </div>
    <h2 class="banniere__titre--g"><?php echo $bandeau['titre_g']; ?></h2>
    <h2 class="banniere__titre--d"><?php echo $bandeau['titre_d']; ?></h2>
    <?php endif; ?>

    <?php 
$bandeau = get_field('intro');

if( $bandeau['intro_firsttext'] && ['intro_titre'] && ['intro_secondtext'] && ['intro_link'] && ['intro_img'] ):
// var_dump($bandeau['image_g']);
?>
<div class="banniere__img">
    <p><?php echo $bandeau['intro_firsttext']; ?></p>
    <h2><?php echo $bandeau['intro_titre']; ?></h2>
    <p><?php echo $bandeau['intro_secondtext']; ?></p>
    <a><?php echo $bandeau['intro_link']; ?></a>
    <img src="<?php echo $bandeau['intro_img']['sizes']['taille_slide']; ?>" alt="">
    <?php endif; ?>



</main>
<?php get_footer() ?>





  