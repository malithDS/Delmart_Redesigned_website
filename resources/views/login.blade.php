@extends('layout')
@section('content')

    <!-- form start -->
    <div class="form-container">

            @if(Session::has('success'))

            <div class="alert alert-success">{{Session::get('success')}}</div>

            @endif

        <form action="{{route('login.post')}}" method="post" enctype="multipart/form-data">
            @csrf
        <img src="./images/logo.png" alt="" srcset="" class="logo_main">
        <h3>Login to your account</h3>

        <div class="continue-google">
            <img src="./images/google.png" alt="">
        </div>
        <div class="hr">
            <hr>
            <p>or</p>
            <hr>
        </div>
           
           <div class="flex">
              
              <div class="inputBox">
                 <span>Country </span>
                 <select name="country" id="" class="box">
                    <option value="">Select your Country</option>
                    @foreach ($countries as $country)
                    <option value="{{$country->country_name}}" name="country">{{$country->country_name}} ({{$country->country_code}})</option>
                    @endforeach
                 </select>
                    @if($errors->has('country'))
                        <span class="text-danger">{{$errors->first('country')}}</span>
                    @endif
                 <span>Mobile </span>
                 <input type="text" name="mobile" placeholder="Enter mobile" class="box" required>
                    @if($errors->has('mobile'))
                        <span class="text-danger">{{$errors->first('mobile')}}</span>
                    @endif
                 <span>Password </span>
                 <input type="password" name="password" placeholder="Enter password" class="box" required>
                    @if($errors->has('password'))
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    @endif
                 <p>Fogot Password? <a href="./reset_password.html">Reset your password!</a> </p>
                 <input type="submit" name="submit" value="LOGIN TO ACCOUNT" class="login_btn">
              </div>
           </div>
           <p>Don't have an account? <a href="{{ url('registration')}}">Regiser now</a></p>
        </form>
    </div>






@endsection('content')