const addToCartBtn = document.getElementById("addtocart")

addToCartBtn.addEventListener("click",(e)=>{
    const productName = document.getElementById("product")
    const productPrice = document.getElementById("price")
    const cart = JSON.parse(localStorage.getItem("cart"))
    if(!cart){
        const cartString = JSON.stringify([{
            name:productName.innerText,
            price:productPrice.innerText
        }])
        localStorage.setItem("cart",cartString)
    }else{
        cart.push({
            name:productName.innerText,
            price:productPrice.innerText
        })
        localStorage.setItem("cart",JSON.stringify(cart))
    }
    
})