@extends('layout.app')

@section('hr')
<hr class="nav_border">
@endsection

@section('content_home')
<section class="Home_content heading_first d-flex flex-column justify-content-left align-items-center pt-7">
<h1 class="heading_light">Together we create a </h1>
<h1 class="heading_blod heading_blod_1">Peaceful & Harmonious </h1>
<h1 class="heading_blod heading_blod_2">CyberSpace</h1>
<p class="join_para1"> Join Cyber Peace Corps Today!</p>
{{-- <button class="btn btn-primary"> Join us</button> --}}
<p class="mt-2">
    <a class="register_button join_us_button rounded mt-4" href="#">Join Us</a>
</p>
</section>
@endsection

{{-- @section('hr_home')
<hr>
@endsection --}}

@section('content_about')
<section class="about">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-6 p-2 about_left">
        <img src="https://res.cloudinary.com/aarav/image/upload/v1545718983/stat_d0j0sz.png" class="img-responsive">
        </div>

        <div class="col-md-6 about_right">
            <h1 class="mb-2 dark_blue heading_light"> Why Cyber Peace Corps? </h1>
            <p> Cyber Peace Corps is envisioned to be a coalition of citizens, volunteers, experts who come together for the cause of cyber peace across the world. 
                    The world needs the internet to be peaceful, trustworthy and safe enough for its users. Unfortunately, various short comings in technology, law, awareness 
                    and international co operation have been widening the gap altogether and there is no answer to the growing cyber threats to nations today.</p>

            <div>
                <img src="https://res.cloudinary.com/aarav/image/upload/v1545718983/stat_2_qk8lkf.png" class="img-responsive" width="100%">
            </div>
        </div>

    </div>
    </div>
