@extends('layouts.parent') 
 
@section('title', 'Medical Q%S')  
@section('css')   
  
     <link rel="stylesheet" href="{{asset('css/fqs.css')}}">
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

    <!-- start the ques -->
    <section id="ques">
        <!-- start the topics -->
        <div class="all_topics">
            <h4>all topics....</h4>
            <div class="topics d-flex">
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#General_Topic" class="text-decoration-none">general topic</a>
                    </li>
                    <li class="mb-2">
                        <a href="#Mental_Health" class="text-decoration-none">mental health</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="text-decoration-none">mental health</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="text-decoration-none">mental health</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="text-decoration-none">mental health</a>
                    </li>
                </ul>

                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#!" class="text-decoration-none">general topic</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="text-decoration-none">mental health</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="text-decoration-none">mental health</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="text-decoration-none">mental health</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="text-decoration-none">mental health</a>
                    </li>
                </ul>

            </div>

        </div><!-- end the topics -->

        <!-- start the Q&A -->
        <div class="ques_answer" id="General_Topic">
            <nav class="nav1" data-aos="fade-up">
                <h5>General Topic...!</h5>
                <button class="accordion">Will I always see my doctor?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>

                <button class="accordion">What is one medical care?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>

                <button class="accordion">What is evidence based medicine?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <button class="accordion">What is an academic medical center?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </nav>

            <nav class="nav1" data-aos="fade-up" id="Mental_Health">
                <h5>Mental Health...!</h5>
                <button class="accordion">Will I always see my doctor?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>

                <button class="accordion">What is one medical care?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>

                <button class="accordion">What is evidence based medicine?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <button class="accordion">What is an academic medical center?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </nav>
        </div>
    </section>
    <!-- end the ques -->
 @endsection  
 

 