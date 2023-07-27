@extends('layouts.parent') 
 
@section('title', 'First Aid')  
@section('css')   
  
     <link rel="stylesheet" href="{{asset('css/first_aid.css')}}">
@endsection
 
@section('content')   
    <!-- start the home face -->
    <div id="home">
        <img src="{{asset('Images/first aid/Rectangle 47png.png')}}" alt="">
    </div>

    <!-- start the first aid -->
    

      <section id="first_aid">
       
        <h4 data-aos="fade-up">First Aid</h4>
        <div data-aos="fade-up">
            <p>Burns...</p>
            <nav class="d-flex">
                <a href="#text" class="btn" id="btn1">See As A Text</a>
                <a href="#video" class=" btn2" id="btn2">Watch As A Video</a>
            </nav>
        </div>

        <div data-aos="fade-up">
            <p>Wounds...</p>
            <nav class="d-flex">
                <a href="#text" class="btn" id="btn1">See As A Text</a>
                <a href="#video" class=" btn2">Watch As A Video</a>
            </nav>
        </div>


        <div data-aos="fade-up">
            <p>Swoon...</p>
            <nav class="d-flex">
                <a href="#text" class="btn">See As A Text</a>
                <a href="#video" class=" btn2">Watch As A Video</a>
            </nav>
        </div>


        <div data-aos="fade-up">
            <p>Suffocation...</p>
            <nav class="d-flex">
                <a href="#text" class="btn">See As A Text</a>
                <a href="#video" class=" btn2">Watch As A Video</a>
            </nav>
        </div>


        <div data-aos="fade-up">
            <p>Nose Bleeding...</p>
            <nav class="d-flex">
                <a href="#text" class="btn">See As A Text</a>
                <a href="#video" class="btn2">Watch As A Video</a>
            </nav>
        </div>


        <div data-aos="fade-up">
            <p>Tongue swallowing</p>
            <nav class="d-flex">
                <a href="#text" class="btn">See As A Text</a>
                <a href="#video" class="btn2">Watch As A Video</a>
            </nav>
        </div>

        <section id="text">
          <div>
              <span class="close" id="close">&times;</span>
               <h3>Tongue swallowing</h3>
               <nav>
                  <ol>
                      <li>kneel behind the casualty's head , immobilize and support the casualty's head while aligning the head , neck and spine.</li>
                      <li>place your hands on either side of the face with your fingertips on the corner of the lower jaw.</li>
                      <li>gently lift the jaw to open the airway and be very careful not to tilt the neck , as the movement of the jaw moves the tongue forward in the jaw, which opens the airway.</li>
                      <li>do not put your fingers in the victim's mouth, trying to push the jaw to open the airway.</li>
                      <li>call 911 and ask for help as soon as possible.</li>
                  </ol>
               </nav>
          </div>
        </section> 
    
        <section id="video">
          <div>
              <span class="close" id="close2">&times;</span>
               <h3>Tongue swallowing</h3>
               <nav>
                  <video src="{{asset('Images/first aid/نزيف الأنف.mp4')}}" controls></video>   
               </nav>
          </div>
        </section>
        
         
      </section>

     
    <!-- end the first aid -->
 
 

@endsection  
 

