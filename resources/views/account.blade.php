@extends('layout')
@section('content')


<div class="main">  
        <div class="btn-box">  
             <button class="btn active" id="btn1" onclick="tab1()">DASHBOARD</button>  
             <button class="btn" id="btn2" onclick="tab2()">ORDERS</button>  
             <button class="btn" id="btn3" onclick="tab3()">ADDRESS</button>
             <button class="btn" id="btn4" onclick="tab4()">MY PROFILE</button>    
        </div>  
        <div id="content1" class="content">  
             <h1>DASHBOARD</h1>  
             <p>Hello,<br>

                From your account dashboard. you can easily check & view your recent orders, manage your delivery addresses and edit your profile details.</p> 
              
             
        </div>  
        <div id="content2" class="content">  
             <h1>ORDERS</h1>  
             <table>
                <thead>

                        <th>#</th>
                        <th>Order Details</th>
                        <th>Delivery Details</th>
                        <th>Vendor Details</th>
                        <th>Payment Details</th>

                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PENDING
                            Group Order # : 318
                            Date : 2023-12-02
                            Time : 08:07:51 am</td>
                        <td>DELIVER BY RIDER
                            Rider :
                            Delivery Address :
                            WGVX+6HQ, Matara, Sri Lanka
                            Note :
                            Delivered Date :
                            Delivered Time :</td>
                        <td>Sample</td>
                        <td>Confirming Order
                            Type : ONLINE PAYMENT
                            Payment : PENDING
                            ................................................................
                            Grand Total Rs: 163.00</td>
                    </tr>
                </tbody>

             </table>
              
             
        </div>  
        <div id="content3" class="content">  
             <h1>BILLING ADDRESS</h1>  
             <p>Your saved billing address</p>
             <p>District : </p>
             <p>City : </p>
             <p>Postcode : </p>
             <p>Address : </p>
             <div>
                <p>Change billing address</p>

                <form action="#" method="post">
                    <select name="" id="">
                        <option value="">--- Select District ---</option>
                        <option value="">Hello</option>
                        <option value="">Hello</option>
                    </select>
                    <select name="" id="">
                        <option value="">--- Select City ---</option>
                        <option value="">Hello</option>
                        <option value="">Hello</option>
                    </select>
                    <input type="text" name="" id="" placeholder="Enter Postcode">
                    <input type="text" name="" id="" placeholder="Enter Address"><br>
                    <button>Submit</button>
                </form>

             </div>
             
            
        </div>  
        <div id="content4" class="content">  
            <h1>MY PROFILE</h1>  
            <div class="profile">
                <form action="" method="">
                    <div class="prfile-contact-row">
                        <label for="">Name</label><br>
                        <input type="text" name="" id="" placeholder="Enter your name">
                    </div>
                    <div class="prfile-contact-row">
                        <label for="">Enter mobile numbers</label><br>
                        <input type="text" name="" id="" placeholder="Enter your mobile 1">
                        <input type="text" name="" id="" placeholder="Enter your mobile 2">
                    </div>
                    <div class="prfile-contact-row">
                        <label for="">Enter your email</label><br>
                        <input type="email" name="" id="" placeholder="Enter your email">
                    </div>
                    <div class="prfile-contact-row">
                        <button>Submit</button>
                    </div>
                </form>
            </div>
       </div>  
   </div>  

   
@endsection('content')