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


<div class="wrap" style="overflow:scroll;overflow-x:hidden;">
  <div class="index" style="min-height: 1339px;">
  
    <input type="hidden" id="tpqh" value="1">
    <!-- 账户有建仓订单时显示所有没有平仓的订单 -->
    <?php if(empty($nolist)): else: ?> 
       <div class="jryk">
              <div class="yk_left">今日盈亏(元)</div>
              <div class="yk_con"></div>
              <div class="yk_right box2">
                 <!-- <a href="javascript:;" class="bounceIn">查看交易</a> -->
                 <a href="<?php echo U('Detailed/dtrading');?>" class="bounceIn">交易记录</a>
              </div>
              <div class="clearfix"></div>
            </div>
          <div class="b-line noclearfix" style="margin-bottom:0;" id="useror">
                 <table width="100%" cellspacing="0" cellpadding="0">
	                 	<tr>
			             		<td width="10%">盈亏</td>
			             		<td width="25%">建仓价</td>
			             		<td width="20%">产品</td>
			             		<td width="8%">手数</td>
			             		<td></td>
			             	</tr>
                     <?php if(is_array($nolist)): $i = 0; $__LIST__ = $nolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$on): $mod = ($i % 2 );++$i;?><!-- 油 -->
                          <?php if($on["cid"] == 1): ?><tr class="ykzf openpay">
                                  <td class="ykzfwave" style="display:none"><?php echo ($on["wave"]); ?></td>
                                  <td class="ykzfostyle" style="display:none"><?php echo ($on["ostyle"]); ?></td>
                                  <td class="ykzfeid" style="display:none"><?php echo ($on["eid"]); ?></td>
                                  <td class="ptitle" style="display:none"><?php echo ($on["ptitle"]); ?></td>
                                  <td class="uprice" style="display:none"><?php echo ($on["uprice"]); ?></td>
                                  <td class="oid" style="display:none"><?php echo ($on["oid"]); ?></td>
                                  <td style="display:none" class="yincangyoujia latest-price"></td>
                                	
                                  <td class="cash1 ploss"></td>  
                                  <td class="buyprice"><?php echo ($on["buyprice"]); ?>
                                  <?php if($on["ostyle"] == 1): ?><font color="#2fb44e">(空)</font><?php else: ?><font color="#ed0000">(多)</font><?php endif; ?>
                                  </td>                     
                                  <td><?php echo ($on["cname"]); ?>(<?php echo ($on["company"]); ?>)</td>
								                  <td class="onumber"><?php echo ($on["onumber"]); ?></td>                        
                                  <td class="mypwd-btn chr">
                                  	<!--<?php echo U('Detailed/orderid');?>?orderid=<?php echo ($on["oid"]); ?>-->
                                  	 <a href="<?php echo U('Detailed/orderid');?>?orderid=<?php echo ($on["oid"]); ?>" class="red" data-cid='<?php echo ($on["cid"]); ?>' data-oid='<?php echo ($on["oid"]); ?>'>平仓</a>
                                  	 <a href="javascript:void(0);" class="blue" data-onumber='<?php echo ($on["onumber"]); ?>' data-oid='<?php echo ($on["oid"]); ?>' data-zy='<?php echo ($on["endprofit"]); ?>' data-zk='<?php echo ($on["endloss"]); ?>'>设置</a>
                                  	 <div style="clear: both;"></div>
                                  </td>
                              </tr><?php endif; ?>
                        <!-- 银-->
                          <?php if($on["cid"] == 2): ?><tr class="ykzf1 openpay" > 
                                  <td class="ykzfwave" style="display:none"><?php echo ($on["wave"]); ?></td>
                                  <td class="ykzfostyle" style="display:none"><?php echo ($on["ostyle"]); ?></td>
                                  <td class="ykzfeid" style="display:none"><?php echo ($on["eid"]); ?></td>
                                  <td class="ptitle" style="display:none"><?php echo ($on["ptitle"]); ?></td>
                                  <td class="uprice" style="display:none"><?php echo ($on["uprice"]); ?></td>
                                  <td class="oid" style="display:none"><?php echo ($on["oid"]); ?></td>      
                                  <td style="display:none" class="ycbaiyinjia latest-price"></td>
                                  
                                  <td class="cash2 ploss"></td>  
                                  <td class="buyprice2"><?php echo ($on["buyprice"]); ?>
								  <?php if($on["ostyle"] == 1): ?><font color="#2fb44e">(空)</font><?php else: ?><font color="#ed0000">(多)</font><?php endif; ?>
                                  </td>                       
                                  <td ><?php echo ($on["cname"]); ?>(<?php echo ($on["company"]); ?>)</td>
								  <td class="onumber"><?php echo ($on["onumber"]); ?></td>                               
                                  <td class="mypwd-btn chr">
                                  	 <a href="<?php echo U('Detailed/orderid');?>?orderid=<?php echo ($on["oid"]); ?>" class="red" data-cid='<?php echo ($on["cid"]); ?>' data-oid='<?php echo ($on["oid"]); ?>'>平仓</a>
                                  	 <a href="javascript:void(0);" class="blue" data-onumber='<?php echo ($on["onumber"]); ?>' data-oid='<?php echo ($on["oid"]); ?>' data-zy='<?php echo ($on["endprofit"]); ?>' data-zk='<?php echo ($on["endloss"]); ?>'>设置</a>
                                  	 <div style="clear: both;"></div
                                  </td>
                              </tr><?php endif; ?>
                          <!-- 铜 -->
                          <?php if($on["cid"] == 3): ?><tr class="ykzf2 openpay" > 
                                  <td class="ykzfwave" style="display:none"><?php echo ($on["wave"]); ?></td>
                                  <td class="ykzfostyle" style="display:none"><?php echo ($on["ostyle"]); ?></td>
                                  <td class="ykzfeid" style="display:none"><?php echo ($on["eid"]); ?></td>
                                  <td class="ptitle" style="display:none"><?php echo ($on["ptitle"]); ?></td>
                                  <td class="uprice" style="display:none"><?php echo ($on["uprice"]); ?></td>
                                  <td class="oid" style="display:none"><?php echo ($on["oid"]); ?></td>     
                                  <td style="display:none" class="yctojia latest-price"></td>   

                                  <td class="cash3 ploss"></td>  
                                  <td class="buyprice3"><?php echo ($on["buyprice"]); ?>
																	<?php if($on["ostyle"] == 1): ?><font color="#2fb44e">(空)</font><?php else: ?><font color="#ed0000">(多)</font><?php endif; ?>
                                  </td>
									<td><?php echo ($on["cname"]); ?>(<?php echo ($on["company"]); ?>)</td>
									<td class="onumber"><?php echo ($on["onumber"]); ?></td>
                                  <td class="mypwd-btn chr">
                                  	 <a href="<?php echo U('Detailed/orderid');?>?orderid=<?php echo ($on["oid"]); ?>" class="red" data-cid='<?php echo ($on["cid"]); ?>' data-oid='<?php echo ($on["oid"]); ?>'>平仓</a>
                                  	 <a href="javascript:void(0);" class="blue" data-onumber='<?php echo ($on["onumber"]); ?>' data-oid='<?php echo ($on["oid"]); ?>' data-zy='<?php echo ($on["endprofit"]); ?>' data-zk='<?php echo ($on["endloss"]); ?>'>设置</a>
                                  	 <div style="clear: both;"></div
                                  </td>
                              </tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div><?php endif; ?> 
    <div class="account-info clearfix">
      <div class="info-detail left" <?php if($user["portrait"] == ''): else: ?> style="background:url(<?php echo ($user["portrait"]); ?>)no-repeat;background-size: 40px 40px;"<?php endif; ?> > 
      <a href="<?php echo U('User/memberinfo');?>"> <span class="a-u">个人账户(元)</span> <em class="a-d "><?php if($user["price"] != 0): ?><span id="usprice"><?php echo ($user["price"]); ?></span><?php else: ?><span id="usprice">0.0</span><?php endif; ?></em></a> </div>
      <a href="<?php echo U('User/recharge');?>" class="charge-btn
      ">充值</a>
      <div class="info-detail right"> <a href="<?php echo U('User/experiencelist');?>"> <span class="a-u">体验劵(张)</span> <em class="a-d"><?php if($user["exper"] != 0): echo ($user["exper"]); else: ?>0<?php endif; ?></em> </a> </div>
    </div>
