document.writeln('<div id="footer" class="footer">');
document.writeln('	<div class="area">警告：如您未滿18歲，或未滿當地法律許可的法定年齡，建議您離開本站！</div>');
document.writeln('</div>');
document.writeln('<div id="guide" class="area" style="display:none;">');
document.writeln('	<div class="guide">');
document.writeln('		<span class="pc"><a href="/" class="home" title="回首页"><span>回首页</span></a><a href="javascript:void(0)" onclick="goTop();return false;" class="gotop" title="回顶部"><span>回顶部</span></a></span>');
document.writeln('		<span class="mt"><a href="javascript:void(0)" id="btnGotop" onclick="goTop();return false;" title="回顶部"><i class="icon-top"></i></a></span>');
document.writeln('	</div>');
document.writeln('</div>');

window.baseready = (function(){
	var readyfn = [];
	var readyobj = function(fn){
		if(!!fn && typeof fn == "function"){
			readyfn.push({
				fn :fn
			});
		}
	};
	readyobj.insert = function(fn){
		if(!!fn && typeof fn == "function"){
			readyfn.push({
				fn :fn
			});	
		}
	};
	readyobj.excute = function(){
		for(var i = 0;i<readyfn.length;i++){
			if(typeof readyfn[i].fn == "function"){
				readyfn[i].fn();
			}
		}
	}
	return readyobj;
})();

var appUrl = "https://jsui.cn";
document.onreadystatechange = function () {
	if (document.readyState == 'complete') {
		if(typeof(advertiser) == 'undefined'){
			showMask("9998","0");
			var popDiv = document.createElement("dl");
			popDiv.id = "popBox";
			popDiv.setAttribute("class","pop");
			popDiv.innerHTML = '<dt>\u68c0\u6d4b\u5230\u5e7f\u544a\u88ab\u62e6\u622a</dt><dd class="sub-tips">\u8bf7\u5173\u95ed\u5e7f\u544a\u62e6\u622a<br>\u6216\u4e0b\u8f7d\u5feb\u6d3b\u89c6\u9891\x41\x50\x50</dd><dd class="app-icon"><a href="'+appUrl+'" target="_blank"></a></dd><dd class="app-desc">免费海量高清视频</dd><dd class="download"><a href="'+appUrl+'" target="_blank">立即下载</a></dd><dd class="btn-close"><a href="javascript:void(0)" onclick="hideMask();return false;"><i class="icon-close"></i></a></dd>';
			getId('maskBox').appendChild(popDiv);
		}
	}
}

