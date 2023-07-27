@extends('layouts.parent') 
 
@section('title', 'Instructions')  
@section('css')   
  
     <link rel="stylesheet" href="{{asset('css/ins.css')}}">
@endsection
 
@section('content')   
   <!-- start the home face -->
   <div id="home">
        <img src="{{asset('Images/ins/face.png')}}" alt="">
    </div>


    <!-- start the ins -->
    <div id="ins" data-aos="fade-up">
        <h5>epistaxis</h5>
        <img src="{{asset('Images/ins/epi.png')}}" alt="" >
    </div>

    <div id="ins" data-aos="fade-up">
        <h5>minor burns</h5>
        <img src="{{asset('Images/ins/minor.png')}}" alt="" >
    </div>

    <div id="ins" data-aos="fade-up">
        <h5>lost teeth</h5>
        <img src="{{asset('Images/ins/teeth.png')}}" alt="" >
    </div>

    <div id="ins" data-aos="fade-up">
        <h5>injury to the eye</h5>
        <img src="{{asset('Images/ins/eye.png')}}" alt="" >
    </div>

    <div id="ins" data-aos="fade-up">
        <h5>wound dressing</h5>
        <img src="{{asset('Images/ins/wound.png')}}" alt="" >
    </div>

    <div id="ins" data-aos="fade-up">
        <h5>electric shock</h5>
        <img src="{{asset('Images/ins/wound.png')}}" alt="" >
    </div>

    <div id="ins" data-aos="fade-up">
        <h5>Drinking Toxic Substances</h5>
        <img src="{{asset('Images/ins/wound.png')}}" alt="" >
    </div>

    <div id="ins" data-aos="fade-up">
        <h5>Feeling Dizzy</h4>
        <img src="{{asset('Images/ins/wound.png')}}" alt="">
    </div>

@endsection  