<div style="width:100%;height:235px;overflow:hidden;">
    <div class="switch-product">
      <ul class="clearfix">
        <li class="sw_active" value="1"><a>油</a> </li>
        <li style="width:34%;" value="2"> <a>白银</a> </li>
        <li value="3"> <a>铜</a> </li>
      </ul>
    </div>

    <div class="product-box" value="1">
    	<!--***油***-->
      <div class="trade-box">
        <div class="price-info clearfix">
          <h3 class="price-current"> <span style="font-size: 1rem;">油价格(元/吨)</span>
          <?php if($isopen == 0): ?><em>休市</em>
          <?php else: ?>
            <em class="" id="youjia"></em><?php endif; ?>
        <!--   <input type="button" value="刷新" onclick="butt()" ><input type='text' value="" id='test'>  -->
            <!--降-->
            <!--<em class="drop">4.014</em>-->
          </h3>
          <ul class="price-trend clearfix">
            <li>昨收<em id="yzs"></em></li>
            <li>最高<em id="yzg"></em></li>
            <li>今开<em id="yjk"></em></li>
            <li>最低<em id="yzd"></em></li>
          </ul>
        </div>
        <div class="swiper-container   swiper3">
          <div class="swiper-wrapper" style=" width: 1232px; height: 85px; -webkit-transform: translate3d(-410.67px, 0px, 0px); transition: 0s; -webkit-transition: 0s;">
        <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["cid"] == 1): ?><div class="swiper-slide swiper-slide-visible swiper-slide-active" data-l="6" data-b="2" style="width: 410.67px; height: 85px;">
                <input type="hidden" value="<?php echo ($vo["pid"]); ?>">
                <h3><?php echo ($vo["ptitle"]); ?></h3>
                <h4><span class="vouprice"><?php echo ($vo["uprice"]); ?></span>元/手</h4>
                <h5>波动盈亏：<?php echo ($vo["wave"]); ?>元</h5>
                <img src="/Public/Home/images/pick.png" class="p-selected"></div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
          </div>
        </div>

      </div>
    </div>
    
    <div class="product-box silver_con" value="2" style="display: block;">
    	<!---白银-->
      <div class="trade-box" >
        <div class="price-info clearfix">
          <h3 class="price-current"> <span style="font-size: 1rem;">白银价格(元/吨)</span>
          <?php if($isopen == 0): ?><em>休市</em>
          <?php else: ?>
            <em class="rise" id="baiyinjia"></em><?php endif; ?>
         
            <!--降-->
            <!--<em class="drop">4.014</em>-->
          </h3>
          <ul class="price-trend clearfix">
            <li>昨收<em id="byzs"></em></li>
            <li>最高<em id="byzg"></em></li>
            <li>今开<em id="byjk"></em></li>
            <li>最低<em id="byzd"></em></li>
          </ul>
        </div>
        <div class="swiper-container   swiper2">
          <div class="swiper-wrapper">
          <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["cid"] == 2): ?><div class="swiper-slide swiper-slide-visible swiper-slide-active">
                 <input type="hidden" value="<?php echo ($vo["pid"]); ?>">
                 <h3><?php echo ($vo["ptitle"]); ?></h3>
                 <h4><span class="vouprice"><?php echo ($vo["uprice"]); ?></span>元/手</h4>
                 <h5>波动盈亏：<?php echo ($vo["wave"]); ?>元</h5>
                 <img src="/Public/Home/images/pick.png" class="p-selected"></div><?php endif; endforeach; endif; else: echo "" ;endif; ?>   
          </div>
        </div>
      </div>
    </div>
    <div class="product-box" value="3" style="display: block;">
    	<!--铜-->
      <div class="trade-box" >
        <div class="price-info clearfix">
          <h3 class="price-current"> <span>铜价格(元/吨)</span>
            <!--升-->
              <?php if($isopen == 0): ?><em>休市</em>
              <?php else: ?>
                  <em class="rise" id="tojia"></em><?php endif; ?>

          
            <!--降-->
            <!--<em class="drop">4.014</em>-->
          </h3>
          <ul class="price-trend clearfix">
            <li>昨收<em id="tozs"></em></li>
            <li>最高<em id="tozg"></em></li>
            <li>今开<em id="tojk"></em></li>
            <li>最低<em id="tozd"></em></li>
          </ul>
        </div>
        <div class="swiper-container   swiper1">
          <div class="swiper-wrapper">
          <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["cid"] == 3): ?><div class="swiper-slide swiper-slide-visible swiper-slide-active" data-l="3" data-b="2">
                 <input type="hidden" value="<?php echo ($vo["pid"]); ?>">
                 <h3><?php echo ($vo["ptitle"]); ?></h3>
                 <h4><span class="vouprice"><?php echo ($vo["uprice"]); ?></span>元/手</h4>
                 <h5>波动盈亏：<?php echo ($vo["wave"]); ?>元</h5>
                 <img src="/Public/Home/images/pick.png" class="p-selected"></div><?php endif; endforeach; endif; else: echo "" ;endif; ?> 
          </div>
        </div>
      </div>
    </div>