baseready(function () {
	var ua = navigator.userAgent.toLowerCase();
	if (typeof(Worker) == "undefined" || ua.indexOf('mobile') > -1 && ua.indexOf('ucbrowser') > -1){
		alert("\u4e0d\u652f\u6301\u7684\u6d4f\u89c8\u5668\u7c7b\u578b\uff0c\u63a8\u8350\u4f7f\u7528\u8c37\u6b4c\u6d4f\u89c8\u5668\u3002\u6216\u4e0b\u8f7d\u5feb\u6d3b\u89c6\u9891\x41\x50\x50\uff0c\u89c2\u770b\u6d77\u91cf\u514d\u8d39\u9ad8\u6e05\u89c6\u9891\u3002");
		window.location.href = appUrl;
	}
	var isWindows = ua.match(/windows nt/i) == "windows nt";
	var isMobile = (ua.match(/windows nt/i) != "windows nt") && (ua.match(/macintosh/i) != "macintosh") && (ua.match(/pad/i) != "pad");
	var tBox = getId('topBox');
	var div = document.createElement("div");
	div.setAttribute("class","slider-wrap");
	tBox.parentNode.replaceChild(div,tBox);
	div.appendChild(tBox);
	var bBox = getId('btmBox');
	var div = document.createElement("div");
	div.setAttribute("class","area");
	bBox.parentNode.replaceChild(div,bBox);
	div.appendChild(bBox);
	var broadcast = slider(tBox,topData,{
		sliderClass : "top-box",
		intervalTime : 10000,
		isMobile:isMobile
	});
	var broadcast = slider(bBox,btmData,{
		sliderClass : "bottom-box",
		isMobile:isMobile
	});
	makhtml('subMenu,midSpons');
	if(getCookie("khspapp")!=0){
		var appTips = document.createElement("div");
		appTips.id = "appBox";
		appTips.className = "show";
		appTips.innerHTML = '<div class="app-wrap"><div class="close-bg"></div><div class="close" onclick="closeTips();return false;"></div><div class="icon"></div><div class="text"><b>秘趣视频</b><br>海量免费高清视频</div><div class="download"><a href="'+appUrl+'" onclick="closeTips();" target="_blank">立即下载</a></div></div>';
		document.body.appendChild(appTips);
		setTimeout(function(){
			appTips.removeAttribute("class");
		}, 8000);
	}
	(function(){
		var posterImages = document.querySelectorAll('.nature');
		loadImg(posterImages);
		//setTimeout(function(){loadImg(posterImages);}, 100);
		addEvent(window,'scroll',function(){
			loadImg(posterImages);
			if(getScrollTop() > 0){
				getId('nav').style.cssText = 'position:fixed;z-index:8888;top:0;left:0;width:100%;filter:alpha(opacity=95);-moz-opacity:.95;-khtml-opacity:.95;opacity:.95;';
				getId('guide').style.display = 'block';
			}else{
				getId('nav').removeAttribute("style");
				getId('guide').style.display = "none";
			}
		});
	})();
});

/* Mod */
function makhtml(str){
	if(str.indexOf('subMenu')!=-1){
		menuData.sort(randomsort);
		var subMenu = '';
		subMenu+='<dl>';
		subMenu+='<dt><a href="/" target="_blank" rel="nofollow">推荐</a></dt>';
		for (var i = 0; i < menuData.length; i++) {
			subMenu+='	<dd><a href="'+menuData[i].url+'" target="_blank" rel="nofollow">'+menuData[i].name+'</a></dd>';
		}
		subMenu+='</dl>';
		getId('subMenuBox').innerHTML = subMenu;
	}
	if(str.indexOf('midSpons')!=-1){
		midData.sort(randomsort);
		var midSpons = '';
		midSpons+='<div class="area">';
		midSpons+='	<div class="mod-row col4">';
		midSpons+='		<ul class="clearfix">';
		for (var i = 0; i < midData.length; i++) {
			midSpons+='			<li><a href="'+midData[i].url+'" target="_blank" rel="nofollow"><img src="/static/jsui/images/empty_288_144.jpg" /><img class="spon-img" src="'+midData[i].img+'" alt="" /><span>\u5e7f\u544a</span></a></li>';
		}
		midSpons+='		</ul>';
		midSpons+='	</div>';
		midSpons+='</div>';
		getId('midBox').innerHTML = midSpons;
	}
}

/* LazyLoad */
function loadImg(arr){
	for (var i = 0, len = arr.length; i < len; i++) {
		if(arr[i].getBoundingClientRect().top < document.documentElement.clientHeight && !arr[i].isLoad) {
			arr[i].isLoad = true;
			arr[i].style.cssText = 'transition:0;opacity:0;';
			if(arr[i].dataset){
			aftLoadImg(arr[i],arr[i].dataset.original);  
		}else{
			aftLoadImg(arr[i],arr[i].getAttribute('data-original'));
		}
		(function(i){
			setTimeout(function(){
				arr[i].style.cssText = 'transition:1s;opacity:1;';
			},16)
		})(i);
		}
	}
}

function aftLoadImg(obj, url) {
	var oImg = new Image();
	oImg.onload = function(){
		obj.src = oImg.src;
	}
	oImg.src = url;
}

