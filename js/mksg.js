$(function(){

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







       

})