</div>
    <!--***油***-->    
    <div>
      <div class="trade-box">
        <ul class="buy-choose clearfix box" <?php if($isopen == 0): else: ?>id="may"<?php endif; ?> style="padding:0";>
          <!-- <li><a href="javascript:" class="up bounceIn" onClick="buy(2,2)">买涨</a></li> -->
          <input id="isopen" type="hidden" value="$isopen">
          <li><a href="javascript:" class="up bounceIn" onclick="return false;" value="涨">买涨</a></li>
          <li><a href="javascript:" class="down bounceIn" value="跌">买跌</a></li>
   
        </ul>
      </div>
    </div>
<!--
  作者：773632404@qq.com
  时间：2016-01-09
  描述：购买弹窗
-->
<div class="box">
    <div id="dialogBg"></div>
    <div id="dialog" class="">
        <div class="dialogTop">
            <a href="javascript:;" class="claseDialogBtn" id="claseDialogBtn">关闭</a>
        </div>
        <!--建仓确认-->
          <div class="pop-box none" id="buildBox" style="display: block;top:-350px">
            <nav class="pop-nav "> <a href="javascript:;" class="back" id="claseDialogBtn"></a>
              <h3>确认购买</h3>
            </nav>
            <form id="jcForm" class="build-form" method="post" action="<?php echo U('Detailed/addorder');?>" >
             <div class="" style="overflow: hidden;margin:10px;">
                        <p class="b-p-t">选择数量：</p>
                        <p class="num-list   clearfix" id="jcsh"> <span class="num-left"></span>
                            <input type="text" value="1" class="num-in" id="sls" name="mysum" disabled="">
                            <span class="num-right"></span> </p>
                        <p class="price clearfix"> <span>方向：</span> <em class="fx"><span id="zhd" name="myfx" style="font-size:1.1em"></span></em>
                           
                        </p>
                    </div>
   <div class="b-line clearfix">
                        <label class="b-label">品种：</label>
                        <div class="type-choose clearfix">
                            <!--   <a class="t-left"  onclick="zyclick('z')">加</a>  -->
                            <div class="type-list clearfix">
                                <ul class="p-baiyin" style="margin-top: 0px;">
                                    <li id="opname" class="xz6" data-l="2" data-bz="200" data-pid="6" data-sxf="30.0" data-juan="0"></li>
                                </ul>
                            </div>
                        </div>
                        <p class="price clearfix"> <span>当前价格：</span>
                            <em class="c-13" id="ydangqianj" style="display:none"></em>
                            <em class="c-13" id="bdangqianj" style="display:none"></em>
                            <em class="c-13" id="tdangqianj" style="display:none"></em>
                            <em  id="dqcid" style="display:none"></em>

                        </p>
                    </div>

                    <div class="b-profit">
                <p class="b-p-t">买入点数</p>
                <ul class="toclearfix" >
                    <li value="3" id="dianshu1" class="selected">3</li>
                    <li value="6" id="dianshu2">6</li>
                    <li value="9" id="dianshu3">9</li>
                    <li value="12" id="dianshu4">12</li>
                    <li value="20" id="dianshu5">20</li>
                </ul>
                <p class="b-p-t">收益比例</p>
                <ul class="myclearfix">
                    <li value="75" id="shouyi1" class="selected">75%</li>
                    <li value="77" id="shouyi2">77%</li>
                    <li value="80" id="shouyi3">80%</li>
                    <li value="82" id="shouyi4">82%</li>
                    <li value="85" id="shouyi5">85%</li>
                </ul>
            </div>
