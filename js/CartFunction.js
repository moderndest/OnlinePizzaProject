// /////////////////// SHOPPING CART FUNCTION ////////////////////

var onlinePizzaCart = {};
onlinePizzaCart.cart = [];

onlinePizzaCart.Item = function(name, price, count){
    this.name = name
    this.price = price
    this.count = count
};

onlinePizzaCart.addItemToCart = function(name, price, count){
    for(var i in this.cart){
        if(this.cart[i].name === name){
            this.cart[i].count += count;  
            this.saveCart(); 
            return;
        }
    }
    var item = new onlinePizzaCart.Item(name, price, count);
    this.cart.push(item);
    this.saveCart();

}
onlinePizzaCart.setCountForItem = function(name, count){
    for(var i in this.cart){
        if(this.cart[i].name === name){
            this.cart[i].count = count;
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

    if( cartArray.length == 0 ) {
        $tableCartBody.html( "" );	
    } else {


        for( var i = 0; i < cartArray.length; ++i ) {


            console.log(cartArray[i])
            var item = cartArray[i];
            var product = item.name;
            var price = this.currency + " " + item.price;
            var qty = item.count;
                output += "<tr><td></td><td class='pname'>" + product + "</td>" + "<td><input class='item-count' type='number' data-name='"
                +product+"' value='" + qty + "' /></td>";
                output += "<td class='pprice'>" + price + "</td><td class='delete-item'><input  class='delete-item' data-name='"
                +product+"' type='image' src='image/Button/trash.png'  width='10%' /></td></tr>";
        // console.log(html);
        
           
        }

        

        // for(var i in cartArray){
        //     output += "<li>"
        //     +cartArray[i].name
        //     +" <input class='item-count'type ='number' data-name='"
        //     +cartArray[i].name
        //     +"' value ='"+cartArray[i].count
        //     +"'> " +cartArray[i].count
        //     +" x " +cartArray[i].price
        //     +" = " +cartArray[i].total
        //     +"<button class='plus-item' width='2%' data-name='"
        //     +cartArray[i].name+"'>+</button>"
        //     +"<button class='subtract-item' width='2%' data-name='"
        //     +cartArray[i].name+"'>-</button>"
        //     +" <input class ='delete-item' data-name='"
        //     +cartArray[i].name+"' type='image' src='image/Button/trash.png' width='2%'>"
        //     +"</i>";
    
    
            // output += "<tr><td>"
            // +cartArray[i].name +"</td>"
            // +"<td>" +cartArray[i].price +"</td>"
            // +"<td> <input class='item-count'type ='number' data-name='"
            // +cartArray[i].name
            // +"' value ='"+cartArray[i].count
            // +"'> "+cartArray[i].count+"</td> " 
            // +"</td><td>" +cartArray[i].total+"</td>"
            // +"<td> <input class ='delete-item' data-name='"
            // +cartArray[i].name+"' type='image' src='image/Button/trash.png' width='10%'> <td>"
            // +"</tr>";
            
           
        }

        // if( cartItems.length > 0 ) {
        
        //     var cartTotal = this.storage.getItem( this.total );
        //     var cartShipping = this.storage.getItem( this.shippingRates );
        //     var subTot = this._convertString( cartTotal ) + this._convertString( cartShipping );
        
        //     this.$subTotal[0].innerHTML = this.currency + " " + this._convertNumber( subTot );
        //     this.$shipping[0].innerHTML = this.currency + " " + cartShipping;
        // } else {
        //     this.$subTotal[0].innerHTML = this.currency + " " + 0.00;
        //     this.$shipping[0].innerHTML = this.currency + " " + 0.00;	
        // }
        // var html = "<tr><td class='pname'>" + product + "</td>" + "<td class='pqty'><input type='text' value='" + qty + "' class='qty'/></td>";
        // html += "<td class='pprice'>" + price + "</td><td class='pdelete'><a href='' data-product='" + product + "'>&times;</a></td></tr>";
    

    $('tbody').html( $tableCartBody.html() + output );
    // $("#show-cart").html(output);
    $('#total-cart').html(this.totalCart());
    $('#totalItems').html(this.countCart());
}

// Removeds one item
onlinePizzaCart.removeItemFromCart =function (name){
    for(var i in onlinePizzaCart.cart){
        if(this.cart[i].name === name){
            this.cart[i].count --; 
            if(this.cart[i].count === 0){
                this.cart.splice(i,1);
            }
            break;
        }
    }
    this.saveCart();
}

//remove all item name
onlinePizzaCart.removeItemFromCartAll = function(name){

    for (var i in onlinePizzaCart.cart){
        if(onlinePizzaCart.cart[i].name === name){
            onlinePizzaCart.cart.splice(i,1);
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