/* Silder */
;(function() {
	function SliderQfl(el, sliderData, JSON) {
		if (el == null || (sliderData == null)) {
			//console.log("请传入节点或者图片数据及链接！");
			return;
		}
		this.el = el;
		this.sliderData = sliderData;
		this.isMobile = JSON.isMobile || false;
		this.sliderClass = JSON.sliderClass;
		this.transitionTime = JSON.transitionTime || 10;
		this.intervalTime = JSON.intervalTime || 5000;
		this.createDom(this.el, this.sliderData, this.sliderClass);
		this.init(el, this.intervalTime);
	}
	SliderQfl.prototype.init = function(dom, intervalTime) {
		var self = this;
		this.curIndex = 0;
		this.timer = null;
		this.lock = true;
		this.oBox = dom;
		this.broadcastMe = this.oBox.getElementsByTagName('div')[0];
		this.broadcastMeList = this.broadcastMe.getElementsByTagName('div')[0];
		this.broadcastMeItem = this.broadcastMeList.getElementsByTagName('div');
		this.itemLen = this.broadcastMeItem.length;
		this.moveWidth = this.oBox.offsetWidth;
		this.broadcastMeList.style.width = this.moveWidth * this.itemLen + 'px';
		for (var i = 0; i < this.broadcastMeItem.length; i++) {
			this.broadcastMeItem[i].style.width = this.moveWidth + 'px';
		}
		this.broadcastMe.style.width = this.moveWidth + 'px';
		this.broadcastMeTool = getClass('broadcastMe-tool',dom)[0];
		this.broadcastMeSpot = this.broadcastMeTool.getElementsByTagName('div');
		MeToolWidth = parseInt(getStyle(this.broadcastMeTool, 'width'));
		this.broadcastMeTool.style.marginLeft = '-75px';
		this.broadcastMeBtnLeft = getClass('broadcastMe-btn-left',dom)[0];
		this.broadcastMeBtnRight = getClass('broadcastMe-btn-right',dom)[0];
		this.timer = setTimeout(self.autoMove.bind(self), intervalTime);
		this.bindEvent();
	}
	SliderQfl.prototype.rowImg = function(row){
		var img = row.img || row.pcImg;
		if(this.isMobile){
			img = row.mtImg || img;
		}
		return img;
	}
	SliderQfl.prototype.createDom = function(el, sliderData, sliderClass) {
		sliderData.sort(randomsort);
		var str = '';
		var len = sliderData.length;
		var imgEl = '';
		var spotEl = '';
		for (var i = 0; i < len; i++) {
			imgEl += '<div class="broadcastMe-item">' +
				'<a href="'+sliderData[i].url+'" target="_blank" rel="nofollow"><img src="'+this.rowImg(sliderData[i])+'" /></a></div>'
			if (i == 0) {
				spotEl += '<div class="broadcastMe-spot active"></div>'
			} else {
				spotEl += '<div class="broadcastMe-spot"></div>'
			}
		}
		str += '<div class="broadcastMe"><div class="broadcastMe-list '+sliderClass+'">' + imgEl +
			'<div class="broadcastMe-item"><a href="'+sliderData[0].url+ '" target="_blank" rel="nofollow"><img src="'+this.rowImg(sliderData[0])+'" /></a></div></div>' +
			'<div id="broadcastMe-tool" class="broadcastMe-tool">' + spotEl +
			'</div><div id="broadcastMe-btn-left" class="broadcastMe-btn broadcastMe-btn-left"> &lt; </div>' +
			'<div id="broadcastMe-btn-right" class="broadcastMe-btn broadcastMe-btn-right"> &gt;</div></div>'
		el.innerHTML = str;
	}
	SliderQfl.prototype.autoMove = function(direction, isCb) {
		var self = this;
		var curLeft = parseInt(getStyle(this.broadcastMeList, 'margin-left'));
		var eWidth = this.moveWidth;
		var num = this.itemLen - 2;
		clearTimeout(self.timer);
		if (self.lock) {
			self.lock = false;
			if (!direction || direction == 'toRight') {
				self.curIndex++;
				if (curLeft == -eWidth * num) self.curIndex = 0;
				self.renderSpot(self.curIndex);
				self.startMove(self.broadcastMeList, {
					'margin-left': curLeft - eWidth
				}, function() {
					if (curLeft == -eWidth * num) {
						self.broadcastMeList.style.marginLeft = '0px';
						self.curIndex = 0;
					}
					if (!isCb) {
						self.timer = setTimeout(self.autoMove.bind(self), 5000);
					}
					self.lock = true;
				})
			} else if (direction == "toLeft") {
				if (curLeft == 0) {
					self.broadcastMeList.style.marginLeft = -eWidth * (num + 1) + 'px';
					self.curIndex = num + 1;
				}
				self.curIndex--;
				self.renderSpot(self.curIndex);
				curLeft = parseInt(getStyle(this.broadcastMeList, 'margin-left'));
				self.startMove(self.broadcastMeList, {
					'margin-left': curLeft + eWidth
				}, function() {
					if (!isCb) {
						self.timer = setTimeout(self.autoMove.bind(self), 5000);
					}
					self.lock = true;
				})
			}
		}
	}
	SliderQfl.prototype.bindEvent = function() {
		var self = this;
		addEvent(self.broadcastMeBtnLeft, 'click', function() {
			self.autoMove('toLeft', true);
		});
		addEvent(self.broadcastMeBtnRight, 'click', function() {
			self.autoMove('toRight', true);
		})
		addEvent(self.broadcastMe, 'mouseenter', function() {
			clearTimeout(self.timer);
		})
		addEvent(self.broadcastMe, 'mouseleave', function() {
			self.timer = setTimeout(self.autoMove.bind(self), 3000);
		})
		for (var i = 0; i < this.broadcastMeSpot.length; i++) {;
			(function(i) {
				addEvent(self.broadcastMeSpot[i], 'click', function(e) {
					self.lock = false;
					clearTimeout(self.timer);
					self.curIndex = i;
					self.renderSpot(self.curIndex);
					self.startMove(self.broadcastMeList, {
						'margin-left': -i * self.moveWidth
					}, function() {
						self.lock = true;
					})
				})
				addEvent(self.broadcastMeSpot[i], 'touchend', function(e) {
					self.lock = false;
					clearTimeout(self.timer);
					self.curIndex = i;
					self.renderSpot(self.curIndex);
					self.startMove(self.broadcastMeList, {
						'margin-left': -i * self.moveWidth
					}, function() {
						self.lock = true;
					})
				})
			}(i));
		}
		function touchstart(e) {
			var flag = true;
			var _self = self;
			e.returnValue = true;
			var startTop = _self.offsetTop;
			var touchstart = e.targetTouches[0];
			var endPos = {};
			var offsetPos = {}
			var startPos = {
				x: touchstart.pageX,
				y: touchstart.pageY
			}
			function touchmove(e) {
				var self = _self;
				e.returnValue = true;
				var touchmove = e.targetTouches[0];
				endPos = {
					x: touchmove.pageX,
					y: touchmove.pageY
				}
				offsetPos = {
					x: endPos.x - startPos.x,
					y: endPos.y - startPos.y
				}
				if (offsetPos.x < 0) {
					self.autoMove('toRight', true)
				} else {
					self.autoMove('toLeft', true);
				}
			}
			addEvent(_self.broadcastMe, 'touchmove', touchmove);
			window.touchend = function(e) {
				var self = _self;
				e.returnValue = true;
				if(flag){
					flag = false;
					self.timer = setTimeout(self.autoMove.bind(self), 3000);
				}
				removeEvent(self.broadcastMe, 'touchmove', touchmove);
				removeEvent(self.broadcastMe, 'touchstart', touchstart);
			}
			addEvent(_self.broadcastMe, 'touchend', touchend);
		}
		addEvent(self.broadcastMe, 'touchstart', touchstart)
	}
	SliderQfl.prototype.renderSpot = function(index) {
		for (var i = 0; i < this.broadcastMeSpot.length; i++) {
			this.broadcastMeSpot[i].className = '';
		}
		this.broadcastMeSpot[index].className = 'active'
	}
	SliderQfl.prototype.startMove = function(dom, attrObj, callback) {
		var self = this;
		clearInterval(dom.timer);
		if (attrObj['opacity'] !== undefined) attrObj['opacity'] *= 100;
		dom.timer = setInterval(function() {
			var bStop = true;
			for (var attr in attrObj) {
				if (attr == 'opacity') {
					iCur = parseFloat(getStyle(dom, attr)) * 100;
				} else {
					iCur = parseInt(getStyle(dom, attr));
				}
				iSpeed = (attrObj[attr] - iCur) / 7;
				iSpeed = iSpeed > 0 ? Math.ceil(iSpeed) : Math.floor(iSpeed);
				if (attr == 'opacity') {
					dom.style[attr] = (iCur + iSpeed) / 100;
				} else {
					dom.style[attr] = iCur + iSpeed + 'px';
				}
				if (iCur != attrObj[attr]) {
					bStop = false;
				}
			}
			if (bStop) {
				clearInterval(dom.timer);
				typeof callback == 'function' && callback();
			}
		}, self.transitionTime)
	}
	if (!Function.prototype.bind) {
		Function.prototype.bind = function(oThis) {
			if (typeof this !== "function") {
				throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");
			}
			var aArgs = Array.prototype.slice.call(arguments, 1),
				fToBind = this,
				fNOP = function() {},
				fBound = function() {
					return fToBind.apply(this instanceof fNOP && oThis ? this : oThis,
						aArgs.concat(Array.prototype.slice.call(arguments)));
				};
			fNOP.prototype = this.prototype;
			fBound.prototype = new fNOP();
			return fBound;
		};
	}
	window.slider = slider = function(el, sliderData, JSON) {
		return new SliderQfl(el, sliderData, JSON);
	}
})(window);

