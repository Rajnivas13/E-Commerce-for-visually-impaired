<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Alan Example</title>
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
          rel="stylesheet">
</head>
<body>
<div class="alan-btn"></div>
<script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>
  function addItemToCart(name1,quantity){
    var name = name1;
    var qty = quantity;
   
     if (name ==='redmi note 8') {
      // var qty = quantity;
    //    var id = 12;
     
    // //  var XmlHttpRequest = require('xmlhttprequest').XmlHttpRequest;
    // // global.XmlHttpRequest = require('xhr2');
    //   var xhr = new XMLHttpRequest();
    //   xhr.open('GET','cart-add.php?id=12',true);
    //   xhr.send();
    //   xhr.onload=function(){
    //     console.log(this.responseText);
    //  document.getElementById('redmi').click();
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=2&qty='+qty,true);
      // xhr.open('GET','cart-add.php?qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      document.getElementById('redmi').css("Background-color","Pink");
      }
      }
      else if(name ==='Poco')
      {
        // document.getElementById('Poco').click();
        var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=2&qty='+qty,true);
      // xhr.open('GET','cart-add.php?qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      // document.getElementById('redmi').css("Background-color","Pink");
      }

     }
  }
    function removeItem(name2){
      var namee = name2;
      if (namee ==='redmi') {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=1',true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
      
      }
    }
    }
  //   function invalid(str){
      
  //     alanBtnInstance.activate();
  //     alanBtnInstance.callProjectApi("invalid", {"data":str}, function(error,result) {
	// 	if (error) {
	// 		console.error(error);
	// 		return;
	// 	}
	// 	console.log(result);
	// });
  //   }

  function login(){
    alanBtnInstance.activate();
    alanBtnInstance.callProjectApi("login", {}, function(error,result) {
		if (error) {
			console.error(error);
			return;
		}
		console.log(result);
	});
    
  }

  function carti(car){
    alanBtnInstance.activate();
    alanBtnInstance.callProjectApi("cart", {"data":car}, function(error,result) {
		if (error) {
			console.error(error);
			return;
		}
		console.log(result);
	});
    
  }

  
  


  function signup(){
    alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("signup", {}, function(error,result) {
		if (error) {
			console.error(error);
			return;
		}
		console.log(result);
	});
  }
    
    
    function name(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("name", {"data":userInput}, function(error, result) {
		if (error) {
			console.error(error);
			return;
		}
		console.log(result);
	});
    }

    function email(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("email", {"data":userInput}, function(error, result) {
		if (error) {
			console.error(error);
			return;
		}
		console.log(result);
	});
    }
    function password(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("password", {"data":userInput}, function(error, result) {
		if (error) {
			console.error(error);
			return;
		}
		console.log(result);
	});
    }

    function contact(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("contact", {"data":userInput}, function(error, result) {
		if (error) {
			console.error(error);
			return;
		}
		console.log(result);
	});
    }

    function city(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("city", {"data":userInput}, function(error, result) {
		if (error) {
			console.error(error);
			return;
		}
		console.log(result);
	});
    }
    
    function address(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("Address", {"data":userInput}, function(error, result) {
		if (error) {
			console.error(error);
			return;
		}
		console.log(result);
	});
    }
    


  var alanBtnInstance = alanBtn({
    key: "7e25fbd72b647a32609b89507078f07d2e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "add_item") {
        addItemToCart(commandData.item,commandData.quantity);
      }
      else if (commandData.command === "remove_item") {
        removeItem(commandData.item);
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });

</script>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Alan Example</title>
</head>
<body>
<div class="alan-btn"></div>
<script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>

var login= function(){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("loginwrong", {}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
  // move();
    }

    var move=function(){
      window.location="login.php";
    }
  var alanBtnInstance = alanBtn({
    key: "7e25fbd72b647a32609b89507078f07d2e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "go:back") {
        //call client code that will react to the received command
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });
</script>
</body>
</html>