var ds_img_index=0; //图片标识
	var img_num=$(".img_ul").children("li").length; //图片个数
	$(".img_ul li").hide(); //初始化图片	
	ds_play();
$(function(){
	 $(".img_hd ul").css("width",($(".img_hd ul li").outerWidth(true))*img_num); //设置ul的长度
	 
	 $(".bottom_a").css("opacity",0.7);	//初始化底部a透明度
	 //$("#play").css("height",$("#play .img_ul").height());
	 if (!window.XMLHttpRequest) {//对ie6设置a的位置
	 $(".change_a").css("height",$(".change_a").parent().height());}
	 $(".change_a").focus( function() { this.blur(); } );
	 $(".bottom_a").hover(function(){//底部a经过事件
		 $(this).css("opacity",1);	
		 },function(){
		$(this).css("opacity",0.7);	 
			 });
	 $(".change_a").hover(function(){//箭头显示事件
		 $(this).children("span").show();
		 },function(){
		 $(this).children("span").hide();
			 });
	 $(".img_hd ul li").click(function(){
		 ds_img_index=$(this).index();
		 ds_play();
		 });
	 $(".prev_a").click(function(){
		 ds_img_index--;
		 ds_img_index=(ds_img_index<0?0:ds_img_index);
		 ds_play();
		 }); 
	 $(".next_a").click(function(){
		 ds_img_index++;
		 ds_img_index=(ds_img_index>(img_num-1)?(img_num-1):ds_img_index);
		 ds_play();
		 }); 
	 }); 
function ds_play(){//动画移动	
	var img=new Image(); //图片预加载
	img.onload=function(){img_load(img,$(".img_ul").children("li").eq(ds_img_index).find("img"))};
	img.src=$(".img_ul").children("li").eq(ds_img_index).find("img").attr("src");
	$(".img_hd ul").children("li").eq(ds_img_index).addClass("on").siblings().removeClass("on");
	if(img_num>7){//大于7个的时候进行移动
		if(ds_img_index<img_num-3){ //前3个
		$(".img_hd ul").animate({"marginLeft":(-($(".img_hd ul li").outerWidth()+4)*(ds_img_index-3<0?0:(ds_img_index-3)))});
		}
		else if(ds_img_index>=img_num-3){//后3个
			$(".img_hd ul").animate({"marginLeft":(-($(".img_hd ul li").outerWidth()+4)*(img_num-7))});
			}
	}
	if (!window.XMLHttpRequest) {//对ie6设置a的位置
	$(".change_a").css("height",$(".change_a").parent().height());}
	}
function img_load(img_id,now_imgid){//大图片加载设置 （img_id 新建的img,now_imgid当前图片）
    
    if(img_id.width/img_id.height>1)
	{
		if(img_id.width >=$("#play").width()) $(now_imgid).width($("#play").width());
		}
	else {
		if(img_id.height>=500) $(now_imgid).height(500);
		}
		$(".img_ul").children("li").eq(ds_img_index).show().siblings("li").hide(); //大小确定后进行显示
	}
function imgs_load(img_id){//小图片加载设置
	if(img_id.width >=$(".img_hd ul li").width()){img_id.width = 80};
	}