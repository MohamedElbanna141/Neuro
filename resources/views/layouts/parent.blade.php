<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- icons -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">

     <!-- Swiper CSS -->
     <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" />

    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
    <!-- search icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- animate -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   @yield('css')
</head>
<body> 

    <!-- start the face nav -->
    <section id="face">
        <!-- start the nav -->
        <div id="nav" class="w-75 m-auto m">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                  <img src="{{asset('Images/logo.png')}}"class="navbar-brand mt-2" alt="">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mt-1 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('scan')}}">scan</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('aid')}}">First Aid</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('ins')}}">Instruction</a>
                      </li>
                    </ul>
                    @if (Auth::guest())
                      <a href="{{route('login')}}"><button class="btn me-4 btn1">sign in</button> </a>
                      <a href="{{route('register')}}"><button class="btn btn-outline-success me-2">sign up</button></a>
                    @else
                    <a href="{{route('logout')}}"><button class="btn btn-outline-success me-2"> Loge Out</button> </a>
                    @endif
                      <!-- <form class="d-flex">
                        
                      </form> -->
                   
                  </div>
                </div>
            </nav>
        </div>
        <!-- end the nav -->

        <!-- start the header -->
        <div id="header" class="d-xl-flex d-xxl-flex d-lg-flex d-md-flex w-75 m-auto mt-5">
            <!-- left -->
            <article class="mt-5 pt-5">
                 <h5 class="mb-2">live Long With Health...</h5>
                 <h2>Your Health Life</h2>
                 <h2 class="mb-3">Our First Priority Is</h2>
                 <p>we collected everything you need in one place including
                    hospital, pharmacies, laboratories and doctors, in order to give you the best experience and save your time. </p>
            </article>

            <!-- right -->
            <article>
                  <img src="{{asset('Images/home/pic1.png')}}"  alt="">
            </article>

            <div class="clear"></div>

        </div>
        <!-- end the header 69-->

    </section>
    <!-- end the face -->
    @yield('content')
   

   



    <!-- start the footer -->
    <section id="footer">
        <!-- Footer -->
        <footer class="page-footer font-small blue pt-4">
        
          <!-- Footer Links -->
          <div class="container-fluid text-center text-md-left">
        
            <!-- Grid row -->
            <div class="row">
        
              <!-- Grid column -->
              <div class="col-md-3 mt-md-0 mt-3">
        
                <!-- Content -->
               <img src="{{asset('Images/logo.png')}}" alt="">
               <ul class="list-unstyled">
                <li>
                  <a href="{{route('about')}}" class="d-block text-decoration-none mb-2">About Us</a>
                </li>
                <li>
                  <a href="{{route('team')}}" class="d-block text-decoration-none mb-2">Our Team</a>
                </li>
                <li>
                  <a href="{{route('contact')}}" class="d-block text-decoration-none mb-2">Contact Us</a>
                </li>
              </ul>
        
              </div>
              <!-- Grid column -->
        
              <!-- <hr class="clearfix w-100 d-md-none pb-3"> -->
        
              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">
        
                <!-- content -->
                <h5>Ambulance Number</h5>
        
                <p class="text-center">:123</p>
        
              </div>
              <!-- Grid column -->

               <!-- Grid column -->
               <div class="col-md-3 mb-md-0 mb-3">
        
                <!-- Links -->
                <h5 >Nead Help?</h5>
        
                <ul class="list-unstyled">
                  <li>
                    <a href="{{route('qas')}}" class="d-block text-decoration-none mb-2">medical Q&As </a>
                  </li>
                  <li>
                    <a href="#!" class="d-block text-decoration-none mb-2">Terms Of Use</a>
                  </li>
                  <li>
                    <a href="#!" class="d-block text-decoration-none mb-2">Privacy Policy</a>
                  </li>
                </ul>
        
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">
        
                <!-- Links -->
                <h5>Get The App By</h5>
        
                <ul class="list-unstyled btn">
                  <li class="mb-4">
                    <a href="#!" class="btn btn-info" role="button">
                       <img src="{{asset('Images/home/icons8-google-play-48.png')}}" alt="" width="22px">
                        Google Play</a>
                  </li>
                  <li>
                    <a href="#!" class="btn btn-danger" role="button">
                        <i class="fab fa-brands fa-apple me-1"></i>
                        App Store</a>
                  </li>
                </ul>
        
              </div>
              <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
        
          </div>
          <!-- Footer Links -->
        
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">
            <ul class="d-flex list-unstyled">
                <li>
                    <a href="#!">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>

                <li>
                    <a href="#!">
                        <img src="{{asset('Images/home/icons8-instagram-48.png')}}" alt="">
                    </a>
                </li>

                <li>
                    <a href="#!">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>
          </div>
          <!-- Copyright -->
        
        </footer>
        <!-- Footer -->

    </section>
    <!-- end the footer -->





    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
     <!-- Swiper JS -->
     <script src="{{asset('js/swiper-bundle.min.js')}}"></script>

    <!-- js file -->
    <script src="{{asset('js/home.js')}}"></script> 
    <script src="{{asset('js/fqs.js')}}"></script> 
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/about.js')}}"></script> 
    <script src="{{asset('js/first_aid2.js')}}"></script>
    <script src="{{asset('js/first_id.js')}}"></script>  
    <script src="{{asset('js/doctors.js')}}"></script>   
    <script src="{{asset('js/medicine.js')}}"></script>   
    <script src="{{asset('js/fqs.js')}}"></script> 
    
    <!-- animate -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @yield('js')  
    <script>
        AOS.init();
    </script> 
    
</body>
</html>