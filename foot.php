<footer class="footer">
    <div class="footer__image-bg">
        <img src="<? bloginfo('template_url'); ?>/assets/img/footer.png" alt="">
    </div>
    <div class="footer__icons">
        <a href="<?php the_field('vk');?>" class="footer__icon">
            <img src="<? bloginfo('template_url'); ?>/assets/img/icons/vk.svg" alt="">
        </a>
        <a href="<?php the_field('wa');?>" class="footer__icon">
            <img src="<? bloginfo('template_url'); ?>/assets/img/icons/whatsapp.svg" alt="">
        </a>
        <a href="<?php the_field('tg');?>" class="footer__icon">
            <img src="<? bloginfo('template_url'); ?>/assets/img/icons/telegram.svg" alt="">
        </a>
    </div>
    This site is protected by reCAPTCHA and the Google
<a href="https://policies.google.com/privacy">Privacy Policy</a>
and <a href="https://policies.google.com/terms">Terms of Service</a> apply.
</footer>
<?php wp_footer(); 
?>
    </div>

</body>

</html>