@include('header')
    <body>

<div id="page">

<!-- Nav -->
<nav>
  <ul class="pull-right">
    <li>
      <a title="Amenities" href="#" aria-haspopup="true">Amenities</a>
    </li>
    <li>
      <a title="Features" href="#" aria-haspopup="true" >Features</a>
    </li>
    <li>
      <a title="Floorplans" href="#" aria-haspopup="true">Floorplans</a>
    </li>
    <li>
      <a title="Apply" href="#">Apply</a>
    </li>
  </ul>

  <ul class="pull-right">
    <li>
      <a title="Contact" href="#" aria-haspopup="true">Contact</a>
    </li>
    <li>
      <a title="Gallery" href="#" aria-haspopup="true" >Gallery</a>
    </li>
    <li>
      <a title="Residents" href="#" aria-haspopup="true">Residents</a>
    </li>
    <li>
      <a title="FAQS" href="#">FAQS</a>
    </li>
  </ul>
</nav>

<!-- /Nav -->

<header>
  <a class="logo" title"Univerity Logo" href="#"></a>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo asset('images/mainslide-1.jpg'); ?>" alt="Students">
    </div>

    <div class="item">
      <img src="<?php echo asset('images/mainslide-2.jpg'); ?>" alt="Housing">
    </div>

    <div class="item">
      <img src="<?php echo asset('images/mainslide-3.jpg'); ?>" alt="Smiley Faces">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</header>

<!-- <section class="video">
  <p>VIDEO SECTION carry banjo meh wolf, messenger bag sustainable fingerstache lumbersexual. Mustache vexillologist street art, fam cardigan pork belly next level chillwave pug knausgaard brunch leggings keffiyeh woke tousled. Fingerstache vice ethical hot chicken chillwave. Before they sold out schlitz typewriter tattooed literally. Franzen post-ironic leggings unicorn biodiesel.</p>
</section> -->
<!-- <section class="products-section">
  <p>PRODUCTS SECTION carry banjo meh wolf, messenger bag sustainable fingerstache lumbersexual. Mustache vexillologist street art, fam cardigan pork belly next level chillwave pug knausgaard brunch leggings keffiyeh woke tousled. Fingerstache vice ethical hot chicken chillwave. Before they sold out schlitz typewriter tattooed literally. Franzen post-ironic leggings unicorn biodiesel.</p>
</section> -->

<!--Contact section-->
<!-- <section class="contact-section">
  <p>CONTACT SECTION carry banjo meh wolf, messenger bag sustainable fingerstache lumbersexual. Mustache vexillologist street art, fam cardigan pork belly next level chillwave pug knausgaard brunch leggings keffiyeh woke tousled. Fingerstache vice ethical hot chicken chillwave. Before they sold out schlitz typewriter tattooed literally. Franzen post-ironic leggings unicorn biodiesel.</p>
</section> -->

</div><!-- page -->

@include('footer')
</body>
</html>