<script>
  $('#dianshu1').click(function(){
      $('#shouyi1').click();
      var dianshu=$('#dianshu1').attr('value');
      $('#dianshu').val(dianshu);
      var sybl=$('#shouyi1').attr('value');
      $('#sybl').val(sybl);

  });
  $('#dianshu2').click(function(){
      $('#shouyi2').click();
      var dianshu=$('#dianshu2').attr('value');
      $('#dianshu').val(dianshu);
      var sybl=$('#shouyi2').attr('value');
      $('#sybl').val(sybl);
  });
  $('#dianshu3').click(function(){
      $('#shouyi3').click();
      var dianshu=$('#dianshu3').attr('value');
      $('#dianshu').val(dianshu);
      var sybl=$('#shouyi3').attr('value');
      $('#sybl').val(sybl);
  });
  $('#dianshu4').click(function(){
      $('#shouyi4').click();
      var dianshu=$('#dianshu4').attr('value');
      $('#dianshu').val(dianshu);
      var sybl=$('#shouyi4').attr('value');
      $('#sybl').val(sybl);
  });
  $('#dianshu5').click(function(){
      $('#shouyi5').click();
      var dianshu=$('#dianshu5').attr('value');
      $('#dianshu').val(dianshu);
      var sybl=$('#shouyi5').attr('value');
      $('#sybl').val(sybl);
  });
  $('#shouyi1').click(function(){
      $('#dianshu1').click();
  });
  $('#shouyi2').click(function(){
      $('#dianshu2').click();
  });
  $('#shouyi3').click(function(){
      $('#dianshu3').click();
  });
  $('#shouyi4').click(function(){
      $('#dianshu4').click();
  });
  $('#shouyi5').click(function(){
      $('#dianshu5').click();
  });
