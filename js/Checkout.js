var onlinePizza = {};
var shipping =[];
var billing =[];



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
$(".btnS").click (function(){
    
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


    // console.log("hiiiiiiiii");
    // console.log(Fname);
    // console.log(Lname);
    // console.log(email);
    // console.log(addressL1);
    // console.log(addressL2);
    // console.log(zip);
    // console.log(state);
    // console.log(tel);
    if(!Fname || !Lname || !email || !addressL1 || !addressL2 || !country || !city || !zip || !state || !tel)
    {
        return;
    }
    else{
        

        var item = new onlinePizza.shippinginfo(Fname,Lname,email,addressL1,addressL2,country,city,zip,state,tel);
        shipping.push(item);
        onlinePizza.saveShipInfo();
        var ele= "Bill";
        openPage('Billing',ele,'orange');
    }

    
});


//save Shipinfo to session storage
onlinePizza.saveShipInfo =function() {
    sessionStorage.setItem("shippingInfo", JSON.stringify(shipping));
}
onlinePizza.savebillingInfo =function() {
    sessionStorage.setItem("billingInfo", JSON.stringify(billing));
}



//Add Shipping info to Session Storage
$(".btnB").click (function(){
    
   


    if(!Fname || !Lname || !email || !addressL1 || !addressL2 || !country || !city || !zip || !state || !tel)
    {
        return;
    }
    else{
        

        var item = new onlinePizzaCart.shippinginfo(Fname,Lname,email,addressL1,addressL2,country,city,zip,state,tel);
        billing.push(item);
        onlinePizzaCart.saveShipInfo();
        var ele= "Pay'";        
        openPage('Payment', ele, 'orange');

    }

    
});

var blockedWorker = document.getElementById("defaultOpen").click();
// document.getElementById("defaultOpen").click();

// Get the element with id="defaultOpen" and click on it
//
// $( document ).ready(function() {
   
    
// });

