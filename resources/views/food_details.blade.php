@extends('layout')
@section('content')


<div id="food_detail">
        <div class="food-detail-col-1">
            <img src="/storage/images/products/{{$product->image}}" alt="food image">
        </div>
        <div class="food-detail-col-2">
           <form action="{{url('add_cart', $product->id)}}" method="post">
            @csrf
                <h2>{{$product->product_name}}</h2>
                
                <div class="food_sub_detail">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        <p>5</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p>30 Minutes</p>
                </div>
                <p>Details</p>
                <input type="text" name="price" id="price" value="RS : {{$product->product_price}}" readonly>
                
                <p>Select Product</p>
                
                <Select>
                    <option value="">----  Select an option  ----</option>
                    <option value="">option 1</option>
                    <option value="">option 2</option>
                    <option value="">option 3</option>
                </Select>

                
                <p>Select Product</p>

              
                                        <div class="button-container">
                                        
                                            <input type="checkbox" name="addons" id="addons" value="40" class="addons">
                                            <p class="addons">Curry - Rs 40</p>
                                            <!-- <input type="checkbox" name="addons" id="addons" value="40" class="addons"> -->
                                            <button class="cart-qty-minus" type="button" value="-">-</button>
                                            <input class="qty" type="text" name="quantity" id="" min="1" value="1">
                                            <button class="cart-qty-plus" type="button" value="+">+</button></br>
                                            <input type="hidden" name="price" id="" min="1" value="{{$product->product_price}}" class="price" disabled>
                                            Rs: <span id="amount" class="amount">{{$product->product_price}}</span><br></br>
                                        </div>

                
                
                <div class="addbtn">
                    <input type="submit" value="Add to cart">
                    
                </div>
              
          
           </form>
            <form action="{{url('add_wish_list', $product->id)}}" method="post">
                @csrf

                    <input type="hidden" name="wishlist" id="wishlist" value="1">
                    <button type="submit" class="fav_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                    </button>


                </form>
           
           
        </div>
    </div>



@endsection('content')