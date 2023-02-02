<?php get_header();?>


<main>
    <?php $contact = get_field('contact');?>

<div class="contact__formulaire__contact">
    <!------------------------------- GOOGLE  ----------------------------------->
    <div class="contact_lieux">
        <a class="google__map" href="#">Google map <img src="<?php bloginfo('template_url'); ?>/assets/svg/Group 1300.svg" alt=""></a>
    </div>
<!-------------------------------   Adresse ------------------------------------>
<div class="div2">
    <div class="footer__container__icon__adress"><img class="footer__img__adress" src="<?php bloginfo('template_url'); ?>/assets/svg/marker-road.svg" alt=""><p class="footer__adress">Route de Hamoir, 87 – 4500 Huy </p></div> 
    <p class="footer__mail">  <img class="footer__img__mail" src="<?php bloginfo('template_url'); ?>/assets/svg/icon-arrobas.svg" alt=""><a class="footer__info" href="#">info@meubles-composition.be</a></p>
    <p class="footer__phone"> <img class="footer__img__phone" src="<?php bloginfo('template_url'); ?>/assets/svg/phone-2.svg" alt=""><a class="footer__tel" href="">+32 (0)85 21 52 38</a> </p>
</div>

    <div class="contact__content">
         <div class="contact__text__bloc">
                <a class="contact__content__text" href="#">Contact
                    <img class="contact__content__img" src="<?php bloginfo('template_url'); ?>/assets/svg/Group 1300.svg" alt="icon">
                </a>
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
 <div class class="contact__form">
<p>le formulaire de contact</p>
    </div>
</div>
    
</main>
<?php get_footer();?>
