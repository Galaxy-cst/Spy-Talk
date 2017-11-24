<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="lightning-zgc">
  <meta name="description" content="SPY-TALK.NET">
  <meta name="keywords" content="SPY-TALK 隐私保护 信息传递">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="Access-Control-Allow-Origin" content="https://spy-talk.net">
  <title>SPY-TALK</title>

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileColor" content="#0e90d2">

  <link rel="stylesheet" href="assets/css/amazeui.min.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/css/typeit.min.css">
  <!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/typeit.min.js"></script>
  <style>
      div#img1{display:none};
  </style>
  <script src="pass.js"></script>
  <script>
function load(){
type1();
}
function type1(){
$('.mainp1').typeIt({
     whatToType: ["SPY-TALK在线聊天室", "隶属于Lightning云实验室闪点计划","风过无声   雁过无痕"],
     typeSpeed: 250,
     breakLines: false,
     lifeLike: true,
     showCursor: true,
     breakWait: 1500
     
});
}
</script>
</head>
<body onload="load()">
  <header data-am-widget="header"
          class="am-header am-header-default" data-am-sticky>
      <div class="am-header-left am-header-nav">
          <a href="" class="">
              <span class="am-header-nav-title">
                主页
              </span>

                <i class="am-header-icon am-icon-home"></i>
          </a>
      </div>

      <h1 class="am-header-title" id="title">
          主页
      </h1>

      <div class="am-header-right am-header-nav">
                <div class="am-dropdown" data-am-dropdown>
  <button class="am-btn am-btn-primary am-dropdown-toggle" data-am-dropdown-toggle>
      <span class="am-header-nav-title">目录</span>
      <i class="am-header-icon am-icon-bars"></i>
    </button>
  <ul class="am-dropdown-content" onblur="$('.am-dropdown').dropdown('close');" onfocus="$('.am-dropdown').dropdown('close');">
    <li class="am-dropdown-header">简介</li>
        <li class="am-divider"></li>
    <li><a href="/">欢迎页</a></li>
    <li><a href="javascript:mov('SPY的原理');">SPY的原理</a></li>
    <li class="am-disabled"><a href="javascript:;">源代码</a></li>
    <li class="am-divider"></li>
    <li class="am-dropdown-header">开启SPY旅程</li>
        <li class="am-divider"></li>
    <li><a href="javascript:mov('新建');">新建</a></li>
    <li><a href="javascript:mov('接收方');">接收方</a></li>
    <li class="am-divider"></li>
    <li class="am-dropdown-header">更多……</li>
        <li class="am-divider"></li>
    <li><a href="javascript:;"
  data-am-modal="{target: '#your-modal', closeViaDimmer: 0}">捐赠</a></li>
    <li><a href="javascript:mov('建议&意见');">建议&意见</a></li>
    <li class="am-divider"></li>
    <li class="am-dropdown-header">我们的社区</li>
        <li class="am-divider"></li>
    <li><a href="http://tieba.baidu.com/f?kw=spy_talk" target="_blank">贴吧</a></li>
    <li><a href="https://coding.net/u/lightning/p/spy-talk2.0/git" target="_blank">Coding</a></li>
    <li class="am-disabled"><a href="">独立论坛</a></li>
  </ul>
</div>
          
      </div>
  </header>
<div id="animation">
<div id="mainbody">
    <div class="am-g">
    <div class="am-u-sm-6 am-u-sm-centered" id="head">
<br>
<h2 align="center">SPY-TALK</h2>
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<p align="center" class="mainp1"></p>
<br>
</div>
<div class="am-u-sm-12 am-u-sm-centered">

<section class="am-panel am-panel-success">
  <header class="am-panel-hd">
    <h3 class="am-panel-title"><span id="codeinfo"></span></h3>
  </header>
  <div class="am-panel-bd">
<ul class="am-comments-list am-comments-list-flip" style="height:400px;overflow-y:auto;" id="talktable"></ul>
  </div>
  <footer class="am-panel-footer">
      <div class="am-input-group">
      <input type="text" class="am-form-field" id="sender" placeholder="输入标识符建立连接" onkeypress="BindEnter(event)">
      <span class="am-input-group-btn">
        <button class="am-btn am-btn-default" type="button" onclick="a()">发送</button>
      </span>
    </div>
    </footer>
