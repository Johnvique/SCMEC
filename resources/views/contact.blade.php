@extends('layouts.body')
@section('body')
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h2 class="mb-0">Contact</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
      </div>
    </div>
  </div> 


<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="index.html">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Contact</span>
  </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" class="form-control form-control-lg">
            </div>
            <div class="col-md-6 form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" class="form-control form-control-lg">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="eaddress">Email Address</label>
                <input type="text" id="eaddress" class="form-control form-control-lg">
            </div>
            <div class="col-md-6 form-group">
                <label for="tel">Tel. Number</label>
                <input type="text" id="tel" class="form-control form-control-lg">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="message">Message</label>
                <textarea name="" id="message" cols="20" rows="5" class="form-control"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <input type="submit" value="Send Message" class="btn btn-warning btn-lg px-5">
            </div>
        </div>
    </div>
</div>

<div class="map-section text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="card-header bg-secondary text-warning"><h4>School Location</h4></div>
              <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63834.27013501617!2d34.41374927042015!3d-0.5388369703489417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d4d4f7c523ddff%3A0xc3d6a7b3371a3e11!2sHoma%20Bay!5e0!3m2!1sen!2ske!4v1574498444820!5m2!1sen!2ske" 
                width="500" height="250" frameborder="0" style="border:0;"></iframe>
              </p>
          </div>
        </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="card-header bg-secondary text-warning"><h4>Contact Adress</h4></div>
          <p><span>Address :</span> St.Charles Mutego Educational Centre, <br> P.O Box 34161-00100, <br> Nairobi-Kenya.
          </p>
          <p>Call :<a href="{{url('tel:+254722373747')}}" class="small mr-3">
            <span class="icon-phone2 mr-2"></span> +254722373747</a>
            <a href="{{url('tel:+254722373747')}}" class="small mr-3">
              <span class="icon-phone2 mr-2"></span> +254722373747</a></p>
          <p>Email :<a href="{{url('mailto:charlesmutego@yahoo.com')}}" class="small mr-3"><span class="icon-envelope-o mr-2">
            </span> charlesmutego@yahoo.com</a></p>
        </div>
      </div>
    </div> 
    </div>
  </div>
</div>
 
@endsection