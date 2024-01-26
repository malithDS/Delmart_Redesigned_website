@extends('layout')
@section('content')

<!--wishlist section start-->
<!-- 
<div id="showWishList">

        <h1 class="sub-title">My Favourites</h1>
        <div class="wish-list">
            <div class="wish">
                <img src="./images/product-1.jpg" alt="" srcset="">
                <h5>Social Media App</h5>
                <div class="layer">
                    <h3>Social Media App</h3>
                   <a href=""><i class="fas fa-external-link-alt"></i></a> 
                </div>
            </div>
            <div class="wish">
                <img src="./images/product-1.jpg" alt="" srcset="">
                <h5>Social Media App</h5>
                <div class="layer">
                    <h3>Music App</h3>
                   <a href=""><i class="fas fa-external-link-alt"></i></a> 
                </div>
            </div>
            <div class="wish">
                <img src="./images/product-1.jpg" alt="" srcset="">
                <h5>Social Media App</h5>
                <div class="layer">
                    <h3>Online Shopping App</h3>
                   <a href=""><i class="fas fa-external-link-alt"></i></a> 
                </div>
            </div>
            <div class="wish">
                <img src="./images/product-1.jpg" alt="" srcset="">
                <h5>Social Media App</h5>
                <div class="layer">
                    <h3>Online Shopping App</h3>
                   <a href=""><i class="fas fa-external-link-alt"></i></a> 
                </div>
            </div>
        </div>

</div>

-->







  <!-- product content start -->
  <div class="product">

<!-- product section  start-->
    <div class="productimg">
    @foreach ($wish_list as $wish_list)
            <div class="imgbox">
            <img src="{{asset('/storage/images/products/'.$wish_list->image)}}" alt="product">
                    
		              <div class="layer">
                  <h4>{{$wish_list->product_name}}</h4>
                  
                  <span>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </span>
                  
                    <div class="card-footer">
                      <h4>Rs: <span>{{$wish_list->product_price}}</span></h4>
                      <!--<a href=""><button>Buy Now</button></a> -->
                      <form action="{{url('add_cart', $wish_list->id)}}" method="post">
                      @csrf
                      <input class="qty" type="hidden" name="quantity" id="" min="1" value="1" >
                      <button type="submit"><a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a></button>
                      </form>

                      <a href="{{url('/remove_wish_list', $wish_list->id)}}">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </button>
                      </a>
                      
                      


            </form>

                    </div>
                  </div>
            </div>
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






@endsection('content')