</script>


                    <div class="b-line clearfix">
                        <p class="b-p-t">所用费用：</p>
                        <p class="pay"><span id="opprice">0</span>元</p>
                        <input type="hidden" name="sxf" id="sxf" value="30.0">
                        <p class="b-info">手续费&nbsp;<span id="j-5">0</span>&nbsp;元&nbsp;<img src="/Public/Home/images/qrgm.png" style="height:20px" id="shuoming"></p>
                    </div>
              <input type="hidden" name="type" value="1" id="type" >
              <input type="hidden" name="bz" value="2" id="bz">
              <input type="hidden" name="sl" value="1" id="sl">
              <input type="hidden" name="ordernumber" value="">
              <input type="hidden" name="product" value="6" id="product">
              <input type="hidden" name="jine" value="<?php echo ($user["price"]); ?>" id="jine">
              <input type="hidden" name="isJuan" value="" id="isJuan">
              <input type="hidden" name="dianshu" value="3" id="dianshu">
              <input type="hidden" name="sybl" value="75" id="sybl">
              <input type="hidden" name="rcj" value="" id="rcj">
              <input type="hidden" name="fx" value="" id="fx">
              
              
              <input type="hidden" class="pwd-btn  conform" id="conform1" value="确 认">
              <!--余额不足，去充值-->
              <a href="<?php echo U('User/recharge');?>" class="pwd-btn chr failure  none" id="conform2">余额不足，去充值</a>
              <a href="<?php echo U('Index/index');?>" class="pwd-btn chr failure  none" style="display: none;" id="conform3">此商品已购买</a>
            </form>
          </div>

</div>
</div>
 
    <div class="info-box">
      <div class="info-d">
        <div class="trend-box">
          <!-- <div class="trend-chart" style="cursor: default;heigth:800px;">
 
          </div>  --> 
          <div class="trend-chart" style="width: 600px; height: 330px; overflow: hidden; margin-top: 10px; "></div>
     
        </div>
         <!-- <ul class="trend-nav clearfix TimeMenu">
            <li><a href="javascript:void(0)" data-interval='1' data-type="area" class="cur changed">分时线</a></li>
            <li><a href="javascript:void(0)" data-interval='5' data-type="candlestick">5分钟</a></li>
            <li><a href="javascript:void(0)" data-interval='15' data-type="candlestick">15分钟</a></li>
            <li><a href="javascript:void(0)" data-interval='30' data-type="candlestick">30分钟</a></li>
            <li><a href="javascript:void(0)" data-interval='1d' data-type="candlestick">日k线</a></li>
          </ul> -->
      </div>
    </div>

      <div class="info-box">
      <ul class="info-nav clearfix">
        <li value="1"><a class="selected">最新资讯</a></li>
        <li value="2" style="width:33.4%"><a>财经要闻</a></li>
        <li value="3"><a>系统公告</a></li>
      </ul>
      <div class="info-d">
      <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="news-list clearfix">
          <div class="news_pic"> <a href="" class="clearfix"><img src="/Public/Home/images/pic.gif"></a> </div>
          <div class="news_text"> 
            <p class="zx"><img src="/Public/Home/images/zx.png"></p>
            <p class="n_t"><a href="" class="clearfix"> <span><?php echo ($vo["ntitle"]); ?></span></a> </p>
            <p class="n_cs"><a href="" class="clearfix"> <span></span></a> </p>
            <p class="n_m"><a href="<?php echo U('News/newsid');?>?nid=<?php echo ($vo['nid']); ?>" class="news-more">查看更多&gt;</a></p>
           </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="ckgd"><a href="<?php echo U('News/newslist');?>?fid=1">查看更多</a></div>
      </div>
      <div class="info-d none">
        <ul class="news-list clearfix">
        <?php if(is_array($focus)): $i = 0; $__LIST__ = $focus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> <a href="<?php echo U('News/newsid');?>?nid=<?php echo ($vo['nid']); ?>" class="clearfix"> <span><?php echo ($vo["ntitle"]); ?></span> <i><?php echo (date('Y-m-d H:i:s',$vo["ntime"])); ?></i> </a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
          <a href="<?php echo U('News/newslist');?>?fid=2" class="news-more">查看更多&gt;</a>
        </ul>
      </div>
      <div class="info-d none">
        <ul class="news-list clearfix">
          <?php if(is_array($notices)): $i = 0; $__LIST__ = $notices;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> <a href="<?php echo U('News/newsid');?>?nid=<?php echo ($vo['nid']); ?>" class="clearfix"> <span><?php echo ($vo["ntitle"]); ?></span> <i><?php echo (date('Y-m-d H:i:s',$vo["ntime"])); ?></i> </a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
          <a href="<?php echo U('News/newslist');?>?fid=3" class="news-more">查看更多&gt;</a>
        </ul>
      </div>
    </div>
  </div>
  <!--遮罩层-->
