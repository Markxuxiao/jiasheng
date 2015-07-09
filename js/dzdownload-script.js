$(document).ready(function(){
							
	$("#xz_select1 dd").click(function () {
		$(this).addClass("xz_selected").siblings().removeClass("xz_selected");
		if ($(this).hasClass("xz_select-all")) {
			$("#xz_selectA").remove();
		} else {
			var copyThisA = $(this).clone();
			if ($("#xz_selectA").length > 0) {
				$("#xz_selectA a").html($(this).text());
			} else {
				$(".xz_select-result dl").append(copyThisA.attr("id", "xz_selectA"));
			}
		}
		// 添加的tab关联
		$("#xz_selectB").remove();
		$(".xz_select2 dd").removeClass("xz_selected");
		$(".xz_select2 dd.xz_select-all").addClass("xz_selected");
		// 添加的tab关联end
	});
	
	$(".xz_select2 dd").click(function () {
		$(this).addClass("xz_selected").siblings().removeClass("xz_selected");
		if ($(this).hasClass("xz_select-all")) {
			$("#xz_selectB").remove();
		} else {
			var copyThisB = $(this).clone();
			if ($("#xz_selectB").length > 0) {
				$("#xz_selectB a").html($(this).text());
			} else {
				$(".xz_select-result dl").append(copyThisB.attr("id", "xz_selectB"));
			}
		}
	});
	
	$("#xz_select3 dd").click(function () {
		$(this).addClass("xz_selected").siblings().removeClass("xz_selected");
		if ($(this).hasClass("xz_select-all")) {
			$("#xz_selectC").remove();
		} else {
			var copyThisC = $(this).clone();
			if ($("#xz_selectC").length > 0) {
				$("#xz_selectC a").html($(this).text());
			} else {
				$(".xz_select-result dl").append(copyThisC.attr("id", "xz_selectC"));
			}
		}
	});
	
	$("#xz_selectA").live("click", function () {
		$(this).remove();
		$("#xz_select1 .xz_select-all").addClass("xz_selected").siblings().removeClass("xz_selected");
	});
	
	$("#xz_selectB").live("click", function () {
		$(this).remove();
		$(".xz_select2 .xz_select-all").addClass("xz_selected").siblings().removeClass("xz_selected");
	});
	
	$("#xz_selectC").live("click", function () {
		$(this).remove();
		$("#xz_select3 .xz_select-all").addClass("xz_selected").siblings().removeClass("xz_selected");
	});
	
	$(".xz_select dd").live("click", function () {
		if ($(".xz_select-result dd").length > 1) {
			$(".xz_select-no").hide();
		} else {
			$(".xz_select-no").show();
		}
	});

	//添加的tab关联
	function tabse_init (){
		$("#xz_select1 dd").each(function(i){
			$(this).click(function(){tabse_click(i);})//tab点击后关联dom动作执行
		})
	}
	function tabse_click(num){
		num-=1;
		$("#xz_xiaoqu dl").removeClass('on').eq(num).addClass('on');
	}
	tabse_init ();
	//添加的tab关联end
});
/*www.jq22.com*/