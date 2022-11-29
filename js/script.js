$(document).ready(function(){
  var lighdark = 0
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $('.carousel.carousel-slider').carousel({
      fullWidth: true
    }, setTimeout(autoplay, 2500));
    $('.collapsible').collapsible();
    $('.modal').modal();
    $('.modaltest').modal();
    $('.dropdown-trigger').dropdown({
      coverTrigger: false,
      hover: false,
      closeOnClick: true,
    });
    $( "#tigger1" ).click(function() {
      lighdark += 1
      if(lighdark %2 == false)
      {
        $(".test").removeClass("dark-mode");
        $(".timeline").removeClass("timeline-darkmode");
      }
      else if(lighdark %2 == true){
        $(".test").addClass("dark-mode");
        $(".collapsible").removeClass("dark-mode");
        $(".timeline").addClass("timeline-darkmode");
      }
    });
    

    var ppp = 0
    $( "#image" ).click(function() {
      ppp += 1
      if(ppp %2 == false)
      {
        $("#image").attr('src','img/pp-pacome.jpg');  
      }
      else if(ppp %2 == true){
        $("#image").attr('src','img/pp1.jpg');  
      }
    });

    var ppr = 0
    $( "#image1" ).click(function() {
      ppr += 1
      if(ppr %2 == false)
      {
        $("#image1").attr('src','img/pp-remi.jpg');  
      }
      else if(ppr %2 == true){
        $("#image1").attr('src','img/pp2.jpg');  
      }
    });

  });
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 2500);
}


  

 
  

