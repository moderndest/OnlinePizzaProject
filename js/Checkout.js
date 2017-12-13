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


    // console.log("hiiiiiiiii");
    // console.log(Fname);
    // console.log(Lname);
    // console.log(email);
    // console.log(addressL1);
    // console.log(addressL2);
    // console.log(zip);
    // console.log(state);
    // console.log(tel);

        // if(!Fname || !Lname || !email || !addressL1 || !addressL2 || !country || !city || !zip || !state || !tel)
        // {
        //     retuen;
        // }
        // else{
        

        var item = new onlinePizza.shippinginfo(Fname,Lname,email,addressL1,addressL2,country,city,zip,state,tel);
        shipping.push(item);
        onlinePizza.saveShipInfo();
        start="Bill";

       //openPage('Bill', start, 'orange');
        // document.getElementById(start).click();
        
        //var ele= "Bill";
       
        //}

    
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

    // if(!Fname || !Lname || !email || !addressL1 || !addressL2 || !country || !city || !zip || !state || !tel)
    // {
    //      return;
    // }
    // else{
        

        var item = new onlinePizza.shippinginfo(Fname,Lname,email,addressL1,addressL2,country,city,zip,state,tel);
        billing.push(item);
        onlinePizza.savebillingInfo();
        var ele= "Pay'";    
        start="Pay";
    // } 
        openPage('Payment', start, 'orange');

   // }

    
});



$(".btnR").click (function(event){
    console.log("savePayment");
   
    // var Fname = document.getElementsByClassName("fname")[0].value;
    // var Lname = document.getElementsByClassName("lname")[0].value;
    // var email = document.getElementsByClassName("email")[0].value;
    // var addressL1 = document.getElementsByClassName("AddLine1")[0].value;
    // var addressL2 = document.getElementsByClassName("AddLine2")[0].value;
    // var country = document.getElementsByClassName("country")[0].value;
    // var city = document.getElementsByClassName("city")[0].value;
    // var zip = document.getElementsByClassName("zip")[0].value;
    // var state = document.getElementsByClassName("state")[0].value;
    // var tel = document.getElementsByClassName("tel")[0].value;

    // if(!Fname || !Lname || !email || !addressL1 || !addressL2 || !country || !city || !zip || !state || !tel)
    // {
    //      return;
    // }
    // else{
        

        // var item = new onlinePizza.shippinginfo(Fname,Lname,email,addressL1,addressL2,country,city,zip,state,tel);
        // billing.push(item);
        // onlinePizza.savebillingInfo();
        var ele= "Re'";    
        start="Re";
    // } 
        openPage('OrderR', start, 'orange')

   // }

    
});


$(".btnP").click (function(event){
    console.log("place the order");



    // sessionStorage.setItem("valueA", '1' );
    // sessionStorage.setItem("valueB", '2' );
    // sessionStorage.setItem("valueC", '3' );
    
    // Create data object so we can submit it to the server 
    var data = {};
    for(var len = sessionStorage.length, i = 0; i < len; i++) {
        var key =  sessionStorage.key(i);
        data[key] = sessionStorage.getItem(key);
    }

    // var data = JSON.parse(sessionStorage.getItem("shoppingCart"));

    var str_json = JSON.stringify(data);
console.log(str_json);

    



    // $.post('saveOrder.php', { order: data })
    // .success(function(event) {
    //     alert('saved');
    // })
    // .error(function(event) { 
    //     alert('Error: ' + event); 
    // }); 
    var token = "test";
    
    $.ajax({
        type: "POST",
        url: "saveOrder.php",
        data: str_json,
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





