@extends('layouts.parent') 
 
@section('title', 'Doctors specialists')  
@section('css')   
  
     <link rel="stylesheet" href="{{asset('css/docs.css')}}">
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
   <section id="docs">

    <nav class="nav1">
    <h3 data-aos="fade-up">Doctors</h3>
    <button class="accordion" data-aos="fade-up">Allergists</button>
    <div class="panel d-flex">
      <ul>
        <li class="pt-3">
            <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
        </li>
        <li>
            <a href="{{route('docsdetail')}}">Dr Mohamed Fathy</a>
        </li>
        <li>
            <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
        </li>
      </ul>

      <ul>
        <li class="pt-3">
            <a href="{{route('docsdetail')}}">Dr Rana Tolba</a>
        </li>
        <li>
            <a href="{{route('docsdetail')}}">Dr Esraa Elsayed</a>
        </li>
        <li>
            <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
        </li>
      </ul>
    </div>

    <button class="accordion" data-aos="fade-up">Cardiologists</button>
    <div class="panel d-flex">
        <ul>
            <li class="pt-3">
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Mohamed Fathy</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
          </ul>

          <ul>
            <li class="pt-3">
                <a href="{{route('docsdetail')}}">Dr Rana Tolba</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Esraa Elsayed</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
          </ul>
    </div>

    <button class="accordion" data-aos="fade-up">Endocrinologists</button>
    <div class="panel d-flex">
        <ul>
            <li class="pt-3">
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Mohamed Fathy</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
          </ul>

          <ul>
            <li class="pt-3">
                <a href="{{route('docsdetail')}}">Dr Rana Tolba</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Esraa Elsayed</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
          </ul>
    </div>

    <button class="accordion" data-aos="fade-up">Gastroenterologists</button>
    <div class="panel d-flex">
        <ul>
            <li class="pt-3">
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Mohamed Fathy</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
          </ul>

          <ul>
            <li class="pt-3">
                <a href="{{route('docsdetail')}}">Dr Rana Tolba</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Esraa Elsayed</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
          </ul>
    </div>

    <button class="accordion" data-aos="fade-up">Nephrologists</button>
    <div class="panel d-flex">
        <ul>
            <li class="pt-3">
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Mohamed Fathy</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
          </ul>

          <ul>
            <li class="pt-3">
                <a href="{{route('docsdetail')}}">Dr Rana Tolba</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Esraa Elsayed</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
          </ul>
    </div>

    <button class="accordion" data-aos="fade-up">Nutrition</button>
    <div class="panel d-flex">
        <ul>
            <li class="pt-3">
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Mohamed Fathy</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
          </ul>

          <ul>
            <li class="pt-3">
                <a href="{{route('docsdetail')}}">Dr Rana Tolba</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Esraa Elsayed</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
          </ul>
    </div>

    <button class="accordion" data-aos="fade-up">Ophthalmologists</button>
    <div class="panel d-flex">
        <ul>
            <li class="pt-3">
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Mohamed Fathy</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
          </ul>

          <ul>
            <li class="pt-3">
                <a href="{{route('docsdetail')}}">Dr Rana Tolba</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Esraa Elsayed</a>
            </li>
            <li>
                <a href="{{route('docsdetail')}}">Dr Islam Mohamed</a>
            </li>
          </ul>
    </div>
    </nav>
   </section>
    <!-- end the content --> 
 @endsection  