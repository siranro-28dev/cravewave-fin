let cartIcon = document.querySelector('#cart-icon');
let cart = document.querySelector('.cart');
let closeCart = document.querySelector('#close-cart');


cartIcon.onclick = () =>{
    cart.classList.add("active")
};

closeCart.onclick = () =>{
    cart.classList.remove("active")
};

if (document.readyState =="loading"){
    document.addEventListener("DOMContentLoaded", ready);
} else {
    ready();
}

function ready(){
    var removeCartButtons = document.getElementsByClassName("cart-remove");
    console.log(removeCartButtons);
    for (var i = 0; i < removeCartButtons.length; i++){
        var button= removeCartButtons[i];
        button.addEventListener("click",removeCartItem);
    }
    var quantityInputs = document.getElementsByClassName('cart-quantity');
    for (var i = 0; i < quantityInputs.length; i++){
        var input = quantityInputs[i];
        input.addEventListener("change", quantityChanged);
    }
    var addCart = document.getElementsByClassName('cart')
    for (var i=0; i < addCart.length; i++){
        var button = addCart[i]
        button.addEventListener('click', addCartClicked);
    }
    document
    .getElementsByClassName("btn-buy")[0]
    .addEventListener("click", buyButtonClicked);
}

function buyButtonClicked(){
    alert("Your order is placed")
    var cartContent = document.getElementsByClassName("cart-content")[0]
    while (cartContent.hasChildNodes()){
        cartContent.removeChild(cartContent.firstChild);
    }
    localStorage.removeItem("cart")
    updatetotal();
}

function removeCartItem(event){
    var buttonClicked = event.target;
    const boxDetails = buttonClicked.parentElement.getElementsByClassName("detail-box")[0]
    const title = boxDetails.getElementsByClassName("cart-product-title")[0].innerText
    let cart = JSON.parse(localStorage.getItem("cart"))
    cart = cart.filter(item=>item.title.toLowerCase() !== title.toLowerCase())
    localStorage.setItem("cart",JSON.stringify(cart))
    buttonClicked.parentElement.remove();
    updatetotal();
}

function quantityChanged(event){
    var input = event.target
    if (isNaN(input.value) || input.value <=0){
        input.value = 1;
    }
    const parentEl = input.parentElement
    const title = parentEl.getElementsByClassName("cart-product-title")[0].innerText
    console.log(parentEl)
    let cart = JSON.parse(localStorage.getItem("cart"))
    if(cart){
        cart = cart.map(item=>{
            if(item.title.toLowerCase() === title.toLowerCase()){
                return{
                    ...item,
                    quantity:input.value
                }
            }
            return item
        })
        localStorage.setItem("cart",JSON.stringify(cart))
    }
    console.log(cart)
    updatetotal(cart);
}

function addCartClicked(event){
    var button = event.target
    var shopProducts = button.parentElement
    var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
    var price = shopProducts.getElementsByClassName("price")[0].innerText;
    price = Number(price.split(".")[1])
    var productImg = document.getElementById('product-img').src;
    addProductToCart(title,price,productImg);
    //updatetotal();
}

function addProductToCart(title,price,productImg){
    /*var cartShopBox = document.createElement("div");
    cartShopBox.classList.add('cart-box')*/
    var cartItems = document.getElementsByClassName("cart-content")[0];
    var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
    for (var i=0; i < cartItemsNames.length; i++){
        alert("You have already added this item to the cart");
        return;
    }
    let cart = localStorage.getItem("cart")
    if(!cart){
        localStorage.setItem("cart",JSON.stringify([{title,price,productImg,quantity:1}]))
    }else{
        cart = JSON.parse(cart)
        const exist = cart.some(item=>item.title === title)
        if(exist)
            return
        cart.push({title,price,productImg,quantity:1})
        localStorage.setItem("cart",JSON.stringify(cart))
}   
}
function updatetotal(cart){
    var cartContent = document.getElementsByClassName('cart-content')[0];
    var cartBoxes = cartContent.getElementsByClassName('cart-box');
    var total = 0;
    /*for (var i = 0; i < cartBoxes.length; i++){
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName('cart-price')[0];
        var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
        var price = parseFloat(priceElement.innerText.replace("Rs.",""));
        var quantity = quantityElement.value;
        total = total + (price * quantity); 
    }*/
        cart.forEach(item=>{
            total +=  (item.price*item.quantity)
        })
        document.getElementsByClassName('total-price')[0].innerText="Rs." + total;
}


