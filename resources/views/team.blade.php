@extends('layouts.parent') 
 
@section('title', 'Our Team')  
@section('css')   
  
     <link rel="stylesheet" href="{{asset('css/team.css')}}">
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
  <!-- start the team info -->
  <section id="teams">
        <h3 class="div2">Our Team....</h3>
            <div class="div1">
                <div class="div2 row d-xxl-flex d-xl-flex d-lg-flex d-md-flex">
                    <nav class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 nav1 nav d-flex">
                        <img src="{{asset('Images/ourteam/mohamed.jpg')}}" class="imag shadow" alt="">
                        <nav class="info">
                            <h5>zain abdelrahman</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ea optio quisquam omnis hic quam!</p>
                        </nav>
                    </nav>
                    <nav class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 nav3 nav d-flex">
                        <img src="{{asset('Images/ourteam/ze.jpg')}}" class="imag shadow" alt="">
                        <nav class="info">
                            <h5>zain abdelrahman</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ea optio quisquam omnis hic qua
                    </nav>
                </div>
    
                <div class="div2 row d-xxl-flex d-xl-flex d-lg-flex d-md-flex">
                    <nav class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 nav1 nav d-flex">
                        <img src="{{asset('Images/ourteam/alaaab.jpg')}}" class="imag shadow" alt="">
                        <nav class="info">
                            <h5>zain abdelrahman</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ea optio quisquam omnis hic quam!</p>
                        </nav>
                    </nav>
                    <nav class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 nav3 nav d-flex ">
                        <img src="{{asset('Images/ourteam/mustafa.jpg')}}" class="imag shadow" alt="">
                        <nav class="info">
                            <h5>zain abdelrahman</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ea optio quisquam omnis hic qua
                    </nav>
                </div>
    
                <div class="div2 row d-xxl-flex d-xl-flex d-lg-flex d-md-flex">
                    <nav class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 nav1 nav d-flex ">
                        <img src="{{asset('Images/ourteam/esraa.jpg')}}" class="imag shadow" alt="">
                        <nav class="info">
                            <h5>zain abdelrahman</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ea optio quisquam omnis hic quam!</p>
                        </nav>
                    </nav>
                    <nav class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 nav3 nav d-flex">
                        <img src="{{asset('Images/ourteam/amira.jpg')}}" class="imag shadow" alt="">
                        <nav class="info">
                            <h5>zain abdelrahman</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ea optio quisquam omnis hic qua
                    </nav>
                </div>
    
                <div class="div2 row d-xxl-flex d-xl-flex d-lg-flex d-md-flex">
                    <nav class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 nav1 nav d-flex ">
                        <img src="{{asset('Images/ourteam/alaas.jpg')}}" class="imag shadow" alt="">
                        <nav class="info">
                            <h5>zain abdelrahman</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ea optio quisquam omnis hic quam!</p>
                        </nav>
                    </nav>
                    <nav class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 nav3 nav d-flex">
                        <img src="{{asset('Images/ourteam/essam.jpg')}}" class="imag shadow" alt="">
                        <nav class="info">
                            <h5>zain abdelrahman</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ea optio quisquam omnis hic qua
                    </nav>
                </div>
    
                <div class="div2 row d-xxl-flex d-xl-flex d-lg-flex d-md-flex">
                    <nav class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 nav1 nav d-flex">
                        <img src="{{asset('Images/ourteam/ahmed.jpg')}}" class="imag shadow" alt="">
                        <nav class="info">
                            <h5>zain abdelrahman</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ea optio quisquam omnis hic quam!</p>
                        </nav>
                    </nav>
                    <nav class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 nav3 nav d-flex">
                        <img src="{{asset('Images/ourteam/adham.jpg')}}" class="imag shadow" alt="">
                        <nav class="info">
                            <h5>zain abdelrahman</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ea optio quisquam omnis hic qua
                    </nav>
                </div>
    
                
            </div>
    </section>
    <!-- end the team info -->
@endsection  
 

