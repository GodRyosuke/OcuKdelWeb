window.addEventListener("scroll", function(){
    const header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});

let nav_a = document.querySelectorAll(".nav-a");
nav_a.forEach(function(nav) {
    // nav.addEventListener('click', function() {
    //     console.log("ww");
    // });
    nav.addEventListener('click', toggleMenu);
});


function toggleMenu() {
    const menuToggle = document.querySelector(".menuToggle");
    const navigation = document.querySelector(".navigation");
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active');
}

// 3重線をクリックされたらメニュー開く
document.querySelectorAll('.fa-bars').forEach(function(bar) {
    bar.addEventListener('click', showMenu);
});
// メニュー閉じる
document.getElementById('navLinks').addEventListener('click',hideMenu);

function showMenu() {
    navLinks.style.right = "0";
    // navLinks.style.display = "block";
}
function hideMenu() {
    navLinks.style.right = "-200px";
    // navLinks.style.display = "none";
}