jQuery(function($){




  $(function(){
    $(".p-concept__box").click(function(){
      alert("test");
    })
  })




  $(".openbtn1").click(function(){
    $(this).toggleClass('active');

    if($(".openbtn1").hasClass("active")){
      $("#fixed-s-header").addClass("active");
      $(".nav-back").addClass("active");
      $(".nav-back").addClass("active");

    }else{
          $("#fixed-s-header").removeClass('active');
    $(".nav-back").removeClass('active');
    $(".links").removeClass('active');
      };



  });


    $(".nav-back,#fixed-s-header").click(function () {
    $(".openbtn1").removeClass('active');
    $("#fixed-s-header").removeClass('active');
    $(".nav-back").removeClass('active');
    $(".links").removeClass('active');
  });


  const fh = document.getElementById('fixed-header');
  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 100) {
      fh.classList.add('is-show');
    } else {
      fh.classList.remove('is-show');
    }
  });








})

