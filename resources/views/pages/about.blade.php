@extends('layouts.app')

@section('content')
    <h1><?php echo $title; ?></h1>
    <div class="container">
        <div class="row ">
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
          </div>
        </div>
      </div>
      
      <section class="site-section" id="contact-section">
        <div class="container">
          <div class="row">
            <div class="col-12 mb-5 position-relative">
              <h2 class="section-title text-center mb-5">Contact us</h2>
            </div>
          </div>
          <form action="#" class="form" method="POST">
            
            <div class="row mb-4">
              <div class="form-group col-6">
                <input type="text" class="form-control" name="name" placeholder="First name">
              </div>
              <div class="form-group col-6">
                <input type="text" class="form-control" name="lastname" placeholder="Last name">
              </div>
            </div>
      
            <div class="row mb-4">
              <div class="form-group col-12">
                <input type="email" class="form-control" name="email" placeholder="Email address">
              </div>
            </div>
      
            <div class="row mb-4">
              <div class="form-group col-12">
                <input type="text" class="form-control" name="Subject" placeholder="Subject of the message">
              </div>
            </div>
      
            <div class="row mb-4">
              <div class="form-group col-12">
                <textarea name="" id="" cols="30" rows="10" class="form-control" name="message" placeholder="Type your message here.."></textarea>
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
@endsection