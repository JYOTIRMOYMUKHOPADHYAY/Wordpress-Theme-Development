<?php
/**
 * Template Name: Front Page
 */
get_header() ?>

<div class="carosol_file">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <?php
            if (is_active_sidebar("carosol_image_one")):
                dynamic_sidebar("carosol_image_one");
            ?>
            <?php endif ?>

            <?php
            if (is_active_sidebar("carosol_image_two")):
                dynamic_sidebar("carosol_image_two");
            ?>
            <?php endif ?>

            <?php
            if (is_active_sidebar("carosol_image_three")):
                dynamic_sidebar("carosol_image_three");
            ?>
            <?php endif ?>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<!-- WELCOME_SECTION -->
<div class="container-fluid welcome_section">
    <div class="section_tagline pt-4">
        <h3>Welcome to</h3>
    </div>
    <div class="section_name pt-4">
        <h2>Priyanka Photography
        </h2>
    </div>
    <div class="section_icon pt-3 pb-4">
        <img src="<?php echo get_theme_file_uri('/images/home_welcome_section.webp') ?>" class="w-100" />
    </div>
    <div class="section_body">

        <div class="section_body_content">
            <?php
            if (is_active_sidebar("welcome_section_banner_text")):
                dynamic_sidebar("welcome_section_banner_text");
            ?>
            <?php endif ?>
        </div>
        <div class="section_body_image">

            <?php
            if (is_active_sidebar("welcome_section_banner_image")):
                dynamic_sidebar("welcome_section_banner_image");
            ?>
            <?php endif ?>
            <!-- <img src="<?php echo get_theme_file_uri('/images/home_welcome_section_image.jpg') ?>" class=""> -->
        </div>
    </div>
</div>


<!-- MEET THE LADY BEHIND THE LENS -->
<div class="meet_the_lady pb-5"
    style="background-image: url('<?php echo get_theme_file_uri('/images/home_welcome_section_image.jpg') ?>');">
    <div class="meet_the_lady_header mt-5 mb-3">
        <h3 class="text-white">Meet the Lady behind the Lens</h3>
    </div>
    <div class="container meet_the_lady_content pb-5">
        <div class="card p-0">
            <div class="card-body p-0">
                <div class="meet_the_lady_image">
                    <?php
          if (is_active_sidebar("meet_the_lady_image")):
              dynamic_sidebar("meet_the_lady_image");
          ?>
                    <?php endif ?>
                    <!-- <img src="./assets/New Images -20221030T074820Z-001/New Images/DSC_9254.jpg"> -->
                </div>
                <div class="meet_the_lady_content_text">

                    <?php
          if (is_active_sidebar("meet_the_lady_text")):
              dynamic_sidebar("meet_the_lady_text");
          ?>
                    <?php endif ?>
                </div>
            </div>
        </div>

    </div>
</div>


 <!-- CATEGORY/ -->
 <!-- <div class="category_div pt-5">
  <div class="header">
      <h3>Category</h3>
  </div>
  <div class="category_card_index w-100 pt-5 pb-5">
      <div class="category_card_base_index category_card_one">
      	<div class="card">
          <figure class="card__thumb">
            <img src="./assets/New Images -20221030T074820Z-001/New Images/DSC_2187.jpg" alt="Picture by Kyle Cottrell" class="card__image w-100">
            <figcaption class="card__caption">
              <h2 class="card__title">Maternity</h2>
              <p class="card__snippet">NASA released a list of 219 new “planet candidates” discovered by the Kepler space telescope, 10 of which are similar to Earth’s size and may be habitable by other life forms.</p>
              <a href="" class="card__button">Read more</a>
            </figcaption>
          </figure>
        </div>

        <div class="card">
          <figure class="card__thumb">
            <img src="./assets/New Images -20221030T074820Z-001/New Images/_DSC7588.jpg" alt="Picture by Kyle Cottrell" class="card__image w-100">
            <figcaption class="card__caption">
              <h2 class="card__title">New Born</h2>
              <p class="card__snippet">NASA released a list of 219 new “planet candidates” discovered by the Kepler space telescope, 10 of which are similar to Earth’s size and may be habitable by other life forms.</p>
              <a href="" class="card__button">Read more</a>
            </figcaption>
          </figure>
        </div>
      </div>

      <div class="category_card_base_index category_card_two">
        <div class="card">
          <figure class="card__thumb">
            <img src="./assets/New Images -20221030T074820Z-001/New Images/_DSC5642.jpg" alt="Picture by Kyle Cottrell" class="card__image w-100">
            <figcaption class="card__caption">
              <h2 class="card__title">Indoor</h2>
              <p class="card__snippet">NASA released a list of 219 new “planet candidates” discovered by the Kepler space telescope, 10 of which are similar to Earth’s size and may be habitable by other life forms.</p>
              <a href="" class="card__button">Read more</a>
            </figcaption>
          </figure>
        </div>
        <div class="card">
          <figure class="card__thumb">
            <img src="./assets/New Images -20221030T074820Z-001/New Images/_DSC7400.jpg" alt="Picture by Kyle Cottrell" class="card__image w-100">
            <figcaption class="card__caption">
              <h2 class="card__title">Outdoor</h2>
              <p class="card__snippet">NASA released a list of 219 new “planet candidates” discovered by the Kepler space telescope, 10 of which are similar to Earth’s size and may be habitable by other life forms.</p>
              <a href="" class="card__button">Read more</a>
            </figcaption>
          </figure>
        </div>
      </div>

  </div>
</div> -->

<?php get_footer() ?>