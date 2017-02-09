/* ##################################### */
/* ### Работа мобильного меню снизу ######### */
/* ##################################### */
$(".accountpage__mobilenav li").click(function(){
  if (!$(this).hasClass("active")) {
    $(this).siblings().removeClass("active");
    $(this).addClass("active");
  }
});

/* ##################################### */
/* ### Появление меню выбора оператора ######### */
/* ##################################### */
$(".accountpage__technics-cardlinkoperator").click(function(event){
  event.stopPropagation();
  $(this).parents(".accountpage__technics-card").siblings().find(".accountpage__technics-cardlinkoperator.active").removeClass("active");
  $(this).toggleClass("active");
});

$(".accountpage__technics-cardlinkoperator li").click(function(){
  var newoperator = $(this).text();
  $(this).parents(".accountpage__technics-cardlinkoperator").addClass("chosen").contents()[0].textContent=newoperator;
});

$("html").click(function(){
  $(".accountpage__technics-cardlinkoperator").removeClass("active");
});

/* ##################################### */
/* ### Клик по "Отметить бронь" ######### */
/* ##################################### */
$(".accountpage__technics-cardlinkcheck").click(function(){
  $(this).addClass("checked").contents()[0].textContent="Сохранить";
});
