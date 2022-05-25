const menuBtns = document.querySelectorAll('.menu-btn');
const menu = document.querySelectorAll('.single-menu');
const judul = document.querySelectorAll('.jenis')

let activeBtn = "Full-Menu";

showFoodMenu(activeBtn);
showTitleMenu(activeBtn);

menuBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
        resetActiveBtn();
        showFoodMenu(btn.id);
        showTitleMenu(btn.id);
        btn.classList.add('active-btn');

    });
});

function resetActiveBtn() {
    menuBtns.forEach((btn) => {
        btn.classList.remove('active-btn');
    })
}

function showFoodMenu(newMenuBtn) {
    activeBtn = newMenuBtn;
    menu.forEach((item) => {
        if (item.classList.contains(activeBtn)) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    })
}

function showTitleMenu(newTitleBtn) {
    activeBtn = newTitleBtn;
    judul.forEach((items) => {
        if (items.classList.contains(activeBtn)) {
            items.style.display = "flex";
        } else {
            items.style.display = "none";
        }
    })
}

function toggle() {
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var popup = document.getElementById('popup');
    popup.classList.toggle('active');

}

window.addEventListener('scroll', function () {
    var scroll = this.document.querySelector('.scrollTop');
    scroll.classList.toggle("active", this.window.scrollY > 450)
})

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',

    })



}

if (localStorage.getItem('theme') == 'dark')
    setDarkMode()

function setDarkMode() {
    var m = window.matchMedia("(max-width: 990.5px ) and (min-width: 500px)")


    let ikon = ''
    let isDark = document.body.classList.toggle('darkmode')
    let teks = ''
    let teks2 = ''
    let ikon2 = ''

    if (isDark) {
        ikon = 'fas fa-sun';
        localStorage.setItem('theme', 'dark');
        teks = "Light Mode";
        ikon2 = 'fas fa-sun';



    } else {
        ikon = 'fas fa-moon';
        localStorage.removeItem('theme');
        teks = "Dark Mode";
        ikon2 = 'fas fa-moon';


        if (m.matches) {
            if (isDark) {
                teks2 = "Light Mode";
            } else {
                teks2 = "Dark Mode";

            }
        } else {
            teks2 = "";
        }

    }

    document.getElementById('dark').className = ikon
    document.getElementById('dark2').className = ikon2
    document.getElementById('mode').innerHTML = teks
    document.getElementById('mode2').innerHTML = teks2
}

var ayo = document.getElementById("ayo");
$(window).scroll(function () {
    var ayo = $(this).scrollTop();

    if (ayo > $('.menu').offset().top - 510) {
        $('.menu .single-menu').each(function (i) {
            setTimeout(function () {
                $('.menu .single-menu').eq(i).addClass('show');
            }, 50 * (i + 1));
        });
    }

});




// $(document).ready(function() {
//     $('#autoWidth').lightSlider({
//         autoWidth:true,
//         loop:true,
//         auto:true,
//         speed:500,
//         pauseOnHover:true,
//         pause:2000,
//         slideMargin:10,
//         enableTouch:true,
//         enableDrag:true,
//         prevHtml:'',
//         galleryMargin:5,
//         controls:false,
//         onSliderLoad: function() {
//             $('#autoWidth').removeClass('cS-hidden');
//         } 

//     }); 

//   });
var slider = $('#autoWidth').lightSlider({
    controls: false,
    autoWidth: true,
    loop: true,
    auto: false,
    speed: 500,
    pauseOnHover: true,
    pause: 2000,
    slideMargin: 10,
    enableTouch: true,
    enableDrag: true,
    galleryMargin: 5,
    keyPress: true,
    rtl: false,
    freeMove: true,
    onSliderLoad: function () {
        $('#autoWidth').removeClass('cS-hidden');
    }
});
$('#next').on('click', function () {
    slider.goToNextSlide();
});
$('#prev').on('click', function () {
    slider.goToPrevSlide();
});




var slider = $('#autoWidth2').lightSlider({
    controls: false,
    autoWidth: true,
    loop: true,
    auto: false,
    speed: 500,
    pauseOnHover: true,
    pause: 2000,
    // slideMargin:10,
    enableTouch: true,
    enableDrag: true,
    // galleryMargin:5,
    keyPress: true,
    rtl: false,
    freeMove: true,
    onSliderLoad: function () {
        $('#autoWidth2').removeClass('cS-hidden');
    }
});
$('#next').on('click', function () {
    slider.goToNextSlide();
});
$('#prev').on('click', function () {
    slider.goToPrevSlide();
});





function show() {
    var blur = document.getElementById('navbarNava');
    var s = document.getElementById('wrapper');
    var s2 = document.getElementById('footer');
    var t = document.getElementById('scroll');
    var u = document.getElementById('ahide');
    blur.style.width = "200px";
    s.style.filter = "blur(3px)";
    t.style.opacity = "0";
    t.style.transition = "0s";
    s.style.pointerEvents = "none";
    s2.style.filter = "blur(3px)";
}

function hide() {
    var a = document.getElementById('navbarNava');
    var b = document.getElementById('wrapper');
    var b2 = document.getElementById('footer');
    var c = document.getElementById('scroll');
    var d = document.getElementById('ahide');
    a.style.width = "0%";
    b.style.filter = "blur(0px)";
    c.style.opacity = "1";
    c.style.transition = "1s";
    b.style.pointerEvents = "all";
    b2.style.filter = "blur(0px)";

}