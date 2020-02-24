
$( document ).ready(function() {
    

  var h = $(window).height()

    $("#c").on( "click",  function() {

        $('.contact-section').css("display","block");
        $('.blog-section').css("display","none");
       
      });

    $("#b").on( "click",  function() {
      $('.contact-section').css("display","none");
      $('.blog-section').css("display","block");
      });
     
});

