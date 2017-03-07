/* ########################### */
/* Эффект ховера по категории */
/* ########################### */
$(".technics__category").hover(function(){
    $(this).siblings(".technics__category").addClass("darkened");
}, function(){
    $(this).siblings(".technics__category").removeClass("darkened");
});


/* ########################### */
/* Переход к шагу 2 */
/* ########################### */
$(".technics__category").click(function(){
    $(this).addClass("active-step-two");
    $(".technics__choose-type_nextwo, .technics__additionals").addClass("active-step-two");
    secondimages();
});

/* ########################### */
/* Переход к шагу 2,5 */
/* ########################### */
$(".technics__fullfilter").click(function(){
    $(".technics__choose-type_nexthree").addClass("active-step-two-half");
    $(".technics__allfilters").addClass("active-step-three");
    $(".technics__allfilters_filterlist").addClass("active-step-three");
});


/* ########################### */
/* Переход к шагу 3 */
/* ########################### */
$(".technics__allfilters_filterlist li").click(function(){
    $(".technics__choose-type_nextwo, .technics__additionals").addClass("active-step-two");

    $(".technics__step-three-summary").addClass("active-step-three");
    $(".technics__allfilters-scrollarea").addClass("active-step-three");
    $(".technics__choose-type_nexthree").removeClass("active-step-two-half");
    $(".technics__allfilters_filterlist").removeClass("active-step-three");

    $(".technics__category:nth-of-type(2)").addClass("active-step-three");
});


/* ########################### */
/* Возврат к предыдущим шагам */
/* ########################### */
function calcfirststep() {
    $(".technics__category").removeClass("active-step-two");
    $(".technics__choose-type_nextwo, .technics__additionals").removeClass("active-step-two");
    $(".technics__choose-type_subtype_nexthree").removeClass("active-step-two-half");
    $(".technics__allfilters").removeClass("active-step-three");
}

function calcsecondstep() {
    $(".technics__category.active-step-three").addClass("active-step-two").removeClass("active-step-three");

    $(".technics__step-three-summary, .technics__allfilters, .technics__allfilters-scrollarea").removeClass("active-step-three");
}

$("[data-gotostep]").click(function(){
    if ($(this).data("gotostep") === 1) {
        calcfirststep();
    }
    if ($(this).data("gotostep") === 2) {
        calcsecondstep();
    }
});


/* ########################### */
/* Ховер по подкатегориям на 2 шаге */
/* ########################### */
function secondimages() {
    $(".technics__subtype-list li").hover(function(){
        var img = $(this).data("image");
        $(".technics__category.active-step-two .technics__category-secondimage img").attr("src", img);
        $(".technics__category.active-step-two .technics__category-secondimage").addClass("active");
    });

    $(".technics__choose-type_nextwo").on("mouseout", function(){
        $(".technics__category.active-step-two .technics__category-secondimage").removeClass("active");
    });

    $(".technics__subtype-list li").click(function(){
        $(".technics__category.active-step-two").removeClass("active-step-two").addClass("active-step-three");
        $(".technics__step-three-summary, .technics__allfilters, .technics__allfilters-scrollarea").addClass("active-step-three");
    });
}


/* ########################### */
/* Слайдеры */
/* ########################### */
$(".parameter-slider").each(function(){
    var minimum = $(this).find(".slider").data("from");
    var maximum = $(this).find(".slider").data("to");
    var mincont = $(this).find(".number_from");
    var maxcont = $(this).find(".number_to");

    mincont.val(minimum+(maximum-minimum)*0.15);
    maxcont.val(maximum-(maximum-minimum)*0.15);

    $(this).find(".slider").slider({
        range: true,
        min: 0,
        max: maximum,
        values: [minimum+(maximum-minimum)*0.15, maximum-(maximum-minimum)*0.15],
        slide: function(event, ui) {
            mincont.val(ui.values[0]);
            maxcont.val(ui.values[1]);
            leftinfo();
        }
    });
});


/* ################################################### */
/* Анимированное появление всех элементов калькулятора */
/* ################################################### */

function animateinit() {
    $(".technics").addClass("animation-on");

    setTimeout(function(){
        $(".technics__choose-type_first .technics__rotating-gear").addClass("rotating-on");
    }, 1500);

    setTimeout(function(){
        $(".technics").removeClass("animation-off").removeClass("animation-on");
    }, 2300);
}









