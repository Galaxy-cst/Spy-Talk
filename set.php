<?php
header("content-Type: text/html; charset=Utf-8");
$actor=@$_POST['actor'];
$ask=@$_POST['ask'];
$value=@$_POST['value'];
switch ($actor) {
    case "SPY的原理":
        echo '<div class="am-g">
            <div class="am-u-sm-6 am-u-sm-centered" id="head">
<br>
<h2 align="center">SPY-TALK</h2>
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<p align="center">层层加密  步步为营</p>
<br>
</div>
  <div class="am-u-sm-12 am-u-sm-centered">
    <div class="am-thumbnail">
      <center><img src="apple-touch-icon.png" width="100%" height="100%" alt=""/></center>
      <div class="am-thumbnail-caption">
      <center>
        <h3>SPY的原理</h3>
        <p>加密方式均符合行业规范</p>
       </center> 
      </div>
      
    </div>
  </div>';
        break;
    case "新建":
        echo '<div class="am-u-sm-6 am-u-sm-centered" id="head">
<br>
<h2 align="center">SPY-TALK</h2>
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<p align="center">简约高效  安全便捷</p>
<br>
</div>    
        <div class="am-g">
  <div class="am-u-sm-8 am-u-sm-centered">
      <section class="am-panel am-panel-default">
  <header class="am-panel-hd">
    <h3 class="am-panel-title">发布</h3>
  </header>
  <div class="am-panel-bd">
      <div id="iner">
            <dl>
				<dd>
					发布一则加密信息，您可以自定义加密方式，也可以限定访问者。
				</dd>
				<dd>
				    信息可以是文字或者任何文件（图片、音频、视频等），限定访问者可以通过密码、地理位置、时间等方式……
				</dd>
			</dl>
			<button type="button" class="am-btn am-btn-default am-btn-block" onclick="javascript:lx('."'".'csh'."'".');">开始</button>
            <button type="button" class="am-btn am-btn-default am-btn-block" onclick="javascript:window.location=\'./talk.php\';">在线TALK</button>

			</div>
			  </div>
</section>
  </div>
</div>';
        break;
        
        case 'csh':
            echo '<form class="am-form" onsubmit="javascript:passon();">
  <fieldset>
    <legend>自毁信息创建</legend>
    <div class="am-form-group">
      <label for="doc-ipt-pwd-1">密码（必填）</label>
      <input type="password" class="" id="doc-ipt-pwd-1" placeholder="设置个密码吧">
    </div>

    <div class="am-form-group">
      <label for="doc-ta-1">正文</label>
      <textarea class="" rows="5" id="doc-ta-1"></textarea>
    </div>

    <p><a type="submit" class="am-btn am-btn-default am-btn-block" onclick="javascript:passon();">发布</a></p>
  </fieldset>
</form>';
            break;
    case '接收方':
        echo '<div class="am-u-sm-6 am-u-sm-centered" id="head">
<br>
<h2 align="center">SPY-TALK</h2>
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<p align="center">简约高效  安全便捷</p>
<br>
</div>    
        <div class="am-g">
  <div class="am-u-sm-8 am-u-sm-centered">
      <section class="am-panel am-panel-default">
  <header class="am-panel-hd">
    <h3 class="am-panel-title">接收</h3>
  </header>
  <div class="am-panel-bd">
      <div id="iner">
            <form class="am-form" onsubmit="javascript:passon();">
  <fieldset>
    <legend>信息阅后即焚，请注意保存.如果密码错误消息不会显示，为了确保安全，消息仍会被销毁.</legend>
    <div class="am-form-group">
      <label for="doc-ipt-pwd-1">标识符</label>
      <input type="text" class="" id="doc-ipt-pwd-1" placeholder="标识符输入" value="'.$value.'">
    </div>
    <div class="am-form-group">
      <label for="doc-ipt-pwd-1">密码</label>
      <input type="password" class="" id="pass" placeholder="密码">
    </div>
    <div class="am-form-group">
      <label for="doc-ta-1">正文</label>
      <textarea class="" rows="5" id="doc-ta-1"></textarea>
    </div>

    <p><a type="submit" class="am-btn am-btn-default am-btn-block" onclick="javascript:getin();">获取</a></p>
  </fieldset>
</form>
			</div>
			  </div>
</section>
  </div>
</div>';
            break;
    default:
        echo '<div class="am-u-sm-6 am-u-sm-centered" id="head">
<br>
<h2 align="center">SPY-TALK</h2>
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<p align="center">时间有限  尚未完善</p>
<br>
</div>';
        break;
}
?>