<?php
  header("Content-type: text/html; charset=utf-8");
  define('HOST', 'localhost');
  define('USERNAME', 'tkadmin');
  define('PASSWORD', 'tkadmin');
?>
<?php
  if(!($con = mysql_connect(HOST, USERNAME, PASSWORD))){
    echo mysql_error();
  }
  if(!mysql_select_db('tk')){
    echo mysql_error();
  }
  if(!mysql_query('set names utf8')){
    echo mysql_error();
  }
?>
<?php 

  $sql = 'SELECT * FROM `tm` WHERE leixing = 1 LIMIT 0, 30 ';
  $query = mysql_query($sql);
  if($query&&mysql_num_rows($query)){
    while($row = mysql_fetch_assoc($query)){
      $data[] = $row;
    }
  }
  shuffle($data);
?>
<!DOCTYPE html>
<html lang="zh"><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>家盛时代-首页-国际建材旗帜-武汉建材、家盛时代建材广场</title>
<meta name="keywords" content="家盛时代-首页-国际建材旗帜-武汉建材、家盛时代建材广场">
<meta name="description" content="家盛时代-首页-国际建材旗帜-武汉建材、家盛时代建材广场">
<meta name="author" content="CnlicNET">
<meta name="copyright" content="CnlicNET Inc. All Rights Reserved">
<meta name="baidu-tc-verification" content="1e3f0bd7405917bd4132727b9863b4c6">



