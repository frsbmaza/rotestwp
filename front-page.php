<?php
get_header();
?>
     <!-- start about section -->
 	<section id="about-section" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="mt-4 mt-lg-0 col-lg-6 col-sm-7 order-1 order-lg-0 order-sm-0">
                    <div class="about-left text-left text-lg-start">
                        <h2><?php echo carbon_get_the_post_meta('crb_about_title');?></h2>
                        <p>
                           <?php echo carbon_get_the_post_meta('crb_about_description');?>
                        </p>
                        <a class="btn gradient-btn rounded-btn" href="<?php echo carbon_get_the_post_meta('crb_about_button_url');?>"><?php echo carbon_get_the_post_meta('crb_about_button_title');?></a>
                    </div>
                </div>
                <div class="col-lg-6  col-sm-5 ">
                    <div class="about-right">
                        <img src="<?php echo carbon_get_the_post_meta('crb_about_image');?>" alt="About" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->
    <!-- start services section -->
	<section id="services-section" class="services-section pt-80 pb-110">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-sm-6">
							<?php
									$services = carbon_get_the_post_meta( 'crb_services_box' );
									$x = 0;
									foreach ( $services as $service ) { $x++; ?>
							<?php if($x == 1 or $x == 2){
										?>
							<div class="box-component <?php if($x==2){echo ' my-4';}?>">
											<div class="icon">
												<img src="<?php echo $service['crb_service_item_image']; ?>" alt="<?php echo $service['service_item_title'] ?>" />
											</div>
											<h4><?php echo $service['service_item_title'] ?></h4>
											<p>
												<?php echo $service['services_item_text']; ?>
											</p>
										</div>
									<?php }
									}
								?>
                        </div>
                        <div class="col-sm-6 align-self-sm-center">
                            <?php
									$services = carbon_get_the_post_meta( 'crb_services_box' );
									$x = 0;
									foreach ( $services as $service ) { $x++; ?>
							<?php if($x == 3 or $x == 4){
										?>
							<div class="box-component <?php if($x==4){echo ' my-4';}?>">
											<div class="icon">
												<img src="<?php echo $service['crb_service_item_image']; ?>" alt="<?php echo $service['service_item_title'] ?>" />
											</div>
											<h4><?php echo $service['service_item_title'] ?></h4>
											<p>
												<?php echo $service['services_item_text']; ?>
											</p>
										</div>
									<?php }
									}
								?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-right">
                        <h2><?php echo carbon_get_the_post_meta('crb_service_title');?></h2>
                        <p>
                            <?php echo carbon_get_the_post_meta('crb_services_description');?>
                        </p>
                        <a class="gradient-btn" href="<?php echo carbon_get_the_post_meta('crb_service_button_url');?>"><?php echo carbon_get_the_post_meta('crb_service_button_title');?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end services section -->
     <!-- start feature section -->
 	<section id="feature-section" class="feature-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-5">
                    <div class="mb-4 pb-3 pb-lg-0 mb-lg-0 feature-left text-center text-lg-start">
                        <img src="<?php echo carbon_get_the_post_meta('crb_feature_image');?>" alt="feature" />
                    </div>
                </div>
                <div class="col-lg-7 col-sm-7">
                    <div class="feature-items pt-45 pb-65">
						<?php
							$features = carbon_get_the_post_meta( 'crb_features_box' );
							foreach ( $features as $feature ) { ?>
							 <div class="box-component">
								<h4><?php echo $feature['feature_item_title']; ?></h4>
								<p>
									<?php echo $feature['feature_item_text']; ?>
								</p>
							</div>
							<?php
							}
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end feature section -->
    <!-- start extra section -->
	<section id="extra-section" class="extra-section pt-100 pb-90">
        <div class="container">
            <div class="text-center">
                <h2>
                    <?php echo carbon_get_the_post_meta('crb_team_header_title');?>
                </h2>
                <p>
                    <?php echo carbon_get_the_post_meta('crb_team_header_description');?>
                </p>
                <a class="gradient-btn" href="<?php echo carbon_get_the_post_meta('crb_team_header_button_url');?>"><?php echo carbon_get_the_post_meta('crb_team_header_button_title');?></a>
            </div>
        </div>
    </section>
    <!-- end extra section -->

    <!-- start team-section section -->
    <section id="team-section" class="team-section pb-100">
        <div class="container">
            <div class="row align-items-center align-items-xl-end">
                <div class="col-lg-6 col-sm-5">
                    <div class="team-left text-center text-lg-start">
                        <img src="<?php echo carbon_get_the_post_meta('crb_team_image');?>" alt="team" />
                    </div>
                </div>
                <div class="col-lg-6 col-sm-7">
                    <div class="team-right mt-5 mt-lg-0">
                        <h2>
                            <?php echo carbon_get_the_post_meta('crb_team_column_header_title');?>
                        </h2>
                        <p>
                            <?php echo carbon_get_the_post_meta('crb_team_column_header_description');?>
                        </p>
                        <a href="<?php echo carbon_get_the_post_meta('crb_team_column_header_button_url');?>" class="gradient-btn mb-5"><?php echo carbon_get_the_post_meta('crb_team_column_header_button_title');?></a>
                        <div class="tb-content pt-lg-2">
							<?php
							$teams = carbon_get_the_post_meta( 'crb_team_items' );
							foreach ( $teams as $team ) { ?>
							 <div class="d-flex align-items-start">
                                <img src="<?php echo $team['crb_team_item_image']; ?>" alt="<?php echo $team['team_item_title']; ?>" />
                                <div class="ms-2">
                                    <h4><?php echo $team['team_item_title']; ?></h4>
                                    <p>
                                        <?php echo $team['team_item_text']; ?>
                                    </p>
                                </div>
                            </div>
							<?php
							}
						?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end team-section section -->
    <!-- start FAQ section -->
	<section id="faq-section" class="faq-section pt-55 pb-65" style="background-image:url(<?php echo carbon_get_the_post_meta('crb_faq_bgimage'); ?>)">
        <div class="container">
            <div class="section_header text-center">
                <h2><?php echo carbon_get_the_post_meta('crb_faq_header_title');?></h2>
                <p>
                    <?php echo carbon_get_the_post_meta('crb_team_header_description');?>
                </p>
            </div>
            <div class="accordion-items">
				<?php
					$faqs = carbon_get_the_post_meta( 'crb_faq_items' );
					foreach ( $faqs as $faq ) { ?>
					<div class="accordion-item">
						<h3><?php echo $faq['faq_item_title']; ?> <span><img src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/chevron-down.svg"></span></h3>
						<div class="content">
							<p>
								<?php echo $faq['faq_item_text']; ?>
							</p>
						</div>
					</div>
					<?php
					}
				?>
            </div>
        </div>
    </section>
    <!-- end FAQ section -->
<?php get_footer(); ?>