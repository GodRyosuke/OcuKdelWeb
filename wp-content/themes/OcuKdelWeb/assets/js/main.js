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

// フォームの送信
jQuery(function ($) {
    // $("#referrer").val(document.referrer);
    $("#mailform").submit(function(){ 
      $.ajax({
        url : './form-handler.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize()
      })
    //   .done( function(data){
    //     $("#dispmsg").empty();
    //     $("#dispmsg").html(data.dispmsg);
    //     if(data.errflg != 1){
    //       $("#mailform").remove();
    //     }
    //   })
      .fail( function(data){
        alert('メール送信に失敗しました');
      })
      return false;
    });
  });

// blog pageのside bar
// $( document ).ready(function() {
//     var $sticky = $('.sticky');
//     var $stickyrStopper = $('.sticky-stopper');
//     if (!!$sticky.offset()) { // make sure ".sticky" element exists
  
//         var generalSidebarHeight = $sticky.innerHeight();
//         var stickyTop = $sticky.offset().top;
//         var stickOffset = 0;
//         var stickyStopperPosition = $stickyrStopper.offset().top;
//         var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
//         var diff = stopPoint + stickOffset;
    
//         $(window).scroll(function(){ // scroll event
//             var windowTop = $(window).scrollTop(); // returns number
    
//             if (stopPoint < windowTop) {
//                 $sticky.css({ position: 'absolute', top: diff });
//             } else if (stickyTop < windowTop+stickOffset) {
//                 $sticky.css({ position: 'fixed', top: stickOffset });
//             } else {
//                 $sticky.css({position: 'absolute', top: 'initial'});
//             }
//         });
  
//     }
// });


// while (1) {
//     let UserInput = window.prompt("パスワードを入力して下さい:","");
//     if( /\W+/g.test(UserInput) ) {
//         // ▼半角英数字以外の文字が存在したらエラー
//         alert("半角英数字のみを入力して下さい。");
//      } else if ((UserInput != null) ) {
//         location.href = UserInput + ".html";
//         break;
//     }
// }

// アクセス制限用
// function gate() {
//  }
//  document.querySelectorAll('.limit_access').forEach(function(button) {
//      button.addEventListener('click', gate);
//  });