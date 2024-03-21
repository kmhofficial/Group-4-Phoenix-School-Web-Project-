//shopping cart 

(function() {
  // VARS
  const productsContainer = document.querySelectorAll("#product-box");
  const cartContainer = document.querySelector(".shopping-cart-container");
  const cartContent = document.querySelector("#cart-content");
  const toggleCartBtn = document.querySelector("#cart");
  const clearCartBtn = document.querySelector("#clear-cart");
  const checkoutBtn = document.querySelector("#checkout-btn");
  const totalPriceContainer = document.querySelector("#total-price");

  // FUNCTIONS

  function toggleCart() {
    // toggle shopping cart visibility
    cartContainer.classList.toggle("active");
  }

  function getLSContent() {
    // get contents from local storage.
    // if nothing is there, create an empty array
    const lsContent = JSON.parse(localStorage.getItem("products")) || [];
    return lsContent;
  }

  function setLSContent(lsContent) {
    // save content inside local storage
    localStorage.setItem("products", JSON.stringify(lsContent));
  }

  function calculateTotal(prices) {
    // calculate the total price in the cart
    return prices.reduce(function(prev, next) {
      return prev + next;
    }, 0);
  }

  function getCartItemPrices() {
    const prod = document.querySelector('#total-prod');
    var arr = [],
    getTDContent = document.querySelectorAll('tr td:nth-child(2)');
    arr = Array.prototype.map.call(getTDContent, function(item) {
   return item.textContent;
    })
    console.log(arr);
    prod.value = arr;
    
   
    // extract the price numbers from the cart items to calculate total
    const prices = [];
    // retrieve the td element in the cart where the product price is stored
    // for each product in the cart
    let nums = cartContent.querySelectorAll("tr td:nth-child(3)");

    // iterate over each td node and extract the price
    // strip the $ sign from the text, turn the string into
    // a number and push the number into the prices array
    if (nums.length > 0) {
      for (let cell = 0; cell < nums.length; cell++) {
        let num = nums[cell].innerText;
        num = num.replace(/[^\d]/g, "");
        num = parseFloat(num);
        prices.push(num);
      }
      // return the prices array
      return prices;
    } else {
      return;
    }
  }



  function displayCartTotal() {
    // display the total cost in the cart
    const prices = getCartItemPrices();
    let total = 0;
   
    if (prices) {
      total = calculateTotal(prices);
      totalPriceContainer.innerHTML = `<input type = "text" class= "pnames" name = "totalprice" value ="${total.toFixed(2)} "><span class="total">Total: $${total.toFixed(
        2
      )}</span>`;
    } else {
      totalPriceContainer.innerHTML = '<span class="total">Total: $0</span>';
    }
  }

  
  function displayProducts() {
    // display all products in the cart

    // get contents from local storage
    const lsContent = getLSContent();
    let productMarkup = "";
    // if local storage is not empty, build the
    // cart items markup and the appropriate details
    if (lsContent !== null) {
      for (let product of lsContent) {
        productMarkup += `
          <tr>
          <td style ="width:fit-content;"><img class="cart-image" src="${product.image}" alt="${
          product.name
        }" width="90"></td>
          <td style ="font-size: auto; width: 200px;">
            <input type ="text" class= "pnames" id="proditems" name = "prodnames" value= "${product.name}">${product.name}
          </td>
          <td><input type ="text" class= "pnames" name = "prodprice" value= "${product.price}">${product.price}</td>
          <td style ="width: fit-content;"><a href="#" data-id="${product.id}" class="remove"><i class="fa-solid fa-trash"></i></a></td>
          </tr>
        `;
      }
    } else {
      // if no content is in local storage, alert user
      
    }
    // add markup to DOM
    cartContent.querySelector("tbody").innerHTML = productMarkup;
  }

  function saveProduct(clickedBtn) {
    // save selected product in local storage and display it in the cart together

    // vars
    const productId = clickedBtn.getAttribute("data-id");
    
    const card = clickedBtn.parentElement.parentElement;
    const cardInfo = clickedBtn.parentElement;
    const prodImage = card.querySelector("img").src;
    const prodName = cardInfo.querySelector(".product__title").textContent;
    const prodPrice = cardInfo.querySelector(".product__price").textContent;

    let isProductInCart = false;

    // get local storage array
    const lsContent = getLSContent();

    // to avoid user adds the same course twice, check
    // the product is not in LS already before adding it
    lsContent.forEach(function(product) {
      if (product.id === productId) {
        alert("This course is already in your cart.");
        isProductInCart = true;
      }
    });

    // only if the product is not already in the cart,
    // create an object representing selected product info
    // and push it into local storage array
    if (!isProductInCart) {
      lsContent.push({
        id: productId,
        image: prodImage,
        name: prodName,
        price: prodPrice
      });

      // add product into into local storage
      setLSContent(lsContent);
      // update the display of courses in the shopping cart
      displayProducts();
    }
  }

  function removeProduct(productId) {
    // remove product from cart (and from local storage)

    // retrieve list of products from LS
    const lsContent = getLSContent();

    // get the index of the product item to remove
    // inside the local storage content array
    let productIndex;
    lsContent.forEach(function(product, i) {
      if (product.id === productId) {
        productIndex = i;
      }
    });

    // modify the items in local storage array
    // to remove the selected product item

    lsContent.splice(productIndex, 1);
    // update local storage content
    setLSContent(lsContent);

    displayProducts();
  }

  function clearCart() {
    // clear all products from cart (and local storage)

    // retrieve list of products from LS
    const lsContent = getLSContent();
    // empty array in local storage
    lsContent.splice(0, lsContent.length);
    // update local storage
    setLSContent(lsContent);
    // display cart content again
    displayProducts();
  }

  function checkout() {
    // checkout: just clear the cart
    // after user confirms the checkout process
    const cartProducts = cartContent.querySelector("tbody").innerHTML;
    if (cartProducts !== "" /*&& confirm("Are you sure you want to checkout?")*/) {
      var buyyes = document.getElementById('buy-yes');
      buyyes.addEventListener("click" ,function(e){
        
          document.querySelector('.lds-default').style.display ="inline-block";
          document.querySelector('#cart-display').innerHTML ="Loading";
            
        setTimeout(() => {
          document.querySelector('#cart-display').innerHTML ="Payment Success";
          document.querySelector('.lds-default').style.display ="none";
        }, 3200);    
        setTimeout(() => {
          clearCart();
          totalPriceContainer.innerHTML = '<span class="total">Total: $0</span>';
        }, 3500); 
        setTimeout(() => {
          document.querySelector('.checkout').style.display ="none";
          
        }, 4000); 
         
        const prod = document.querySelector('#total-prod');
        setTimeout(() => {
        prod.value ="";
      }, 4000); 
     
        
      })
    } else {
      document.querySelector('.checkout').style.display ="none";
      return;
    }
 
  }

 
  // BIND EVENTS AND CALL FUNCTIONS

  // Page load:
  document.addEventListener("DOMContentLoaded", function(e) {
    // display list of products in cart, if any, on page load
    displayProducts();
    // display cart total
    displayCartTotal();
  });

  // open and close shopping cart
  // when cart button is clicked
  toggleCartBtn.addEventListener("click", function(e) {
    e.preventDefault();
    toggleCart();
  });

  // Save product in cart and Local Storage
  // when add to cart button is clicked
  for (let i = 0; i < productsContainer.length; i++) {
  productsContainer[i].addEventListener("click", function(e) {
    if (e.target.classList.contains("add-to-cart")) {
      e.preventDefault();
      const clickedBtn = e.target;
      saveProduct(clickedBtn);
    }
  });
}
for (let i = 0; i < productsContainer.length; i++) {
  productsContainer[i].addEventListener("click", function(e) {
    if (e.target.classList.contains("add-to-cart")) {
      displayCartTotal();
    }
  });
}

  // bind removeProduct to click event of the cartContent table
  cartContent.querySelector("tbody").addEventListener("click", function(e) {
    e.preventDefault();
    // identify the button that was clicked
    const clickedBtn = e.target;
    // if it's a remove button
    if (e.target.classList.contains("fa-trash")) {
      // get the value of the data-id property, which contains the
      // id of the selected product
      const productId = clickedBtn.getAttribute("data-id");
      // use the id to remove the selected product
      removeProduct(productId);
      // display products in the cart again,
      // now the list should be displayed with 1 less product
      // or empty if no products are left in the cart

      // adjust the total
      displayCartTotal();
    }
  });

  // bind the button to clear the cart both to the function that
  // clears the cart and to the function that adjusts the total price
  clearCartBtn.addEventListener("click", function(e) {
    e.preventDefault();
    clearCart();
  });
  clearCartBtn.addEventListener("click", displayCartTotal);

  // bind the button that does the checkout both to the function that
  // controls the checkout and and to the function that adjusts the total price
  
  checkoutBtn.addEventListener("click", function(e) {
    
    
   document.querySelector('.checkout').style.display ="block";
    document.querySelector('#cart-display').innerHTML ="Do you want to buy?";
   
    
    //e.preventDefault();
    
     
    checkout();
  
  });
  checkoutBtn.addEventListener("click", displayCartTotal);
})();


var buyno= document.getElementById('buy-no');
buyno.addEventListener("click" ,function(e){
  document.querySelector('.checkout').style.display ="none";
})



var itembox =document.getElementById('showitembox');

function searchfocus(){
  var  ul, li,  i;
  ul = document.getElementById("searchitems");
   li = ul.getElementsByTagName('li');
  itembox.classList.toggle ('open');
  for (i = 0; i < li.length; i++) {
    li[i].style.display ="none";
  }
}




function searchshow(){
  var input, filter, ul, li, a, i, txtValue;
  const key = event.key; // const {key} = event; ES6+
   input = document.getElementById('search');
  filter = input.value.toUpperCase();
 ul = document.getElementById("searchitems");
 li = ul.getElementsByTagName('li');
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
   txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "flex";
    } else {
      li[i].style.display = "none";
    }
    if (key === "Backspace") {
      li[i].style.display = "none";
    }
  }
}




