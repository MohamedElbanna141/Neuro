@extends('layouts.parent') 
 
@section('title', 'Home') 
 
@section('content')  


<!-- start the search -->
    <section id="search">
        <form action="" method="post" id="form" style="display: block; margin: auto;">
            <select id="category" name="category">
                <option value="category">category</option>
                <option value="hospitals">hospitals</option>
                <option value="labs">labs</option>
                <option value="doctors">doctors</option>
                <option value="pharmacies">pharmacies</option>
              </select>

            
              <select id="specialty" name="specialty">
                <option value="specialty">specialty</option>
                <option value="hospitals">hospitals</option>
                <option value="labs">labs</option>
                <option value="doctors">doctors</option>
                <option value="pharmacies">pharmacies</option>
              </select>

              <input type="text" name="name" id="name" placeholder="Name">

              <select id="visiting" name="visiting">
                <option value="visiting fee">visiting fee</option>
                <option value="hospitals">hospitals</option>
                <option value="labs">labs</option>
                <option value="doctors">doctors</option>
                <option value="pharmacies">pharmacies</option>
              </select>

              <input type="submit" value=" &#xf002; search" style="font-family: FontAwesome;" name="sear" id="sear">
        </form>

    </section> 
    <!-- end the search -->


    <!-- start the services -->
    <section id="services">
        <h3 data-aos="fade-up">Our Services</h3>
        <h5 data-aos="fade-up">Experienced in multiple <br>medical fields</h5>

        <div class="row  pe-md-5  pe-sm-5  mt-5 mb-5 gap-4" data-aos="fade-up">
            <div class="col-xxl col-xl col-lg col-md col-sm-5 mb-3" >
                <a href="{{route('hospital')}}">
                    <img src="{{asset('Images/home/hospital.png')}}" class="bg-secondary bg-opacity-25 rounded-top" width="100%" alt="">
                </a>
                <h6 class="text-center pb-3 pt-2 bg-secondary bg-opacity-25 rounded-bottom shadow">Hospitals</h6>
            </div>
            <div class="col-xxl col-xl col-lg col-md col-sm-5 mb-3">
                <a href="{{route('pharmacy')}}">
                    <img src="{{asset('Images/home/pharmacy.png')}}" class="bg-secondary bg-opacity-25 rounded-top " width="100%" alt="">
                </a>
                <h6 class="text-center pb-3 pt-2 bg-secondary bg-opacity-25 rounded-bottom shadow">Pharmacies</h6>
            </div>
            <div class="col-xxl col-xl col-lg col-md col-sm-5 mb-3">
                <a href="{{route('doctspecialize')}}">
                    <img src="{{asset('Images/home/doctors.png')}}" class="bg-secondary bg-opacity-25 rounded-top" width="100%" alt="">
                </a>
                <h6 class="text-center pb-3 pt-2 bg-secondary bg-opacity-25 rounded-bottom shadow">Doctors</h6>
            </div>
            <div class="col-xxl col-xl col-lg col-md col-sm-5 mb-3">
                <a href="{{route('lab')}}">
                    <img src="{{asset('Images/home/labo.png')}}" class="bg-secondary bg-opacity-25 rounded-top" width="100%" alt="">
                </a>
                <h6 class="text-center pb-3 pt-2 bg-secondary bg-opacity-25 rounded-bottom shadow">Laboratories</h6>
            </div>
          </div>
    </section>
    <!-- end the services -->


    <!-- start the video -->
    <section id="video" data-aos="fade-up">
        <h6 class="text-center pt-1 pb-5">Watch video to learn how to  <br><br>
            deal with emergencies</h6>
        <div class="">
            <video src="{{asset('Images/home/الأغماء.mp4')}}" controls></video>   
        </div>
    </section>
    <!-- end the video -->


   <!-- start the offer -->
   <section id="offer" >
    <div class="offer text-center pb-5 pt-5" data-aos="fade-up">
        <h3>Top offers</h3>
    </div>
    
    <div class="slide-container swiper" data-aos="fade-up">
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
  
  
            <div class="card swiper-slide">    
              <nav id="slide_img">
                <img src="{{asset('Images/home/offer1.png')}}" alt="">
                <a href="pharm.html">sally</a>
              </nav> 
  
              <nav id="slide_content">
                <h6>Cerave</h6>
                <p><del class="text-secondary">700 EGP</del>  574 EGP</p>
              </nav>
            </div>
  
            <div class="card swiper-slide">  
              <nav id="slide_img">
                <img src="{{asset('Images/home/offer2.png')}}" alt="">
                <a href="pharm.html">sally</a>
              </nav> 
  
              <nav id="slide_content">
                <h6>vichy</h6>
                <p><del class="text-secondary">700 EGP</del>  329 EGP</p>
              </nav>
            </div>
  
            <div class="card swiper-slide">
              <nav id="slide_img">
                <img src="{{asset('Images/home/offer1.png')}}" alt="">
                <a href="pharm.html">sally</a>
              </nav> 
  
              <nav id="slide_content">
                <h6>Cerave</h6>
                <p><del class="text-secondary">700 EGP</del>  574 EGP</p>
              </nav>
            </div>
  
            <div class="card swiper-slide">
              <nav id="slide_img">
                <img src="{{asset('Images/home/offer3.png')}}" alt="">
                <a href="pharm.html">sally</a>
              </nav> 
  
              <nav id="slide_content">
                <h6>weleda</h6>
                <p><del class="text-secondary">700 EGP</del>  400 EGP</p>
              </nav>
            </div>
  
  
            <div class="card swiper-slide">
              <nav id="slide_img">
                <img src="{{asset('Images/home/offer4.png')}}" alt="">
                <a href="pharm.html">sally</a>
              </nav> 
  
              <nav id="slide_content">
                <h6>glow</h6>
                <p><del class="text-secondary">700 EGP</del>  150 EGP</p>
              </nav>
            </div>
  
  
            <div class="card swiper-slide">
              <nav id="slide_img">
                <img src="{{asset('Images/home/offer2.png')}}" alt="">
                <a href="pharm.html">sally</a>
              </nav> 
  
              <nav id="slide_content">
                <h6>vichy</h6>
                <p><del class="text-secondary">700 EGP</del>  329 EGP</p>
              </nav>
            </div>
  
  
            <div class="card swiper-slide">
              <nav id="slide_img">
                <img src="{{asset('Images/home/offer1.png')}}" alt="">
                <a href="pharm.html">sally</a>
              </nav> 
  
              <nav id="slide_content">
                <h6>Cerave</h6>
                <p><del class="text-secondary">700 EGP</del>  574 EGP</p>
              </nav>
            </div>
  
  
            <div class="card swiper-slide">
              <nav id="slide_img">
                <img src="{{asset('Images/home/offer3.png')}}" alt="">
                <a href="pharm.html">sally</a>
              </nav> 
  
              <nav id="slide_content">
                <h6>weleda</h6>
                <p><del class="text-secondary">700 EGP</del>  500 EGP</p>
              </nav>
            </div>
  
  
            <!-- <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
  
                <div class="card-image">
                  <img src="{{asset('Images/profile9.jpg')}}" alt="" class="card-img" />
                </div>
              </div>
  
              <div class="card-content">
                <h2 class="name">David Dell</h2>
                <p class="description">
                  The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing
                  elit.
                </p>
  
                <button class="button">View More</button>
              </div>
            </div> -->
  
  
          </div>
        </div>
  
  
  
  
  
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
      </div>

   </section>
   <!-- end the offer -->

    <!-- start the doctors -->
    <section id="doctor">
        <nav class="head_doc">
            <h3 data-aos="fade-up">Top Doctors</h3>
            <h6 data-aos="fade-up">Meet our consultants & medical <br> specialist</h6>
        </nav><!-- end the header -->

        <div class="docs d-xxl-flex d-xl-flex d-lg-flex d-md-flex mt-5" data-aos="fade-up">
            <nav class="nav1">
                <nav class="nav2">
                    <nav class="nav3">
                        <img src="{{asset('Images/home/team1.png')}}"  alt="">
                    </nav>
                </nav>
            </nav>

            <nav class="nav1">
                <nav class="nav2">
                    <nav class="nav3">
                        <img src="{{asset('Images/home/team2.png')}}" alt="">
                    </nav>
                </nav>
            </nav>

            <nav class="nav1">
                <nav class="nav2">
                    <nav class="nav3">
                        <img src="{{asset('Images/home/team3.png')}}" alt="">
                    </nav>
                </nav>
            </nav>
        </div>

        <a href="doctors.html">View All <i class="fas fa-solid fa-angle-right "></i></a>
    </section>
    <!-- end the doctors -->


    <!-- start the ques ??? -->
    <section id="ques" class="mt-5 mb-5">
        <h3 class="mt-5" data-aos="fade-up">FAQ</h3>
        <h6 data-aos="fade-up">Frequently Asked Questions</h6>
        <div class="row mt-5">
            <!-- left part -->
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6  left" data-aos="fade-right">
                <nav class="img position-relative">
                    <img src="{{asset('Images/home/team2.png')}}" alt="">
                    <div class="circ"></div>
                    <div class="qu">?</div>

                </nav>
            </div>

            <!-- right part -->
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-4  right" data-aos="fade-left">

                <button class="accordion">Will I always see my doctor?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>

                <button class="accordion">What is one medical care?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>

                <button class="accordion">What is evidence based medicine?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <button class="accordion">What is an academic medical center?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div><!-- end the right -->

        </div>

    </section>
    <!-- end the ques -->
@endsection