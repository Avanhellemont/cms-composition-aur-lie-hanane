<?php wp_footer();?>

<footer>
<div class="footer__banner">
<!-------------------------------   1 er PARTIE    ----------------------------------->

<div class="footer__top__content">
    <!------------------------------- photo and text  + liens  ----------------------------------->

    <div class="footer__content">
        <div class="footer__img__bloc">
            <img class="footer__img__content" src="<?php bloginfo('template_url'); ?>/assets/images/1500x1250_02.jpg" alt="image">
        
            <div class="footer__text__bloc">
                <a class="footer__content__text" href="#">Tissus et habillage maison 
                    <img class="footer__content__img" src="<?php bloginfo('template_url'); ?>/assets/svg/Group 1300.svg" alt="icon"></a>
            </div>
        </div>
    </div>

    <!-------------------------------    HORAIRE    ----------------------------------->

    <div class="footer__horaire">
        <div class="footer__bloc__heure">
            <p class="footer__icon"><img class="footer__img__time" src="<?php bloginfo('template_url'); ?>/assets/svg/time-clock.svg" alt=""></p>
            <div class="footer__horaire">
                <h5>Horaire</h5>
                    <ul>
                        <li>lundi > dimanche : (Fermé le mardi)</li>
                        <li>10h > 18h</li>
                    </ul>
            </div>
        </div>
    </div>
    

</div>
<!-------------------------------   2 eme PARTIE   ------------------------------------>

<!-------------------------------   GOOGLE MAP   -------------------------------------->
<div class="footer__bottom">
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
</div>
</div>
</footer>
    <?php wp_footer() ?> 
</body>
</html>