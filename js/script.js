$(function(){
							
	$("#select1 a").click(function () {
		$(this).addClass("selected").siblings().removeClass("selected");
		if ($(this).hasClass("select-all")) {
			$("#selectA").remove();
		} else {
			var copyThisA = $(this).clone();
			if ($("#selectA").length > 0) {
				$("#selectA").html($(this).text());
			} else {
				$("#select-re").append(copyThisA.attr("id", "selectA"));
			}
		}
	});
		$("#select2 a").click(function () {
		$(this).addClass("selected").siblings().removeClass("selected");
		if ($(this).hasClass("select-all")) {
			$("#selectB").remove();
		} else {
			var copyThisA = $(this).clone();
			if ($("#selectB").length > 0) {
				$("#selectB").html($(this).text());
			} else {
				$("#select-re").append(copyThisA.attr("id", "selectB"));
			}
		}
	});
		$("#select3 a").click(function () {
		$(this).addClass("selected").siblings().removeClass("selected");
		if ($(this).hasClass("select-all")) {
			$("#selectC").remove();
		} else {
			var copyThisA = $(this).clone();
			if ($("#selectC").length > 0) {
				$("#selectC").html($(this).text());
			} else {
				$("#select-re").append(copyThisA.attr("id", "selectC"));
			}
		}
	});
	
	$("#selectA").live("click", function () {
		$(this).remove();
		$("#select1 .select-all").addClass("selected").siblings().removeClass("selected");
	});
	$("#selectB").live("click", function () {
		$(this).remove();
		$("#select2 .select-all").addClass("selected").siblings().removeClass("selected");
	});
	$("#selectC").live("click", function () {
		$(this).remove();
		$("#select3 .select-all").addClass("selected").siblings().removeClass("selected");
	});
	

	$(".select a").live("click", function () {
		if ($("#select-re a").length > 0) {
			$(".select-no").hide();
		} else {
			$(".select-no").show();
		}
	});
	
	//展开收起
	$(".select-op").click(function(){
		$("#select2").toggleClass("on");
		var that = $(this);
		that.toggleClass("on");
		if (that.hasClass("on")) {
			that.text("收起")
		}else{
			that.text("展开")
		};
	});
});


//咨询弹窗1
$(function(){
  var modal=$.scojs_modal({
	target:"#modal",
  	title:"免费预约",
    content: $('#inner').html(),
    keyboard: true});
  $(".sco_modal_zx").click(function(){
    modal.show();
  })
});
//咨询弹窗2
$(function(){
  var modal2=$.scojs_modal({
  	target:"#modal2",
  	title:"预约看现场",
    content: $('#inner2').html(),
    keyboard: true});
  $(".sco_modal_zx2").click(function(){
    modal2.show();
  })
});

  $(function(){
  	$(".public-nav-layout .site-menu li").hover(
      function() {
  		$(this).addClass("hover");
  	},
  	function() {
  		$(this).removeClass("hover");
  	});
  });

// 发送验证码倒计时
function start_sms_button(obj){
  var count = 1 ;
  var sum = 30;
  var i = setInterval(function(){
      if(count >30){
          obj.attr('disabled',false);
          obj.val('发送手机验证码');
          clearInterval(i);
      }else{
          obj.val('剩余'+parseInt(sum - count)+'秒');
      }
      count++;
  },1000);
}
// 手机验证函数
function checkMobile(str){ 
    var re = /^1[3|4|5|8][0-9]\d{4,8}$/; 
    if(!(re.test(str))){ 
        return false; 
    } else{
    	return true;
    }
} 
$(function(){    //发送验证码
  $('#modal2').on('click','#zx_yzm_btn',function(){
      var send_obj = $('input#zx_yzm_btn');
      // send_obj.attr('disabled',"disabled");
      // start_sms_button(send_obj);


      var phone_obj = $('#modal2 input[name="phone"]');
      var val = phone_obj.val();
      if(val){
          if(checkMobile(val)){
              send_obj.attr('disabled',"disabled");          //30秒后重新启动发送按钮
              start_sms_button(send_obj);
              $.ajax({
                  url:'some.php',
                  data:{'mobile':val},
                  dataType:'html',
                  type:'post',
                  success:function(msg){console.log(msg)}
              });
          }else{
  				 showDialog("手机号的格式错误", 'notice');
          }
      }else{
  			showDialog("手机号不能为空", 'notice');
      }
  });

});
