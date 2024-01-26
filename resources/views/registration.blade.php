@extends('layout')
@section('content')

<!-- form start -->
<div class="form-container">
        <form action="{{route('registration.post')}}" method="post">
         @csrf
        <img src="./images/logo.png" alt="" srcset="" class="logo_main">
           <h3>Simply create your account</h3>
           
           <div class="flex">
              
              <div class="inputBox">
                <p>Your name </p>
                 <input type="text" name="name" placeholder="Enter name" class="box" required>
                     @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span><br>
                     @endif

                  <span>Country </span>
                  <select name="country" id="" class="box">
                    <option value="">Select your Country</option>
                    @foreach ($countries as $country)
                    <option value="{{$country->country_name}}" name="country">{{$country->country_name}} ({{$country->country_code}})</option>
                    @endforeach
                 </select>
                     @if($errors->has('country'))
                        <span class="text-danger">{{$errors->first('country')}}</span><br>
                     @endif

                  <span>Mobile </span>
                  <input type="text" name="mobile" placeholder="Enter mobile" class="box" required>
                  <small>Use this mobile number when you login to next time</small>
                     @if($errors->has('mobile'))
                        <br><span class="text-danger">{{$errors->first('mobile')}}</span><br>
                     @endif

                 <span>Email Address </span>
                 <input type="text" name="email" placeholder="Enter email" class="box" required>
                 <small>Online payment reciept will be received to this email</small><br>
                     @if($errors->has('email'))
                        <span class="text-danger">{{$errors->first('email')}}</span><br>
                     @endif
                 
                 <span>Password </span>
                 <input type="password" name="password" placeholder="Enter password" class="box" required>
                     @if($errors->has('password'))
                        <span class="text-danger">{{$errors->first('password')}}</span>
                     @endif
                 <span>Fogot Password? <a href="./reset_password.html">Reset your password!</a> </span>
                 <input type="submit" name="submit" value="LET'S START" class="login_btn">
              </div>
           </div>
           <p>Already have an account? <a href="{{url('login')}}">Login to account</a></p>
        </form>
    </div>




@endsection