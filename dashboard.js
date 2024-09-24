//Slider ------------------------------------
let i = 0;
let images = [];
var time = 6000;

images[0] = 'https://ik.imagekit.io/dzz/easycanteen/tr:w-1000/banner4_CrH63wAta.png?ik-sdk-version=javascript-1.4.3&updatedAt=1658576178438';
images[1] = 'https://ik.imagekit.io/dzz/easycanteen/tr:w-1000/banner1alter_-HvQjSllx.png?ik-sdk-version=javascript-1.4.3&updatedAt=1658574614531';
images[2] = 'https://ik.imagekit.io/dzz/tr:w-1000/easycanteen/banner2_dhIN6tX_iM.png?ik-sdk-version=javascript-1.4.3&updatedAt=1658573982931';
images[3] = 'https://ik.imagekit.io/dzz/easycanteen/tr:w-1000/banner3_1__x84lTnIF0.png?ik-sdk-version=javascript-1.4.3&updatedAt=1658575193170';

slider();
function slider(){
    document.slideImg.src = images[i];

    if(i < images.length-1){
        i++;
    }
    else{
        i=0;
    }

    setTimeout(slider,time);
}

///////////////////////////////////////////


const leftArrow = document.querySelector(".left-arrow");
const rightArrow = document.querySelector(".right-arrow");

leftArrow.addEventListener("click",()=>{
    changeSlide("prev");
});
rightArrow.addEventListener("click",()=>{
    changeSlide("next");
});

function changeSlide(direction){

    if(direction == 'next'){
        i++;
        if(i >= images.length){
            i=0;
        }
    }else{
        if(i == 0){
            i = images.length -1;
        }
        i--;
    }
    document.slideImg.src = images[i];

}


///////////  USER PROFILE
let userIcon = document.querySelector('.user-icon');
let userDetails = document.querySelector('.user-profile');
userIcon.addEventListener("click",()=>{
    userDetails.classList.add('active');
});

let closeBtn = document.querySelector('.user-profile-close-btn')
closeBtn.addEventListener("click",()=>{
    userDetails.classList.remove('active');
});


//Ratings
const rating4 = document.querySelectorAll(".rating4");
rating4.forEach((r)=>{
    r.innerHTML = `<i class="fa-solid fa-star green-text"></i>
                        <i class="fa-solid fa-star green-text"></i>
                        <i class="fa-solid fa-star green-text"></i>
                        <i class="fa-solid fa-star green-text"></i>
                        <i class="fa-regular fa-star green-text"></i>`;
});

const rating3 = document.querySelectorAll(".rating3");
rating3.forEach((r)=>{
    r.innerHTML = `<i class="fa-solid fa-star green-text"></i>
                        <i class="fa-solid fa-star green-text"></i>
                        <i class="fa-solid fa-star green-text"></i>
                        <i class="fa-regular fa-star green-text"></i>
                        <i class="fa-regular fa-star green-text"></i>`;
});

const rating2 = document.querySelectorAll(".rating2");
rating2.forEach((r)=>{
    r.innerHTML = `<i class="fa-solid fa-star green-text"></i>
                        <i class="fa-solid fa-star green-text"></i>
                        <i class="fa-regular fa-star green-text"></i>
                        <i class="fa-regular fa-star green-text"></i>
                        <i class="fa-regular fa-star green-text"></i>`;
});

//CART INDICATOR
const cartIndicator = document.querySelector(".cart-indicator");
let cartData = JSON.parse(localStorage.getItem("cart"));
cartIndicator.innerText = cartData.length;
