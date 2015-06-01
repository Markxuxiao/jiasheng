$(function(){
							
	$("#select-21 dd").click(function () {
		$(this).addClass("select-2ed").siblings().removeClass("select-2ed");
		if ($(this).hasClass("select-2-all")) {
			$("#select-2A").remove();
		} else {
			var copyThisA = $(this).clone();
			if ($("#select-2A").length > 0) {
				$("#select-2A a").html($(this).text());
			} else {
				$(".select-2-result dl").append(copyThisA.attr("id", "select-2A"));
			}
		}
	});
	
	$("#select-22 dd").click(function () {
		$(this).addClass("select-2ed").siblings().removeClass("select-2ed");
		if ($(this).hasClass("select-2-all")) {
			$("#select-2B").remove();
		} else {
			var copyThisB = $(this).clone();
			if ($("#select-2B").length > 0) {
				$("#select-2B a").html($(this).text());
			} else {
				$(".select-2-result dl").append(copyThisB.attr("id", "select-2B"));
			}
		}
	});
	
	$("#select-23 dd").click(function () {
		$(this).addClass("select-2ed").siblings().removeClass("select-2ed");
		if ($(this).hasClass("select-2-all")) {
			$("#select-2C").remove();
		} else {
			var copyThisC = $(this).clone();
			if ($("#select-2C").length > 0) {
				$("#select-2C a").html($(this).text());
			} else {
				$(".select-2-result dl").append(copyThisC.attr("id", "select-2C"));
			}
		}
	});
	
	$("#select-2A").live("click", function () {
		$(this).remove();
		$("#select-21 .select-2-all").addClass("select-2ed").siblings().removeClass("select-2ed");
	});
	
	$("#select-2B").live("click", function () {
		$(this).remove();
		$("#select-22 .select-2-all").addClass("select-2ed").siblings().removeClass("select-2ed");
	});
	
	$("#select-2C").live("click", function () {
		$(this).remove();
		$("#select-23 .select-2-all").addClass("select-2ed").siblings().removeClass("select-2ed");
	});
	
	$(".select-2 dd").live("click", function () {
		if ($(".select-2-result dd").length > 1) {
			$(".select-2-no").hide();
		} else {
			$(".select-2-no").show();
		}
	});
	
});