/* ################################################### */
/* Функции запрета/разрешения скролла */
/* ################################################### */

// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
/*
var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;  
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function disableScroll() {
  if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null; 
    window.onwheel = null; 
    window.ontouchmove = null;  
    document.onkeydown = null;  
}*/









/* ################################################### */
/* Поэкранный скролл первых блоков */
/* ################################################### */
window.newscroll;
var isFirefox = typeof InstallTrigger !== 'undefined';
var isChrome = !!window.chrome && !!window.chrome.webstore;
window.sc = $("body"); // scroll container

if (isFirefox) {
  window.sc = $("html");
}

window.firstblock = $(".firstscreen");
window.secondblock = $(".technics");
window.thirdblock = $("section.advantages");

$(document).ready(function(){
    var st = $(window).scrollTop();
    if (st < thirdblock.offset().top - thirdblock.outerHeight()/2) {
    }
});

function scrollAnim() {
    sc.animate({scrollTop: newscroll}, 800, "easeOutCubic");
}

$(window).bind('DOMMouseScroll mousewheel', function(e){
    sc.stop(); // Прерываем активную анимацию скролла
    window.st = sc.scrollTop();

    function scrolll() {
      if (parseInt(e.originalEvent.wheelDelta || -e.originalEvent.detail) > 0) {
          // Скроллим вверх
          
          // Скролл ко второму блоку
          if (st > secondblock.offset().top && st <= thirdblock.offset().top) {
              e.preventDefault();
              newscroll = secondblock.offset().top;
              if ($(".technics__allfilters-scrollarea:hover").length > 0) {
                  newscroll = secondblock.offset().top;
              }
              scrollAnim();
              animateinit();
          }
          
          // Скролл к первому блоку
          if (st > firstblock.offset().top && st <= secondblock.offset().top) {
              e.preventDefault();
              newscroll = firstblock.offset().top;
              if ($(".technics__allfilters-scrollarea:hover").length > 0) {
                  newscroll = secondblock.offset().top;
              }
              scrollAnim();
          }
          
          if (st > secondblock.offset().top && st <= thirdblock.offset().top && $(".technics__allfilters-scrollarea:hover").length > 0 ) {
              sc.animate({scrollTop: secondblock.offset().top}, 1, "easeOutCubic");
          }
      } else {
          // Скроллим вниз
          
          // Скролл ко второму блоку
          if (st >= firstblock.offset().top && st < secondblock.offset().top) {
              e.preventDefault();
              newscroll = secondblock.offset().top;
              scrollAnim();
              animateinit();
          }
          
          // Скролл ко третьему блоку
          if (st >= secondblock.offset().top && st < thirdblock.offset().top) {
              e.preventDefault();
              newscroll = thirdblock.offset().top;
              if ($(".technics__allfilters-scrollarea:hover").length > 0) {
                  newscroll = secondblock.offset().top;
              }
              scrollAnim();
          }
      }
    }
    
    scrolll();
});













/*
$(window).bind('DOMMouseScroll mousewheel', function(e){
    sc.stop(); // Прерываем активную анимацию скролла
    window.scrolltop = sc.scrollTop();

    function scrolll() {
      if (parseInt(e.originalEvent.wheelDelta || -e.originalEvent.detail) > 0) {
          // Скроллим вверх
          newscroll = scrolltop - 300;

          // Скролл к 1 экрану
          if (newscroll < secondblock.offset().top) {
              newscroll = 0;
              activescreen = "first";
          }

          // Скролл к 2 экрану
          if (thirdblock.length > 0) {
          if (newscroll < thirdblock.offset().top && newscroll > secondblock.offset().top) {
              newscroll = secondblock.offset().top;
              activescreen = "second";
              animateinit();

              if ($("header").hasClass("active")) {
              $("header").removeClass("active");
              setTimeout(function(){
                  $("header").removeClass("fixed").attr("style", "");
              },250);
              }
          }
          }
      } else {
          // Скроллим вниз
          newscroll = scrolltop + 300;

          console.log(newscroll);

          // Скролл к 2 экрану
          if (newscroll < secondblock.offset().top && newscroll > firstblock.offset().top) {
              newscroll = secondblock.offset().top;
              activescreen = "second";
              animateinit();
          }

          // Скролл к 3 экрану
          if (activescreen != "third") {
              if (thirdblock.length > 0) {
              if (newscroll < thirdblock.offset().top+$(window).height() && newscroll >           secondblock.offset().top) {
                  newscroll = thirdblock.offset().top;
                  activescreen = "third";

                  $("header").addClass("fixed");
                  setTimeout(function(){
                      $("header").addClass("active").css("transition", "transform .25s ease-in-out");
                  },1);
              }
              }
              
          } else {
              newscroll = scrolltop + 300;
          }
      }

      sc.animate({scrollTop: newscroll}, 800, "easeOutCubic");
    }

    if ($(".technics__allfilters:hover").length>0) {
      // Считаем максимальный скролл
      /*window.maxscroll = 0;
      $(".technics__allfilters-scrollarea>*").each(function(){
        maxscroll += $(this).outerHeight(true);
      });
      maxscroll += ($(".technics__allfilters-scrollarea").outerHeight(true)-$(".technics__allfilters-scrollarea").innerHeight());
      console.log($(".technics__allfilters-scrollarea").scrollTop()+$(".technics__allfilters-scrollarea").outerHeight() + " " + maxscroll);
      if ($(".technics__allfilters-scrollarea").scrollTop()+$(".technics__allfilters-scrollarea").outerHeight() >= maxscroll) {
        scrolll();
      }*/