document.getElementById("addtocart-btn").addEventListener("click",addCartClicked)


//Showing cart 
document.getElementById("cart-icon").addEventListener("click",(e)=>{
    const cartEl = document.getElementById("cart")
    cartEl.style.right = "0"
    var cartItems = document.getElementsByClassName("cart-content")[0];
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add('cart-box')
    let cart = JSON.parse(localStorage.getItem("cart"))
    if(cart){
        cart.forEach(item=>{
            var cartBoxContent =`
            <div class="item-container">
                <img src="${item.productImg}" alt="" class="cart-img">
                <div class="detail-box">
                    <div class="cart-product-title">${item.title}</div>
                    <div class="cart-price">${item.price}</div>
                <input type="number" value=1 class="cart-quantity" >
                </div>
                <i class="far fa-trash-alt cart-remove"></i>
            </div>`
    cartShopBox.innerHTML += cartBoxContent
    cartItems.append(cartShopBox)
    const itemsRemove = cartShopBox.getElementsByClassName("cart-remove")
    const itemsChangeQuantity = cartShopBox.getElementsByClassName("cart-quantity")

    //adding event listeners on each item
    for(let i=0;i<itemsRemove.length;i++){
        itemsRemove[i].addEventListener("click", removeCartItem);
        itemsChangeQuantity[i].addEventListener("change",quantityChanged)
    }
})
    updatetotal(cart)
    }
})  

//Closing cart
document.getElementById("close-cart").addEventListener("click",()=>{
    const cartEl = document.getElementById("cart")
    cartEl.style.right = "-100%"
    var cartItems = document.getElementsByClassName("cart-content")[0];
    cartItems.innerHTML = ""
})

/*if(cart){
    cart.forEach(item=>{
        var cartBoxContent =`
        <img src="${item.productImg}" alt="" class="cart-img">
        <div class="detail-box">
            <div class="cart-product-title">${item.title}</div>
            <div class="cart-price">${item.price}</div>
            <input type="number" value="1" class="cart-quantity">
        </div>
        <i class="far fa-trash-alt cart-remove"></i>`
cartShopBox.innerHTML += cartBoxContent
cartItems.append(cartShopBox)
cartShopBox
.getElementsByClassName("cart-remove")[0]
.addEventListener("click", removeCartItem);
cartShopBox
.getElementsByClassName("cart-quantity")[0]
.addEventListener("change", quantityChanged);
    })
}/*
/*let cart = JSON.parse(localStorage.getItem("cart"))
if(!cart){
    localStorage.setItem("cart",JSON.stringify([{title,price,productImg}]))
}else{
    const exist = cart.some(item=>item.title === title)
    if(exist)
        return
    cart.push({title,price,productImg})
    localStorage.setItem("cart",JSON.stringify(cart))
}*/

/*var cartBoxContent =`
            <img src="${productImg}" alt="" class="cart-img">
            <div class="detail-box">
                <div class="cart-product-title">${title}</div>
                <div class="cart-price">${price}</div>
                <input type="number" value="1" class="cart-quantity">
            </div>
            <i class="far fa-trash-alt cart-remove"></i>`
    cartShopBox.innerHTML += cartBoxContent
    cartItems.append(cartShopBox)
    cartShopBox
    .getElementsByClassName("cart-remove")[0]
    .addEventListener("click", removeCartItem);
    cartShopBox
    .getElementsByClassName("cart-quantity")[0]
    .addEventListener("change", quantityChanged);*/