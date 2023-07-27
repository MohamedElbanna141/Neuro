@extends('layouts.parent') 
 
@section('title', 'About Us')  
@section('css')   
  
     <link rel="stylesheet" href="{{asset('css/contact.css')}}">
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
<!-- start the contact us -->
<section id="contact_form" data-aos="fade-up">
        <h3>contact us</h3>
        <div class="form ">
            <form action="" method="post" class="shadow">
                <nav class="d-flex">
                    <label for="name">your name<bre class="text-danger">*</bre> </label>
                    <input type="text" name="name" id="name" placeholder="name......" value="">
                </nav>

                <nav class="d-flex">
                    <label for="mobile">mobile number<bre class="text-danger">*</bre> </label>
                    <input type="number" name="mobile" id="mobile" placeholder="mobile......" value="">
                </nav>

                <nav class="d-flex">
                    <label for="email">email address<bre class="text-danger">*</bre></label>
                    <input type="email" name="email" id="email" placeholder="....@email.com" value="">
                </nav>

                <nav class="d-flex">
                    <label for="comment">comments<bre class="text-danger">*</bre></label>
                    <textarea name="comment" id="comment" placeholder="   any question....." rows="7" value=""></textarea>
                </nav>

                <input type="submit" value="Submit">
            </form>
        </div>

    </section>
    <!-- end the contact us -->

@endsection  