</div>

 <!--弹窗开始-->
<link rel="stylesheet" href="/Public/Home/css/common.css"/>
<script src="/Public/Home/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
var w,h,className;
function getSrceenWH(){
  w = $(window).width();
  h = $(window).height();
  $('#dialogBg').width(w).height(h);
  $('#dialogBg2').width(w).height(h);
  $('#dialogBg3').width(w).height(h);
}
window.onresize = function(){  
  getSrceenWH();
} 
$(window).resize();  

$(function(){

  getSrceenWH();

  //购买显示弹框
  $('#may a').click(function(){ 
    //获取选择是涨还是跌的值
    but = $(this).attr('value');
    $('#zhd').html(but);
    $('#fx').val(but);
    //买涨，买跌的时候执行。
      $(".product-box").each(function(){
      	var status = $(this).attr('status');
      if(status=="mark"){
      	
        var pid= $(this).find(".swiper-slide-active").children("input").val();
        var vouprice= $(this).find(".swiper-slide-active h4 span").html();
        var ubalance = $('#usprice').text();
				//var vouprice = $("#opprice").text();
        if(eval(ubalance)<=eval(vouprice)){
             $(".conform").attr("type","hidden");
             $("#conform2").show();
        }else{
            $(".conform").attr("type","submit");
            $("#conform2").hide();
        }
           $.ajax({  
                type: "post",  
                url: "<?php echo U('Index/selectid');?>",
                data:"pid="+pid,  
                async:false,  
                success: function(data) { 
                     if(data['cid']==1){
                        $('#ydangqianj').css('display',"block");
                        $('#dqcid').html(1);
                     }else if(data['cid']==2){
                        $('#bdangqianj').css('display',"block");
                        $('#dqcid').html(2);
                     }else{
                        $('#tdangqianj').css('display',"block");
                        $('#dqcid').html(3);
                     }
                     $('#opname').html(data['ptitle']); 
                     $('#opprice').html(data['uprice']);  
                     $('#j-5').html(data['feeprice']);
                     $('#c11').html(data['uprice']);  
                     $('#big').html(data['sum']);
                     $('#pid').val(data['pid']); 
                     
                     //算加减传的值
                     $('#bz').val(data['uprice']); 
                     $('#sxf').val(data['feeprice']); 
                     $('#juansl').val(data['sum']);
                     $('#type').val(data['pid']);                 
                      
                },  
                error: function(data) {  
                    
                }  
            });
        }
      });
      
         //商品id
    var mypid=$('#type').val();

     $.ajax({
        type:'post',
        url:"<?php echo U('Detailed/judgment');?>",
        data:{"mypid":mypid},
        async:false, 
        success:function(data){
          if (data==99) {
              $('#conform1').attr("type","hidden");
              $('#conform2').css('display','none');
              $('#conform3').css('display','block');
          }
        }
    });

      className = $(this).attr('class');
      $('#dialogBg').fadeIn(200);
      $('#dialog').removeAttr('class').addClass('animated '+className+'').fadeIn(200);

  });
  //关闭弹窗
  $('#claseDialogBtn').click(function(){
    $('#dialogBg').fadeOut(200,function(){
      $('#dialog').addClass('bounceOutUp').fadeOut(200);
    });

  });
});
</script>
<script type="text/javascript">
setInterval('pcprice()', 1000);
function pcprice() 
    { 
    	
      var yinprice1=0;
      var yinprice2=0;
      var yinprice3=0;
      var ykzf = $(".ykzf");
      var yincangyoujia=parseFloat($('.yincangyoujia').html()).toFixed(2);
      //console.log(yincangyoujia);
      ykzf.each(function(){
          var buyprice = parseFloat($(this).children(".buyprice").html()).toFixed(2);
          //状态0是涨，1是跌
          var ykzfostyle = $(this).children(".ykzfostyle").html();
          //是否体验卷0不是，1是
          var ykzfeid = $(this).children(".ykzfeid").html();
          //数量
          var onumber = $(this).children(".onumber").html();
					//波动
          var ykzfwave = $(this).children(".ykzfwave").html();
          if(ykzfeid==0){
              if (ykzfostyle==0) {
                   var newprice1 = (yincangyoujia-buyprice)*ykzfwave*onumber;
              }else{
                   var newprice1 = (buyprice-yincangyoujia)*ykzfwave*onumber;
              };
              yinprice1 = newprice1+yinprice1;
              var newprice3 =newprice1.toFixed(2);
              //var newprice4 =(yinprice1.toFixed(1))/2;
            }else{
                 var newprice3 =0;
                // var newprice4 =0;
            }
			if(yincangyoujia=="NaN"){
				$(this).children(".cash1").text("");
			}else{
				$(this).children(".cash1").html(newprice3);
				if(newprice3>=0){
						$(this).children(".cash1").css('color','#ed0000')
				}else{
						$(this).children(".cash1").css('color','#2fb44e')
				}
			}         
    //        $(this).children(".cash11").html(newprice4);
      });
      var ykzf1 = $(".ykzf1");
      var ycbaiyinjia=parseFloat($('.ycbaiyinjia').html()).toFixed(2);
      //console.log(ycbaiyinjia);
      ykzf1.each(function(){
          var buyprice1 = parseFloat($(this).children(".buyprice2").html()).toFixed(2);
          //状态0是涨，1是跌
          var ykzfostyle = $(this).children(".ykzfostyle").html();
           //是否体验卷0不是，1是
          var ykzfeid = $(this).children(".ykzfeid").html();
          //数量
          var onumber = $(this).children(".onumber").html();
        	//波动
          var ykzfwave = $(this).children(".ykzfwave").html();
          if(ykzfeid==0){
              if (ykzfostyle==0) {
                  var yinprice1 = (ycbaiyinjia-buyprice1)*ykzfwave*onumber;
              }else{
                  var yinprice1 = (buyprice1-ycbaiyinjia)*ykzfwave*onumber;
              };
                  yinprice2 = yinprice1+yinprice2;
                  var yinprice3 =yinprice1.toFixed(2);
              //    var yinprice4 =(yinprice2.toFixed(1))/2;
          }else{
                var yinprice3 =0;
             //   var yinprice4 =0;
          }
          if(ycbaiyinjia=="NaN"){
						$(this).children(".cash2").text("");
					}else{
						$(this).children(".cash2").html(yinprice3);
						if(yinprice3>=0){
								$(this).children(".cash2").css('color','#ed0000')
						}else{
								$(this).children(".cash2").css('color','#2fb44e')
						}
					}
           
      //     $(this).children(".cash22").html(yinprice4);
      });        
      var ykzf2 = $(".ykzf2");
      var yctojia=parseFloat($('.yctojia').html()).toFixed(2);
      ykzf2.each(function(){
          var buyprice2 = parseFloat($(this).children(".buyprice3").html()).toFixed(2);
           //状态0是涨，1是跌
          var ykzfostyle = $(this).children(".ykzfostyle").html();
          //是否体验卷0不是，1是
          var ykzfeid = $(this).children(".ykzfeid").html();
          //数量
          var onumber = $(this).children(".onumber").html();
          //波动
          var ykzfwave = $(this).children(".ykzfwave").html();
          if(ykzfeid==0){
               if (ykzfostyle==0) {
                    var newpr3 = (yctojia-buyprice2)*ykzfwave*onumber;
              }else{
                    var newpr3 = (buyprice2-yctojia)*ykzfwave*onumber;
              };
                  yinprice3=newpr3+yinprice3;
                  newpr4 = newpr3.toFixed(2);
               //   newpr5 = (yinprice3.toFixed(1))/2;
          }else{
                  newpr4 = 0;
              //    newpr5 = 0;
          }
          
          if(yctojia=="NaN"){
						$(this).children(".cash3").text("");	
					}else{
						$(this).children(".cash3").html(newpr4);
						if(newpr4>=0){
								$(this).children(".cash3").css('color','#ed0000')
						}else{
								$(this).children(".cash3").css('color','#2fb44e')
						}
					}
    //      $(this).children(".cash33").html(newpr5);
      });    
      var picsum=Number(yinprice1+yinprice2+yinprice3).toFixed(2);
      // picsum =picsum/2
      $('.ploss').each(function(){
      	if($(this).text()==""){
	      	$('.yk_con').html();
	      }else{
	      	$('.yk_con').html(picsum);
	      }	
      })
       
    } 

