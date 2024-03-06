/* 菜单 [最多8个，随机排列展示] */
var menuUrl = "https://jsui.cn";
var menuData = [
	{name:'文字广告',url:menuUrl},
	{name:'文字广告',url:menuUrl},
	{name:'文字广告',url:menuUrl},
	{name:'文字广告',url:menuUrl},
	{name:'文字广告',url:menuUrl},
	{name:'文字广告',url:menuUrl},
	{name:'文字广告',url:menuUrl},
	{name:'文字广告',url:menuUrl}
];

/* 顶部轮播 电脑端[1200*200] 手机端[500*240] */
var topData = [
	{pcImg:'https://ae01.alicdn.com/kf/U56ab7a891e254e5cad4889ed30763c2cm.jpg',mtImg:'https://ae01.alicdn.com/kf/U83594b358a264207bd9db9cb525f3a4ft.jpg',url:'https://jsui.cn'},
	{pcImg:'https://ae01.alicdn.com/kf/U56ab7a891e254e5cad4889ed30763c2cm.jpg',mtImg:'https://ae01.alicdn.com/kf/U83594b358a264207bd9db9cb525f3a4ft.jpg',url:'https://jsui.cn'},
	{pcImg:'https://ae01.alicdn.com/kf/U56ab7a891e254e5cad4889ed30763c2cm.jpg',mtImg:'https://ae01.alicdn.com/kf/U83594b358a264207bd9db9cb525f3a4ft.jpg',url:'https://jsui.cn'},
	{pcImg:'https://ae01.alicdn.com/kf/U56ab7a891e254e5cad4889ed30763c2cm.jpg',mtImg:'https://ae01.alicdn.com/kf/U83594b358a264207bd9db9cb525f3a4ft.jpg',url:'https://jsui.cn'}
];

/* 八宫格 [300*150] */
var midData = [
	{img:'https://ae01.alicdn.com/kf/U654a2c906629438e9a1bddc0684ea7954.jpg',url:'https://jsui.cn'}, //1
	{img:'https://ae01.alicdn.com/kf/U654a2c906629438e9a1bddc0684ea7954.jpg',url:'https://jsui.cn'}, //2
	{img:'https://ae01.alicdn.com/kf/U654a2c906629438e9a1bddc0684ea7954.jpg',url:'https://jsui.cn'}, //3
	{img:'https://ae01.alicdn.com/kf/U654a2c906629438e9a1bddc0684ea7954.jpg',url:'https://jsui.cn'}, //4
	{img:'https://ae01.alicdn.com/kf/U654a2c906629438e9a1bddc0684ea7954.jpg',url:'https://jsui.cn'}, //5
	{img:'https://ae01.alicdn.com/kf/U654a2c906629438e9a1bddc0684ea7954.jpg',url:'https://jsui.cn'}, //6
	{img:'https://ae01.alicdn.com/kf/U654a2c906629438e9a1bddc0684ea7954.jpg',url:'https://jsui.cn'}, //7
	{img:'https://ae01.alicdn.com/kf/U654a2c906629438e9a1bddc0684ea7954.jpg',url:'https://jsui.cn'} //8
];

/* 底部轮播 电脑端[1200*300] 手机端[500*240] */
var btmData = [
	{pcImg:'https://ae01.alicdn.com/kf/U2fa6f1e7b7fe42fcb24d23f520ff393dt.jpg',mtImg:'https://ae01.alicdn.com/kf/U83594b358a264207bd9db9cb525f3a4ft.jpg',url:'https://jsui.cn'},
	{pcImg:'https://ae01.alicdn.com/kf/U2fa6f1e7b7fe42fcb24d23f520ff393dt.jpg',mtImg:'https://ae01.alicdn.com/kf/U83594b358a264207bd9db9cb525f3a4ft.jpg',url:'https://jsui.cn'},
	{pcImg:'https://ae01.alicdn.com/kf/U2fa6f1e7b7fe42fcb24d23f520ff393dt.jpg',mtImg:'https://ae01.alicdn.com/kf/U83594b358a264207bd9db9cb525f3a4ft.jpg',url:'https://jsui.cn'},
	{pcImg:'https://ae01.alicdn.com/kf/U2fa6f1e7b7fe42fcb24d23f520ff393dt.jpg',mtImg:'https://ae01.alicdn.com/kf/U83594b358a264207bd9db9cb525f3a4ft.jpg',url:'https://jsui.cn'}
	//{pcImg:'',mtImg:'',url:'#'}
	//{pcImg:'',mtImg:'',url:'#'}
];

/* 文字列表 [可以多条，只取1条随机插入] */
var textListData = [
	//{title:'文字1',url:'#1'},
	//{title:'文字2',url:'#2'}
];

function addScript(url) {
	var script = document.createElement("script");
	script.src = url;
	document.body.appendChild(script);
}

addScript('/static/jsui/js/advertiser.js');