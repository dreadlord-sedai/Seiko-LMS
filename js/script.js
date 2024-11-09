function changeView() {
    var signInBox = document.getElementById("registration");
    var signUpBox = document.getElementById("login");

    signInBox.classList.toggle("d-none");
    signUpBox.classList.toggle("d-none");
}

const navEl = document.querySelector(".nav");
const hamburgerEl = document.querySelector(".hamburger");
const navLink1 = document.querySelector(".nav__item1");
const navLink2 = document.querySelector(".nav__item2");
const navLink3 = document.querySelector(".nav__item3");
const navLink4 = document.querySelector(".nav__item4");
const LRbuttons = document.querySelector(".LRbuttons");

hamburgerEl.addEventListener("click", () => {
    navEl.classList.toggle("nav--open");
    hamburgerEl.classList.toggle("hamburger--open");
    LRbuttons.classList.toggle("nav--open");
});

navLink1.addEventListener("click", () => {
    navEl.classList.remove("nav--open");
    hamburgerEl.classList.remove("hamburger--open");
    LRbuttons.classList.remove("nav--open");
});

navLink2.addEventListener("click", () => {
    navEl.classList.remove("nav--open");
    hamburgerEl.classList.remove("hamburger--open");
});

navLink3.addEventListener("click", () => {
    navEl.classList.remove("nav--open");
    hamburgerEl.classList.remove("hamburger--open");
});

navLink4.addEventListener("click", () => {
    navEl.classList.remove("nav--open");
    hamburgerEl.classList.remove("hamburger--open");
});

function toggleDropdown(){
    const dropdown = document.querySelector(".user__dropdown");
    dropdown.classList.toggle("active");
}

jQuery(document).ready(function ($) {
    $(".slider-img").on("click", function () {
      $(".slider-img").removeClass("active");
      $(this).addClass("active");
    });
});

function showButton__cardSlide(clickedSlide){
    const activeSlide = document.querySelector(".slider-img.button1");
    if(activeSlide){
        activeSlide.classList.remove("button1");
    }
    clickedSlide.classList.add("button1");
}

function changeView() {
    var signInBox = document.getElementById("registration");
    var signUpBox = document.getElementById("login");

    signInBox.classList.toggle("d-none");
    signUpBox.classList.toggle("d-none");
}

function changeProfileImg(){
    
    var img = document.getElementById("profile__image");
    
    img.onchange = function (){
        var file = this.files[0];
        var url = window.URL.createObjectURL(file);
        document.getElementById("img").src = url;
    }
    alert("ok");
}

function signUp(){
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("s__email");
    var mobile = document.getElementById("mobile");
    var password = document.getElementById("s__password");
    var rtpassword = document.getElementById("re__type__password");
    var image = document.getElementById("profile__image");

    var form = new FormData();
    form.append("f",fname.value);
    form.append("l",lname.value);
    form.append("e",email.value);
    form.append("m",mobile.value);
    form.append("p",password.value);
    form.append("r",rtpassword.value);
    form.append("i",image.files[0]);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            var response = request.responseText;
            alert(response);
        }
    };

    request.open("POST","signUpProcess.php",true);
    request.send(form);
}

