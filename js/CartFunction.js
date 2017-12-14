// /////////////////// SHOPPING CART FUNCTION ////////////////////

// Online Pizza 
// Filename: CartFunction.js

// Author: Chatsuda Rattarasan   
// Date:  DEC 11 2017

var onlinePizzaCart = {};
onlinePizzaCart.cart = [];

onlinePizzaCart.Item = function(name, price, count,src){
    this.name = name
    this.src = src
    this.price = price
    this.count = count
};

onlinePizzaCart.addItemToCart = function(name, price, count,src){
    if(this.cart === null)
    {
        this.cart = [];        
    }
    for(var i in this.cart){
        if(this.cart[i].name === name){
            this.cart[i].count += count;  
            this.saveCart(); 
            return;
        }
    }
    var item = new onlinePizzaCart.Item(name, price, count, src);
    this.cart.push(item);
    this.saveCart();

}
onlinePizzaCart.setCountForItem = function(name, count){
    for(var i in this.cart){
        if(this.cart[i].name === name){
            this.cart[i].count = count;
            if(this.cart[i].count < 1)
            {
                this.removeItemFromCartAll(name);
                this.saveCart();
            }
            break;
        }
    }
    this.saveCart();
}

onlinePizzaCart.displayCarttotal = function(){

    $('#totalItems').html(this.countCart());

}
//Display Cart
onlinePizzaCart.displayCart = function(){
    
    this.currency = "&dollar;"; 
    console.log("*** Display Cart ***");
    var cartArray = this.listCart();
    console.log("*** Count Cart:"+cartArray.length);
    // var $tableCart = find( ".shopping-cart" );
    var $tableCartBody = $(this).closest('.shopping-cart').find( "tbody" );
    
    var output ="";

    if( cartArray.length === 0 ) {
        $tableCartBody.html( "" );	
    } else {

        for( var i = 0; i < cartArray.length; ++i ) {

            // console.log(cartArray[i])
            var item = cartArray[i];
            var imagesrc = item.src;
            var product = item.name;
            var totalcost= item.total;
            var price = this.currency + " " + item.price;
            var qty = item.count;
                output += "<tr><td><img width='80%' src='"+imagesrc+"'></td><td class='pname'>" + product + "</td><td class='pprice'>" 
                + price + "</td><td><input class='item-count' type='number' data-name='"+product+"' value='" + qty + "' /></td>";
                output +="<td>"+totalcost+"</td><td><input  class='delete-item' data-name='"
                +product+"' type='image' src='image/Button/trash.png'  width='25%' /></td></tr>";
        // console.log(output);
              
        }

    }
    


    $('tbody').html( $tableCartBody.html() + output );
    $('#total-cart').html(this.totalCart());
    $('#totalItems').html(this.countCart());
    $('#grandTotal').html(this.granTotal());
}

// Removeds one item
onlinePizzaCart.removeItemFromCart =function (name){
    for(var i in onlinePizzaCart.cart){
        if(this.cart[i].name === name){
            this.cart[i].count --; 
            console.log("test");
            //console.log(this.cart[i].count);
            if(this.cart[i].count === 0){
                this.cart.splice(i,1);
                console.log("test 1");
                break;
            }
            
        }
    }
    this.saveCart();
}

//remove all item name
onlinePizzaCart.removeItemFromCartAll = function(name){

    for (var i in onlinePizzaCart.cart){
        if(this.cart[i].name === name){
            this.cart.splice(i,1);
            break;
        }
    }
    this.saveCart();
}


//clearCart
onlinePizzaCart.clearCart = function (){
    this.cart = [] ;
    this.saveCart();
}

//Total Count in the Cart
onlinePizzaCart.countCart = function (){
    var totalCount = 0;
    for(var i in onlinePizzaCart.cart){
        totalCount += onlinePizzaCart.cart[i].count
    }
    return totalCount;
}


//total Cost
onlinePizzaCart.totalCart = function (){
    var totalCost = 0;
    for (var i in this.cart){
        totalCost += this.cart[i].price * this.cart[i].count;
    }
    return totalCost.toFixed(2);

}

onlinePizzaCart.granTotal = function (){
    var shipping = 2;
    var grand = 0;
    var tax = 0;
     var totalCost = 0;
     for (var i in this.cart){
         totalCost += this.cart[i].price * this.cart[i].count;
     }
     grand = totalCost+ shipping + tax;
    console.log(grand);

    return grand.toFixed(2);

}

onlinePizzaCart.listCart = function (){
    var cartCopy=[];
    for (var i in this.cart){
        var item = this.cart[i];
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
onlinePizzaCart.saveCart = function () {
    sessionStorage.setItem("shoppingCart", JSON.stringify(this.cart));
}

//retreive the data from session storage
onlinePizzaCart.loadCart = function (){
    this.cart = JSON.parse(sessionStorage.getItem("shoppingCart"));
}


onlinePizzaCart.loadCart();



//  SHIPPING

onlinePizzaCart.addInfo = function(){
    
    var Fname = document.getElementById("input_id").value
    var Lname = document.getElementById("input_id").value
    var email = document.getElementById("input_id").value
    if(this.cart === null)
    {
        this.cart = [];        
    }
    for(var i in this.cart){
        if(this.cart[i].name === name){
            this.cart[i].count += count;  
            this.saveCart(); 
            return;
        }
    }
    var item = new onlinePizzaCart.Item(name, price, count, src);
    this.cart.push(item);
    this.saveCart();

}