@extends('layouts.parent') 
 
@section('title', 'scan')  
@section('css')   
  
     <link rel="stylesheet" href="{{asset('css/scan.css')}}">
@endsection
 
@section('content')   
    
    <!-- start the home face -->
    <div id="home">
      <img src="{{asset('Images/scane/Rectangle 47.png')}}" alt="">
    </div>




    <!-- start the scan -->
    <section id="scan">
      <h4>scan yourself...</h4>
      <h5>Enter your symptoms</h5>
      <form action="" method="post">
        <textarea name="sym" id="sym" cols="30" rows="10" placeholder="Enter your feeling"></textarea>
        <input type="submit" value="show the result" id="sub">
      </form>
      <div class="cir">
         <div class="div">
          <nav></nav>
          <nav></nav>
          <nav></nav>
         </div>
      </div>

      <h2>you have a <span>cold</span></h2>

    </section>
    <!-- end the scan -->
 

@endsection  
 

@section('js')   
  
<script>
      var sub=document.getElementById("sub");
      sub.addEventListener("click", myFunction);
      function myFunction(){
        alert("hello")
      }
 </script>
@endsection