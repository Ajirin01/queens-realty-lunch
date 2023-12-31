<?php
    include_once('controllers/search_result.php'); 
?>
<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Search Result</h1>
            <span class="color-text-a">Properties</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Properties
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
<!--/ Property Grid Star /-->
<section class="property-grid grid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="grid-option">
                <form id="filter-form" method="get">
                    <select class="custom-select" name="filter">
                        <option value="all" <?php echo isset($_GET['filter']) && $_GET['filter'] === 'all' ? 'selected' : ''; ?>>All</option>
                        <option value="newToOld" <?php echo isset($_GET['filter']) && $_GET['filter'] === 'newToOld' ? 'selected' : ''; ?>>New to Old</option>
                        <option value="rent" <?php echo isset($_GET['filter']) && $_GET['filter'] === 'rent' ? 'selected' : ''; ?>>For Rent</option>
                        <option value="sale" <?php echo isset($_GET['filter']) && $_GET['filter'] === 'sale' ? 'selected' : ''; ?>>For Sale</option>
                    </select>
                    <button type="submit">Apply Filter</button>
                </form>

                </div>
            </div>

            <?php
            // Loop through properties
            foreach ($properties as $property) {
            ?>
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <?php if (count(json_decode($property['photos'])) > 0) { ?>
                                <img src="admin/uploads/photos/<?php echo json_decode($property['photos'])[0]; ?>" alt="" class="img-a img-fluid property-list-image">
                            <?php } ?>
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#"><?php echo $property['title']; ?></a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">&#x20A6;<?php echo $property['price']; ?></span>
                                    </div>
                                    <a href="property.php?id=<?= $property['id']  ?>" class="link-a">Click here to view
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span><?php echo $property['size']; ?>m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span><?php echo $property['bedrooms']; ?></span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span><?php echo $property['bathrooms']; ?></span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span><?php echo $property['garages']; ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
</section>
<!--/ Property Grid End /-->
