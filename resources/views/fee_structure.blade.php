@extends('layouts.body')
@section('body')
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h2 class="mb-0">Fee Payment</h2>
        <p>Fee structure schedule for the year 2020.</p>
      </div>
    </div>
  </div>
</div> 


<div class="custom-breadcrumns border-bottom">
<div class="container">
<a href="{{url('/')}}">Home</a>
  <span class="mx-3 icon-keyboard_arrow_right"></span>
  <span class="current" style="color:#D2691E">Fee Structure.</span>
</div>
</div>

<div class="row mb-3 justify-content-center text-center">
    <div class="col-lg-6 mb-3">
          <div class="card-body">
            <div class="card-header text-warning bg-secondary text-center">
              Fee Payment Details and Accounts.</div>
            <p>Kindly note the following Bank Payment Methods and procedure.</p>
            <span style="color:#D2691E">Account Number: 01100081115500<br></span>
            <p>Account Name: St. Charles Mutego Educational center<br>
              Bank Name: Co-operative Bank Branch, Kawangware.</p>
              
               <span style="color:#D2691E">Account Number: 1204512973</span><br>
                <p>Account Name: St. Charles Mutego Educational center<br>
                Bank Name: KCB Bank Branch, Mtwapa</p>
                <span style="color:#D2691E">Paybill Number</span><br>
                <p>Nairobi: 671435<br>
                Mombasa: 671432<br>
                Account Number: St. Charles.</p> 
          </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
        <div class="owl-slide-3 owl-carousel">
            <div class="course-1-item">
              <figure class="thumnail">
                <div class="card">
                    <div class="card-body">
                      <div class="card-header text-warning bg-secondary text-center">Primary/Secondary Girls.</div>
                      <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                              <tr>
                                  <th>1st Term</th>
                                  <th>2nd Term</th>
                                  <th>3rd Term</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>ksh.7,500</td>
                              <td>ksh.7,500</td>
                              <td>ksh.7,500</td>
                            </tr>
                          </tbody>
                      </table>
                      </div>
                    </div>
                </div> 
              </figure>
              <div class="course-1-content pb-4">
                <h2>Total ksh.22,500</h2>
              </div>
            </div>

            <div class="course-1-item">
              <figure class="thumnail">
              <div class="card">
                  <div class="card-body">
                    <div class="card-header text-warning bg-secondary text-center">Secondary Boys School</div>
                    <div class="table-responsive">
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>1st Term</th>
                                <th>2nd Term</th>
                                <th>3rd Term</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>ksh.12,000</td>
                            <td>ksh.12,000</td>
                            <td>ksh.12,000</td>
                          </tr>
                        </tbody>
                    </table>
                    </div>
                  </div>
              </div>
              </figure>
              <div class="course-1-content pb-4">
                <h2>Total ksh.36,000</h2>
              </div>
            </div>

            <div class="course-1-item">
              <figure class="thumnail">
                <div class="card">
                    <div class="card-body">
                      <div class="card-header text-warning bg-secondary text-center">Primary Day</div>
                      <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                              <tr>
                                  <th>1st Term</th>
                                  <th>2nd Term</th>
                                  <th>3rd Term</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Tuition: ksh.1,500</td>
                              <td>Food: ksh.500</td>
                              <td>Transport: ksh.1,500</td>
                            </tr>
                          </tbody>
                      </table>
                      </div>
                    </div>
                </div> 
              </figure>
              <div class="course-1-content pb-4">
                <h2>Total ksh.3,500</h2>
              </div>
            </div>


        </div>

    </div>
  </div>

  <div class="row">
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="card-header text-warning bg-secondary text-center">Other Expenses</div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Primary School</th>
                <th scope="col">Secondary School</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">01</th>
                <td>Admission Fee-ksh. 1,000</td>
                <td>Admission Fee-ksh. 1,000</td>
              </tr>
              <tr>
                <th scope="row">02</th>
                <td>Uniform-ksh. 5,300</td>
                <td>Uniform-ksh. 3,000</td>
              </tr>
              <tr>
                <th scope="row">03</th>
                <td>Advent Melody,Report,Diary & Canteen-ksh.500,400,2000.</td>
                <td>ID/Advent Melody-ksh. 500</td>
              </tr>
              <tr>
                <th scope="row">04</th>
                <td>Socks-ksh. 300 for Girls & ksh.200 for Boys.</td>
                <td>Socks-ksh. 300 for Girls & ksh.200 for Boys.</td>
              </tr>
              <tr>
                <th scope="row">05</th>
                <td>Examination/term-ksh. 500</td>
                <td>Examination/term-ksh. 500</td>
              </tr>
              <tr>
                <th scope="row">06</th>
                <td>Food Adjustment/term-ksh. 3,000</td>
                <td>Food Adjustment/term-ksh. 3,000</td>
              </tr>
              <tr>
                <th scope="row">07</th>
                <td>Ream of photocopying paper/year-ksh.500</td>
                <td>Ream of photocopying paper/year-ksh.500</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection