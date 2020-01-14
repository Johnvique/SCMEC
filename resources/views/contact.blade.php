@extends('layouts.body')
@section('body')
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h2 class="mb-0">Contact</h2>
          <p>For any inquiries,consultations and concern,please talk to us today.</p>
        </div>
      </div>
    </div>
  </div> 


<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="index.html">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current" style="color: #D2691E">Contact</span>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-secondary text-warning"><h4>Contact Form</h4></div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" id="username" class="form-control form-control-lg">
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control form-control-lg">
              </div>
              <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="phone" id="phone" class="form-control form-control-lg">
              </div>
              <div class="form-group">
                  <label for="location">Location</label>
                  <input type="location" id="location" class="form-control form-control-lg">
              </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="8" rows="3" class="form-control"></textarea>
                </div>
                  <input type="submit" value="Send Message" class="btn btn-warning btn-lg px-5">
              </form>
            </div>
        </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-header bg-secondary text-warning"><h4>School Location.</h4></div>
        <div class="card-body">
          <p>St. Charles Mutego Educational Centre is located off Ngong' Road, next to Lenana School,800 metres
            from Lenana School Gate. From Nairobi Railways Station, take a Nissan/Minibus/Citi Hoppa No.111 then alight
            at Lenana Stage Junction.
          </p>
          <p>From Mombasa-Malindi Road, you alight at shanzu T.T.C and take a bodaboda via Maitha Road to Majaoni
            msikitini then to the end of the Cabro Road. For more inquiries concerning the direction,kindly follow the
            below indicated google map.
          </p>
        </div>
    </div>
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
            <div class="card-header bg-secondary text-warning"><h4>Map Direction.</h4></div>
              <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.414287156982!2d36.6804484!3d-1.4138889!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdac3db9fcf7333f5!2sSt.%20Charles%20Mutego%20Education%20Center%20Secondary%20School!5e0!3m2!1sen!2ske!4v1577804706824!5m2!1sen!2ske" width="500" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
          <p>Call :<a href="{{url('tel:+254782237374')}}" class="small mr-3">
            <span style="color:#D2691E" class="icon-phone2 mr-2"></span> <span style="color:#D2691E">+254782237374</span></a>
            <a href="{{url('tel:+254722373747')}}" class="small mr-3">
              <span style="color:#D2691E" class="icon-phone2 mr-2"></span> <span style="color:#D2691E">+254722373747</span></a></p>
          <p>Email :<a href="{{url('mailto:charlesmutego@yahoo.com')}}" class="small mr-3"><span style="color:#D2691E" class="icon-envelope-o mr-2">
            </span> <span style="color:#D2691E">charlesmutego@yahoo.com</span></a></p>
        </div>
      </div>
    </div> 
    </div>
  </div>
</div>
 
@endsection