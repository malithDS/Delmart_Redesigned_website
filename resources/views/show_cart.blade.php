@extends('layout')
@section('content')

<div class="cart-container">
        <h3>Your Cart</h3>
        <table class="main-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>products</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>

                        <div class="table-head">
                            <img src="./images/logo.png" alt="" srcset="">
                            <h4>Dil</h4>
                            <p>home foods</p>
                        </div>
                        <table class="sub-table" id="sub-table">
                            <thead>
                                <th>#</th>
                                <th>Product</th>
                                <th>Details</th>
                                <th>Price</th>
                                <th>X</th>
                            </thead>

                            <?php $totalPrice = 0; ?>
                            @foreach($cart as $cart)
                                <tbody>
                      
                                    <tr>
                                    <td>{{$cart->id}}</td>
                                    <td><img src="/storage/images/products/{{$cart->image}}" alt="" srcset=""></td>
                                    <td>{{$cart->product_name}}</td>
                                    <td>
                                        <div class="button-container">
                                            <button class="cart-qty-plus" type="button" value="+">+</button>
                                            <input class="qty" type="text" name="qty" id="" min="1" value="{{$cart->product_quantity}}">
                                            <button class="cart-qty-minus" type="button" value="-">-</button>
                                            <input type="hidden" name="" id="" min="1" value="{{$cart->product_price}}" class="price" disabled>
                                            <span id="amount" class="amount"></span>
                                        </div>
                                    </td>
                                    <td><a onclick="return confirm('Are you sure to remove this product ?')" href="{{url('/remove_cart', $cart->id)}}">X</a></td>
                                </tr>

                                </tbody>

                                <?php $totalPrice += $cart->product_price; ?>
                            @endforeach
                        </table>


                    </td>
                </tr>
            </tbody>


            
        </table>
        <div class="totPrice">
            <Strong>
                TOTAL = RS <span id="total" class="total">0</span></br>

                DISCOUNT = RS <span >0</span></br>

                TOTAL PRICE= RS <span id="total" class="total">0</span></br>
            </Strong></br>
            <button>Checkout</button>
        </div>
    </div>
        


@endsection('content')