</section>
   </div>
</div>
</div>
</div>
 <hr data-am-widget="divider" style="" class="am-divider am-divider-dotted" />
  <footer data-am-widget="footer"
          class="am-footer am-footer-default"
           data-am-footer="{  }">
    <div class="am-footer-miscs ">

          <p>由 <a href="http://lightning-zgc.com/" title="雷霆云实验室"
                                                target="_blank" class="">雷霆云实验室</a>
            创建</p><br>
        <p>CopyRight©2015  SPY-TALK.NET</p>
    </div>
  </footer>
  
  <script>
  var main = [];
  function addhtmlme(valto){
$("#talktable").append('<li class="am-comment"><article class="am-comment am-comment-flip am-comment-primary"><div class="am-comment-main"><header class="am-comment-hd"><!--<h3 class="am-comment-title"></h3>--><div class="am-comment-meta"><a href="#link-to-user" class="am-comment-author">'+ main['name'] +'</a> </div></header><div class="am-comment-bd">'+valto+'</div></div></article></li>');
  }
  function addhtmlto(valto){
$("#talktable").append('  <li class="am-comment"><article class="am-comment"><div class="am-comment-main"><header class="am-comment-hd"><div class="am-comment-meta">'+main['name']+'</div></header><div class="am-comment-bd am-comment-bd-fanyi" onclick="fanyi(this);">'+valto+'<span class="am-badge am-badge-secondary am-fr">点击翻译</span></div></div></article></li>');
  }
  function fanyi(e) {
      if($(e).hasClass("am-comment-bd-fanyi")) {
      $.post(
    "talkto.php", 
    { type: "fanyi", nr: $(e).html() },
    function(data){
        msg = JSON.parse(data).msg;
        $(e).html(msg);
        $(e).removeClass("am-comment-bd-fanyi");
    }
    );
      }
  }
  $(document).ready(function(){
      main['name'] = randomString(8);
      $.post(
    "talkto.php", 
    { type: "connect" },
    function(data){
        $("#codeinfo").html("通讯标识符：" + data);
        main["qd"] = data;
        main['con'] = setInterval("con()",300);
    }
    );
  });
  
  function con() {
      $.post(
    "talkto.php", 
    { type: "con" , qd: main['qd']},
    function(data){
        if(data) {
            main['cookie'] = data;
            $("#codeinfo").html("建立连接，加密通讯中……");
            clearInterval(main['con']);
            setInterval("con_get()",300);
        }
    }
    );
  }
  
  function con_get() {
      $.post(
    "talkto.php", 
    { type: "get" , cookie: main['cookie'] , sender: main['name']},
    function(data){
        var re = JSON.parse(data);
        if(re.code == 1) {
            addhtmlto(re.msg);
        $("#talktable").animate({scrollTop: $("#talktable")[0].scrollHeight}, 1000);
        }
    }
    );
  }
  
  function a() {
      var nr = $("#sender").val();
      if(nr) {
      if(!main['cookie']) {
          $.post(
    "talkto.php", 
    { type: "connect_to" , qd: nr},
    function(data){
        main['cookie'] = data;
        $("#codeinfo").html("建立连接，加密通讯中……");
        $("#sender").val("");
        $("#talktable").animate({scrollTop: $("#talktable")[0].scrollHeight}, 1000);
        clearInterval(main['con']);
        setInterval("con_get()",300);
    }
    );
      }else {
          
$.post(
    "talkto.php", 
    { type: "talk" , cookie: main['cookie'] , chat: nr , sender: main['name']},
    function(data){
        var re = JSON.parse(data);
        if (re.code == 1) {
            addhtmlme(nr);
            $("#sender").val("");
            $("#talktable").animate({scrollTop: $("#talktable")[0].scrollHeight}, 1000);
        }else{
            a();
        }
    }
    );
    
      }
      }
  }
  
   function BindEnter(event) {

 if (event.keyCode == 13) {

     event.cancelBubble = true;

     event.returnValue = false;

         a();

   }

} 
  function randomString(len) {
　　len = len || 32;
　　var $chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';
　　var maxPos = $chars.length;
　　var pwd = '';
　　for (i = 0; i < len; i++) {
　　　　pwd += $chars.charAt(Math.floor(Math.random() * maxPos));
　　}
　　return pwd;
}
  </script>
</body>
</html>