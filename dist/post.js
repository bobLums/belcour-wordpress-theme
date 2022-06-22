
jQuery(document).ready(function($){
  //you can now use $ as your jQuery object.
  $(".postContent").children("style").remove();
  $('[class*="wp-image"]').wrap('<div class="w-100 mx-auto">');
  $('[class*="wp-image"]').addClass("img-responsive hover-shadow botMarg");
  $('[class*="wp-image"]').width("100%").height("auto");
  $("iframe").wrap('<div class="mx-auto w-100 mt-3 mb-4"><div class="embed-responsive embed-responsive-16by9">');
  $("iframe").addClass("embed-responsive-item");
  $(".gallery").wrapInner('<div class="row dynRow"></div>');
  $(".dynRow").children('br').remove();
  $(".dynRow").find('dt').unwrap();
  $(".dynRow").find('a').unwrap();
  $(".dynRow").find('a').wrap('<div class="col sidePad botMarg"></div>');
  $('[class*="attachment"]').width("100%").height("auto");
  $('[class*="attachment"]').addClass("img-responsive hover-shadow");
});