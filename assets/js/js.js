jQuery(document).ready(function(){
$objWindow = $(window);
$('div[data-type="background"]').each(function(){
var $bgObj = $(this);
$(window).scroll(function() {
var yPos = -($objWindow.scrollTop() / $bgObj.data('speed'));
var coords = '1050% '+ yPos + 'px';
$bgObj.css({ backgroundPosition: coords });
});
});

$(".top_block").hover(
      function () {
        $(this).parents().children('.sub_block').css('top','-10px');
      },
      function () {
        $(this).parents().children('.sub_block').css('top','-160px');
      }
    );
     $("#carousel").owlCarousel(); 
    
});