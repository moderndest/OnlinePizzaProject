
// Online Pizza 
// Filename: Checkout.js

// Author: Chatsuda Rattarasan   
// Date: DEC 13 2017


var onlinePizza = {};
var shipping =[];
var billing =[];
var start ="defaultOpen";


onlinePizza.shippinginfo = function(Fname,Lname,email,addressL1,addressL2,country,city,zip,state,tel){
    this.Fname = Fname
    this.Lname = Lname
    this.email = email
    this.addressL1 = addressL1
    this.addressL2 = addressL2
    this.country = country
    this.city = city
    this.zip = zip
    this.state = state
    this.tel = tel
};



function openPage(pageName,elmnt,color){

        console.log(pageName);
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        // Remove the background color of all tablinks/buttons
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        // Show the specific tab content
        document.getElementById(pageName).style.display = "block";
        // Add the specific color to the button used to open the tab content
    
         document.getElementById(elmnt).style.backgroundColor = color;
    

    
}

//Add Shipping info 
$(".btnS").click (function(event){
    
    var Fname = document.getElementsByClassName("fname")[0].value;
    var Lname = document.getElementsByClassName("lname")[0].value;
    var email = document.getElementsByClassName("email")[0].value;
    var addressL1 = document.getElementsByClassName("AddLine1")[0].value;
    var addressL2 = document.getElementsByClassName("AddLine2")[0].value;
    var country = document.getElementsByClassName("country")[0].value;
    var city = document.getElementsByClassName("city")[0].value;
    var zip = document.getElementsByClassName("zip")[0].value;
    var state = document.getElementsByClassName("state")[0].value;
    var tel = document.getElementsByClassName("tel")[0].value;

        var item = new onlinePizza.shippinginfo(Fname,Lname,email,addressL1,addressL2,country,city,zip,state,tel);
        shipping.push(item);
        onlinePizza.saveShipInfo();
        start="Bill";



    
 });


//save Shipinfo to session storage
onlinePizza.saveShipInfo =function() {
    sessionStorage.setItem("shippingInfo", JSON.stringify(shipping));
}
onlinePizza.savebillingInfo =function() {
    sessionStorage.setItem("billingInfo", JSON.stringify(billing));
}



//Add Shipping info to Session Storage
$(".btnB").click (function(event){
    console.log("saveBilling");
   
    var Fname = document.getElementsByClassName("fname")[0].value;
    var Lname = document.getElementsByClassName("lname")[0].value;
    var email = document.getElementsByClassName("email")[0].value;
    var addressL1 = document.getElementsByClassName("AddLine1")[0].value;
    var addressL2 = document.getElementsByClassName("AddLine2")[0].value;
    var country = document.getElementsByClassName("country")[0].value;
    var city = document.getElementsByClassName("city")[0].value;
    var zip = document.getElementsByClassName("zip")[0].value;
    var state = document.getElementsByClassName("state")[0].value;
    var tel = document.getElementsByClassName("tel")[0].value;

        var item = new onlinePizza.shippinginfo(Fname,Lname,email,addressL1,addressL2,country,city,zip,state,tel);
        billing.push(item);
        onlinePizza.savebillingInfo();   
        start="Pay";

        openPage('Payment', start, 'orange');
  
});


// button Go to Reveiw Order
$(".btnR").click (function(event){
    console.log("savePayment");

       // we plan to keep credit credit in session but we don't have time
        start="Re";
        openPage('OrderR', start, 'orange')

 
    
});


// Button Place Order

$(".btnP").click (function(event){
    console.log("place the order");

    var order={};


   // order = JSON.parse(sessionStorage.getItem("shoppingCart"));
   // order[1] = JSON.parse(sessionStorage.getItem("billingInfo"));
    //order[2] = JSON.parse(sessionStorage.getItem("shippingInfo"));
    
    // Create data object so we can submit it to the server 
    var data = {};
    for(var len = sessionStorage.length, i = 0; i < len; i++) {
        var key =  sessionStorage.key(i);
        data[key] = sessionStorage.getItem(key);
    }

   
    
    var str_json = JSON.stringify(order);
console.log(order);


    
    // var json = jsObj2phpObj(order);
    // console.log(json);
    
    // $.post("saveOrder.php",{json:json},function(event){
    //     console.log(event);
    // });


  
    var token = "test";
    
    $.ajax({
        type: "POST",
        url: "saveOrder.php",
        data: data,
        success: function(event) {
            alert("success!");
            sessionStorage.clear();
            window.location.href = "index.php";
            
            
               },
        error: function(event) {
            alert("Placement Order error!");
        // some debug could be here
        }
        
      });
   

    
});






console.log(start);

//var blockedWorker = document.getElementById("defaultOpen").click();
// Get the element with id="defaultOpen" and click on it
 $( document ).ready(function(event) {

    document.getElementById(start).click();
   
});





function jsObj2phpObj(object){
    var json= "{";
    for(property in object){
        var value = object[property];
        if(typeof(value)=="string"){
            json += '"'+property+'":"'+ value+","

        }else{
            if(!value[0]){
                json += '"' + property+'":'+jsObj2phpObj(value)+',';
            }else{
                json += '"'+property+'":[';
                for(prop in value)json += '"' + value[prop]+'",';
                json = json.substr(0,json.length-1)+"],";
            }
        }
    }
    return json.substr(0,json.length-1)+"}";
}