function setColList(e){
	var date = new Date();
	//var y = date.getFullYear();
	var m = date.getMonth()+1;
	var d = date.getDate();
	if(m<10) m = "0"+m;
	if(d<10) d = "0"+d;
	md = m+"-"+d;
	if(textListData.length != 0){
		textListData.sort(randomsort);
		var getLi = document.querySelectorAll('#'+e+' li');
		var ranNum = getRandomNumberByRange(1,getLi.length-1);
		var creLi = document.createElement("li");
		var ranSpon = Math.floor(Math.random()*textListData.length);
		creLi.innerHTML = '<li><a href="'+textListData[ranSpon].url+'" target="_blank" rel="nofollow"><em></em><span>'+md+'</span><h2>'+textListData[ranSpon].title+'</h2></li>';
		getLi[ranNum].parentNode.insertBefore(creLi,getLi[ranNum]);
	}
	var getEm = document.querySelectorAll('#'+e+' em');
	for(var i=0,l=getEm.length;i<l;i++){
		getEm[i].innerHTML = (prefixInteger(i+1,2))+".";
	}
}

function showMask(zIndex,top){
	var mask = document.createElement("div");
	mask.id = "maskBox";
	mask.setAttribute("class","mask");
	mask.style.cssText = "z-index:"+zIndex+";top:"+top+"px;";
	document.body.appendChild(mask);
	window.onmousewheel = document.onmousewheel=function() {return false};
}

