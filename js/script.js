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


//咨询弹窗
$(function(){
  var modal=$.scojs_modal({
    title:"免费申请",
    content: $('#inner').html(),
    keyboard: true});
  $(".sco_modal_zx").click(function(){
    modal.show();
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

