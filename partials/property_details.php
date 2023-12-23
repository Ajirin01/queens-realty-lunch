<?php
  include_once('controllers/get_single.php') 
?>
<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"><?= $property['title'] ?></h1>
            <span class="color-text-a"><?= $property['location'] ?></span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="properties.php">Properties</a>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <?php if(json_decode($property['photos']) > 0){ ?>
                <?php foreach(json_decode($property['photos']) as $photo){ ?>
                    <div class="carousel-item-b">
                        <img src="admin/uploads/photos/<?= $photo ?>" alt="">
                    </div>
                <?php } ?>
            <?php } ?>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">&#x20A6;</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c"><?= $property['price'] ?></h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Property ID:</strong>
                      <span><?= $property['id'] ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span><?= $property['location'] ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Property Type:</strong>
                      <span><?= $type['name'] ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Status:</strong>
                      <span><?= $property['status'] ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Area:</strong>
                      <span><?= $property['size'] ?>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Beds:</strong>
                      <span><?= $property['bedrooms'] ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Baths:</strong>
                      <span><?= $property['bathrooms'] ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Garage:</strong>
                      <span><?= $property['garages'] ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                    <?= $property['description'] ?>
                </p>
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Amenities</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list-a no-margin">
                <?php if ($property['amenities'] != null) { ?>
                    <?php
                    // Explode the comma-separated amenities into an array
                    $amenitiesArray = explode(',', $property['amenities']);
                    ?>
                    <?php foreach ($amenitiesArray as $amenity) { ?>
                        <li><?= trim($amenity) ?></li>
                    <?php } ?>
                <?php } ?>

                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/ Property Single End /-->