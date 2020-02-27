AOS.init({
  duration: 1200,
  })
  
$( document ).ready(function() {
  

var h = $(window).height()

  $("#dot1").on( "click",  function() {
      $("#img1").height(h*(88/100));
      $("#img2").height(0);
      $("#img3").height(0);
     
    });

  $("#dot2").on( "click",  function() {
      $("#img2").height(h*(88/100));
      $("#img3").height(0);
      $("#img1").height(0);
     
  });

  $("#dot3").on( "click",  function() {
      $("#img3").height(h*(88/100));
      $("#img2").height(0);
      $("#img1").height(0);
     
    });
var bo = true;

  $(".indicator").click(function() {
      if (bo == true)
      {
        $("#sidenav").width(200);
        $("#asa").css("display","none");
        $("#asd").css("display","block")
        bo = false;
      }
      else
      {
        $("#sidenav").width(0);
        $("#asd").css("display","none")
        $("#asa").css("display","block")
        bo = true;
      }

});

});