</section>
{{-- img link
https://res.cloudinary.com/aarav/image/upload/v1545718983/stat_2_qk8lkf.png
https://res.cloudinary.com/aarav/image/upload/v1545718983/stat_d0j0sz.png --}}
@endsection

@section('hr_about')
<hr>
@endsection

@section('3Dcarousel')
<div id="swiper-container1">
<div id="swiper-container2">
<div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide d-flex justify-content-center align-items-center pl-3 pr-3 pt-4 pb-4 mt-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="image d-flex justify-content-center mb-0">
                            <div class="image-circle">
                            </div>
                        </div>
                        <div class="row january-text d-flex justify-content-center mb-5">
                            <p class="text-center">JANUARY</p>
                            
                            
                        </div>
                        <div class="row d-flex justify-content-center cyber-peace-corps">
                        <h6 class="m-0 mt-4">CYBER PEACE CORPS</h6>
                            <p class="mt-0 mb-3 m-0">of the month</p>
                            <button class="btn m-0 pl-0 pr-0">Rohit Sharma</button>
                            <h4 class="mt-2">Kolkata Chapter</h4>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
                <h5><a href="#">February</a></h5>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
            <h5>March</h5>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
            <h5>April</h5>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
            <h5>May</h5>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
            <h5>June</h5>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
            <h5>July</h5>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
            <h5>August</h5>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
            <h5>September</h5>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
            <h5>October</h5>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
            <h5>November</h5>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
                <h5><a href="#">December</a></h5>
            </div>


        </div>
        
    </div>
    <div class="swiper-button-next slide-arrow"></div>
    <div class="swiper-button-prev slide-arrow"></div>
</div>
</div>
@endsection

@section('hr_3Dcarousel')
<hr>
@endsection

@section('Get_involve')
    <div class="Involve_head_section">
        <div class="container ">
           <div class="row mb-2">
              <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                 <h1 class="display-4 dark_blue"> Get Involved </h1>
                 <p class="px-30 text-center lh get_para"> Play a powerful role in helping your local community be safer and 
                 more secure online. Commit 16 Hours a month to the cause 
                 and become a cyber peace corps 
                 </p>
              </div>
          </div>
        </div>
  </div>
  <div class="container get-involved-container mt-5 mb-5">
            <!--            main row-->
            <div class="row">
                <!--                 News coloumn-->
                <div class="col-md-4 col-sm-12 col-12 mb-3">
                    
                    <div class="row d-sm-flex justify-content-sm-center">
                        <div class="col-md-12 col-sm-10 col-12 news-col pt-3 pl-4 pr-4 pb-3">
                            
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-12 text-center mb-4">
                                    <h3>News</h3>
                                </div>
                            </div>
                            
                            <div class="row box-row">
                                <div class="col-md-4 col-sm-4 col-4 news-box-div">
                                    <div class="news-box ml-0 mr-md-3">
                                       <img src="https://res.cloudinary.com/aarav/image/upload/v1549273939/1.1_fdvxin.png" width="100%" height="100%">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-8 pl-2 right-box">
                                    
                                    <h5 class="mb-2 mt-0">Plugging Gaps</h5>
                                    <p>Start-ups step in to plug gaps in India's cyber security Shield.</p>
                                    <hr class="mt-3">
                                    
                                </div>
                            </div>
                            <div class="row box-row">
                                <div class="col-md-4 col-sm-4 col-4 news-box-div">
                                    <div class="news-box">
                                    <img src="https://res.cloudinary.com/aarav/image/upload/v1549273939/1.2_j6hrml.png" width="100%" height="100%">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-8 pl-2">
                                    
                                    <h5 class="mb-2 mt-0">Fighting Fake</h5>
                                    <p>Jayalakshmi from CPF interview live on BBC News with Matthew Amroliwala.</p>
                                    <hr class="mt-3">
                                    
                                </div>
                            </div>
                            
                           
                            <div class="col-md-12 text-center">
                             <button type="button" class="btn btn-light ">Read more</button>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    
                
                
<!--                 Events-->
                
<div class="col-md-4 col-sm-12 col-12 mb-3">
                    
                    <div class="row d-sm-flex justify-content-sm-center">
                        <div class="col-md-12 col-sm-10 col-12 news-col pt-3 pl-4 pr-4 pb-3 ml-1">
                            
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-12 text-center mb-4">
                                    <h3>Events</h3>
                                </div>
                            </div>
                            
                            <div class="row box-row">
                                <div class="col-md-4 col-sm-4 col-4 news-box-div">
                                    <div class="news-box">
                                    <img src="https://res.cloudinary.com/aarav/image/upload/v1549273939/2.1_kshefp.png" width="100%" height="100%">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-8 pl-2">
                                    
                                    <h5 class="mb-2 mt-0">Safer Internet Day</h5>
                                    <p>Awareness is the key to stay safe and make the most of the internet.</p>
                                    <hr class="mt-3">
                                    
                                </div>
                            </div>
                            <div class="row box-row">
                                <div class="col-md-4 col-sm-4 col-4 news-box-div">
                                    <div class="news-box">
                                    <img src="https://res.cloudinary.com/aarav/image/upload/v1549273939/2.2_qj2nbb.png" width="100%" height="100%">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-8 pl-2">
                                    
                                    <h5 class="mb-2 mt-0">GCC</h5>
                                    <p>Hosted across different nations and educational institutions.</p>
                                    <hr class="mt-3">
                                    
                                </div>
                            </div>
                           
                            
                            
                            <div class="col-md-12 text-center">
                             <button type="button" class="btn btn-light ">Read more</button>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                
<!--                Blogs-->
                
<div class="col-md-4 col-sm-12 col-12 mb-3">
                    
                    <div class="row d-sm-flex justify-content-sm-center">
                        <div class="col-md-12 col-sm-10 col-12 news-col pt-3 pl-4 pr-4 pb-3 ml-2">
                            
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-12 text-center mb-4">
                                    <h3>Blogs</h3>
                                </div>
                            </div>
                            
                            <div class="row box-row">
                                <div class="col-md-4 col-sm-4 col-4 news-box-div">
                                    <div class="news-box">
                                    <img src="https://res.cloudinary.com/aarav/image/upload/v1549273939/3.1_bnhgwu.png" width="100%" height="100%">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-8 pl-2">
                                    
                                    <h5 class="mb-2 mt-0">Dark Web and Drugs</h5>
                                    <p>The dark web has become a major source of illicit drugs.</p>
                                    <hr class="mt-3">
                                    
                                </div>
                            </div>
                            <div class="row box-row">
                                <div class="col-md-4 col-sm-4 col-4 news-box-div">
                                    <div class="news-box">
                                    <img src="https://res.cloudinary.com/aarav/image/upload/v1549273939/3.2_jvp5tf.png" width="100%" height="100%">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-8 pl-2">
                                    
                                    <h5 class="mb-2 mt-0">Women and Cyber Safety</h5>
                                    <p>Online Resilience, women and Cyber Safety.</p>
                                    <hr class="mt-3">
                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-md-12 text-center">
                             <button type="button" class="btn btn-light ">Read more</button>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                
                
                
            </div>
        </div>
@endsection

@section('hr_involve')
<hr>
@endsection


@section('Subscribe')
<div class="subscribe">
  <div class="container mt-0 mb-0">
    <div class="row">
      <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
            <h1 class="display-4 dark_blue mt-5">Subscribe</h1>
           <p class="text-center mb-3">Sign up with your email address to recieve news and update 
           </p>
      </div>
 </div>
  <div class="row subscribe-row-name align-items-center">
      <div class="col-md-4">
         <form>
             <div class="form-group">
                        
                    <input type="text" class="form-control" placeholder="First Name">
             </div>
         </form>
      </div>
      <div class="col-md-4">
        <form>
                <div class="form-group">
                        
                        <input type="text" class="form-control" placeholder="Last Name">
                      </div>
        </form>
      </div>
      <div class="col-md-4">
            <form>
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                 </div>
             </form>
      </div>
  </div>
  <div class="row subscribe-row-button">
        <div class="col-md-12 d-flex justify-content-center align-items-center mb-2 mt-3">
            
                <a class="register_button subscribe_button rounded" href="#">Sign Up</a>
            
        </div>  
  </div>
 </div>
</div>    
@endsection


@section('footer')

@endsection
