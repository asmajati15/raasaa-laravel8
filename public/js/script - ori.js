const menuBtns = document.querySelectorAll(".menu-btn");
const menu = document.querySelectorAll(".single-menu");
const judul = document.querySelectorAll(".jenis");

let activeBtn = "Full-Menu";

showFoodMenu(activeBtn);
showTitleMenu(activeBtn);

menuBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        resetActiveBtn();
        showFoodMenu(btn.id);
        showTitleMenu(btn.id);
        btn.classList.add("active-btn");
    });
});

function resetActiveBtn() {
    menuBtns.forEach((btn) => {
        btn.classList.remove("active-btn");
    });
}

function showFoodMenu(newMenuBtn) {
    activeBtn = newMenuBtn;
    menu.forEach((item) => {
        if (item.classList.contains(activeBtn)) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}

function showTitleMenu(newTitleBtn) {
    activeBtn = newTitleBtn;
    judul.forEach((items) => {
        if (items.classList.contains(activeBtn)) {
            items.style.display = "flex";
        } else {
            items.style.display = "none";
        }
    });
}

function toggle() {
    var blur = document.getElementById("blur");
    blur.classList.toggle("active");
    var popup = document.getElementById("popup");
    popup.classList.toggle("active");
}

window.addEventListener("scroll", function () {
    var scroll = this.document.querySelector(".scrollTop");
    scroll.classList.toggle("active", this.window.scrollY > 500);
});

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}

// $(document).ready(function () {
//     $("#autoWidth").lightSlider({
//         autoWidth: true,
//         loop: true,
//         onSliderLoad: function () {
//             $("#autoWidth").removeClass("cS-hidden");
//         },
//     });
// });

if (localStorage.getItem("theme") == "dark") setDarkMode();

function setDarkMode() {
    let ikon = "";
    let isDark = document.body.classList.toggle("darkmode");

    if (isDark) {
        ikon = "fas fa-sun";
        localStorage.setItem("theme", "dark");
    } else {
        ikon = "fas fa-moon";
        localStorage.removeItem("theme");
    }

    document.getElementById("dark").className = ikon;
}

// if (localStorage.getItem("theme") == "dark") setDarkMode();

// function setDarkMode() {
//     let moon = "";
//     let isDark = document.body.classList.toggle("darkmode");
//     if (isDark) {
//         moon = "fas fa-sun";
//         localStorage.setItem("theme", "dark");
//     } else {
//         moon = "fas fa-moon";
//         localStorage.setItem("theme");
//     }
//     document.getElementById("darkBtn").innerHTML = moon;
// }

// var dark = document.getElementById("dark");
// dark.onclick = function () {
//     document.body.classList.toggle("darkmode");
//     if (dark.className === "fas fa-moon") {
//         dark.className = "fas fa-sun";
//     } else {
//         dark.className = "fas fa-moon";
//     }
// };

var ayo = document.getElementById("ayo");
$(window).scroll(function () {
    var ayo = $(this).scrollTop();

    if (ayo > $(".menu").offset().top - 510) {
        $(".menu .single-menu").each(function (i) {
            setTimeout(function () {
                $(".menu .single-menu").eq(i).addClass("show");
            }, 50 * (i + 1));
        });
    }
});

// $(".img").click(function () {
//     $(this).toggleClass("resize");
// });

// function tes1() {
//     var x = document.getElementById("spesial1");
//     if (x.innerHTML === "Klik Untuk Menutup") {
//         x.innerHTML = "Cek Waktu Tersedia";
//     } else {
//         x.innerHTML = "Klik Untuk Menutup";
//     }
// }

// function tes2() {
//     var x = document.getElementById("spesial2");
//     if (x.innerHTML === "Klik Untuk Menutup") {
//         x.innerHTML = "Cek Waktu Tersedia";
//     } else {
//         x.innerHTML = "Klik Untuk Menutup";
//     }
// }

// function tes3() {
//     var x = document.getElementById("spesial3");
//     if (x.innerHTML === "Klik Untuk Menutup") {
//         x.innerHTML = "Cek Waktu Tersedia";
//     } else {
//         x.innerHTML = "Klik Untuk Menutup";
//     }
// }

$(document).ready(function () {
    $("#lightSlider01").lightSlider({
        item: 3,
        autoWidth: true,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,

        addClass: "",
        mode: "slide",
        useCSS: true,
        cssEasing: "ease", //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: "linear", //'for jquery animation',////

        speed: 400, //ms'
        auto: false,
        loop: true,
        slideEndAnimation: true,
        pause: 2000,

        keyPress: false,
        controls: false,
        prevHtml: "",
        nextHtml: "",

        rtl: false,
        adaptiveHeight: false,

        vertical: false,
        verticalHeight: 500,
        vThumbWidth: 100,

        thumbItem: 10,
        pager: true,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 5,
        currentPagerPosition: "middle",

        enableTouch: true,
        enableDrag: true,
        freeMove: true,
        swipeThreshold: 40,

        responsive: [],

        onBeforeStart: function (el) {},
        onSliderLoad: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {},
    });
    $("#lightSlider02").lightSlider({
        item: 3,
        autoWidth: true,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,

        addClass: "",
        mode: "slide",
        useCSS: true,
        cssEasing: "ease", //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: "linear", //'for jquery animation',////

        speed: 400, //ms'
        auto: false,
        loop: true,
        slideEndAnimation: true,
        pause: 2000,

        keyPress: false,
        controls: false,
        prevHtml: "",
        nextHtml: "",

        rtl: false,
        adaptiveHeight: false,

        vertical: false,
        verticalHeight: 500,
        vThumbWidth: 100,

        thumbItem: 10,
        pager: true,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 5,
        currentPagerPosition: "middle",

        enableTouch: true,
        enableDrag: true,
        freeMove: true,
        swipeThreshold: 40,

        responsive: [],

        onBeforeStart: function (el) {},
        onSliderLoad: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {},
    });
    $("#lightSlider03").lightSlider({
        item: 3,
        autoWidth: true,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,

        addClass: "",
        mode: "slide",
        useCSS: true,
        cssEasing: "ease", //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: "linear", //'for jquery animation',////

        speed: 400, //ms'
        auto: false,
        loop: true,
        slideEndAnimation: true,
        pause: 2000,

        keyPress: false,
        controls: false,
        prevHtml: "",
        nextHtml: "",

        rtl: false,
        adaptiveHeight: false,

        vertical: false,
        verticalHeight: 500,
        vThumbWidth: 100,

        thumbItem: 10,
        pager: true,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 5,
        currentPagerPosition: "middle",

        enableTouch: true,
        enableDrag: true,
        freeMove: true,
        swipeThreshold: 40,

        responsive: [],

        onBeforeStart: function (el) {},
        onSliderLoad: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {},
    });
});

// set delay 10s
// var delay = 1000;

// function loader() {
//     setTimeout(function () {
//         $("#loading").hide();
//         $(".loader").hide();
//     }, delay);
// }

// const mediaQuery = window.matchMedia('(max-width: 320px )');
// menu.forEach((item)=>{
//     if(mediaQuery.matches){
//     item.style.display = "grid";
// }
// })

// VanillaTilt.init(document.querySelectorAll(".heading"), {
//     max: 25,
//     speed: 400
//   });
