<?php get_header() ?>

<main>

<!-- BANNIERE PART -->
<?php 
$bandeau = get_field('bandeau');
if( $bandeau['image_g'] && ['image_d'] && ['titre_g'] && ['titre_g']):
// var_dump($bandeau['image_g']);
?>

<div class="banniere__img">
    <img class="banniere__img--g" src="<?php echo $bandeau['image_g']['sizes']['taille_slide']; ?>">
    <img class="image__img--d" src="<?php echo $bandeau['image_d']['sizes']['taille_slide']; ?>">
</div>

<div class="banniere__titre--g">
    <div class="banniere__bloc--g">
        <h2 class="banniere__titre--g"><?php echo $bandeau['titre_g']; ?></h2>
        <div class="content__box--g">
            <h2 class="banniere__titre-g--hover"><?php echo $bandeau['survol_g']['titre']; ?></h2>
            <p class="banniere__texte-g--hover"><?php echo $bandeau['survol_g']['texte_g']; ?></p>
        </div>
    </div>
</div>

<div class="banniere__titre--d">
<div class="banniere__bloc--d">
    <h2 class="banniere__titre--d"><?php echo $bandeau['titre_d']; ?></h2>
    <div class="content__box--d">
    <h2 class="banniere__titre-d--hover"><?php echo $bandeau['survol_d']['titre']; ?></h2>
    <p class="banniere__texte-d--hover"><?php echo $bandeau['survol_d']['texte_d']; ?></p>
    </div>
</div>
</div>

<?php endif; ?>


<!--  INTRO PART  -->
<?php 
$intro = get_field('intro');
if( $intro['intro_firsttext'] && ['intro_titre'] && ['intro_secondtext'] && ['intro_link'] && ['intro_img']):
// var_dump($bandeau['image_g']);
?>

<div class="intro">
    <div class="intro__alltext">
        <div class="intro__firstcontent">
            <p class="intro__firsttext"><?php echo $intro['intro_firsttext']; ?></p>
        </div>
        <div class="intro__secondcontent">
            <h2 class="intro__titre"><?php echo $intro['intro_titre']; ?></h2>
            <p class="intro__secondtext"><?php echo $intro['intro_secondtext']; ?></p>
            <a href="<?= $intro['intro_link']['page_link']; ?>"><?= $intro['intro_link']['titre']; ?></a>
            <!-- <p><?php  the_field('intro_intro_link_titre') ?></p> -->
        </div> 
    </div>
    <img class="intro__img" src="<?php echo $intro['intro_img']['sizes']['taille_slide']; ?>" alt="">
    </div>
    <?php endif; ?>


<!-- MILIEU PART -->
<?php 
$milieu = get_field('milieu');
if( $milieu['milieu_text'] && ['milieu_link'] ):?>

<div class="milieu__bloc--gris">
    <p class="milieu__text"><?php echo $milieu['milieu_text']; ?></p>
</div>

<?php endif; ?>


<!-- TISSUS PART -->
<?php 
$tissus = get_field('tissus');
if( $tissus['tissus_img'] && ['tissus_titre'] && ['tissus_txt'] && ['tissus_link']):?>

<div class="tissus">
    <img class="tissus__img" src="<?php echo $tissus['tissus_img']['sizes']['taille_slide']; ?>" alt="">
    <div class="tissus__content--right">
        <h2 class="tissus__titre"><?php echo $tissus['tissus_titre']; ?></h2>
        <p class="tissus__text"><?php echo $tissus['tissus_txt']; ?></p>
    </div>
</div>
<?php endif; ?>


</main>
<?php get_footer() ?>





  