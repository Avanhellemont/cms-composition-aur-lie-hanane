<?php wp_footer();?>

<div id="footer" class="footer__container">
<!-------------------------------   1 er PARTIE    ----------------------------------->

<div class="footer__top__content">
    <!------------------------------- photo and texte  + liens  ----------------------------------->

    <div class="footer__content">
         <div>
            <img class="footer__img__content" src="<?php bloginfo('template_url'); ?>/assets/images/1500x1250_02.jpg" alt="image">
        </div>
        <div>
        <a class="footer__content__text" href="#">Tissus et habillage maison 
            <img class="footer__content__img" src="<?php bloginfo('template_url'); ?>/assets/svg/Group 1300.svg" alt="icon"></a>
        </div>
    </div>

    <!-------------------------------    HORAIRE    ----------------------------------->

    <div class="footer__horaire"></div>
    

</div>
<!-------------------------------   2 eme PARTIE   ------------------------------------>

<!-------------------------------   GOOGLE MAP   -------------------------------------->
<br>
<div class="div1">
        <h2 class="footer__title">Rendez-nous visite !</h2>
        <a class="google__map" href="#">Google map <img src="<?php bloginfo('template_url'); ?>/assets/svg/Group 1300.svg" alt=""></a>
    </div>
<!-------------------------------   COORDONNES   ------------------------------------>
<div class="div2">
    <div class="footer__container__icon__adress"><img class="footer__img__adress" src="<?php bloginfo('template_url'); ?>/assets/svg/marker-road.svg" alt=""><p class="footer__adress">Route de Hamoir, 87 – 4500 Huy </p></div> 
    <p class="footer__mail">  <img class="footer__img__mail" src="<?php bloginfo('template_url'); ?>/assets/svg/icon-arrobas.svg" alt=""><a class="footer__info" href="#">info@meubles-composition.be</a></p>
    <p class="footer__phone"> <img class="footer__img__phone" src="<?php bloginfo('template_url'); ?>/assets/svg/phone-2.svg" alt=""><a class="footer__tel" href="">+32 (0)85 21 52 38</a> </p>
</div>

<!-------------------------------   LIENS SOCIAUX   ------------------------------------>

<div class="div3">
    <div class="footer__icons">

        <div class="footer__facebook"><a href="#" target="_blank"><img class="footer__img__facebook" src="<?php bloginfo('template_url'); ?>/assets/svg/logo-facebook.svg" alt="logo-facebook"> </a> </div>
        <div class="footer__insta"><a href="#" target="_blank"><img class="footer__img__insta"src="<?php bloginfo('template_url'); ?>/assets/svg/logo-instagram.svg" alt="logo-instagram"> </a> </div>

    </div>
    <h6>
        <p class="footer__copy__confid">
            <a class= "footer__copy" href="#"> &#169 COMPOSITION 2019 - </a>
            <a class= "footer__confid" href="#"> POLITIQUE DE CONFIDENTIALITE</a>
        </p>
    </h6>
        <p class="footer__tva"> TVA : BE0872574089 </p>
    </div>
</footer>
    <?php wp_footer() ?> 
</body>
</html>