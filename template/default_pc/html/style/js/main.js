var domainslogn = document.domain;

$("#target").html("https://"+domainslogn);
$("#page_target").html(window.location.href);
$(".domainslogn_palyer").append(domainslogn);
$(".domainslogn_help").html(domainslogn);

function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
  catch (e) {
      try {
          window.sidebar.addPanel(title, url, "");
      }
      catch (e) {
          alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用浏览器菜单进行添加");
      }
  }
}

$(document).ready(function(){

  $(".f_h").click(function(){
    $("html,body").animate({scrollTop:0},500);
  }); 
  $(".menu ul li.a_n").click(function(){
    $(".lm_fl").slideToggle();
  }); 
  $(".m-footer button.navFooter").click(function(){
    $(".lm_fl").slideToggle();
  }); 
  $(".gd_bq .g_d").click(function(){
    $(this).toggleClass("on");
	$(this).siblings(".b_q").toggleClass("on");
  });      
  var clipboard = new ClipboardJS('#copy_btn');    
  clipboard.on('success', function(e) {    
    alert("链接已复制，粘贴发送给好友即可"); 
    e.clearSelection();    
    //console.log(e.clearSelection);    
  });
  var page_clipboard = new ClipboardJS('#copy_page_btn');    
  page_clipboard.on('success', function(f) {    
    alert("链接已复制，粘贴发送给好友即可"); 
    f.clearSelection();    
    //console.log(e.clearSelection);    
  });
  
  $(function() {
    $("img.lazy").lazyload({
      threshold : 400,
      effect : "fadeIn"
    });
  });
  

  function goPAGE() {
    if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
        /*mobile*/
        
    } else {
        /*pc*/
        //$(".y_p_f").css( { width : image_show_width, marginLeft : y_p_f_margin, marginRight : y_p_f_margin } );
    }
  }
  goPAGE();

});