/*
    } else {
      scrolll();
      e.preventDefault();
    }
});*/





// Запускаем анимацию, если активен 2 экран
/*
$(document).ready(function(){
    if (sc.scrollTop() < secondblock.offset().top && sc.scrollTop() > firstblock.offset().top) {
        activescreen = "second";
        animateinit();
    }
});

console.log(sc.scrollTop());
console.log(secondblock.offset().top/2);
console.log(thirdblock.offset().top);*/
/*
$(document).ready(function(){
   if (sc.scrollTop() >= (secondblock.offset().top/2) && (sc.scrollTop() < thirdblock.offset().top)) {
    animateinit();
   }
});

$(window).scroll(function(){
    if (thirdblock.length > 0) {
  if (sc.scrollTop() >= (secondblock.offset().top/2) && (sc.scrollTop() < thirdblock.offset().top)) {
   animateinit();
  }
    }
});
*/















// AJAX отправка формы

// Делаем поисковую плашку активной
function activesearchfilter() {
    $(".header__searchform.searchform").addClass("active activesearch");
}

// Показываем прелоадер
function showpreloader() {
    $(".page-preloader").show();
    setTimeout(function(){
        $(".page-preloader").addClass("active");
    }, 1);
    //fixscreen();
}

// Скрываем прелоадер
function hidepreloader() {
    $(".page-preloader").removeClass("active");
    setTimeout(function(){
        $(".page-preloader").show();
    }, 1);
    //unfixscreen();
}

// Проверяем наличие параметров поиска в урл
if (window.location.search.indexOf('type=') > -1) {
    searchinit();
    console.log(location.search);

    setTimeout(function(){

    $.ajax({
        url:'searchhtml.php',
        type:'GET',
        beforeSend:function(){
        },
        data:location.search,
        success:function(data){
            $('#page-content').html(data);
            setTimeout(function(){hidepreloader();},1000);
            //setTimeout(function(){unfixscreen();},1010);
        }
    });

    },500);
}

// Запускаем анимацию показа поиска
function searchinit() {
    $("body").removeClass("mainpage");
    showpreloader();
    activesearchfilter();
    sc.animate({scrollTop: 0}, 500, "easeOutCubic");
    console.log($(this).serialize());
}

// По клику на кнопку - отправляем форму в калькуляторе
$(".technics [href='#submit-form']").click(function(event){
  alert("hello");
    event.preventDefault();
    $(".technics__allfilters")[0].submit();
});

$(".searchform.header__searchform, .firstscreen .searchform, .technics__allfilters").submit(function(event){
    event.preventDefault();
    event.stopPropagation();
    searchinit();
    var parameters = $(this).serialize();
    window.history.pushState('searchhtml', 'FODERENT | Поиск', '?'+parameters);

    setTimeout(function(){

    $.ajax({
        url:'searchhtml.php',
        type:'GET',
        beforeSend:function(){
        },
        data:$(this).serialize(),
        success:function(data){
            $('#page-content').html(data);
            setTimeout(function(){hidepreloader();},1000);
        }
    });

    },500);
    return false;
});
