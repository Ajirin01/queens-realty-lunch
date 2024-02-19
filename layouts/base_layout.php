<?php include_once('controllers/search_result.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Queens Realty Management | <?=$pageTitle?> </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/queens-fav.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  // var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  // (function(){
  // var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  // s1.async=true;
  // s1.src='https://embed.tawk.to/65b7ae808d261e1b5f59215d/1hlao3ap3';
  // s1.charset='UTF-8';
  // s1.setAttribute('crossorigin','*');
  // s0.parentNode.insertBefore(s1,s0);
  // })();
  </script>
  <!--End of Tawk.to Script-->

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <style>
    .property-image {
        width: 290px;
        height: 290px;
        object-fit: cover; /* This ensures the image retains its aspect ratio and covers the entire container */
    }

    .property-list-image {
        width: 100%;
        /* height: 290px; */
        height: 60vh;
        object-fit: cover; /* This ensures the image retains its aspect ratio and covers the entire container */
    }
  </style>
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <?php include_once 'components/search_form.php'; ?>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <?php include_once 'components/nav.php'; ?>
  <!--/ Nav End /-->

    <main>
        <?php include $content; ?>
    </main>

  <!--/ footer Star /-->
  <?php include_once 'components/footer.php' ;?>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
