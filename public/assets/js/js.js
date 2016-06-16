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
        $(this).parents().children('.sub_block').css('opacity','1');
      },
      function () {
        $(this).parents().children('.sub_block').css('top','-230px');
          $(this).parents().children('.sub_block').css('opacity','0');
      }
    );
     $("#carousel").owlCarousel({
          items :4 ,
    itemsCustom : false,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : true,
     baseClass : "owl-carousel",
    theme : "owl-theme",
    navigation : true,
    navigationText : ["prev","next"],
    rewindNav : true,
    scrollPerPage : false
     });
      $("#carousel-2").owlCarousel({
          items :8 ,
    itemsCustom : false,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : true,
    navigation : false,
    rewindNav : true,
    scrollPerPage : false
     });





});
$(document).ready(function() {
    var hash = window.location.hash;
    var id = hash.substring(1);
    $("#dropdown_pres"+id+"_ul").show()
    $('.present_title').click(function () {
        var id = $(this).data('id');
        $(this).parent().toggleClass("opened");
        var new_id = 'presentContent_'+id;
        $('.' + new_id).toggle('fast');
    });

    $('.dropdown_pres').click(function () {
        var id = $(this).attr('id');
        var new_id = id + '_ul';
        $('#' + new_id).toggle('fast');
    });
    $('.dropdown_pres').parent().css("text-decoration","underline").css("cursor","pointer").click(function () {
        var id = $("a",$(this)).attr('id');
        var new_id = id + '_ul';
        $('#' + new_id).toggle('fast');
    });
    jQuery("ul[id^='dropdown_pres']").addClass("list");




    $('.link').on('click', function() {
        $.get('admin/news/update/15', function(data) {
            console.log(data);
        });
    });
     
});

var heroArray = [
        '/images/ARML8833.jpg',
        '/images/IMG_6139.jpg','/images/ARML8940.jpg'
    ]
function preCacheHeros(){
    $.each(heroArray, function(){
        var img = new Image();
        img.src = this;
    });
};
 
$(window).load(function(){
    preCacheHeros();
});
var images=new Array('/images/ARML8833.jpg','/images/IMG_6139.jpg','/images/ARML8940.jpg');
var nextimage=0;
doSlideshow();

function doSlideshow(){
    if(nextimage>=images.length){nextimage=0;}
    $('.firstscreen')
    .css('background-image','url("'+images[nextimage++]+'")')

        setTimeout(doSlideshow,3000);

}