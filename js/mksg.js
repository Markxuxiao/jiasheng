(function($){

    //输入框默认值插件
    var select_form = $('input:text,textarea'); //选择需要添加提示文字的表单
    for(i=0;i<select_form.length;i++){          
        select_form.eq(i).val(select_form.eq(i).attr('fs')).css('color','#999');//设置表单的值为一个属性值为“fs”的值    
    }  
    select_form.focus(function(){   //获得焦点
        if($(this).val()==$(this).attr('fs')){
          $(this).val('');
          $(this).css('color','#333');
        }    
    })
    select_form.blur(function(){    //失去焦点  
        if($(this).val()==''){
           $(this).val($(this).attr('fs'));
           $(this).css('color','#999');
        }
    })

    //sco.collapse.js扩展
    //更换css样式使用方法添加data-cgcss属性
    var cgcss = $("div[data-cgcss='jiedameu4']");
    var cgcssvalu =cgcss.attr("data-cgcss");
    cgcss.click(function(){
       cgcss.removeClass(cgcssvalu);
       $(this).addClass(cgcssvalu);
    })
    //问答列表筛选
    $(".sort_state").hover(
      function() {
      $(this).addClass("sort_state_hover");
      $(".state_list").css("display","block");
      $(".triangle").removeClass("triangle_down").addClass("triangle_up");
    },
    function() {
      $(this).removeClass("sort_state_hover");
       $(".state_list").css("display","none");
       $(".triangle").removeClass("triangle_up").addClass("triangle_down");
    });

    //设计师主页轮播模块1
    $("#rslides_r_s").responsiveSlides({pause: "true",manualControls: '#rslides_r_s-pager',
                        before: function () {
                          var $img = $('#rslides_r_s').find("img");
                          $img.each(function(){
                           // $(this).width("100%");
                           // $(this).height("100%");
                           $(this).animate({width:"101%",height:"101%",left:"-0.5%"},0);
                            $(this).animate({width:"100%",height:"100%",left:"0%"},1000);
                          })
                        }
                      });
    
    //设计师主页问答滚动调用
    $("#ds_sjs2_gd").kxbdMarquee({direction:"up",isEqual:false,scrollDelay:"50"});
    //设计师主页轮播模块2调用
    $("#ds_md6_r_s").responsiveSlides({manualControls: '#ds_md6_r_s-pager'});
    //designerhome.html
    $('#allinone_carousel_charming').allinone_carousel({
      skin: 'charming',
      width: 1200,
      height: 550,
      autoPlay: 5,
      resizeImages: true,
      autoHideBottomNav: false,
      showElementTitle: false,
      verticalAdjustment: 50,
      showPreviewThumbs: false,
      //easing:'easeOutBounce',
      numberOfVisibleItems: 3,
      nextPrevMarginTop: 0,
      playMovieMarginTop: 0,
      bottomNavMarginBottom: -10
    });


    
})(jQuery);



       

