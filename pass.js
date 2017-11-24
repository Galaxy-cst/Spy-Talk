function push() {
  modal = $("#my-modal-loading");
  modal.modal();
  nr = document.getElementById('nr').innerHTML;
  $.post(
    "cryto.php", {
      nr: nr
    },
    function(data) {
      url = location.href + "?bsf=" + data;
      document.getElementById('bsf').innerHTML = data;
      document.getElementById('link').innerHTML = url;
      document.getElementById('link').href = url;
      $("#ewm").empty().qrcode(url);
      modal.modal("close");
      $("#success").modal();
    }
  );
}

function getin() {
  if (document.getElementById('pass').value != '' && document.getElementById('doc-ipt-pwd-1').value != '') {
    modal = $("#my-modal-loading");
    bsf = document.getElementById('doc-ipt-pwd-1').value;
    pass = document.getElementById('pass').value;
    modal.modal();
    $.post(
      "getin.php", {
        bsf: bsf
      },
      function(data) {
        nr = unescape(decrypt(data, pass));
        document.getElementById('doc-ta-1').innerHTML = nr;
        modal.modal("close");
      }
    );
  } else {
    alert("请输入密码和标识符~~~");
  }
}

function webin(a) {
  document.getElementById(a).innerHTML = "<i class=" + '"' + "am-icon-spinner am-icon-spin" + '"' + "></i>";
}

function mov(action) {
  var value = document.getElementById('hide-value').innerHTML;
  if (value == null) {
    value = 'none';
  }
  var $modal = $("#my-modal-loading");
  $modal.modal();
  $("#title").html(action);
  $('#animation').slideUp(null, function() {
    $.post(
      "set.php", {
        actor: action,
        ask: 'body',
        value: value
      },
      function(data) {
        $('#mainbody').html(data);
        $('#animation').slideDown();
        $modal.modal("close");
      }
    );
  });
}

function lx(action) {
  var $modal = $("#my-modal-loading");
  $modal.modal();
  $('#iner').slideUp(null, function() {
    $.post(
      "set.php", {
        actor: action,
        ask: 'body'
      },
      function(data) {
        $('#iner').html(data);
        $('#iner').slideDown();
        $modal.modal("close");
      }
    );
  });
}

function passon() {
  var pass, nr, modal;
  modal = $("#my-confirm");
  nr = document.getElementById('doc-ta-1').value;
  pass = document.getElementById('doc-ipt-pwd-1').value;
  nr = encrypt(escape(nr), pass);
  document.getElementById('pass').innerHTML = pass;
  document.getElementById('nr').innerHTML = nr;
  modal.modal('open');
  return 0;
}

function hidep1() {
  $("#p1").slideToggle("slow");
  $("#img1").slideToggle("slow");
}

function encrypt(str, pwd) {
  if (pwd == null || pwd.length <= 0) {
    alert("请输入密码^.^");
    return null;
  }
  var prand = "";
  for (var i = 0; i < pwd.length; i++) {
    prand += pwd.charCodeAt(i).toString();
  }
  var sPos = Math.floor(prand.length / 5);
  var mult = parseInt(prand.charAt(sPos) + prand.charAt(sPos * 2) + prand.charAt(sPos * 3) + prand.charAt(sPos * 4) + prand.charAt(sPos * 5));
  var incr = Math.ceil(pwd.length / 2);
  var modu = Math.pow(2, 31) - 1;
  if (mult < 2) {
    alert("哈希值无法计算，请更换更复杂的密码^.^");
    return null;
  }
  var salt = Math.round(Math.random() * 1000000000) % 100000000;
  prand += salt;
  while (prand.length > 10) {
    prand = (parseInt(prand.substring(0, 10)) + parseInt(prand.substring(10, prand.length))).toString();
  }
  prand = (mult * prand + incr) % modu;
  var enc_chr = "";
  var enc_str = "";
  for (var i = 0; i < str.length; i++) {
    enc_chr = parseInt(str.charCodeAt(i) ^ Math.floor((prand / modu) * 255));
    if (enc_chr < 16) {
      enc_str += "0" + enc_chr.toString(16);
    } else enc_str += enc_chr.toString(16);
    prand = (mult * prand + incr) % modu;
  }
  salt = salt.toString(16);
  while (salt.length < 8) salt = "0" + salt;
  enc_str += salt;
  return enc_str;
}

function decrypt(str, pwd) {
  if (str == null || str.length < 8) {
    alert("密码错误，此则消息已被销毁");
    return;
  }
  if (pwd == null || pwd.length <= 0) {
    alert("请输入密码~~~~~");
    return;
  }
  var prand = "";
  for (var i = 0; i < pwd.length; i++) {
    prand += pwd.charCodeAt(i).toString();
  }
  var sPos = Math.floor(prand.length / 5);
  var mult = parseInt(prand.charAt(sPos) + prand.charAt(sPos * 2) + prand.charAt(sPos * 3) + prand.charAt(sPos * 4) + prand.charAt(sPos * 5));
  var incr = Math.round(pwd.length / 2);
  var modu = Math.pow(2, 31) - 1;
  var salt = parseInt(str.substring(str.length - 8, str.length), 16);
  str = str.substring(0, str.length - 8);
  prand += salt;
  while (prand.length > 10) {
    prand = (parseInt(prand.substring(0, 10)) + parseInt(prand.substring(10, prand.length))).toString();
  }
  prand = (mult * prand + incr) % modu;
  var enc_chr = "";
  var enc_str = "";
  for (var i = 0; i < str.length; i += 2) {
    enc_chr = parseInt(parseInt(str.substring(i, i + 2), 16) ^ Math.floor((prand / modu) * 255));
    enc_str += String.fromCharCode(enc_chr);
    prand = (mult * prand + incr) % modu;
  }
  return enc_str;
}
