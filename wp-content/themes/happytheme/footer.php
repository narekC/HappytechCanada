<?php $post_slug = "legal-terms"; ?>
<?php if(get_theme_mod('msn_tw') || get_theme_mod('msn_fb') || get_theme_mod('msn_fb') || get_theme_mod('msn_ln') || get_theme_mod('msn_in')) : ?>
<section id="footer">
    <div class="container">
        <div class="row">
                <?php get_template_part('template-parts/footer/footer-bar/footer', 'info');
                get_template_part('template-parts/footer/footer-bar/footer', 'share');
                if(get_theme_mod('msn_tw') || get_theme_mod('msn_fb') || get_theme_mod('msn_fb') || get_theme_mod('msn_ln') || get_theme_mod('msn_in')) : 
                    get_template_part('template-parts/footer/footer-bar/footer', 'socials');
                endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php //if(isGlobalSite()){ ?>
<footer id="footerGlobal" class="text-center">
    <p>© 2017 <?= get_bloginfo( 'name' ); ?> - All right reserved - <a href="https://www.happytech.life/legal-terms">Mentions légales</a></p>
</footer>
<?php //}; ?>

<div id="fb-root"></div>


<script async defer>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.10&appId=158140790950498';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/assets/js/slick.min.js"></script>
<script async type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/assets/js/main.js"></script>
<script async type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/assets/js/map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEYdzKc34xOYf8db2tqo25i7WTzvZayVA&callback=initMap"></script>


<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-99292406-1', 'auto');
    ga('send', 'pageview');
</script>


<?php wp_footer(); ?>
</body>

</html>