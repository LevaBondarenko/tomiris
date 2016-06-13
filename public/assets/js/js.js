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