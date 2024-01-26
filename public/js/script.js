    
// for show cart page
$(document).ready(function(){
    update_amounts();
    $('.addons, .qty, .price').on('keyup keypress blur change', function(e){
         update_amounts();
    });
});

/*
function update_amounts(){
    var sum = 0.0;
    $('#sub-table > tbody > tr').each(function(){
         var qty = $(this).find('.qty').val();
         var price = $(this).find('.price').val();
         var amount = (qty*price)
         sum+=amount;
         $(this).find('.amount').text(''+amount);

    });
    $('.total').text(sum);
} */

/*account page start*/


var conten1 = document.getElementById('content1');  
var conten2 = document.getElementById('content2');  
var conten3 = document.getElementById('content3');  
var conten4 = document.getElementById('content4');  
var btn1 = document.getElementById('btn1');  
var btn2 = document.getElementById('btn2');  
var btn3 = document.getElementById('btn3');  
var btn4 = document.getElementById('btn4'); 
function tab1(){  
     conten1.style.transform='translateX(0px)';  
     conten2.style.transform='translateX(100%)';  
     conten3.style.transform='translateX(100%)'; 
     conten4.style.transform='translateX(100%)'; 
}  
btn1.addEventListener('click',function(){  
          btn1.classList.add('active');  
          btn2.classList.remove('active');  
          btn3.classList.remove('active'); 
          btn4.classList.remove('active');  
     });  
function tab2(){  
     conten2.style.transform='translateX(0px)';  
     conten1.style.transform='translateX(100%)';  
     conten3.style.transform='translateX(100%)';
     conten4.style.transform='translateX(100%)';    
}  
btn2.addEventListener('click',function(){  
          btn2.classList.add('active');  
          btn1.classList.remove('active');  
          btn3.classList.remove('active');  
          btn4.classList.remove('active'); 
     });  
function tab3(){  
     conten3.style.transform='translateX(0px)';  
     conten2.style.transform='translateX(100%)';  
     conten1.style.transform='translateX(100%)';  
     conten4.style.transform='translateX(100%)'; 
}  
btn3.addEventListener('click',function(){  
          btn3.classList.add('active');  
          btn1.classList.remove('active');  
          btn2.classList.remove('active'); 
          btn4.classList.remove('active');  
     });  

function tab4(){  
     conten4.style.transform='translateX(0px)';  
     conten3.style.transform='translateX(100%)'; 
     conten2.style.transform='translateX(100%)';  
     conten1.style.transform='translateX(100%)';  
}  
btn4.addEventListener('click',function(){  
          btn4.classList.add('active');  
          btn1.classList.remove('active');  
          btn2.classList.remove('active'); 
          btn3.classList.remove('active');  
});  

/*account page end*/

// for show cart page qty incremnt and decrement
var incremntQty;
var decrementQty;
var addAddons;
var addons = $('.addons');
var plusBtn = $('.cart-qty-plus');
var minusBtn = $('.cart-qty-minus');


var addAddons = addons.click(function(){
    var checkBox = document.getElementById("addons");
    if (checkBox.checked == true){
    var $n = $(this)
    .parent('.button-container')
    .find('.price');
    $n.val(Number($n.val())+40);
    update_amounts();
    }else{
        var $n = $(this)
    .parent('.button-container')
    .find('.price');
    $n.val(Number($n.val())-40);
    update_amounts();
    }
});

var incremntQty = plusBtn.click(function(){

    var $n = $(this)
    .parent('.button-container')
    .find('.qty');
    $n.val(Number($n.val())+1);
    update_amounts();
});
var decrementQty= minusBtn.click(function(){

    var $n = $(this)
    .parent('.button-container')
    .find('.qty');
    var QtyVal = Number($n.val());
    if (QtyVal > 0){
         $n.val(QtyVal-1);
    }
    update_amounts();
});
//</script>

function update_amounts(){
    var sum = 0.0;
    $('.button-container').each(function(){
         //var addons = $(this).find('.addons').val();
         var qty = $(this).find('.qty').val();
         var price = $(this).find('.price').val();
         var amount = (qty*price)
         sum+=amount;
         $(this).find('.amount').text(''+amount);

    });
    $('.total').text(sum);
}