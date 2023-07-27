@extends('layouts.parent') 
 
@section('title', 'About Us')  
@section('css')   
  
     <link rel="stylesheet" href="{{asset('css/about.css')}}">
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
       <section id="content" data-aos="fade-up">
         <div>
            <h4>About us</h4>
            <p>Neuro.com is a platform that gather most medical fields in one place, including hospitals, pharmacies, laboratories, and doctors, where we provide you with their dates and locations, and we also provide you with information about medicines available in pharmacies and information about doctors to allow you to compare them and choose the best for you, and we provide you with videos and instructions on how to deal and act in emergency cases</p>
         </div>
       </section>
     <!-- end the content --> 
 @endsection  
 

 