function hideMask(){
	maskBox.parentNode.removeChild(maskBox);
	window.onmousewheel = document.onmousewheel=function() {return true};
}

function closeTips(){
	getId('appBox').removeAttribute("class");
	setCookie("khspapp","0");
}

function goTop(){
	var goTop = setInterval(scrollMove, 10);
	function scrollMove(){
		setScrollTop(getScrollTop() / 2);
		if (getScrollTop() == 0) clearInterval(goTop);
	}
}

function getFixedHeight() {
	if(document.body.scrollHeight > 1500) {
		return {
			top: document.body.scrollHeight/3,
			bottom: document.body.scrollHeight/12
		};
	} else {
		return {
			top: document.body.scrollHeight/10,
			bottom: "-1"
		}
	}
}

function getScrollTop(){
　　var scrollTop = 0, bodyScrollTop = 0, documentScrollTop = 0;
　　if(document.body){
　　　　bodyScrollTop = document.body.scrollTop;
　　}
　　if(document.documentElement){
　　　　documentScrollTop = document.documentElement.scrollTop;
　　}
　　scrollTop = (bodyScrollTop - documentScrollTop > 0) ? bodyScrollTop : documentScrollTop;
　　return scrollTop;
}

function getScrollHeight(){
　　var scrollHeight = 0, bodyScrollHeight = 0, documentScrollHeight = 0;
　　if(document.body){
　　　　bodyScrollHeight = document.body.scrollHeight;
　　}
　　if(document.documentElement){
　　　　documentScrollHeight = document.documentElement.scrollHeight;
　　}
　　scrollHeight = (bodyScrollHeight - documentScrollHeight > 0) ? bodyScrollHeight : documentScrollHeight;
　　return scrollHeight;
}

