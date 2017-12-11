
var totalitemInCart = 0;
var Item = [];
var itemtest;




/*Add To Cart Animation*/
$('.add-to-cartAnimate').on('click', function(event) {
    event.preventDefault();
    var name = $(this).attr("data-name");
    var price = Number($(this).attr("data-price"));
    console.log(name);
    console.log(price);

    addItemToCart(name,price,1);
    displayCart();

        // --------------- Anitmation start -------------------------
        var cart = $('.cart');
        var imgtodrag = $(this).closest('.item').find("img").eq(0);
      
        if (imgtodrag) {
            
            var imgclone = imgtodrag.clone()
                .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left
            })
                .css({
                'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '100'
            })
                .appendTo($('body'))
                .animate({     
                    'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
            }, 1000, 'easeInOutExpo');

            setTimeout(function () {
                cart.effect("shake", {
                    times: 2
                }, 300);
            }, 1500);

            imgclone.animate({
                'width': 0,
                    'height': 0
            }, function () {
                $(this).detach()
            });
        }



        // if(totalitemInCart!=0)
        // {
            
        // }
        // else
        // totalitemInCart = sessionStorage.getItem("totalItems");
        
        // totalitemInCart ++;
        // sessionStorage.setItem("totalItems",totalitemInCart);
        // /*update total in the cart*/
        // document.getElementById("totalItems").innerHTML = sessionStorage.getItem("totalItems");
        
        

});





// /////////////////// SHOPPING CART FUNCTION ////////////////////

var cart = [];

var Item = function(name, price, count){
    this.name = name
    this.price = price
    this.count = count
};

function addItemToCart(name, price, count){
    for(var i in cart){
        if(cart[i].name === name){
            cart[i].count += count;  
            saveCart(); 
            return;
        }
    }
    var item = new Item(name, price, count);
    cart.push(item);
    saveCart();

}
//Display Cart
function displayCart(){
    console.log("*** Display Cart ***");
    var cartArray = listCart();
    console.log("*** Count Cart:"+cartArray.length);
    var output ="";
    for(var i in cartArray){
        output += "<li>"
        +cartArray[i].name
        +" "
        +cartArray[i].count
        +" x " +cartArray[i].price
        +" = " +cartArray[i].total
        +"<button class='plus-item' width='2%' data-name='"
        +cartArray[i].name+"'>+</button>"
        +"<button class='subtract-item' width='2%' data-name='"
        +cartArray[i].name+"'>-</button>"
        +" <input class ='delete-item' data-name='"
        +cartArray[i].name+"' type='image' src='image/Button/trash.png' width='2%'>"
        +"</i>";
    }
    $("#show-cart").html(output);
    $('#total-cart').html(totalCart());
    $('#totalItems').html(countCart());
}

//Plus items
$("#show-cart").on("click",".plus-item", function(event){
    var name = $(this).attr("data-name");

    addItemToCart(name, 0, 1);
    displayCart();
});

//subtract items
$("#show-cart").on("click",".subtract-item", function(event){
    var name = $(this).attr("data-name");
    removeItemFromCart(name);
    displayCart();
});

//Delete all items in the row
$("#show-cart").on("click",".delete-item",function(event){
    var name = $(this).attr("data-name");
    removeItemFromCartAll(name);
    displayCart();
});




// Removeds one item
function removeItemFromCart(name){
    for(var i in cart){
        if(cart[i].name === name){
            cart[i].count --; 
            if(cart[i].count === 0){
                cart.splice(i,1);
            }
            break;
        }
    }
    saveCart();
}


$("#clear-cart").click(function(event){
    clearCart();
    displayCart();
});

//remove all item name
function removeItemFromCartAll(name){

    for (var i in cart){
        if(cart[i].name === name){
            cart.splice(i,1);
            break;
        }
    }
    saveCart();
}


//clearCart
function clearCart(){
    cart = [] ;
    saveCart();
}

//Total Count in the Cart
function countCart(){
    var totalCount = 0;
    for(var i in cart){
        totalCount += cart[i].count
    }
    return totalCount;
}


//total Cost
function totalCart(){
    var totalCost = 0;
    for (var i in cart){
        totalCost += cart[i].price * cart[i].count;
    }
    return totalCost.toFixed(2);

}

function listCart(){
    var cartCopy=[];
    for (var i in cart){
        var item = cart[i];
        var itemCopy ={};
        for(var p in item){
            itemCopy[p] = item[p];
        }
        itemCopy.total = (item.price * item.count).toFixed(2);
        cartCopy.push(itemCopy);
    }
    return cartCopy;
}

// console.log(listCart());

//save cart to session storage
function saveCart() {
    sessionStorage.setItem("shoppingCart", JSON.stringify(cart));
}

//retreive the data from session storage
function loadCart(){
    cart = JSON.parse(sessionStorage.getItem("shoppingCart"));
}




loadCart();
displayCart();

// loadCart();
var array = listCart();
console.log("----------------------");
console.log(array);

var someText =">>>";
someText +="AAAA"
console.log(someText);

