<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="email=no">
<title>微盘交易系统</title>
<meta name="keywords" content="微盘交易系统" />
<meta name="description" content="微盘交易系统">

<link rel="stylesheet" type="text/css" href="/Public/Home/css/cd.css" />
<script language="javascript" type="text/javascript" src="/Public/Home/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="/Public/Home/js/cd.js"></script>
</head>
<body>
<!--顶部开始-->
<div class="top_div">
      <div class="cdan_div"><img src="/Public/Home/images/cdan.png" width="35" height="32"/></div>
      <div class="jypt_div">
    <h1>微盘交易平台</h1>
  </div>
 <!--   <div style="float:right;"><h1>返回</h1></div> -->
    </div>
<div class="dbjjDiv"></div>
<div class="ycdcdDiv">
      <div class="gbtb"><img src="/Public/Home/images/gbtb.png"/></div>
      <ul>
  <li><a href="/index.php/Home/Index/"><span><img src="/Public/Home/images/jygz.png"/></span><span>首页</span></a></li>
    <li><a href="<?php echo U('User/recharge');?>"><span><img src="/Public/Home/images/cz.png"/></span><span>充值</span></a></li>
    <li><a href="<?php echo U('User/cash');?>"><span><img src="/Public/Home/images/tx.png"/></span><span>提现</span></a></li>
    <li><a href="<?php echo U('Detailed/dtrading');?>"><span><img src="/Public/Home/images/jyls.png"/></span><span>交易历史</span></a></li>
    <li><a href="<?php echo U('Detailed/drevenue');?>"><span><img src="/Public/Home/images/szmx.png"/></span><span>收支明细</span></a></li>
    <li><a href="<?php echo U('User/memberinfo');?>"><span><img src="/Public/Home/images/grxx.png"/></span><span>个人中心</span></a></li>
    <li><a href="<?php echo U('User/img');?>"><span><img src="/Public/Home/images/fxhy.png"/></span><span>分享好友</span></a></li>
    <li><a href="<?php echo U('User/ranking');?>"><span><img src="/Public/Home/images/phb.png"/></span><span>排行榜</span></a></li>
    <li><a href="<?php echo U('User/logout');?>"><span><img src="/Public/Home/images/cs.png"/></span><span>退出</span></a></li>
    
  </ul>
    </div>
<!--顶部结束-->
<div class="main"> 	
       
<link rel="stylesheet" href="/Public/Home/css/global.css">
<link rel="stylesheet" href="/Public/Home/css/index.css">
<link rel="stylesheet" href="/Public/Home/css/pwd.css">
<div class="wrap">
  <div class="index" style="min-height: 891px;">
    <header class="list-head">
      <nav class="list-nav clearfix"> <a href="javascript:history.go(-1)" class="list-back"></a>
        <h3 class="list-title">申请经纪人</h3>
      </nav>
    </header>
    <form id="reviseForm" class="i-form" method="post" enctype="multipart/form-data" action="<?php echo U('Broker/applybroker');?>">
      <ul class="form-box">
        <li class="f-line clearfix">
          <label class="f-label">姓名</label>
          <input id="c-pwd" class="f-input" type="text" maxlength="10" placeholder="请输入姓名" name="mname">
        </li>
        <li class="f-line clearfix">
          <label class="f-label">身份证</label>
          <input id="b-pwd" class="f-input" type="text" maxlength="18" placeholder="请输入身份证号" name="brokerid">
        </li>

        <li class="f-line clearfix">
          <label class="f-label">身份证照片</label>
          <img src="<?php echo ($idcover["idcover"]); ?>"/>
          <input type="file"  class="f-sub2" name="photoid">
        </li>
      </ul>
      <div id='btnAgree'>
        <div><input name="" type="checkbox" value="" checked />&nbsp;<span>我已阅读和同意<span id='btnBook'>《服务协议及隐私条款》</span></span></div>   
      </div>
      <input type="submit" value="确认申请" class="f-sub">
    </form>
  </div>
</div>

 </div>     
</body>
</html>