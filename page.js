$(function() {

  var lastScrollTop = 0;
  var mobileMode = 0;

  function changeFormat() {

    $(window).width() < 980 ? $(".sh_text").hide() : $(".sh_text").show();

    if($(window).width() < 650) {
      $(".sh_button").hide();
      $(".sh_dropdown").hide();
      $(".sh_divider").hide();
      $("#menu").show();
      $("#sidebar").show();
      $(".logo").css("margin-left", "5%");
      mobileMode = 1;
    } else {
      $(".sh_button").show();
      $(".sh_dropdown").show();
      $(".sh_divider").show();
      $("#menu").hide();
      $("#sidebar").hide();
      $(".logo").css("margin-left", "3%");
      $(".logo").css("visibility", "visible");
      $("#header").removeClass("h_small");
      mobileMode = 0;
    }
  }

  $(window).scroll(function() {
    if ($(document).scrollTop() <= 100) {
      $("#header").addClass("h_big");
      $("#header").removeClass("h_small");
      $("#header").removeClass("h_small_up");
      $(".sh_button, .sh_dropdown_btn").addClass("sh_btn_big");
      $(".sh_button, .sh_dropdown_btn").removeClass("sh_btn_small");
      $(".menubar").addClass("m_big");
      $(".menubar").removeClass("m_small");
      $(".sidenav").addClass("sn_big");
      $(".sidenav").removeClass("sn_small");
    } else {

      var st = $(this).scrollTop();
      if(mobileMode > 0 && $("#sidebar").width() <= 0) {
        if (st < lastScrollTop){
          $("#header").removeClass("h_small");
          $("#header").addClass("h_small_up");
          $(".logo").css("visibility", "visible");
        } else {
          $("#header").removeClass("h_small_up");
          $("#header").addClass("h_small");
          $(".logo").css("visibility", "hidden");

        }
      } else {
        $("#header").addClass("h_small_up");
      }

      lastScrollTop = st;

      $("#header").removeClass("h_big");
      $(".sh_button, .sh_dropdown_btn").addClass("sh_btn_small");
      $(".sh_button, .sh_dropdown_btn").removeClass("sh_btn_big");
      $(".menubar").addClass("m_small");
      $(".menubar").removeClass("m_big");
      $(".sidenav").addClass("sn_small");
      $(".sidenav").removeClass("sn_big");
    }
  });

  $(window).resize(function() {
    changeFormat();
  });

  $(".mid").on('click',
  function() {
      if($("#sidebar").width() > 0) {
        $("#sidebar").css("width", "0");
        $("#menu").toggleClass("sh_menu sh_menu_b");
        $("#menu").toggleClass("change");
      }
  });

  $(".sh_menu").on('click',
  function() {
      if ($(document).scrollTop() > 100) {
        $("#header").removeClass("h_small");
        $("#header").addClass("h_small_up");
        $(".logo").css("visibility", "visible");
      }
      if($("#sidebar").width() > 0) {
        $("#sidebar").css("width", "0");
        $("#menu").toggleClass("sh_menu sh_menu_b");
        $("#menu").toggleClass("change");
      } else {
        $("#sidebar").css("width", "250px");
        $("#menu").toggleClass("sh_menu sh_menu_b");
        $("#menu").toggleClass("change");
      }
  });

  $(".mid").on('mouseDown',
  function() {

  });

  changeFormat();

});
