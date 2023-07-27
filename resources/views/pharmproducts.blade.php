@extends('layouts.parent') 
 
@section('title', 'pharmacy products')  
@section('css')   
  
     <link rel="stylesheet" href="{{asset('css/pharm.css')}}">
@endsection
 
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

              <input type="submit" value=" &#xf002; search" name="sear" id="sear" style="font-family: FontAwesome;">
        </form>

    </section> 
    <!-- end the search -->


    <!-- start the pharmacy -->
    <section id="pharmacy">
       <div class="phar_header">
            <img src="{{asset('Images/pharm/Group 41png.png')}}" alt="" data-aos="fade-up">
            <h3 data-aos="fade-up">Sally Pharmacy</h3>
       </div>

       <div class="content">
            <nav>
                <a href="{{route('medicine')}}" data-aos="fade-right">
                    <img src="{{asset('Images/pharm/panadol.png')}}" alt="">
                </a>
                <a href="{{route('medicine')}}" data-aos="fade-left">
                    <img src="{{asset('Images/pharm/rob.png')}}" alt="">
                </a>
            </nav>

            <nav>
                <a href="{{route('medicine')}}" data-aos="fade-right">
                    <img src="{{asset('Images/pharm/carb.png')}}" alt="">
                </a>
                <a href="{{route('medicine')}}" data-aos="fade-left">
                    <img src="{{asset('Images/pharm/flu.png')}}" alt="">
                </a>
            </nav>

            <nav>
                <a href="{{route('medicine')}}" data-aos="fade-right">
                    <img src="{{asset('Images/pharm/nys.png')}}" alt="">
                </a>
                <a href="{{route('medicine')}}" data-aos="fade-left">
                    <img src="{{asset('Images/pharm/amd.png')}}" alt="">
                </a>
            </nav>

            <nav>
                <a href="{{route('medicine')}}" data-aos="fade-right">
                    <img src="{{asset('Images/pharm/doc.png')}}" alt="">
                </a>
                <a href="{{route('medicine')}}" data-aos="fade-up">
                    <img src="{{asset('Images/pharm/stal.png')}}" alt="">
                </a>
            </nav>
       </div>
    </section>
    <!-- end the pharmacy -->
    @endsection 