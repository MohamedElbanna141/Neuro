@extends('layouts.parent') 
 
@section('title', 'Doctors')  
@section('css')   
  
     <link rel="stylesheet" href="{{asset('css/doctors.css')}}">
@endsection
 
@section('content')     
   <!-- start the search -->
    <section id="search">
        <form action="" method="post" id="form" style="display: block; margin: auto;">
            <select id="category" name="category">
                <option value="category" class="pt-3">category</option>
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

              <input type="text" name="name" id="name" placeholder="Name" value="">

              <select id="visiting" name="visiting">
                <option value="visiting fee">visiting fee</option>
                <option value="hospitals">hospitals</option>
                <option value="labs">labs</option>
                <option value="doctors">doctors</option>
                <option value="pharmacies">pharmacies</option>
              </select>

              <input type="submit" value="search" name="sear" id="sear" placeholder="#61442;">
        </form>

    </section> 
    <!-- end the search -->
    <!-- start the content -->
      <!-- start the doctors -->
    <section id="doctors">
        <nav class="head_doc">
            <h3 data-aos="fade-up">Top Doctors</h3>
            <h6 data-aos="fade-up">Meet our consultants & medical <br> specialist</h6>
        </nav><!-- end the header -->

        <div class="doc_content">
            <div class="docs1 d-xxl-flex d-xl-flex d-lg-flex d-md-flex mt-5">
              
              <div class="doc1" data-aos="fade-up">
                <nav class="nav1">
                  <nav class="nav2">
                      <nav class="nav3">
                        <a href="{{route('docsdetail')}}">
                          <img src="{{asset('Images/home/team1.png')}}"  alt="">
                        </a>
                      </nav>
                  </nav>
                </nav>
                <h6>Dr.Islam Mohamed</h6>
                <nav class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="fas fa-star-half-alt"></i>
                </nav>
              </div>

              <div class="doc1" data-aos="fade-up">
                <nav class="nav1">
                  <nav class="nav2">
                      <nav class="nav3">
                        <a href="{{route('docsdetail')}}">
                          <img src="{{asset('Images/home/team2.png')}}"  alt="">
                        </a>
                      </nav>
                  </nav>
                </nav>
                <h6>Dr.shad Mohamed</h6>
                <nav class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="fas fa-star-half-alt"></i>
                </nav>
              </div>

              <div class="doc1" data-aos="fade-up">
                <nav class="nav1">
                  <nav class="nav2">
                      <nav class="nav3">
                          <a href="{{route('docsdetail')}}">
                            <img src="{{asset('Images/home/team3.png')}}"  alt="">
                          </a>
                      </nav>
                  </nav>
                </nav>
                <h6>Dr.Mohamed fathy</h6>
                <nav class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="fas fa-star-half-alt"></i>
                </nav>
              </div>

            </div>

            <div class="docs1 d-xxl-flex d-xl-flex d-lg-flex d-md-flex mt-5">
              
              <div class="doc1" data-aos="fade-up">
                <nav class="nav1">
                  <nav class="nav2">
                      <nav class="nav3">
                        <a href="{{route('docsdetail')}}">
                          <img src="{{asset('Images/home/team1.png')}}"  alt="">
                        </a>
                      </nav>
                  </nav>
                </nav>
                <h6>Dr.Islam Mohamed</h6>
                <nav class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </nav>
              </div>

              <div class="doc1" data-aos="fade-up">
                <nav class="nav1">
                  <nav class="nav2">
                      <nav class="nav3">
                        <a href="{{route('docsdetail')}}">
                          <img src="{{asset('Images/home/team2.png')}}"  alt="">
                        </a>
                      </nav>
                  </nav>
                </nav>
                <h6>Dr.shad Mohamed</h6>
                <nav class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="fas fa-star-half-alt"></i>
                </nav>
              </div>

              <div class="doc1" data-aos="fade-up">
                <nav class="nav1">
                  <nav class="nav2">
                      <nav class="nav3">
                          <a href="{{route('docsdetail')}}">
                            <img src="{{asset('Images/home/team1.png')}}"  alt="">
                          </a>
                      </nav>
                  </nav>
                </nav>
                <h6>Dr.Mohamed fathy</h6>
                <nav class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="fas fa-star-half-alt"></i>
                </nav>
              </div>

            </div>

            <div class="docs1 d-xxl-flex d-xl-flex d-lg-flex d-md-flex mt-5">
              
              <div class="doc1" data-aos="fade-up">
                <nav class="nav1">
                  <nav class="nav2">
                      <nav class="nav3">
                        <a href="{{route('docsdetail')}}">
                          <img src="{{asset('Images/home/team1.png')}}"  alt="">
                        </a>
                      </nav>
                  </nav>
                </nav>
                <h6>Dr.Islam Mohamed</h6>
                <nav class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="fas fa-star-half-alt"></i>
                </nav>
              </div>

              <div class="doc1" data-aos="fade-up">
                <nav class="nav1">
                  <nav class="nav2">
                      <nav class="nav3">
                        <a href="{{route('docsdetail')}}">
                          <img src="{{asset('Images/home/team2.png')}}"  alt="">
                        </a>
                      </nav>
                  </nav>
                </nav>
                <h6>Dr.shad Mohamed</h6>
                <nav class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="fas fa-star-half-alt"></i>
                </nav>
              </div>

              <div class="doc1" data-aos="fade-up">
                <nav class="nav1">
                  <nav class="nav2">
                      <nav class="nav3">
                          <a href="{{route('docsdetail')}}">
                            <img src="{{asset('Images/home/team1.png')}}"  alt="">
                          </a>
                      </nav>
                  </nav>
                </nav>
                <h6>Dr.Mohamed fathy</h6>
                <nav class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="fas fa-star-half-alt"></i>
                </nav>
              </div>

            </div>
        </div>

    </section>
    <!-- end the doctors -->
    <!-- end the content --> 
 @endsection  