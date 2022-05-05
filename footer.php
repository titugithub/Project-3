<footer class="site-footer section-padding" id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 me-auto col-12">
                        <h5 class="mb-lg-4 mb-3"><?php the_field( 'opening_hour_title', 'option' ); ?></h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">
                                Sunday :<?php the_field( 'sunday:', 'option' ); ?>
                            </li>

                            <li class="list-group-item d-flex">
                                Monday, Tuesday - Firday
                                <span><?php the_field( 'monday_tuesday_-_firday', 'option' ); ?></span>
                            </li>

                            <li class="list-group-item d-flex">
                                Saturday
                                <span><?php the_field( 'saturday:', 'option' ); ?></span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                        <h5 class="mb-lg-4 mb-3"><?php the_field( 'title_f', 'option' ); ?></h5>

                        <p><a href="mailto:hello@company.co"><?php the_field( 'email_f', 'option' ); ?></a><p>

                        <p><?php the_field( 'address_f', 'option' ); ?></p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 ms-auto">
                        <h5 class="mb-lg-4 mb-3"><?php the_field( 'title_s', 'option' ); ?></h5>

                        <ul class="social-icon">

                            <li><a href="<?php the_field( 'facebook_url', 'option' ); ?>" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="<?php the_field( 'twitter_url', 'option' ); ?>" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="<?php the_field( 'instragram_url', 'option' ); ?>" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="<?php the_field( 'youtube_url', 'option' ); ?>" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-12 ms-auto mt-4 mt-lg-0">
                        <p class="copyright-text"><?php the_field( 'copyright_text', 'option' ); ?></p>
                    </div>

                </div>
            </section>
        </footer>


<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    <?php wp_footer()?>
    </body>
</html>