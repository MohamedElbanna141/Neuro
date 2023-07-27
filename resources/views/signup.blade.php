<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <!-- icons -->
     <link rel="stylesheet" href="css/all.css">
     <link rel="stylesheet" href="css/all.min.css">
     <link rel="stylesheet" href="css/font-awesome.css">
     <!-- style -->
     <link rel="stylesheet" href="css/login_sign_up2.css">
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
      <!-- search icon -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- animate -->
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <!-- start the login form -->
    <section id="form">

        <img src="{{asset('Images/logo.png')}}" width="150px" height="40px" alt="">
        <h4>Create Account</h4>
        <nav>
            <button>
                <a href="#!">
                    <img src="{{asset('Images/login&signup/logo_brand_brands_logos_google-128.webp')}}" width="30px">
                   continue with google
                </a>
            </button>

            <button>
                <a href="#!">
                    <img src="{{asset('Images/login&signup/1_Facebook_colored_svg_copy-128.webp')}}" width="30px">
                   continue with facebook
                </a>
            </button>
        </nav>
        <h6>OR</h6>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif
        <form action="{{route('postRegister')}}" method="POST">
            @csrf
            <label for="name">Name...</label>
            <input type="text" name="name" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif

            <label for="phone">Phone Number...</label>
            <input type="number" name="phone" id="phone" >
            @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif

            <label for="pass">Password...</label>
            <input type="password" name="password" id="pass">
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif

            <label for="passw">confirm Password...</label>
            <input type="password" name="password_confirmation" id="passw">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif

            <input type="submit" value="Create">
        </form>
        <p>Already have an account? 
            <a href="{{route('postLogin')}}"> Sign in</a>
        </p>
    </section>
    <!-- end the login form -->






    <!-- bootstrap --> 
 <script src="{{ URL::to('js/alerts.js') }}"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
 <!-- js file -->
 <script src="js/doctors.js"></script>
 <!-- animate -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script> 

    
</body>
</html>