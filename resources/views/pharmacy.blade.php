@extends('layouts.parent') 
 
@section('title', 'Hospitals')  
@section('css')   
  
     <link rel="stylesheet" href="{{asset('css/hospital.css')}}">
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
       <!-- start the hospital -->
    <section id="hospital">
        <h3 data-aos="fade-up">Hospitals</h3>
        <div class="d-xxl-flex d-xl-flex d-lg-flex d-md-flex">
            <nav data-aos="fade-right">
                <h5>Tiba Hospital</h5> 
                <a href="{{route('pharmproducts')}}"><img src="{{asset('Images/hospital/Untitled.png')}}" alt=""></a>
               
                <h6>Location: <span> El Mansoura, gehan street </span></h6>
                <h6>Times: <span> Open All Day</span></h6>
                <h6>Rating: <span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span></h6>
            </nav>
            <hr>
            <nav data-aos="fade-left"> 
                <h5>Tiba Hospital</h5>
                <a href="{{route('pharmproducts')}}"><img src="{{asset('Images/hospital/Untitled.png')}}" alt=""></a>
                <h6>Location: <span> El Mansoura, gehan street </span></h6>
                <h6>Times: <span> Open All Day</span></h6>
                <h6>Rating: <span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span></h6>
            </nav>
        </div>
         <hr>
        <div class="d-xxl-flex d-xl-flex d-lg-flex d-md-flex">
            <nav data-aos="fade-right">
                <h5>Tiba Hospital</h5>
                <a href="{{route('pharmproducts')}}"><img src="{{asset('Images/hospital/Untitled.png')}}" alt=""></a>
                <h6>Location: <span> El Mansoura, gehan street </span></h6>
                <h6>Times: <span> Open All Day</span></h6>
                <h6>Rating: <span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span></h6>
            </nav>
            <hr>
            <nav data-aos="fade-left"> 
                <h5>Tiba Hospital</h5>
                <a href="{{route('pharmproducts')}}"><img src="{{asset('Images/hospital/Untitled.png')}}" alt=""></a>
                <h6>Location: <span> El Mansoura, gehan street </span></h6>
                <h6>Times: <span> Open All Day</span></h6>
                <h6>Rating: <span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span></h6>
            </nav>
        </div>
          <hr>
        <div class="d-xxl-flex d-xl-flex d-lg-flex d-md-flex">
            <nav data-aos="fade-right">
                <h5>Tiba Hospital</h5>
                <a href="{{route('pharmproducts')}}"><img src="{{asset('Images/hospital/Untitled.png')}}" alt=""></a>
                <h6>Location: <span> El Mansoura, gehan street </span></h6>
                <h6>Times: <span> Open All Day</span></h6>
                <h6>Rating: <span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span></h6>
            </nav>
            <hr>
            <nav data-aos="fade-left"> 
                <h5>Tiba Hospital</h5>
                <a href="{{route('pharmproducts')}}"><img src="{{asset('Images/hospital/Untitled.png')}}" alt=""></a>
                <h6>Location: <span> El Mansoura, gehan street </span></h6>
                <h6>Times: <span> Open All Day</span></h6>
                <h6>Rating: <span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span></h6>
            </nav>
        </div>
    </section>
    <!-- end the hospital -->

     <!-- end the content --> 
 @endsection  