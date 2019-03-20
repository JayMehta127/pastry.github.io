<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cake Shop </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/stylee.css">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

    <!-- Custom styles for this template -->
    <style type="text/css">
      .card{
        height:50%;
      }
    </style>

  </head>

  <body>

    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="#">Pastry Emporium</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="C:\Users\Jay P Mehta\Desktop\Web_Project\Cakeshop\categories.html">Cakes</a>

          <a class="dropdown-item" href="#">Pastry</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Customized Cakes</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
       <i class="fas fa-search" ></i>
      <i class="fas fa-shopping-cart" ></i>
      <i class="fas fa-user-circle" ></i>
    </form>
  </div>

</nav>

   <div class="products">  
    <div class="container">  
      <div class="single-page">
        <div class="single-page-row" id="detail-21">
          <div class="col-md-6 single-top-left">  
            <div class="flexslider">
              <ul class="slides">
                <li data-thumb="images/s1.jpg">
                  <div class="thumb-image detail_images"> <img src="images/s1.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
                </li>
                <li data-thumb="images/s2.jpg">
                   <div class="thumb-image"> <img src="images/s2.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
                </li>
                <li data-thumb="images/s3.jpg">
                   <div class="thumb-image"> <img src="images/s3.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
                </li> 
              </ul>
            </div>
          </div>
          <div class="col-md-6 single-top-right">
            <h3 class="item_name"> German Chocolate</h3>
            <p>Processing Time: Item will be shipped out within 2-3 working days. </p>
            <div class="single-rating">
              <ul>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li class="rating">20 reviews</li>
                <li><a href="#">Add your review</a></li>
              </ul> 
            </div>
            <div class="single-price">
              <ul>
                <li>₹500</li>  
                <li><del>₹600</del></li> 
                <li><span class="w3off">10% OFF</span></li> 
                <li>Ends on: Oct,15th</li>
                <li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
              </ul> 
            </div> 
            <p class="single-price-text">Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra. </p>
            <form action="#" method="post">
              <input type="hidden" name="cmd" value="_cart" />
              <input type="hidden" name="add" value="1" /> 
              <input type="hidden" name="w3ls1_item" value="Handbag" /> 
              <input type="hidden" name="amount" value="540.00" /> 
              <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
            <button class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</button>
          </div>
           <div class="clearfix"> </div>  
        </div>
      </div> 

    <!-- Footer -->
     <footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
       <i class="fas fa-laptop" id="logo"></i>
      <small class="d-block mb-3 text-muted">©2019</small>
    </div>
    <div class="col-6 col-md">
      <h5>Customer services</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">About us</a></li>
        <li><a class="text-muted" href="#">Technical Support</a></li>
        <li><a class="text-muted" href="#">Terms & Conditions</a></li>
        <li><a class="text-muted" href="#">FAQs</a></li>
        <li><a class="text-muted" href="#">Feedback</a></li>
        <li><a class="text-muted" href="#">How to Order</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Product</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Cakes</a></li>
        <li><a class="text-muted" href="#">Pastry</a></li>
        <li><a class="text-muted" href="#">Add Ons</a></li>
        <li><a class="text-muted" href="#">Customized Cake</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Contact us</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">contact@company.com</a></li>
        <li><a class="text-muted" href="#">1800-900-900-80</a></li>
        
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Stay Connected</h5>
      <ul class="list-unstyled text-small">
<i class="fab fa-twitter" id="log"></i>
<i class="fab fa-instagram"id="log"></i>
<i class="fab fa-youtube"id="log"></i>
<i class="fab fa-pinterest"id="log"></i>
<i class="fab fa-google-plus-g"id="log"></i>
</ul>
    </div>
  </div>
</footer>

    

  </body>
</html>
