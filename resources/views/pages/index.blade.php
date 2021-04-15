@extends('layouts.app')

@section('content')
  
<div class="container">
    <div class="row justify-content-center">

      <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="text-black">Write Your Story</h1>
            <p class="lead">Let The world Know about your story</p>
            <p><a href="/posts" class="btn smoothscroll btn-primary">Show Stories</a></p>

          </div>
        </div>
      </div>
        
    </div>
  </div>
  <div style="width:100%;height:0;padding-bottom:66%;position:relative;"><iframe src="images/face.png" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
  <!--<img src="images/face.png" alt="Image" class="img-face" data-aos="fade">-->

  
</div>  




<div class="site-section" id="services-section">
  <div class="container">
    <div class="row ">
      <div class="col-12 mb-5 position-relative">
        <h2 class="section-title text-center mb-5">Services</h2>
      </div>
      
      <div class="col-md-6 mb-4">
        <div class="service d-flex h-100">
          <div class="service-number mr-4"><span class="icon-style"></span></div>
          <div class="service-about">
            <h3>FILM MAKER</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-4">
        <div class="service d-flex h-100">
          <div class="service-number mr-4"><span class="icon-business_center"></span></div>
          <div class="service-about">
            <h3>MOTIONS GRAPHICS</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-4">
        <div class="service d-flex h-100">
          <div class="service-number mr-4"><span class="icon-desktop_windows"></span></div>
          <div class="service-about">
            <h3>STOP MOTIONS</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-4">
        <div class="service d-flex h-100">
          <div class="service-number mr-4"><span class="icon-layers"></span></div>
          <div class="service-about">
            <h3>COVER BOOK</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-4">
        <div class="service d-flex h-100">
          <div class="service-number mr-4"><span class="icon-layers"></span></div>
          <div class="service-about">
            <h3>PHOTO EDITING</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="site-section" id="about-section">
  <div class="container">
    <div class="row ">
      <div class="col-12 mb-4 position-relative">
        <h2 class="section-title">About us</h2>
      </div>
      <div class="col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0">
        <div class="bg-light pt-5">
        <img src="images/homecontact.png" alt="Image" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-4 order-2 order-lg-1">
      
      </div>
      <div class="col-lg-4 order-3 order-lg-3">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
        <p><a href="/about" class="btn smoothscroll btn-primary">Contact us</a></p>
      </div>
      
    </div>
  </div>
</div>




<section class="site-section block__62272" id="portfolio-section">
  

  <div class="container">
    <div class="row mb-5">
      <div class="col-12 position-relative">
        <h2 class="section-title text-center mb-5">Portfolio</h2>
      </div>
    </div>

    
    <div id="posts" class="row no-gutter">
      <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="images/post_2.jpg" class="item-wrap fancybox">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="images/post_2.jpg">
        </a>
      </div>
      <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="images/post_3.jpg" class="item-wrap fancybox">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="images/post_3.jpg">
        </a>
      </div>

      <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="images/post_4.jpg" class="item-wrap fancybox">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="images/post_4.jpg">
        </a>
      </div>

      <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">

        <a href="images/post_5.jpg" class="item-wrap fancybox">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="images/post_5.jpg">
        </a>

      </div>

      <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="images/post_6.jpg" class="item-wrap fancybox">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="images/post_6.jpg">
        </a>
      </div>

      <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="images/post_2.jpg" class="item-wrap fancybox">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="images/post_7.jpg">
        </a>
      </div>

      <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="images/post_3.jpg" class="item-wrap fancybox">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="images/post_8.jpg">
        </a>
      </div>

      <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="images/post_4.jpg" class="item-wrap fancybox">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="images/post_9.jpg">
        </a>
      </div>

      <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="images/post_6.jpg" class="item-wrap fancybox">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="images/post_6.jpg">
        </a>
      </div>

      
    </div>
  </div>

</section>


<section class="site-section" id="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-5 position-relative">
        <h2 class="section-title text-center mb-5">Contact us</h2>
      </div>
    </div>
    <form action="#" class="form">
      <div class="row mb-4">
        <div class="form-group col-6">
          <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="form-group col-6">
          <input type="text" class="form-control" placeholder="Last name">
        </div>
      </div>

      <div class="row mb-4">
        <div class="form-group col-12">
          <input type="email" class="form-control" placeholder="Email address">
        </div>
      </div>

      <div class="row mb-4">
        <div class="form-group col-12">
          <input type="text" class="form-control" placeholder="Subject of the message">
        </div>
      </div>

      <div class="row mb-4">
        <div class="form-group col-12">
          <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Type your message here.."></textarea>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <input type="submit" class="btn btn-primary" value="Send Message">
        </div>
      </div>
      
    </form>
  </div>
</section>

<footer class="site-section bg-light footer">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-3">
        <h3 class="footer-title">story club Address</h3>
        <p><span class="d-inline-block d-md-block"><!--safi maroc--></span> safi, morroco</p>
      </div>
      <div class="col-md-5 mx-auto">
        <div class="row">
          <div class="col-lg-4">
            <h3 class="footer-title">Services</h3>
            <ul class="list-unstyled">
              <li><a href="#">film maker</a></li>
              <li><a href="#">cover book</a></li>
              <li><a href="#">photo editing</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h3 class="footer-title"></h3>
            <ul class="list-unstyled">
              <li><a href="#">stop motion</a></li>
              <li><a href="#">motions graphics</a></li>
              <li><a href="#">Branding</a></li>
            </ul>
          </div>
        
        </div>
      </div>
      <div class="col-md-3">
        <h3 class="footer-title">Follow us</h3>
        <a href="#" class="social-circle"><span class="icon-twitter"></span></a>
        <a href="#" class="social-circle"><span class="icon-facebook"></span></a>
        <a href="#" class="social-circle"><span class="icon-instagram"></span></a>
        <a href="#" class="social-circle"><span class="icon-dribbble"></span></a>
        <a href="#" class="social-circle"><span class="icon-linkedin"></span></a>
      </div>
    </div>

    <div class="row">
      <div class="col-12 text-center">
      <p>
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | STORY CLUB
       
        </p>
        </div>
    </div>
  </div>
</footer>

</div>
@endsection
