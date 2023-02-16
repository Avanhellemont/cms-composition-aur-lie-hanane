<?php get_header() ?>
<main>

<article>
<?php 
$blog = get_field('bandeau');
if( $blog['image_g'] && ['image_d'] && ['titre_g'] && ['titre_g']):
// var_dump($bandeau['image_g']);
?>

<?php endif; ?>
</article>


<?php get_template_part("/template-parts/callback") ?>
</main>
<?php get_footer() ?>