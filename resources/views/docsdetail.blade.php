@extends('layouts.parent') 
 
@section('title', 'Doctors Details')  
@section('css')   
  
     <link rel="stylesheet" href="{{asset('css/doc_info.css')}}">
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
       <!-- start the doc_info==-->
    <section id="doc_info">
        <h4 data-aos="fade-up">Details</h4>
        <div class="times" data-aos="fade-up">
            <nav class="left">
                <img src="{{asset('Images/home/pic1.png')}}" alt="">
            </nav>

            <nav class="right">
                <h5>doctor reem sayed</h5>
                <p>Cardiologists</p>
                <nav class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </nav>
                <nav class="time">
                    <i class="fas fa-calendar-alt"></i>
                    <p>monday-friday 
                        <span>09.00 - 17.00</span>
                    </p>
                    <button>
                        <a href="#!">Open</a>
                    </button>
                </nav>
            </nav>
        </div>
        <nav class="addr" data-aos="fade-up">
            <h5>Address</h5>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        </nav>

        <nav class="num" data-aos="fade-up">
            <h5>Phone Number</h5>
            <p>01000528877</p>
        </nav>

        <nav class="fee" data-aos="fade-up">
            <h5>Visiting Fee</h5>
            <p>150 LE</p>
        </nav>

        <nav class="about" data-aos="fade-up">
            <h5>About</h5>
            <p>Dr.Reem Sayed she is a cardiologistfbnjk
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, totam?</p>
        </nav>

    </section>
    <!--==end the doc_info== -->
    <!-- end the content --> 
 @endsection  