function getWindowHeight(){
　　var windowHeight = 0;
　　if(document.compatMode == "CSS1Compat"){
　　　　windowHeight = document.documentElement.clientHeight;
　　}else{
　　　　windowHeight = document.body.clientHeight;
　　}
　　return windowHeight;
}

function setScrollTop(value){
	if (document.documentElement.scrollTop){
		document.documentElement.scrollTop = value;
	}else{
		document.body.scrollTop = value;
	}
}

function addEvent(obj,type,fn){
	if(obj.addEventListener) obj.addEventListener(type,fn,false);
	else if(obj.attachEvent){
		obj["e"+type+fn]=fn;
		obj[type+fn]=function(){obj["e"+type+fn](window.event);}
		obj.attachEvent("on"+type,obj[type+fn]);
	}
}

function removeEvent(obj,type,fn){
	if(obj.removeEventListener) obj.removeEventListener(type,fn,false);
	else if(obj.detachEvent){
		obj.detachEvent("on"+type,obj[type+fn]);
		obj[type+fn]=null;
		obj["e"+type+fn]=null;
	}
}

function randomsort(a, b) {
	return Math.random() > .5 ? -1 : 1;
}

function getRandomNumberByRange(start, end) {
	return Math.round(Math.random() * (end - start) + start)
}

function getImage(idName,num) {
	return document.getElementById(idName).getElementsByTagName('img')[num].clientHeight;
}

function getId(idName) {
	return document.getElementById(idName);
}

function getStyle(dom, attr) {
	if (window.getComputedStyle) {
		return window.getComputedStyle(dom, null)[attr];
	} else {
		return dom.currentStyle[attr];
	}
}

function getClass(clsName,oParent) {
	var oParents = (typeof(oParent) == "object") ? oParent : (!!oParent ? document.getElementById(oParent) : document);
	var boxArr = new Array();
	var oElements  = oParents.getElementsByTagName('*');
	for(i=0;i<oElements.length;i++){
		var classname = oElements[i].className || '';
		var classNameArr = (classname+"").split(/\s+/);
		for (j = 0; j < classNameArr.length; j++) {
			if(classNameArr[j] === clsName){
				boxArr.push(oElements[i]);
			}
		}
	}
	return boxArr;
}

function setCookie(name,value){
	var days = 7;
	var exp = new Date();
	exp.setTime(exp.getTime() + days*24*60*60*1000);
	document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
}

function getCookie(name){
	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
	return (arr=document.cookie.match(reg))?unescape(arr[2]):null;
}

function removeCookie(name){
	var exp = new Date();
	exp.setTime(exp.getTime() - 1);
	var cval=getCookie(name);
	if(cval!=null)
	document.cookie= name + "="+cval+";expires="+exp.toGMTString();
}

function prefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

baseready.excute();