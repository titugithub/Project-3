<?php get_header()?>

            <section class="hero" id="hero">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">

                                        <?php $image_hero = get_field( 'image_hero', 'option' ); ?>
                                        <?php if ( $image_hero ) : ?>
                                            <img src="<?php echo esc_url( $image_hero['url'] ); ?>" alt="<?php echo esc_attr( $image_hero['alt'] ); ?>"class="img-fluid" />
                                        <?php endif; ?>

                                    </div>

                                    <div class="carousel-item">

                                    <?php $image_h2ero_copy = get_field( 'image_h2ero_copy', 'option' ); ?>
                                    <?php if ( $image_h2ero_copy ) : ?>
                                        <img src="<?php echo esc_url( $image_h2ero_copy['url'] ); ?>" alt="<?php echo esc_attr( $image_h2ero_copy['alt'] ); ?>" class="img-fluid"/>
                                    <?php endif; ?>

                                    </div>

                                    <div class="carousel-item">
                                    <?php $image_h3ero_copy = get_field( 'image_h3ero_copy', 'option' ); ?>
                                    <?php if ( $image_h3ero_copy ) : ?>
                                        <img src="<?php echo esc_url( $image_h3ero_copy['url'] ); ?>" alt="<?php echo esc_attr( $image_h3ero_copy['alt'] ); ?>"  class="img-fluid"/>
                                    <?php endif; ?>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="heroText d-flex flex-column justify-content-center">

                                <h1 class="mt-auto mb-2">
                                <?php the_field( 'title_hero', 'option' ); ?>
                                    <div class="animated-info">
                                        <span class="animated-item">health</span>
                                        <span class="animated-item">days</span>
                                        <span class="animated-item">lives</span>
                                    </div>
                                </h1>

                                <p class="mb-4"><?php the_field( 'descri_heroption', 'option' ); ?></p>

                                <div class="heroLinks d-flex flex-wrap align-items-center">
                                    <a class="custom-link me-4" href="<?php the_field( 'button_link', 'option' ); ?>" data-hover="Learn More"><?php the_field( 'button_text_hero', 'option' ); ?></a>

                                    <p class="contact-phone mb-0"><i class="bi-phone"></i> <?php the_field( 'number_hero', 'option' ); ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12">
                            <h2 class="mb-lg-3 mb-3"><?php the_field( 'title_about', 'option' ); ?></h2>

                            <p><?php the_field( 'description_about', 'option' ); ?></p>
                        </div>

                        <div class="col-lg-4 col-md-5 col-12 mx-auto">
                            <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                                <p class="featured-text"><span class="featured-number"><?php the_field( 'experience_year', 'option' ); ?></span> Years<br> of Experiences</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="gallery">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-6 ps-0">
                        <?php $first_image = get_field( 'first_image', 'option' ); ?>
                        <?php if ( $first_image ) : ?>
                            <img src="<?php echo esc_url( $first_image['url'] ); ?>" class="img-fluid galleryImage" alt="<?php echo esc_attr( $first_image['alt'] ); ?>" />
                        <?php endif; ?>
                        </div>

                        <div class="col-lg-6 col-6 pe-0">
                        <?php $second_image = get_field( 'second_image', 'option' ); ?>
                        <?php if ( $second_image ) : ?>
                            <img src="<?php echo esc_url( $second_image['url'] ); ?>"class="img-fluid galleryImage" alt="<?php echo esc_attr( $second_image['alt'] ); ?>" />
                        <?php endif; ?>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="timeline">
                <div class="container">
                    <div class="row">

                        <h2 class="text-center mb-lg-5 mb-4">Our Timeline</h2>
                        
                        <div class="timeline">
                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light"><?php the_field( 'timeline1_title', 'option' ); ?></h3>

                                    <p><?php the_field( 'timeline1_description', 'option' ); ?></p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-patch-check-fill timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time><?php the_field( 'timeline1_date', 'option' ); ?></time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light"><?php the_field( 'timeline2_title', 'option' ); ?></h3>

                                    <p><?php the_field( 'timeline2_description', 'option' ); ?></p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-book timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time><?php the_field( 'timeline2_date_copy', 'option' ); ?></time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light"><?php the_field( 'timeline3_title_copy', 'option' ); ?></h3>

                                    <p><?php the_field( 'timeline3_description', 'option' ); ?></p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-file-medical timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time><?php the_field( 'timeline3_date', 'option' ); ?></time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light"><?php the_field( 'timeline34_title_copy2', 'option' ); ?></h3>

                                    <p class="mb-0 pb-0"><?php the_field( 'timeline34_description_copy', 'option' ); ?></p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-globe timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2<?php the_field( 'timeline44_date_copy', 'option' ); ?></time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light"><?php the_field( 'timeline354_title_copy3', 'option' ); ?></h3>

                                    <p><?php the_field( 'timeline34r_description_copy2', 'option' ); ?></p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-person timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time><?php the_field( 'timelinerr44_date_copy2', 'option' ); ?></time>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="reviews">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="text-center mb-lg-5 mb-4">Our Patients</h2>

                            <div class="owl-carousel reviews-carousel">
                            <?php if ( have_rows( 'add_patient', 'option' ) ) : ?>
	                        <?php while ( have_rows( 'add_patient', 'option' ) ) : the_row(); ?>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>

                                    </div>
                                    

   

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong><?php the_sub_field( 'title_p' ); ?></strong></p>

                                    <p class="reviews-text w-100"><?php the_sub_field( 'content_p' ); ?></p>


                                    <?php $patient_image = get_sub_field( 'patient_image' ); ?>
                                    <?php if ( $patient_image ) : ?>
                                        <img src="<?php echo esc_url( $patient_image['url'] ); ?>"class="img-fluid reviews-image" alt="<?php echo esc_attr( $patient_image['alt'] ); ?>" />
                                    <?php endif; ?>

                                    <figcaption class="ms-4">
                                        <strong><?php the_sub_field( 'patient_name' ); ?></strong>

                                        <span class="text-muted"><?php the_sub_field( 'patient_condition' ); ?></span>
                                    </figcaption>
                                </figure>

                            <?php endwhile; ?>
                            <?php else : ?>
                                <?php // no rows found ?>
                            <?php endif; ?>

                                <!-- <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Doctor cares everyone!</strong></p>

                                    <p class="reviews-text w-100">Donec in elementum orci, nec posuere ligula. Quisque vulputate diam et ullamcorper ullamcorper. Pellentesque vestibulum neque at leo fermentum mattis.</p>

                                    <img src="<?php echo get_template_directory_uri()?>/images/reviews/senior-man-wearing-white-face-mask-covid-19-campaign-with-design-space.jpeg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Ben Walker</strong>

                                        <span class="text-muted">Recovered</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Great services!</strong></p>

                                    <p class="reviews-text w-100">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec sit amet velit vitae purus aliquam efficitur.</p>

                                    <img src="<?php echo get_template_directory_uri()?>/images/reviews/portrait-british-woman.jpeg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Laura Zono</strong>

                                        <span class="text-muted">New Patient</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Best Advices</strong></p>

                                    <p class="reviews-text w-100">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla.</p>

                                    <img src="<?php echo get_template_directory_uri()?>/images/reviews/woman-wearing-mask-face-closeup-covid-19-green-background.jpeg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Rosey</strong>

                                        <span class="text-muted">Almost Recovered</span>
                                    </figcaption>
                                </figure> -->
                               
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>
                            
                                <div role="form" action="#booking" method="post">

                                    <!-- <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="Phone: 123-456-7890">
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="date" name="date" id="date" value="" class="form-control">
                                            
                                        </div>

                                        <div class="col-12">
                                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Additional Message"></textarea>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control" id="submit-button">Book Now</button>
                                        </div>
                                    </div> -->

                                    <?php echo do_shortcode('[contact-form-7 id="84" title="Contact form 1"]')?>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

       <?php get_footer()?>