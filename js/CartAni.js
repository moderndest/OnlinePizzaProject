
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
    onlinePizzaCart.addItemToCart(name,price,1);
    onlinePizzaCart.displayCart();

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

});

//Plus items
$("#tbody").on("click",".plus-item", function(event){
    var name = $(this).attr("data-name");

    onlinePizzaCart.addItemToCart(name, 0, 1);
    onlinePizzaCart.displayCart();
});

//subtract items
$("#tbody").on("click",".subtract-item", function(event){
    var name = $(this).attr("data-name");
    onlinePizzaCart.removeItemFromCart(name);
    onlinePizzaCart.displayCart();
});

//Delete all items in the row
$("#tbody").on("click",".delete-item",function(event){
    var name = $(this).attr("data-name");
    onlinePizzaCart.removeItemFromCartAll(name);
    onlinePizzaCart.displayCart();
});

// empty cart
$("#clear-cart").click(function(event){
    onlinePizzaCart.clearCart();
    onlinePizzaCart.displayCart();
});

//change quantity
$("#tbody").on("change",".item-count",function(event){
    var name = $(this).attr("data-name");
    var count = Number($(this).val());
    console.log(name);
    console.log(count);
    onlinePizzaCart.setCountForItem(name, count);
    onlinePizzaCart.displayCart();
    
});


// onlinePizzaCart.loadCart();
onlinePizzaCart.displayCart();
// console.log("Shopping Cart:cart");
// console.log(onlinePizzaCart.cart);
// //console.log("Global Cart:cart");
// // console.log(cart);


// var array = onlinePizzaCart.listCart();
// console.log("----------------------");
// console.log(array);

// var someText =">>>";
// someText +="AAAA"
// console.log(someText);

