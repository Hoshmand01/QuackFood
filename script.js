
function hideObsBurger() {
  
    var objects = document.getElementsByClassName("Foodch container");
    var hiddenObjects = document.getElementsByClassName("hidden-burger")[0];
  
    for (var i = 0; i < objects.length; i++) {
      objects[i].style.display = "none";
  
    }
    
    hiddenObjects.style.display = "block";
    
  }
  
  
  function hideObsPizza() {
    var objects = document.getElementsByClassName("Foodch container");
    var hiddenObjects = document.getElementsByClassName("hidden-pizza")[0];
  
    for (var i = 0; i < objects.length; i++) {
      objects[i].style.display = "none";
    }  
    
    hiddenObjects.style.display = "block";
  }
  
  
  function hideObsChips() {
    var objects = document.getElementsByClassName("Foodch container");
    var hiddenObjects = document.getElementsByClassName("hidden-chips")[0];
  
    for (var i = 0; i < objects.length; i++) {
      objects[i].style.display = "none";
    } 
    
    hiddenObjects.style.display = "block";
  }
  
  
  function hideObsChicken() {
    var objects = document.getElementsByClassName("Foodch container");
    var hiddenObjects = document.getElementsByClassName("hidden-chicken")[0];
  
    for (var i = 0; i < objects.length; i++) {
      objects[i].style.display = "none";
    }  
    
    hiddenObjects.style.display = "block";
  }
  
  /*
  
  
  
      
     // document.getElementById("bchicken").style.display = "block";
  
  
    
  
  
  */
  
  
  
     function Back() {
  
      var object1 = document.getElementsByClassName("hidden-burger");
      var object2 = document.getElementsByClassName("hidden-pizza");
      var object3 = document.getElementsByClassName("hidden-chips");
      var object4 = document.getElementsByClassName("hidden-chicken");

      var hiddenObjects = document.getElementsByClassName("Foodch container")[0];
    
      for (var i = 0; i < object1.length; i++) {
        object1[i].style.display = "none";
      }
      for (var i = 0; i < object2.length; i++) {
        object2[i].style.display = "none";
      }
      for (var i = 0; i < object3.length; i++) {
        object3[i].style.display = "none";
      }
      for (var i = 0; i < object4.length; i++) {
        object4[i].style.display = "none";
      }
      
      hiddenObjects.style.display = "block";
      
      scrollToElement("Foodch");

      function scrollToElement(elementId) {
        var element = document.getElementById(elementId);
        element.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    }

    ///////

    var cartItems = [];

function addToCart(itemName, itemPrice) {
  var item = {
    name: itemName,
    price: itemPrice
  };
  
  cartItems.push(item);
  updateCart();
}

function updateCart() {
  var cartDiv = document.getElementById("cart");
  cartDiv.innerHTML = "";
  
  if (cartItems.length === 0) {
    cartDiv.innerHTML = "<p>Your cart is empty.</p>";
    return;
  }
  
  var total = 0;
  
  for (var i = 0; i < cartItems.length; i++) {
    var item = cartItems[i];
    
    var itemDiv = document.createElement("div");
    itemDiv.innerHTML = "<p>" + item.name + " - $" + item.price + "</p>";
    
    cartDiv.appendChild(itemDiv);
    
    total += item.price;
  }
  
  var totalDiv = document.createElement("div");
  totalDiv.innerHTML = "<p>Total: $" + total + "</p>";
  
  cartDiv.appendChild(totalDiv);
}


///////////



function buyItems() {
  if (cartItems.length === 0) {
    alert("Your cart is empty. Please add items before buying.");
    return;
  }
  
  // Implement your purchase logic here
  
  // Clear the cart after successful purchase
  cartItems = [];
  updateCart();
}