<style type="text/css">
body {
_behavior: url(http://www.jstimes.com/shop/templates/default/css/csshover.htc);
}
</style>
<link href="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/base.css" rel="stylesheet" type="text/css">
<link href="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/home_header.css" rel="stylesheet" type="text/css">
<link href="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/home_login.css" rel="stylesheet" type="text/css">
<link href="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/article-list.css">
<link rel="stylesheet" type="text/css" href="css/amazeui-form.css">

  <!--[if IE 7]>
    <link rel="stylesheet" href="http://www.jstimes.com/shop/resource/font/font-awesome/css/font-awesome-ie7.min.css">
  <![endif]-->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
        <script src="http://www.jstimes.com/data/resource/js/html5shiv.js"></script>
        <script src="http://www.jstimes.com/data/resource/js/respond.min.js"></script>
  <![endif]-->
  <!--[if IE 6]>
  <script src="http://www.jstimes.com/data/resource/js/IE6_PNG.js"></script>
  <script>
  DD_belatedPNG.fix('.pngFix');
  </script>
  <script>
  // <![CDATA[
  if((window.navigator.appName.toUpperCase().indexOf("MICROSOFT")>=0)&&(document.execCommand))
  try{
  document.execCommand("BackgroundImageCache", false, true);
     }
  catch(e){}
  // ]]>
  </script>
  <![endif]-->
<script>
  var COOKIE_PRE = 'D1BD_';var _CHARSET = 'utf-8';var SITEURL = 'http://www.jstimes.com/shop';var SHOP_SITE_URL = 'http://www.jstimes.com/shop';var RESOURCE_SITE_URL = 'http://www.jstimes.com/data/resource';var RESOURCE_SITE_URL = 'http://www.jstimes.com/data/resource';var SHOP_TEMPLATES_URL = 'http://www.jstimes.com/shop/templates/default';
</script>
<script src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/jquery_004.js"></script>
<script src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/common.js" charset="utf-8"></script>
<script src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/jquery_003.js"></script>
<script src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/jquery_006.js"></script>
<script src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/jquery_002.js"></script>
<script src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/dialog.js" id="dialog_js" charset="utf-8"></script>
<link href="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/dialog.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
  var PRICE_FORMAT = '&yen;%s';
  $(function(){
  	//首页左侧分类菜单
  	$(".category ul.menu").find("li").each(
  		function() {
  			$(this).hover(
  				function() {
  				    var cat_id = $(this).attr("cat_id");
  					var menu = $(this).find("div[cat_menu_id='"+cat_id+"']");
  					menu.show();
  					$(this).addClass("hover");
  					if(menu.attr("hover")>0) return;
  					menu.masonry({itemSelector: 'dl'});
  					/*
  					var menu_height = menu.height();
  					if (menu_height < 60) menu.height(80);
  					*/
  					var menu_height = menu.height(448);
  					if (menu_height < 60) menu.height(448);
  					menu_height = menu.height();
  					var li_top = $(this).position().top;
  					if ((li_top > 60) && (menu_height >= li_top)) $(menu).css("top",-li_top+38);
  					if ((li_top > 150) && (menu_height >= li_top)) $(menu).css("top",-li_top+38);
  					if ((li_top > 240) && (li_top > menu_height)) $(menu).css("top",-li_top+38);
  					if (li_top > 300 && (li_top > menu_height)) $(menu).css("top",-li_top+38);
  					if ((li_top > 40) && (menu_height <= 120)) $(menu).css("top",-li_top+38);
  					menu.attr("hover",1);
  				},
  				function() {
  					$(this).removeClass("hover");
  				    var cat_id = $(this).attr("cat_id");
  					$(this).find("div[cat_menu_id='"+cat_id+"']").hide();
  				}
  			);
  		}
  	);
  	$(".head-user-menu dl").hover(function() {
  		$(this).addClass("hover");
  	},
  	function() {
  		$(this).removeClass("hover");
  	});
  	$('.head-user-menu .my-mall').mouseover(function(){// 最近浏览的商品
  		load_history_information();
  		$(this).unbind('mouseover');
  	});
  	$('.head-user-menu .my-cart').mouseover(function(){// 运行加载购物车
  		load_cart_information();
  		$(this).unbind('mouseover');
  	});
  	$('#button').click(function(){
  	    if ($('#keyword').val() == '') {
  		    return false;
  	    }
  	});
  });
</script>
</head>
<body>
<!-- PublicTopLayout Begin -->
<link rel="shortcut icon" href="http://www.jstimes.com/shop/templates/default/images/js.ico" type="image/x-icon">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="public-top-layout w">
  <div class="topbar wrapper">  
    <div class="user-entry">
	<!--
          您好，欢迎来到      <a href="http://www.jstimes.com/shop" title="首页" alt="首页">家盛时代-首页-国际建材旗帜-武汉建材、家盛时代建材广场</a>
       <span >[<a href="http://www.jstimes.com/shop/index.php?act=login&op=index">登录</a>]</span>
        <span>[<a href="http://www.jstimes.com/shop/index.php?act=login&op=register">注册</a>]</span>
    	-->
	<span class="seller-login"><a href="http://www.jstimes.com/shop/index.php?act=seller_login&amp;op=show_login" target="_blank" title="登录商家管理中心"><i class="icon-signin"></i>商家管理中心</a></span> <em> <a href="http://www.jstimes.com/shop/index.php?act=store_joinin&amp;op=index" title="招商入驻" target="_blank">&nbsp;|&nbsp;招商入驻</a></em></div>
	
    <div class="user-login">
	<!-- -->
	<dl>
	<dt>
		<!--
      	  
	  您好      <a href="http://www.jstimes.com/shop" title="首页" alt="首页">家盛时代-首页-国际建材旗帜-武汉建材、家盛时代建材广场</a>
	  -->
       <em><a href="http://www.jstimes.com/shop/index.php?act=login&amp;op=index">您好,请点击[登录</a>]</em>
        <em>[<a href="http://www.jstimes.com/shop/index.php?act=login&amp;op=register">注册</a>]</em>
    	</dt>
	</dl>
	
	</div>
    <div class="quick-menu">
	
      <dl>
        <dt><a href="http://www.jstimes.com/shop/index.php?act=member_order">我的订单</a><i></i></dt>
        <dd>
          <ul>
            <li><a href="http://www.jstimes.com/shop/index.php?act=member_order&amp;state_type=state_new">待付款订单</a></li>
            <li><a href="http://www.jstimes.com/shop/index.php?act=member_order&amp;state_type=state_send">待确认收货</a></li>
            <li><a href="http://www.jstimes.com/shop/index.php?act=member_order&amp;state_type=state_noeval">待评价交易</a></li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt><a href="http://www.jstimes.com/shop/index.php?act=member_favorites&amp;op=fglist">我的收藏</a><i></i></dt>
        <dd>
          <ul>
            <li><a href="http://www.jstimes.com/shop/index.php?act=member_favorites&amp;op=fglist">商品收藏</a></li>
            <li><a href="http://www.jstimes.com/shop/index.php?act=member_favorites&amp;op=fslist">店铺收藏</a></li>
          </ul>
        </dd>
      </dl>
	  <dl>
        <dt>设计师中心<i></i></dt>
        <dd>
          <ul>
            <li><a href="http://www.jstimes.com/shop/index.php?act=designer_joinin&amp;op=index" target="_blank">设计师入驻</a></li>
			<li><a href="http://www.jstimes.com/shop/index.php?act=designer_login&amp;op=show_login" target="_blank">设计师登录</a></li>
			
          </ul>
       </dd>
      </dl>
      <dl>
        <dt>客户服务<i></i></dt>
        <dd>
          <ul>
            <li><a href="http://www.jstimes.com/shop/article_cate-2.html">帮助中心</a></li>
            <li><a href="http://www.jstimes.com/shop/article_cate-5.html">售后服务</a></li>
            <li><a href="http://www.jstimes.com/shop/article_cate-6.html">客服中心</a></li>
          </ul>
        </dd>
      </dl>
	  <dl>
        <dt>内部系统<i></i></dt>
        <dd>
          <ul>
            <li><a href="http://www.jstimes.com:7890/oa" target="_blank">内部OA</a></li>
			<li><a href="http://www.jstimes.com/shop/index.php?act=seller_login&amp;op=show_login" target="_blank">在线开单</a></li>
			<li><a href="http://www.jstimes.com/shop/index.php?act=login&amp;op=register_replace" target="_blank">代客户注册</a></li>	
			
          </ul>
       </dd>
      </dl>
          </div>
  </div>
</div>
<script type="text/javascript">
  $(function(){
  	$(".quick-menu dl").hover(
      function() {
  		$(this).addClass("hover");
  	},
  	function() {
  		$(this).removeClass("hover");
  	});
  });
</script>
<!-- PublicHeadLayout Begin -->
<div class="header-wrap">
  <header class="public-head-layout wrapper">
    <div class="site-logo"><a href="http://www.jstimes.com/shop"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/04767024249170454.jpg" class="pngFix"></a></div>
	<!--原版点击报名
	<div class="baoming"><a href="http://www.jstimes.com/shop/index.php?act=show_visitor&op=visitor" target="_blank"><img src="http://www.jstimes.com/data/upload/shop/common/take.gif" target="_blank"></a></div>
	-->
    <div class="baoming"><a href="http://www.jstimes.com/shop/index.php?act=show_visitor&amp;op=visitor" target="_blank"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/take.gif" target="_blank"></a></div>
    <div class="head-search-bar">
      <form action="http://www.jstimes.com/shop" method="get" class="search-form">
        <input name="act" id="search_act" value="search" type="hidden">
        <input name="keyword" id="keyword" class="input-text" maxlength="60" x-webkit-speech="" onwebkitspeechchange="foo()" placeholder="请输入您要搜索的商品关键字" x-webkit-grammar="builtin:search" lang="zh-CN" type="text">
        <input id="button" value="搜索" class="input-submit" type="submit">
      </form>
      <div class="keyword">热门搜索：        <ul>
                    <li><a href="http://www.jstimes.com/shop/index.php?act=search&amp;op=index&amp;keyword=%E5%8D%AB%E6%B5%B4">卫浴</a></li>
                    <li><a href="http://www.jstimes.com/shop/index.php?act=search&amp;op=index&amp;keyword=%E7%93%B7%E7%A0%96">瓷砖</a></li>
                    <li><a href="http://www.jstimes.com/shop/index.php?act=search&amp;op=index&amp;keyword=%E5%AE%B6%E5%85%B7">家具</a></li>
                  </ul>
      </div>
    </div>
    <div class="head-user-menu">
      <dl class="my-mall">
        <dt><span class="ico"></span>我的商城<i class="arrow"></i></dt>
        <dd>
          <div class="sub-title">
            <h4></h4>
            <a href="http://www.jstimes.com/shop/index.php?act=member_snsindex" class="arrow">我的用户中心<i></i></a></div>
          <div class="user-centent-menu">
            <ul>
              <li><a href="http://www.jstimes.com/shop/index.php?act=home&amp;op=message">站内消息(<span>0</span>)</a></li>
              <li><a href="http://www.jstimes.com/shop/index.php?act=member_order" class="arrow">我的订单<i></i></a></li>
              <li><a href="http://www.jstimes.com/shop/index.php?act=member_consult&amp;op=my_consult">咨询回复(<span id="member_consult">0</span>)</a></li>
              <li><a href="http://www.jstimes.com/shop/index.php?act=member_favorites&amp;op=fglist" class="arrow">我的收藏<i></i></a></li>
                            <li><a href="http://www.jstimes.com/shop/index.php?act=member_voucher">代金券(<span id="member_voucher">0</span>)</a></li>
                                          <li><a href="http://www.jstimes.com/shop/index.php?act=member_points" class="arrow">我的积分<i></i></a></li>
                          </ul>
          </div>
          <div class="browse-history">
            <div class="part-title">
              <h4>最近浏览的商品</h4>
            </div>
            <ul>
              <li class="no-goods"><img class="loading" src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/loading.gif"></li>
            </ul>
          </div>
        </dd>
      </dl>
      <dl class="my-cart">
                <dt><span class="ico"></span>购物车结算<i class="arrow"></i></dt>
        <dd>
          <div class="sub-title">
            <h4>最新加入的商品</h4>
          </div>
          <div class="incart-goods-box">
            <div class="incart-goods"> <img class="loading" src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/loading.gif"> </div>
          </div>
          <div class="checkout"> <span class="total-price">共<i>0</i>种商品</span><a href="http://www.jstimes.com/shop/index.php?act=cart" class="btn-cart">结算购物车中的商品</a> </div>
        </dd>
      </dl>
    </div>
  </header>
</div>
<!-- PublicHeadLayout End -->

<!-- publicNavLayout Begin -->
<nav class="public-nav-layout">
  <div class="wrapper">
    <div class="all-category">
        
      <div class="title">
        <h3><a href="http://www.jstimes.com/shop/index.php?act=category&amp;op=index">所有商品分类</a></h3>
        <i class="arrow"></i></div>
      <div class="category">
        <ul class="menu">

                              <li cat_id="1" class="odd">            
			<div class="class">	
				<br>              <h4><a href="http://www.jstimes.com/shop/cate-1-0-0-0-0-0-0-0.html">建材厨卫类</a></h4>
                            <span class="ico"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/category-pic-1.jpg"></span>
              
              <span class="recommend-class">
			  <!--
                                          <a href="http://www.jstimes.com/shop/cate-5027-0-0-0-0-0-0-0.html" title="瓷砖品牌">瓷砖品牌</a>
                            <a href="http://www.jstimes.com/shop/cate-6972-0-0-0-0-0-0-0.html" title="地板品牌">地板品牌</a>
                            <a href="http://www.jstimes.com/shop/cate-5343-0-0-0-0-0-0-0.html" title="橱柜品牌">橱柜品牌</a>
                            <a href="http://www.jstimes.com/shop/cate-5028-0-0-0-0-0-0-0.html" title="卫浴品牌">卫浴品牌</a>
                            <a href="http://www.jstimes.com/shop/cate-5029-0-0-0-0-0-0-0.html" title="吊顶品牌">吊顶品牌</a>
                            <a href="http://www.jstimes.com/shop/cate-5348-0-0-0-0-0-0-0.html" title="门窗品牌">门窗品牌</a>
                            <a href="http://www.jstimes.com/shop/cate-5349-0-0-0-0-0-0-0.html" title="石材品牌">石材品牌</a>
                            <a href="http://www.jstimes.com/shop/cate-5350-0-0-0-0-0-0-0.html" title="水槽品牌">水槽品牌</a>
                            <a href="http://www.jstimes.com/shop/cate-5344-0-0-0-0-0-0-0.html" title="厨配品牌">厨配品牌</a>
                             
			  -->
            </span><span class="arrow"></span> </div>
	<!--下2行原版：div class="sub-class" cat_menu_id="1">-->
		<div class="sub-class" cat_menu_id="1">
            <div class="sub-class-left">
			 <dl>
			 </dl>
				
                                          <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5027-0-0-2-2-0-0-0.html">瓷砖品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-374-cate_id-5027-b_id-374-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">东鹏瓷砖</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-421-cate_id-5027-b_id-421-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">金舵瓷砖</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-430-cate_id-5027-b_id-430-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">兴辉瓷砖</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-507-cate_id-5027-b_id-507-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">楼兰瓷砖</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-484-cate_id-5027-b_id-484-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">合富陶瓷</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-506-cate_id-5027-b_id-506-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">汉嘉瓷砖</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-374-cate_id-5027-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">东鹏瓷砖</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-421-cate_id-5027-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">金舵瓷砖</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-430-cate_id-5027-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">兴辉瓷砖</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-507-cate_id-5027-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">楼兰瓷砖</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-484-cate_id-5027-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">合富陶瓷</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-506-cate_id-5027-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">汉嘉瓷砖</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-6972-0-0-2-2-0-0-0.html">地板品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-508-cate_id-6972-b_id-508-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">生活家</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-454-cate_id-6972-b_id-454-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">金舵地板</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-427-cate_id-6972-b_id-427-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">福来家</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-485-cate_id-6972-b_id-485-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">佳伦地板</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-504-cate_id-6972-b_id-504-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">友威</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-562-cate_id-6972-b_id-562-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">悦美</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-508-cate_id-6972-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">生活家</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-454-cate_id-6972-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">金舵地板</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-427-cate_id-6972-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">福来家</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-485-cate_id-6972-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">佳伦地板</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-504-cate_id-6972-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">友威</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-562-cate_id-6972-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">悦美</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5343-0-0-2-2-0-0-0.html">橱柜品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-439-cate_id-5343-b_id-439-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">欧派</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-432-cate_id-5343-b_id-432-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">樱花卫厨</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-461-cate_id-5343-b_id-461-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">巨迪橱柜</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-463-cate_id-5343-b_id-463-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">卡利亚厨柜</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-422-cate_id-5343-b_id-422-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">百能</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-416-cate_id-5343-b_id-416-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">百丽</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-457-cate_id-7059-b_id-457-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">帝森橱柜</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-460-cate_id-5343-b_id-460-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">吉林森工橱柜</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-439-cate_id-5343-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">欧派</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-432-cate_id-5343-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">樱花卫厨</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-461-cate_id-5343-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">巨迪橱柜</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-463-cate_id-5343-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">卡利亚厨柜</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-422-cate_id-5343-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">百能</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-416-cate_id-5343-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">百丽</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-457-cate_id-7059-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">帝森橱柜</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-460-cate_id-5343-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">吉林森工橱柜</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5028-0-0-2-2-0-0-0.html">卫浴品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-455-cate_id-5028-b_id-455-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">赛唯雅</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-511-cate_id-5028-b_id-511-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">科勒</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-417-cate_id-5028-b_id-417-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">浪鲸</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-510-cate_id-5028-b_id-510-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">航标</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-431-cate_id-5028-b_id-431-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">九牧卫浴</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-512-cate_id-5028-b_id-512-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">玛莎</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-515-cate_id-5028-b_id-515-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">尚高</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-426-cate_id-5028-b_id-426-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">钻石</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-517-cate_id-5028-b_id-517-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">席玛</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-544-cate_id-5028-b_id-544-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">TOTO</a>
                                                                        				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-455-cate_id-5028-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">赛唯雅</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-511-cate_id-5028-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">科勒</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-417-cate_id-5028-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">浪鲸</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-510-cate_id-5028-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">航标</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-431-cate_id-5028-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">九牧卫浴</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-512-cate_id-5028-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">玛莎</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-515-cate_id-5028-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">尚高</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-426-cate_id-5028-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">钻石</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-517-cate_id-5028-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">席玛</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-544-cate_id-5028-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">TOTO</a>
                                                                                        </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5029-0-0-2-2-0-0-0.html">吊顶品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-473-cate_id-5029-b_id-473-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">友邦</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-491-cate_id-5029-b_id-491-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">品格</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-476-cate_id-5029-b_id-476-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">奥柯美</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-440-cate_id-5029-b_id-440-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">美凯隆</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-473-cate_id-5029-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">友邦</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-491-cate_id-5029-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">品格</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-476-cate_id-5029-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">奥柯美</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-440-cate_id-5029-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">美凯隆</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5348-0-0-2-2-0-0-0.html">门窗品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-459-cate_id-5348-b_id-459-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">凤铝门窗</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-533-cate_id-5348-b_id-533-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">王力</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-501-cate_id-5348-b_id-501-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">美加德尚</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-425-cate_id-5348-b_id-425-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">凯旋总统门</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-532-cate_id-5348-b_id-532-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">春天</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-500-cate_id-5348-b_id-500-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">坚美</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-470-cate_id-5348-b_id-470-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">喜爱木门</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-534-cate_id-5348-b_id-534-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">艾斯兰德</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-423-cate_id-5348-b_id-423-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">颐庭轩</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-433-cate_id-5348-b_id-433-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">忠旺</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-459-cate_id-5348-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">凤铝门窗</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-533-cate_id-5348-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">王力</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-501-cate_id-5348-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">美加德尚</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-425-cate_id-5348-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">凯旋总统门</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-532-cate_id-5348-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">春天</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-500-cate_id-5348-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">坚美</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-470-cate_id-5348-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">喜爱木门</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-534-cate_id-5348-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">艾斯兰德</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-423-cate_id-5348-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">颐庭轩</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-433-cate_id-5348-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">忠旺</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5349-0-0-2-2-0-0-0.html">石材品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-535-cate_id-5349-b_id-535-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">勇登</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-467-cate_id-5349-b_id-467-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">色萨利</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-535-cate_id-5349-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">勇登</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-467-cate_id-5349-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">色萨利</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5350-0-0-2-2-0-0-0.html">水槽品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-536-cate_id-5350-b_id-536-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">普乐美</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-513-cate_id-5350-b_id-513-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">摩恩</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-453-cate_id-5028-b_id-453-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">白鸟水槽</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-536-cate_id-5350-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">普乐美</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-513-cate_id-5350-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">摩恩</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-453-cate_id-5028-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">白鸟水槽</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5344-0-0-2-2-0-0-0.html">厨配品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-441-cate_id-5344-b_id-441-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">HANILSTS(不锈钢类煎锅/炒锅/汤锅具/勺筷组合)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-442-cate_id-5344-b_id-442-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">PANSTAR(炒锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-443-cate_id-5344-b_id-443-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">PATLON(炒锅/汤锅/火锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-444-cate_id-5344-b_id-444-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">SILVAT(煎锅/炒锅/汤锅/真空锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-445-cate_id-5344-b_id-445-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">Livingcastle(汤锅/中压锅/高压锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-447-cate_id-5344-b_id-447-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">Zagi salang(钻石涂层煎锅/汤锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-448-cate_id-5344-b_id-448-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">QUEEN SENSE(火锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-449-cate_id-5344-b_id-449-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">KITCHEN WAY(3D涂层煎锅/炒锅/汤锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-450-cate_id-5344-b_id-450-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">石器天国(天然石锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-552-cate_id-5344-b_id-552-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">SAMMI (内钢功能煎锅/汤锅)</a>
                                                                                                            				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-441-cate_id-5344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">HANILSTS(不锈钢类煎锅/炒锅/汤锅具/勺筷组合)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-442-cate_id-5344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">PANSTAR(炒锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-443-cate_id-5344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">PATLON(炒锅/汤锅/火锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-444-cate_id-5344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">SILVAT(煎锅/炒锅/汤锅/真空锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-445-cate_id-5344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">Livingcastle(汤锅/中压锅/高压锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-447-cate_id-5344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">Zagi salang(钻石涂层煎锅/汤锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-448-cate_id-5344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">QUEEN SENSE(火锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-449-cate_id-5344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">KITCHEN WAY(3D涂层煎锅/炒锅/汤锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-450-cate_id-5344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">石器天国(天然石锅)</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-552-cate_id-5344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">SAMMI (内钢功能煎锅/汤锅)</a>
                                                                                                                            </dd>
                				-->
              </dl>
                                       </div>
			
			<div class="sub-class-right">
		        <dt>
                  <h1>推荐品牌：</h1>
                </dt>
			    				                
                  				
                    <a href="http://www.jstimes.com/shop/brand-list-brand-374-cate_id-0-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/04717980566422560_sm.jpg" alt="东鹏瓷砖" height="50px" width="110px"></a>
					                                    				
                    <a href="http://www.jstimes.com/shop/brand-list-brand-421-cate_id-0-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/04717976241295070_sm.jpg" alt="金舵瓷砖" height="50px" width="110px"></a>
					                                    				
                    <a href="http://www.jstimes.com/shop/brand-list-brand-430-cate_id-0-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/04717986129237325_sm.jpg" alt="兴辉瓷砖" height="50px" width="110px"></a>
					                                    				
                    <a href="http://www.jstimes.com/shop/brand-list-brand-507-cate_id-0-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/04789699790407685_sm.jpg" alt="楼兰瓷砖" height="50px" width="110px"></a>
					                                    				
                    <a href="http://www.jstimes.com/shop/brand-list-brand-484-cate_id-0-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/04724735550422332_sm.jpg" alt="合富陶瓷" height="50px" width="110px"></a>
					                                    				
                    <a href="http://www.jstimes.com/shop/brand-list-brand-506-cate_id-0-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/04789696900516580_sm.jpg" alt="汉嘉瓷砖" height="50px" width="110px"></a>
					                                    												                
                                                      				
                    <a href="http://www.jstimes.com/shop/brand-list-brand-454-cate_id-0-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/04711075646321311_sm.png" alt="金舵地板" height="50px" width="110px"></a>
					                                                                   
                                                                        
                                         												                
                                                                        
                                                                        
                                                                        
                                                                        
                  												                
                  				
                    <a href="http://www.jstimes.com/shop/brand-list-brand-455-cate_id-0-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/04717984197165876_sm.jpg" alt="赛唯雅" height="50px" width="110px"></a>
					                                                                   
                                                                        
                                                                        
                                                                        
                                                                        
                                         												                
                                                                        
                                                                        
                  												                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                  												                
                                                                        
                  												                
                                                                        
                                                      												      
          
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                  										
			</div>
		</div>
	
		
         </li>
                    <li cat_id="2" class="even">            
			<div class="class">	
				<br>              <h4><a href="http://www.jstimes.com/shop/cate-2-0-0-0-0-0-0-0.html">家居电器类</a></h4>
                            <span class="ico"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/category-pic-2.jpg"></span>
              
              <span class="recommend-class">
			  <!--
                                          <a href="http://www.jstimes.com/shop/cate-5342-0-0-0-0-0-0-0.html" title="厨电品牌">厨电品牌</a>
                            <a href="http://www.jstimes.com/shop/cate-5351-0-0-0-0-0-0-0.html" title="晾衣架品牌">晾衣架品牌</a>
                            <a href="http://www.jstimes.com/shop/cate-5352-0-0-0-0-0-0-0.html" title="榻榻米品牌">榻榻米品牌</a>
                            <a href="http://www.jstimes.com/shop/cate-5353-0-0-0-0-0-0-0.html" title="整体家居品牌">整体家居品牌</a>
                            <a href="http://www.jstimes.com/shop/cate-5354-0-0-0-0-0-0-0.html" title="家具品牌">家具品牌</a>
                             
			  -->
            </span><span class="arrow"></span> </div>
	<!--下2行原版：div class="sub-class" cat_menu_id="2">-->
		<div class="sub-class" cat_menu_id="2">
            <div class="sub-class-left">
			 <dl>
			 </dl>
				
                                          <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5342-0-0-2-2-0-0-0.html">厨电品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-520-cate_id-5342-b_id-520-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">方太</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-429-cate_id-5342-b_id-429-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">西门子</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-428-cate_id-5342-b_id-428-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">荣事达</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-469-cate_id-5342-b_id-469-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">森歌</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-465-cate_id-5342-b_id-465-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">威能</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-471-cate_id-5342-b_id-471-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">亿田</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-419-cate_id-5347-b_id-419-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">沁园</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-567-cate_id-5347-b_id-567-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">Alikes净水机</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-571-cate_id-5342-b_id-571-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">老板</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-561-cate_id-5342-b_id-561-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">威尔士莫卡</a>
                                                                        				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-520-cate_id-5342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">方太</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-429-cate_id-5342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">西门子</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-428-cate_id-5342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">荣事达</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-469-cate_id-5342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">森歌</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-465-cate_id-5342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">威能</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-471-cate_id-5342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">亿田</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-419-cate_id-5347-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">沁园</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-567-cate_id-5347-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">Alikes净水机</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-571-cate_id-5342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">老板</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-561-cate_id-5342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">威尔士莫卡</a>
                                                                                        </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5351-0-0-2-2-0-0-0.html">晾衣架品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-569-cate_id-5348-b_id-569-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">恋晴</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-537-cate_id-5351-b_id-537-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">好太太</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-538-cate_id-5351-b_id-538-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">红杏</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-569-cate_id-5348-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">恋晴</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-537-cate_id-5351-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">好太太</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-538-cate_id-5351-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">红杏</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5352-0-0-2-2-0-0-0.html">榻榻米品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-539-cate_id-5352-b_id-539-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">和室创意</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-424-cate_id-5352-b_id-424-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">雅静</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-539-cate_id-5352-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">和室创意</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-424-cate_id-5352-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">雅静</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5353-0-0-2-2-0-0-0.html">整体家居品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-541-cate_id-5353-b_id-541-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">见喜</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-493-cate_id-5353-b_id-493-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">怡萧行</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-540-cate_id-5353-b_id-540-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">爱琴海</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-456-cate_id-5353-b_id-456-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">帝奥斯</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-462-cate_id-5353-b_id-462-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">爵士盾</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-502-cate_id-5353-b_id-502-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">名门轩</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-438-cate_id-5353-b_id-438-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">维多利亚</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-503-cate_id-5353-b_id-503-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">F.L.Y怡馨雅</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-474-cate_id-5353-b_id-474-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">御宅坊木门衣柜</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-541-cate_id-5353-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">见喜</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-493-cate_id-5353-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">怡萧行</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-540-cate_id-5353-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">爱琴海</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-456-cate_id-5353-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">帝奥斯</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-462-cate_id-5353-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">爵士盾</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-502-cate_id-5353-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">名门轩</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-438-cate_id-5353-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">维多利亚</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-503-cate_id-5353-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">F.L.Y怡馨雅</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-474-cate_id-5353-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">御宅坊木门衣柜</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5354-0-0-2-2-0-0-0.html">家具品牌</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-543-cate_id-5354-b_id-543-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">香港恒信</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-566-cate_id-7350-b_id-566-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">物联智能家居</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-543-cate_id-5354-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">香港恒信</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-566-cate_id-7350-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">物联智能家居</a>
                                                    </dd>
                				-->
              </dl>
                                       </div>
			
			<div class="sub-class-right">
		        <dt>
                  <h1>推荐品牌：</h1>
                </dt>
			    				                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                      												      
          
                                                                        
                                                      												      
          
                                                                        
                  												                
                                                                        
                                                                        
                                                                        
                                                                        
                                                      												      
          
                                                                        
                  										
			</div>
		</div>
	
		
         </li>
                    <li cat_id="3" class="odd">            
			<div class="class">	
				<br>              <h4><a href="http://www.jstimes.com/shop/cate-3-0-0-0-0-0-0-0.html">智能家居类</a></h4>
                            <span class="ico"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/category-pic-3.jpg"></span>
              
              <span class="recommend-class">
			  <!--
                                          <a href="http://www.jstimes.com/shop/cate-7350-0-0-0-0-0-0-0.html" title="智能家居">智能家居</a>
                            <a href="http://www.jstimes.com/shop/cate-7353-0-0-0-0-0-0-0.html" title="新风系统">新风系统</a>
                            <a href="http://www.jstimes.com/shop/cate-5030-0-0-0-0-0-0-0.html" title="供暧">供暧</a>
                            <a href="http://www.jstimes.com/shop/cate-5346-0-0-0-0-0-0-0.html" title="保险柜">保险柜</a>
                             
			  -->
            </span><span class="arrow"></span> </div>
	<!--下2行原版：div class="sub-class" cat_menu_id="3">-->
		<div class="sub-class" cat_menu_id="3">
            <div class="sub-class-left">
			 <dl>
			 </dl>
				
                                          <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-7350-0-0-2-2-0-0-0.html">智能家居</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-543-cate_id-5354-b_id-543-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">香港恒信</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-566-cate_id-7350-b_id-566-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">物联智能家居</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-543-cate_id-5354-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">香港恒信</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-566-cate_id-7350-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">物联智能家居</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-7353-0-0-2-2-0-0-0.html">新风系统</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-543-cate_id-5354-b_id-543-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">香港恒信</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-566-cate_id-7350-b_id-566-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">物联智能家居</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-543-cate_id-5354-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">香港恒信</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-566-cate_id-7350-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">物联智能家居</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5030-0-0-2-2-0-0-0.html">供暧</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-492-cate_id-5030-b_id-492-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">祥和暖通</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-519-cate_id-5030-b_id-519-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">品质空间</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-418-cate_id-7030-b_id-418-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">AO史密斯</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-412-cate_id-7030-b_id-412-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">阿里斯顿</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-477-cate_id-5030-b_id-477-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">菲斯曼</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-489-cate_id-7030-b_id-489-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">格力</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-518-cate_id-7030-b_id-518-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">开利</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-492-cate_id-5030-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">祥和暖通</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-519-cate_id-5030-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">品质空间</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-418-cate_id-7030-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">AO史密斯</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-412-cate_id-7030-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">阿里斯顿</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-477-cate_id-5030-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">菲斯曼</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-489-cate_id-7030-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">格力</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-518-cate_id-7030-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">开利</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5346-0-0-2-2-0-0-0.html">保险柜</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-530-cate_id-5346-b_id-530-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">恩尔</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-472-cate_id-5346-b_id-472-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">永发</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-458-cate_id-5346-b_id-458-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">康华</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-530-cate_id-5346-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">恩尔</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-472-cate_id-5346-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">永发</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-458-cate_id-5346-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">康华</a>
                                                    </dd>
                				-->
              </dl>
                                       </div>
			
			<div class="sub-class-right">
		        <dt>
                  <h1>推荐品牌：</h1>
                </dt>
			    				                
                                                                        
                  												                
                                                                        
                  												                
                                                                        
                                                                        
                                                                        
                                                      												      
          
                                                                        
                                                      										
			</div>
		</div>
	
		
         </li>
                    <li cat_id="5" class="even">            
			<div class="class">	
				<br>              <h4><a href="http://www.jstimes.com/shop/cate-5-0-0-0-0-0-0-0.html">家装施工类</a></h4>
                            <span class="ico"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/category-pic-5.jpg"></span>
              
              <span class="recommend-class">
			  <!--
                                          <a href="http://www.jstimes.com/shop/cate-7342-0-0-0-0-0-0-0.html" title="家装公司">家装公司</a>
                            <a href="http://www.jstimes.com/shop/cate-7343-0-0-0-0-0-0-0.html" title="设计公司">设计公司</a>
                            <a href="http://www.jstimes.com/shop/cate-7344-0-0-0-0-0-0-0.html" title="施工单位">施工单位</a>
                            <a href="http://www.jstimes.com/shop/cate-7345-0-0-0-0-0-0-0.html" title="监理公司">监理公司</a>
                             
			  -->
            </span><span class="arrow"></span> </div>
	<!--下2行原版：div class="sub-class" cat_menu_id="5">-->
		<div class="sub-class" cat_menu_id="5">
            <div class="sub-class-left">
			 <dl>
			 </dl>
				
                                          <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-7342-0-0-2-2-0-0-0.html">家装公司</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-557-cate_id-7342-b_id-557-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">广东唯美装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-558-cate_id-7342-b_id-558-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">广东领南装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-564-cate_id-7344-b_id-564-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">华旗供应链</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-557-cate_id-7342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">广东唯美装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-558-cate_id-7342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">广东领南装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-564-cate_id-7344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">华旗供应链</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-7343-0-0-2-2-0-0-0.html">设计公司</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-557-cate_id-7342-b_id-557-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">广东唯美装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-558-cate_id-7342-b_id-558-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">广东领南装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-564-cate_id-7344-b_id-564-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">华旗供应链</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-557-cate_id-7342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">广东唯美装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-558-cate_id-7342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">广东领南装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-564-cate_id-7344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">华旗供应链</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-7344-0-0-2-2-0-0-0.html">施工单位</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-557-cate_id-7342-b_id-557-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">广东唯美装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-558-cate_id-7342-b_id-558-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">广东领南装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-564-cate_id-7344-b_id-564-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">华旗供应链</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-557-cate_id-7342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">广东唯美装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-558-cate_id-7342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">广东领南装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-564-cate_id-7344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">华旗供应链</a>
                                                    </dd>
                				-->
              </dl>
                            <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-7345-0-0-2-2-0-0-0.html">监理公司</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-557-cate_id-7342-b_id-557-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">广东唯美装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-558-cate_id-7342-b_id-558-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">广东领南装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-564-cate_id-7344-b_id-564-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">华旗供应链</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-557-cate_id-7342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">广东唯美装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-558-cate_id-7342-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">广东领南装饰公司</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-564-cate_id-7344-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">华旗供应链</a>
                                                    </dd>
                				-->
              </dl>
                                       </div>
			
			<div class="sub-class-right">
		        <dt>
                  <h1>推荐品牌：</h1>
                </dt>
			    				                
                                                                        
                                                      												      
          
                                                                        
                                                      												      
          
                                                                        
                                                      												      
          
                                                                        
                                                      										
			</div>
		</div>
	
		
         </li>
                    <li cat_id="4" class="odd">            
			<div class="class">	
				<br>              <h4><a href="http://www.jstimes.com/shop/cate-4-0-0-0-0-0-0-0.html">家饰其他类</a></h4>
                            <span class="ico"><img src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/category-pic-4.jpg"></span>
              
              <span class="recommend-class">
			  <!--
                                          <a href="http://www.jstimes.com/shop/cate-5345-0-0-0-0-0-0-0.html" title="窗帘墙纸">窗帘墙纸</a>
                             
			  -->
            </span><span class="arrow"></span> </div>
	<!--下2行原版：div class="sub-class" cat_menu_id="4">-->
		<div class="sub-class" cat_menu_id="4">
            <div class="sub-class-left">
			 <dl>
			 </dl>
				
                                          <dl>
                <dt>
                  <h3><a href="http://www.jstimes.com/shop/cate-5345-0-0-2-2-0-0-0.html">窗帘墙纸</a></h3>
                </dt>
                			                  <dd class="brands-class">
                 <!-- <h5>品牌：</h5>-->
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-565-cate_id-5345-b_id-565-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">昕佳居</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-568-cate_id-5345-b_id-568-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">亚皇</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-570-cate_id-5345-b_id-570-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">乐居雅</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-483-cate_id-5345-b_id-483-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">亿诺</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-524-cate_id-5345-b_id-524-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">法兰卡</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-526-cate_id-5345-b_id-526-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">阳光</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-527-cate_id-5345-b_id-527-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">宜兰领秀</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-486-cate_id-5345-b_id-486-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">玉兰</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-529-cate_id-5345-b_id-529-a_id-0-key-2-order-2-type-0-area_id-0-curpage-0.html">志海</a>
                                    				  <a href="http://www.jstimes.com/shop/brand.html">更多…</a>					  
                </dd>
								<!--
                                <dd class="brands-class">
                  <h5>品牌：</h5>
                                      <a href="http://www.jstimes.com/shop/brand-list-brand-565-cate_id-5345-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">昕佳居</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-568-cate_id-5345-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">亚皇</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-570-cate_id-5345-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">乐居雅</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-483-cate_id-5345-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">亿诺</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-524-cate_id-5345-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">法兰卡</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-526-cate_id-5345-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">阳光</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-527-cate_id-5345-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">宜兰领秀</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-486-cate_id-5345-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">玉兰</a>
                                                        <a href="http://www.jstimes.com/shop/brand-list-brand-529-cate_id-5345-b_id-0-a_id-0-key-0-order-0-type-0-area_id-0-curpage-0.html">志海</a>
                                                    </dd>
                				-->
              </dl>
                                       </div>
			
			<div class="sub-class-right">
		        <dt>
                  <h1>推荐品牌：</h1>
                </dt>
			    				                
                                                                        
                                                                        
                                                                        
                                                                        
                                                      										
			</div>
		</div>
	
		
         </li>
                            </ul>
      </div>    </div>
    <ul class="site-menu">
	
      <li><a href="http://www.jstimes.com/shop">首页</a></li>
	  <!--
            <li><a href="http://www.jstimes.com/shop/groupbuy-0-0-0-0-0-0.html" > 团购</a></li>
      	  <li><a href="http://www.jstimes.com/shop/brand.html" > 品牌</a></li>
	  
	        <li><a href="http://www.jstimes.com/shop/index.php?act=show_designer&op=index" > 设计师中心</a></li>
      	  
	        <li><a href="http://www.jstimes.com/shop/index.php?act=show_xgt&op=index" > 效果图</a></li>
        
            <li><a href="http://www.jstimes.com/shop/integral.html" > 积分中心</a></li>
      	  -->
	   
	  <li><a href="http://www.jstimes.com/shop/index.php?act=zxsjy&amp;op=zxsjy">装修设计院</a></li>
      <li><a target="_blank" href="http://www.jstimes.com/shop/cate-5027-0-0-2-2-0-0-0.html">家居商城</a></li>
      <li><a target="_blank" href="http://www.jstimes.com/shop/">装修施工队</a></li>
      <li><a href="http://www.jstimes.com/shop/index.php?act=huodong_sp&amp;op=gylyfw">供应链与服务</a></li>
      <li><a href="http://www.jstimes.com/shop/">装修监理</a></li>
      <li><a href="http://www.jstimes.com/shop/index.php?act=ppj&amp;op=act315">客户VIP</a></li>
      <li><a href="http://www.jstimes.com/shop/index.php?act=ppj&amp;op=act315">在线咨询</a></li>
      <li><a href="http://www.jstimes.com/shop/index.php?act=huodong_count&amp;op=huodong_count_list">当期促销</a></li>
                                                                      </ul>
  </div>
</nav>
<!-- PublicNavLayout End-->













<div class="wrapper">
  <div class="nav-wrap">
      <div class="w">
          <div class="breadcrumb"><a href="#">首页</a>&nbsp;&gt;&nbsp;<a href="#">嘉盛学院</a>&nbsp;&gt;&nbsp;<a href="#">学院问卷</a></div>
      </div>
  </div>
  <div class="main">
    
      <div class="left">
          <div class="allNav mb20 xykecheng">
            <h2>家盛学院</h2>
            <ul>
              <!-- <li ><a href="#" >学院课程</a></li> -->
              <li ><a href="#" >学院课件</a></li>
              <li class="current"><a href="#" >学院问卷</a></li>
            </ul>
          </div>
          
      </div>
      <div class="right mb50">
        <h1 class="xykc_hd YaHei">东鹏瓷砖销售知识问卷</h1>
        <div class="wenda-form mt20">
          <form class="am-form" action="some.php" method="post">
            <fieldset>
              <?php
                if(empty($data)){ 
                  echo "当前没有文章，请管理员在后台添加文章";
                }else{
                  foreach($data as $value){
              ?>
              <div class="am-form-group">
                <label class="timu"><?php echo $value['biaoti']?></label>
                <input type="text" name="<?php echo "id".$value['id']?>" value="<?php echo $value['id']?>" >
                <div class="am-radio">
                  <label>
                    <input type="radio" name="<?php echo "da".$value['id']?>" value="A" > A. <?php echo $value['daan']?>
                  </label>
                </div>
                <div class="am-radio">
                  <label>
                    <input type="radio" name="<?php echo "da".$value['id']?>" value="B" > B. <?php echo $value['qitab']?>
                  </label>
                </div>
                <div class="am-radio">
                  <label>
                    <input type="radio" name="<?php echo "da".$value['id']?>" value="C" > C. <?php echo $value['qitac']?>
                  </label>
                </div>
                <div class="am-radio">
                  <label>
                    <input type="radio" name="<?php echo "da".$value['id']?>" value="D" > C. <?php echo $value['qitad']?>
                  </label>
                </div>
              </div>
              <?php
                  }
                }
              ?>
             

              
              
              
<!-- 
              <div class="am-form-group">
                <label class="timu">14.东鹏采用的是（）做原料，东鹏原料价格是普通铝原料的两倍，硬度也高两倍、寿命长两倍。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">15.东鹏粉料细度是（）目，粉料比奶粉还细，这样压制出来的砖坯更密实，也就更耐磨、更防污。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">16.东鹏水晶瓷采用的是（）釉料，氧化锌能充分发色，所以东鹏水晶瓷看起来层次更清晰，线条更细腻，更加透亮，而且是烧熟的釉料，不会有小针孔、小气泡，防污性能更好。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">17.东鹏一块800的砖，面釉比普通砖要多用（）克。东鹏的砖釉面层更厚，更耐磨。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">18.东鹏水晶层含有（）的氧化锌和氧化钡，是普通厂家的两倍，氧化锌和氧化钡的含量越高，砖的通透感越强，表面更加油光发亮。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">19.同样长的窑炉，东鹏的产量只有别人的（），是因为东鹏的烧制时间特别长。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">20.东鹏800的微晶砖比普通砖多烧（）小时。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">21.东鹏的砖能（），像瓷碗一样密实，硬度高、耐磨。而且晶体层与底料紧密结合，不脱落、不崩裂。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">22.实木地板一般都是多层的，多层粘合都需要胶水，而且铺贴也需要胶水，胶水里都有（），瓷木地板是用水泥铺贴，所以更环保。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">23.瓷木地板比实木地板更（），在南方潮湿不用担心木地板吸水发胀起拱，在北方不用担心地热膨胀起拱。不怕虫、不怕水、不怕霉！</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">24.瓷木地板用（）填缝，但实木地板的缝不能填充，容易藏污纳垢，滋生细菌，所以瓷木地板更能保护家人健康。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">25.东鹏的仿古砖都是（）设计的，没有传统仿古砖的压抑沉闷，是超现代的时尚简约，引领仿古砖的未来潮流。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">26.东鹏仿古砖摸起来有金属感，颜色纯正细腻，是因为采用（）釉料。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">27.东鹏仿古砖耐磨性能达到（）级，普通釉料的砖只能达到3级，寿命长、更耐磨！</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">28.东鹏一块450*300的瓷片，釉料比别人多（），釉料越厚光泽度越高，更耐磨，更防污。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">29.您看（引导顾客看白炽灯的照影），光影是（），如果表面平整度不够，光影是弯曲，而且有锯齿。平整度越高，越好铺贴，也更整齐漂亮。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">30.东鹏的烧制时间要长，烧得越久就更密实，吸水率比普通的瓷片低 （），吸水率越低防污能力就越强，越好打理。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">31.东鹏瓷砖采用（）色喷墨打印机，普通只有4色。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">32.东鹏瓷砖采用（），可以刻出发丝一样的线条，而且不断线，更加清晰、逼真、立体。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">33.我们这里还有一款获得国家发明专利的健康宝，能除（）除异味。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">34.健康宝和壁纸一样好看，又比（）更好用，很神奇。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">35.健康宝材质看起来像瓷砖，纹理看起来像壁纸，它是用海底的（）和天然粘土做成的。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">36.健康宝的密度只有普通瓷砖的（）。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">37.健康宝（）的纳米级微孔，有强大的吸附作用。比方说装修后的甲醛、吸烟后的烟雾，还有房间里的其它异味，都能去除。做实验（氨水实验）</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">38.如果室内的湿度达到80%，就会有很多螨虫、霉菌产生。健康宝能吸附多余的湿气，将湿度控制在（）之间，不会让衣柜、衣物有霉变。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">39.健康宝的厚度是（）MM，能起到保温作用，而且不会老化褪色，使用年限长，不像墙纸，用了3、5年就发黄、发霉还得重新换。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">40.东鹏有（）多年的历史，是靠品质发展到今天的，买产品首先要选放心的品牌是吧？老品牌的品质最可靠，技术最雄厚，买着放心，看着开心，用着舒心！</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">41.产品好不好，要看用的人多不多，东鹏连续几年荣获瓷砖（），您说东鹏质量好不好？您看，这是国家统计局的数据。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">42.东鹏拥有行业唯一的（）。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">43.东鹏目前已经拥有（）项专利。</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">44.东鹏是行业（）能力最强的企业。幸福是自己创造的好，产品是原创的好！</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">45.客厅下地很简单，（）最有现代感；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">46.客厅下地很简单，（）是首选；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">47. 过道入户是（），主人品位要体现；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">48.过道入户：（）外加波打线，主人品位要体现；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">49.客厅 （）配天圆；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">50. 餐厅大厅（）；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">51.别墅波打（）线；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">52. 通透瓷砖水晶灯，上墙需要（）；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">53.浅色（）要造型，各个角度亮晶晶；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">54.深色整体（）造型，浑然一体有点睛；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">55.干湿（）主客卫；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">56.湿区（）做防备；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">57.马桶花洒浴缸背，没有焦点太乏味，做个（）有品位；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">58.深浅双色（）配；</label>
                <input type="text">
              </div>
               <div class="am-form-group">
                <label class="timu">59.一体同色（）缀；</label>
                <input type="text">
              </div>
               <div class="am-form-group">
                <label class="timu">60.（）地漏没异味，一切为四才对位；</label>
                <input type="text">
              </div>
               <div class="am-form-group">
                <label class="timu">61. 厨房焦点是（），吊柜台面有空位，发挥想象做点缀；</label>
                <input type="text">
              </div>
               <div class="am-form-group">
                <label class="timu">62. 三两花片不累赘，欧式（）角花配；</label>
                <input type="text">
              </div>
               <div class="am-form-group">
                <label class="timu">63.三两花片不累赘，现代 （）来配对；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">64. 卧室淡雅要自然，（）纹理最心安，铺贴方式风格现，少做造型不凌乱；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">65.书房营造文化感，（）纹韵味是首选；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">66.书房营造文化感，（）色沉静心不散；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">67.书房营造文化感，（）色活跃思维宽；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">68.工字（）铺空间，配上地花做围边；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">69.除湿静音护空间，健康宝要（）嵌；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">70.景观阳台要夸张，休闲阳台要清爽，阳台要（）；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">71.（）客厅；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">72.（）厨房；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">73.效果全在（），美好寓意幸福长；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">74.一匹好马配好鞍，好砖也要好配件，转角踢脚台边线，（）点缀是必选；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">75深配浅，（）搭，无极色配都无暇；</label>
                <input type="text">
              </div>
              <div class="am-form-group">
                <label class="timu">76.       （）色中显优雅，选准主色用料大，六三一分黄金。</label>
                <input type="text">
              </div>
   -->

            
              
              <p><button  class="tijiao">提交答卷</button></p>
            </fieldset>
          </form>
        </div>
      </div>
  </div>
  <span class="clr"></span>
</div>










<div id="faq" class="wrapper">
  <div class="wrapper">
    <ul>
           <li> <dl class="s1">
      <dt>
        帮助中心      </dt>
                  <dd><i></i><a href="http://www.jstimes.com/shop/article-42.html" title="如何注册成为会员"> 如何注册成为会员 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-43.html" title="忘记密码"> 忘记密码 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-44.html" title="搜索功能"> 搜索功能 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-45.html" title="购买和定制商品"> 购买和定制商品 </a></dd>
                </dl></li>
               <li> <dl class="s2">
      <dt>
        店主之家      </dt>
                  <dd><i></i><a href="http://www.jstimes.com/shop/article-46.html" title="我要开店"> 我要开店 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-47.html" title="管理商品"> 管理商品 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-48.html" title="我要推广"> 我要推广 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-49.html" title="会员等级"> 会员等级 </a></dd>
                </dl></li>
               <li> <dl class="s3">
      <dt>
        支付中心      </dt>
                  <dd><i></i><a href="http://www.jstimes.com/shop/article-50.html" title="支付方式"> 支付方式 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-51.html" title="关于积分"> 关于积分 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-52.html" title="如何提现"> 如何提现 </a></dd>
                </dl></li>
               <li> <dl class="s4">
      <dt>
        客服中心      </dt>
                  <dd><i></i><a href="http://www.jstimes.com/shop/article-53.html" title="联系我们"> 联系我们 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-54.html" title="售前咨询"> 售前咨询 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-55.html" title="如何投诉"> 如何投诉 </a></dd>
                </dl></li>
               <li> <dl class="s5">
      <dt>
        友情链接      </dt>
                  <dd><i></i><a href="http://www.jstimes.com/shop/article-56.html" title="合作及洽谈"> 合作及洽谈 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-57.html" title="本站链接代码"> 本站链接代码 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-58.html" title="销售联盟"> 销售联盟 </a></dd>
                </dl></li>
               <li> <dl class="s6">
      <dt>
        关于我们      </dt>
                  <dd><i></i><a href="http://www.jstimes.com/shop/article-59.html" title="公司简介"> 公司简介 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-60.html" title="诚聘英才"> 诚聘英才 </a></dd>
            <dd><i></i><a href="http://www.jstimes.com/shop/article-61.html" title="法律声明"> 法律声明 </a></dd>
                </dl></li>
        </ul>
      </div>
</div>

<div id="footer" class="wrapper">
  <p><a href="http://www.jstimes.com/shop">首页</a>
                | <a target="_blank" href="http://jstimes.com.cn/">招聘英才</a>
                | <a target="_blank" href="http://jstimes.com.cn/">合作及洽谈</a>
                | <a target="_blank" href="http://jstimes.com.cn/">联系我们</a>
                | <a target="_blank" href="http://jstimes.com.cn/">关于我们</a>
         </div>

<script type="text/javascript" src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/jquery.js"></script>
<script type="text/javascript" src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/perfect-scrollbar.js"></script>
<script type="text/javascript" src="%E8%A3%85%E4%BF%AE%E6%96%BD%E5%B7%A5%E9%98%9F_files/jquery_005.js"></script>







</body></html>