@extends('layout')
@section('content')



<div class="form-container">

    <form action="{{route('insert.post')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="flex">
              
              <div class="inputBox">
                <p>Product name </p>
                 <input type="text" name="product_name" placeholder="Enter product_name" class="box" required>
                     @if($errors->has('product_name'))
                        <span class="text-danger">{{$errors->first('product_name')}}</span><br>
                     @endif

                 <p>Product description </p>
                 <input type="text" name="product_description" placeholder="Enter product_description" class="box" required>
                     @if($errors->has('product_description'))
                        <span class="text-danger">{{$errors->first('product_description')}}</span><br>
                     @endif

                 <p>Product price </p>
                 <input type="text" name="product_price" placeholder="Enter product_price" class="box" required>
                     @if($errors->has('product_price'))
                        <span class="text-danger">{{$errors->first('product_price')}}</span><br>
                     @endif

                  <span>Product Category </span>
                  <input type="text" name="product_category" placeholder="Enter product_category" class="box" required>
                     @if($errors->has('product_category'))
                        <br><span class="text-danger">{{$errors->first('product_category')}}</span><br>
                     @endif

                 <span>Product Sub Category </span>
                 <input type="text" name="product_subcategory" placeholder="Enter product_subcategory" class="box" required>
                     @if($errors->has('product_subcategory'))
                        <span class="text-danger">{{$errors->first('product_subcategory')}}</span><br>
                     @endif
                 
                 <span>Enter your Image </span>
                 <input type="file" name="image" >
                     @if($errors->has('password'))
                        <span class="text-danger">{{$errors->first('password')}}</span>
                     @endif

                 <input type="submit" name="submit" value="SUBMIT" class="login_btn">
              </div>
            </div>
    </form>
</div>












@endsection('content')