</script>
<!--查看交易end  -->    
 <script type="text/javascript">
   $(".conform").click(function(){

    // $(".conform").click(function(){
   
    //获取要提交的参数
    //数量
    var mysum=$('#sl').val();
    //所用费用
    var myfy=$('#opprice').html();
    //方向
    var myfx=$('#zhd').html();
    //手续费
    var mysxf=$('#j-5').html();
    //入仓价
   // var mygetpeice=$('#dangqianj').html();

   if($('#dqcid').html()==1){
      var mygetpeice=$('#ydangqianj').html();
   }else if($('#dqcid').html()==2){
      var mygetpeice=$('#bdangqianj').html();
   }else{
      var mygetpeice=$('#tdangqianj').html();
   }
   //alert(mygetpeice);
    $('#rcj').val(mygetpeice);
    
    if(mygetpeice==0 ||mygetpeice==null)
    {  
      alert('当前系统繁忙，请重试');
      return false;
    }

    var mytyj=$('#isJuan').val();
     //商品id
    var mypid=$('#type').val();
    
    if(mygetpeice!=''&& mypid!='')
    { 
      //体验卷值
            $.ajax({
                type:'post',
                url:"<?php echo U('Detailed/addorder');?>",
                data:{"mysum":mysum,"myfy":myfy,"myfx":myfx,"mysxf":mysxf,"mytyj":mytyj,"mypid":mypid,"mygetpeice":mygetpeice},
                success:function(data){
                  if (data==0) {
                      $('#message').css('display','block');
                  }else{
              	     //window.location.href="<?php echo U('Detailed/orderid');?>?orderid="+data+"&marker=first";
              	     window.location.href="<?php echo U('Index/index');?>";
                  }
                }
            });

    }
    });    
 </script> 
