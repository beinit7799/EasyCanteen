//ADDING ITEMS ON CART
loadCart();
function loadCart(){
    let cart = JSON.parse(localStorage.getItem('cart'));
    console.log(cart);
    cart.forEach(item => {
        let generateDiv = ` <img class="item-img"  src=''>
                                <div class="item-attributes">
                                    <div class="item-name"><span class="inme">${item.itemName}</span>
                                        <span class="item-qty">${item.itemQty}</span>
                                    </div>
                                    <div class="item-price">Rs.<span class="itmPrc">${item.itemPrice}</span></div>
                                </div>
                                <i class="fa-solid fa-trash-can icon delete-btn"></i>`;

        let cartDiv = document.querySelector('.cartDiv');
        let cartItems = document.createElement('div');
        cartItems.classList.add("cart-items");
        cartDiv.appendChild(cartItems);

        cartItems.innerHTML = generateDiv;
    });
}

//DELETING ITEMS FROM CART
let deleteBtns = document.querySelectorAll(".delete-btn");
let updatedCart = JSON.parse(localStorage.getItem('cart'));

for(let i=0;i<deleteBtns.length;i++){
    deleteBtns[i].addEventListener("click",function(){
        deleteItem(i);
    });
}
function deleteItem(i){
    for(j=0;j<updatedCart.length;j++){
        if(j==i){
            updatedCart.splice(i,1);    
            localStorage.setItem('cart',JSON.stringify(updatedCart));
            // let cartDiv = document.querySelector('.cartDiv');
            // let cartItems = document.querySelectorAll('.cart-items');
            // try{
            //     cartDiv.removeChild(cartItems[i]);
            // }
            // catch(err){
            //     console.log(err);
            //     location.reload();
            // }
        }
    }
    location.reload();
    // totalItemsOnCart();
}

//TOTAL NO OF ITEMS ON CART
totalItemsOnCart();
function totalItemsOnCart(){
    let totalNoOfItemsOnCart = document.querySelector(".total-items-on-cart");
    totalNoOfItemsOnCart.innerText = updatedCart.length;
    
    let emptyCartText = document.querySelector(".empty-cart-text");
    if(updatedCart.length == 0){
        emptyCartText.innerText = "Cart Empty";
    }else{
        emptyCartText.innerText = null;
    }
}

//BILLING  
generateBill();
function generateBill(){
    let totalPrice = document.querySelector(".ttlPrc");
    let serviceCharge = document.querySelector(".sCharge");
    let totalAmount = document.querySelector(".ttlAmt");

    let allItemsPrice = document.querySelectorAll(".itmPrc");
    let tp = 0;
    allItemsPrice.forEach((ip)=>{
        tp += parseInt(ip.innerText);
        // console.log('price Added');
    });
    totalPrice.innerText = tp;
    serviceCharge.innerText = parseFloat(0.05 * tp).toFixed(2);






    let ta = 0;
    ta = (parseFloat(tp) + parseFloat(serviceCharge.innerText)).toFixed(2);
    totalAmount.innerText = ta;
    
    console.log(parseFloat(serviceCharge.innerText));
}





//GENERATE RESPECTIVE IMAGES
let itemImages = document.querySelectorAll('.item-img');
for(let i=0;i<updatedCart.length;i++){ 
    if(updatedCart[i].itemName == "Daal Bhat"){
        itemImages[i].setAttribute('src','https://ik.imagekit.io/dzz/easycanteen/tr:w-100/dal-bhat-recipe-local-food-260nw-583966321_WdRXfgEjs.png?ik-sdk-version=javascript-1.4.3&updatedAt=1654779704877');
    }
    else if(updatedCart[i].itemName == "Samosa"){
        itemImages[i].setAttribute('src','https://ik.imagekit.io/dzz/easycanteen/tr:w-100/kabir-cheema-8T9AVksyt7s-unsplash_Fs62hdFvv.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1654776222643');
    }
    else if(updatedCart[i].itemName == "Chowmein"){
        itemImages[i].setAttribute('src','https://ik.imagekit.io/dzz/easycanteen/tr:w-100/5bd3a3027c65045b93886002d2c788bf_Ky1WH6gLe.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1654776367355');
    }
    else if(updatedCart[i].itemName == "Momo"){
        itemImages[i].setAttribute('src','https://ik.imagekit.io/dzz/easycanteen/tr:w-100/tek-bahadur-bj07uo3SnhM-unsplash_Gwuj-RbcWj.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1654776280913');
    }
    else if(updatedCart[i].itemName == "Fried Rice"){
        itemImages[i].setAttribute('src','https://ik.imagekit.io/dzz/easycanteen/tr:w-100/5bd3a3027c65045b93886002d2c788bf_Ky1WH6gLe.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1654776367355');
    }

}



