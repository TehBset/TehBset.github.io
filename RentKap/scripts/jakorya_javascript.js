$(function() { $('.toggles button').click(function(){ var get_id = this.id; var get_current = $('.posts .' + get_id); $('.post').not(get_current).hide(500); get_current.show(500); }); $('#showall').click(function() { $('.post').show(500); }); });﻿
$(function() { $('.toggles2 button').click(function(){ var get_id = this.id; var get_current = $('.posts .' + get_id); $('.post').not(get_current).hide(500); get_current.show(500); }); $('#showall').click(function() { $('.post').show(500); }); });﻿
$(document).ready(function() {
  $("a.scrollto").click(function() {
    var elementClick = $(this).attr("href")
    var destination = $(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({
      scrollTop: destination
    }, 800);
    return false;
  });
});