<!-- <script type="text/javascript" src="/Public/Home/js/echarts-plain.js"></script> -->
<script src="/Public/Home/js/idangerous.swiper.min.js"></script>
<script src="/Public/Home/js/fastclick.js"></script>
<script>
    
	
	var mySwiper = new Swiper('.swiper2', {
        paginationClickable: true,
        centeredSlides: true,
        slidesPerView:1.5,
        watchActiveIndex: true
    });
  var mySwiper = new Swiper('.swiper1', {
        paginationClickable: true,
        centeredSlides: true,
        slidesPerView:1.5,
        watchActiveIndex: true
    });
      
  var mySwiper = new Swiper('.swiper3', {
        paginationClickable: true,
        centeredSlides: true,
        slidesPerView:1.5,
        watchActiveIndex: true
    });
    
	//若给元素加none类隐藏会影响swiper加载
 //若给元素加none类隐藏会影响swiper加载
    //$(".sd").addClass("none");
	  setTimeout('$(".sd").addClass("none")',1000);

	$("#shuoming").click(function(){
	   $("#sm").show();
	   $(".mask1").show();
	});
	$(".back1").click(function(){
	    $("#sm").hide();
	    $(".mask1").hide();
	
	});

	</script>
  <script src="/Public/Home/js/script.js"></script>
  <script>
         setInterval('butt1()', 1000);
         setInterval('butt2()', 1000);
         setInterval('butt3()', 1000);
         
         $('.blue').click(function(){
			//className = $(this).attr('class');
			var onumber = $(this).attr('data-onumber');
			var zy = $(this).attr('data-zy');
			var zk = $(this).attr('data-zk');
			$('.qrsl').text(onumber);
			$('#buyid').val($(this).attr('data-oid'));
			$('zy').val(zy);
			$('zk').val(zk);
			$('.toclearfix li').each(function(){
				if($(this).val()==zy) {
					$(".toclearfix  li").eq($(this).index()).addClass("selected").siblings().removeClass("selected");
				};
			});
			$('.myclearfix li').each(function(){
				if ($(this).val()==zk) {
					$(".myclearfix  li").eq($(this).index()).addClass("selected").siblings().removeClass("selected");
				};
			});
			$('#dialogBg2').fadeIn(200);
	    	$('#dialog2').removeAttr('class').addClass('animated bounceIn').fadeIn(200);
		})
		//关闭弹窗
	 	$('#claseDialogBtn2').click(function(){
		   	$('#dialogBg2').fadeOut(200,function(){
		    	$('#dialog2').addClass('bounceOutUp').fadeOut(200);
		    });
		});
		function openpay(oid,pe,expend){
			var openpay = $('.openpay');
			var newprice,ploss,wine,bfb;
			if(openpay){
				openpay.each(function(){
					if($(this).find('.oid').text()==oid){
						ploss = $(this).find('.ploss').text();
						newprice = $(this).find('.latest-price').text();
						wine = parseFloat(ploss*1+expend*1,2);
						bfb = parseFloat(ploss/expend*100,2);
					}
				})
				if(newprice>=pe){
					$('.payprice').html('<em class="rise" id="payprice">'+newprice+'</em>');
				}else{
					$('.payprice').html('<em class="drop" id="payprice">'+newprice+'</em>');
				}
				$('.payploss').html(ploss+'('+bfb+'%)');
				$('.comiss').text(wine);
				if(ploss<0){
					$('.payploss').css('color','#2fb44e');
				}else{
					$('.payploss').css('color','#ed0000');
				}
				
			}
			
		}
		//关闭弹窗
	 	$('#claseDialogBtn3').click(function(){
		   	$('#dialogBg3').fadeOut(200,function(){
		    	$('#dialog3').addClass('bounceOutUp').fadeOut(200);
		    });
		});
		$('.payout').click(function(){
		   	$('#dialogBg3').fadeOut(200,function(){
		    	$('#dialog3').addClass('bounceOutUp').fadeOut(200);
		    });
		});
		
  </script>

 </div>     
</body>
</html>