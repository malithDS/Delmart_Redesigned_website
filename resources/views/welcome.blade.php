@extends('layout')
@section('content')

   <!-- slider -->
   <div class="slider-container mt-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
   </div>
    <!-- product content start -->
    <div class="product">
        <div class="product-head"  data-aos="fade-up" data-aos-duration="2000">
            <div class="input-searchbar">
                <input type="search" name="" id="" placeholder="Search Something...">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                  </svg>
                  
            </div>
            <div class="sort-product">
                <p>Sort by : </p>
                <select name="" id="">
                    <option value="aaaaa">recomended</option>
                    <option value="aaaaa">Name</option>
                    <option value="aaaaa">Category</option>
                    <option value="aaaaa">Sub category</option>
                </select>
            </div>
        </div>

<!-- product section  start-->
    <div class="productimg">
    @foreach ($products as $product)
    <a href="{{ url('food_details/'.$product->id) }}">
            <div class="imgbox">
                <img src="{{asset('/storage/images/products/'.$product->image)}}" alt="">
                <a href="{{ url('food_details/'.$product->id) }}"><p>{{$product->product_name}}</p></a>
                    
		              <div class="layer">
                  <h4>{{$product->product_name}}</h4>
                  
                  <span>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </span>
                  
                    <div class="card-footer">
                      <h4>Rs: <span>{{$product->product_price}}</span></h4>
                      <!--<a href=""><button>Buy Now</button></a> -->
                      <form action="{{url('add_cart', $product->id)}}" method="post">
                      @csrf
                      <input class="qty" type="hidden" name="quantity" id="" min="1" value="1" >
                      <button type="submit"><a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a></button>
                      </form>

                      <form action="{{url('add_wish_list', $product->id)}}" method="post">
                        @csrf

                      <input type="hidden" name="wishlist" id="wishlist" value="1">
                      <button type="submit">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                          </svg>
                      </button>


            </form>

                    </div>
                  </div>
            </div>
            </a>
            @endforeach
    </div><!--productimg-->

    
        <div class="product-pages">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
              
              
              
            <p>1</p>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
              
        </div>
        
    </div><!--product-->
    
    <!-- floating button -->
    <div class="floating-container">
        <div class="floating-button">+</div>
        <div class="element-container">
      
          <a href="./contact.html"> 
            <span class="float-element">
            <i class="material-icons">phone</i>
            </span>
          </a>
          
          
            <span class="float-element">
                <a href="./contact.html"><i class="material-icons">email</i></a>
            </span>

            <span class="float-element">
                <a href="./contact.html"><i class="material-icons">chat</i></a>
            </span>
        </div>
    </div>





@endsection