@extends('layouts.body')
@section('body')
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h2 class="mb-0">Girls' School</h2>
        <p>Located In Mombasa.</p>
      </div>
    </div>
  </div>
</div> 


<div class="custom-breadcrumns border-bottom">
<div class="container">
<a href="{{url('/')}}">Home</a>
  <span class="mx-3 icon-keyboard_arrow_right"></span>
  <span class="current" style="color: #D2691E">Secondary School</span>
</div>
</div>

<div class="news-updates">
    <div class="container">
       
      <div class="row">
        <div class="col-lg-9">
           <div class="section-heading">
            <h3 class="text-black">Secondary Girls School</h3>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="post-entry-big">
                <a href="news-single.html" class="img-link"><img src="images/about1.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content">
                  <div class="post-meta"> 
                    <a href="#">June 6, 2019</a>
                    <span class="mx-1">/</span>
                    <a href="#">Admission</a>, <a href="#">Updates</a>
                  </div>
                  <h3 class="post-heading"><a href="news-single.html">Our Learning Session</a></h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="post-entry-big horizontal d-flex mb-4">
                <a href="news-single.html" class="img-link mr-4"><img src="images/about2.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content">
                  <div class="post-meta">
                    <a href="#">June 6, 2019</a>
                    <span class="mx-1">/</span>
                    <a href="#">Admission</a>, <a href="#">Updates</a>
                  </div>
                  <h3 class="post-heading"><a href="news-single.html">Group Disussion</a></h3>
                </div>
              </div>

              <div class="post-entry-big horizontal d-flex mb-4">
                <a href="news-single.html" class="img-link mr-4"><img src="images/about1.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content">
                  <div class="post-meta">
                    <a href="#">June 6, 2019</a>
                    <span class="mx-1">/</span>
                    <a href="#">Admission</a>, <a href="#">Updates</a>
                  </div>
                  <h3 class="post-heading"><a href="news-single.html">Class Meeting</a></h3>
                </div>
              </div>

              <div class="post-entry-big horizontal d-flex mb-4">
                <a href="news-single.html" class="img-link mr-4"><img src="images/about2.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content">
                  <div class="post-meta">
                    <a href="#">June 6, 2019</a>
                    <span class="mx-1">/</span>
                    <a href="#">Admission</a>, <a href="#">Updates</a>
                  </div>
                  <h3 class="post-heading"><a href="news-single.html">Student Learning</a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="section-heading">
          </div>
          <a href="#" class="image mb-4" data-fancybox="" data-ratio="2">
            <img src="images/about1.jpg" alt="Image" class="img-fluid">
          </a>
          <a href="#" class="image mb-4" data-fancybox="" data-ratio="2">
              <img src="images/about2.jpg" alt="Image" class="img-fluid">
            </a>
        </div>
      </div>
    </div>
  </div>
@endsection