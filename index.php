<?php
if ($_SERVER["HTTPS"] <> "on")
{
    $xredir="https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    header("Location: ".$xredir);
}

@$bsf=@$_GET['bsf'];
if($bsf)
{
    $code='<script>mov("接收方");</script>';
}
?>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="GLTLAB">
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
    <!--[if lte IE 8 ]> <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script> <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script> <script src="assets/js/amazeui.ie8polyfill.min.js"></script> <![endif]-->
    <script src="assets/js/amazeui.min.js"></script>
    <script src="assets/js/typeit.min.js"></script>
    <style>
      div#img1 {
        display: none;
      };
    </style>
    <script src="pass.js"></script>
    <script>
      function load() {
        type1();
      }
      function type1() {
        $('.mainp1').typeIt({
          whatToType: [
            "欢迎访问SPY-TALK","风过无声   雁过无痕"
          ],
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
    <header data-am-widget="header" class="am-header am-header-default" data-am-sticky="data-am-sticky">
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
        <div class="am-dropdown" data-am-dropdown="data-am-dropdown">
          <button class="am-btn am-btn-primary am-dropdown-toggle" data-am-dropdown-toggle="data-am-dropdown-toggle">
            <span class="am-header-nav-title">目录</span>
            <i class="am-header-icon am-icon-bars"></i>
          </button>
          <ul class="am-dropdown-content" onblur="$('.am-dropdown').dropdown('close');" onfocus="$('.am-dropdown').dropdown('close');">
            <li class="am-dropdown-header">简介</li>
            <li class="am-divider"></li>
            <li>
              <a href="/">欢迎页</a>
            </li>
            <li>
              <a href="javascript:mov('SPY的原理');">SPY的原理</a>
            </li>
            <li class="am-disabled">
              <a href="javascript:;">源代码</a>
            </li>
            <li class="am-divider"></li>
            <li class="am-dropdown-header">开启SPY旅程</li>
            <li class="am-divider"></li>
            <li>
              <a href="javascript:mov('新建');">新建</a>
            </li>
            <li>
              <a href="javascript:mov('接收方');">接收方</a>
            </li>
            <li>
              <a href="./newtalk.html">P2P通信（支持群聊）</a>
            </li>
            <li>
              <a href="./newsimpletalk.html">PSP通信</a>
            </li>
            <li>
              <a href="../linker">文件上传</a>
            </li>
            <li>
              <a href="./future.html">时间胶囊</a>
            </a>
          </li>
          <li class="am-divider"></li>
          <li class="am-dropdown-header">更多……</li>
          <li class="am-divider"></li>
          <li>
            <a href="javascript:;" data-am-modal="{target: '#your-modal', closeViaDimmer: 0}">捐赠</a>
          </li>
          <li>
            <a href="javascript:mov('建议&意见');">建议&意见</a>
          </li>
          <li class="am-divider"></li>
          <li class="am-dropdown-header">我们的社区</li>
          <li class="am-divider"></li>
          <li>
            <a href="http://tieba.baidu.com/f?kw=spy_talk" target="_blank">贴吧</a>
          </li>
          <li>
            <a href="https://github.com/Galaxy-cst" target="_blank">Github</a>
          </li>
          <li class="am-disabled">
            <a href="">独立论坛</a>
          </li>
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
          <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
          <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
          <p align="center" class="mainp1"></p>
          <br>
        </div>
        <div class="am-u-sm-12 am-u-sm-centered">
          <div data-am-widget="tabs" class="am-tabs am-tabs-d2">
            <ul class="am-tabs-nav am-cf">
              <li class="am-active">
                <a href="[data-tab-panel-0]" onclick='$("#head").slideDown("slow");'>网页版介绍</a>
              </li>
              <li class="">
                <a href="[data-tab-panel-1]" onclick='$("#head").slideUp("slow");'>视频版介绍</a>
              </li>
            </ul>
            <div class="am-tabs-bd">
              <div data-tab-panel-0="data-tab-panel-0" class="am-tab-panel am-active">
                <a href="in/index.html">
                  <button id="webin" class="am-btn am-btn-default am-btn-block" onclick="javascript:webin('webin')">
                    进入介绍网页
                  </button>
                </a>
              </div>
              <div data-tab-panel-1="data-tab-panel-1" class="am-tab-panel ">
                <div class="am-u-sm-6 am-u-sm-centered">
                  <center>
                    <video id="example_video_1" controls="controls" preload="none" width="100%" height="100%" data-setup="{}">
                      <source src="http://prismx.cc/533a4b0ba94c7_2015119214335_2015119235455.mp4"/>
                      <p class="vjs-no-js">观看视频需要JavaScript支持，请使用一下：
                        <a href="http://videojs.com/html5-video-support/" target="_blank">HTML5 浏览器</a>
                      </p>
                    </video>
                  </center>
                </div>
              </div>
            </div>
          </div>

          <blockquote>
            <center>
              <h2>点击目录里的"新建"开始SPY旅程吧！</h2>
              <button class="am-btn am-btn-warning" onclick="javascript:mov('新建');">或者点我也可以新建哦~</button>
              <h2>是来接收消息的朋友？请点击目录里的"接收方"查看吧！</h2>
              <button class="am-btn am-btn-success" onclick="javascript:mov('接收方');">或者点我也可以接收哦~</button>
            </center>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
  <hr data-am-widget="divider" style="" class="am-divider am-divider-dotted"/>
  <footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
    <div class="am-footer-miscs ">

      <p>由
        <a href="https://github.com/Galaxy-cst" title="GLT云实验室" target="_blank" class="">GLT云实验室</a>
        创建</p><br>
      <p>CopyRight©2015 SPY-TALK.NET</p>
    </div>
  </footer>
  <div class="am-modal am-modal-no-btn" tabindex="-1" id="your-modal">
    <div class="am-modal-dialog">
      <div class="am-modal-hd">捐赠
        <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="data-am-modal-close">&times;</a>
      </div>
      <div class="am-modal-bd">
        <div id="p1" class="modal-body">
          <p class="text-center">
            如果您对我们的服务感到满意并希望SPY-TALK持续运营<br>
            那么请向我们提供捐助吧!<br>
            您的捐赠将<strong>完全</strong>用于SPY-TALK的升级和维护<br>
            无论捐赠的金额多少，您的支持都是我们前进的最大动力!
          </p>
        </div>

        <!--图片-->
        <div id="img1">
          <p class="text-center">
            扫描二维码^.^
          </p>
          <img class="img-responsive" alt="Responsive image" src="./1.jpg"/>
        </div>
        <button type="button" class="am-btn am-btn-default am-round" data-am-modal-close="data-am-modal-close">我再考虑考虑</button>
        <button type="button" class="am-btn am-btn-warning am-round" onclick='hidep1();'>捐赠</button>
      </div>
    </div>
  </div>
  <div class="am-modal am-modal-loading am-modal-no-btn" tabindex="-1" id="my-modal-loading">
    <div class="am-modal-dialog">
      <div class="am-modal-hd">正在载入...</div>
      <div class="am-modal-bd">
        <span class="am-icon-spinner am-icon-spin"></span>
      </div>
    </div>
  </div>
  <div class="am-modal am-modal-confirm" tabindex="-1" id="my-confirm">
    <div class="am-modal-dialog">
      <div class="am-modal-hd">SPY-TALK</div>
      <div class="am-modal-bd am-text-truncate">
        请问您确定发布这一则信息吗？ 密码：<span id="pass"></span><br>加密后的信息：<span id="nr"></span>
      </div>
      <div class="am-modal-footer">
        <span class="am-modal-btn" data-am-modal-cancel="data-am-modal-cancel">取消</span>
        <span class="am-modal-btn" data-am-modal-confirm="data-am-modal-confirm" onclick="push();">确定</span>
      </div>
    </div>
  </div>
  <div class="am-modal am-modal-no-btn" tabindex="-1" id="success">
    <div class="am-modal-dialog">
      <div class="am-modal-hd">发布成功^.^
        <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="data-am-modal-close">&times;</a>
      </div>
      <div class="am-modal-bd">
        您此则消息的唯一标识符为：<span id="bsf"></span><br>
        您可以让接收方访问目录中的“接收方”页面，输入标识符<br>
        <hr>
        或者访问此链接：<a href="" id="link"></a><br>
        这里还有二维码哦：<div id="ewm"></div>
      </div>
    </div>
  </div>

  <p id="hide-value" style="display:none"><?php echo $bsf; ?></p>
  <?php echo $code; ?>
</body>
</html>
