<?php get_header() ?>
<main>

<article>
<?php 
$article = get_field('article');
if( $article['btn_retour'] && ['date'] && ['titre'] && ['image']&& ['text-blog'] && ['image_galery'] && ['text'] && ['btn_return_second']):
// var_dump($bandeau['image_g']);
?>
<a class="lien" href="<?= $article['btn_retour']['btnretour_lien']; ?>"> <?php echo $article['btn_retour']['btnretour_txt']; ?></a>
<p class="date"><?php echo $article['date']; ?></p>
<p class="titre"><?php echo $article['titre']; ?></p>

<img class="image--image" src="<?php echo $article['image']['sizes']['taille_slide']; ?>" alt="image">
<p class="paragraphe"><?php echo $article['text-blog'] ?></p>
<img class="gallerie" src="" alt="">




<?php endif; ?>
</article>


<?php get_template_part("/template-parts/callback") ?>
</main>
<?php get_footer() ?>