  window.onload=function(){
    var wrap=document.getElementById('wrap'),
		pics=document.getElementById('pic').getElementsByTagName('li'),
        list=document.getElementById('list').getElementsByTagName('li'),
        index=0,
        timer=null;

      function auto(){
        timer=setInterval(function(){
          index++;
          if(index>=list.length){
            index=0;
          }
          change(index);
        },2000);  
      }
      auto();

 /*    function change(curIndex){
        pic.style.marginTop=-450*curIndex+'px';
        for(var n=0;n<list.length;n++){
            list[n].className='';
        }
          list[curIndex].className='on';
          index=curIndex;
      }
	   */
  function change(curIndex){
    for(var j=0;j<list.length;j++){
       list[j].className='';
       pics[j].style.display='none';
    }
    // 高亮显示当前页签
    list[curIndex].className='on';
    pics[curIndex].style.display='block';
    index=curIndex;
  }
	   

       wrap.onmouseover=function(){
          clearInterval(timer);
       }

       wrap.onmouseout=auto;
	   
       for(var i=0;i<list.length;i++){
          list[i].id=i;
          list[i].onmouseover=function(){
            change(this.id);          
          }
        }


   
   //跑马灯
   			/**
			 * parallelRoll 左右无缝滚动
			 * boxName : 最外层盒子类名
			 * tagName : 滚动标签元素
			 * time : 滚动间隔时间
			 * direction : 滚动方向  right-->向右    left-->向左
			 * visual : 可视数
			 * prev : 上一张
			 * next : 下一张
			 * author : MR chen  370489175@qq.com
			 * Date: 15-03-19
			 * */
   			(function($){
				$.fn.parallelRoll = function(options){
					var opts = $.extend({}, $.fn.parallelRoll.defaults, options);
					var _this = this;					
					var l = _this.find(opts.tagName).length;
					var autoRollTimer;
					var flag = true; // 防止用户快速多次点击上下按钮
					var arr = new Array();
					/**
					 * 如果当  (可视个数+滚动个数 >滚动元素个数)  时  为不出现空白停顿   将滚动元素再赋值一次
					 * 同时赋值以后的滚动元素个数是之前的两倍  2 * l.
					 * */
					if(opts.amount + opts.visual > l){
						_this[0].innerHTML += _this[0].innerHTML;
						l = 2 * l;
					}else{
						l = l;
					}					
					var w = 220;//$(opts.tagName).outerWidth(true); //计算元素的宽度  包括补白+边框  $(opts.tagName).width();
					_this.css({width: (1320) + 'px'}); // 设置滚动层盒子的宽度 l * w
					return this.each(function(){
						//_this.closest('.'+opts.boxName).hover(function(){	
						_this.closest(".mk-box").hover(function(){	
							clearInterval(autoRollTimer);
						},function(){							
							switch (opts.direction){
								case 'left':
									autoRollTimer = setInterval(function(){
										left();
									},opts.time);
								break;
								case 'right':
									autoRollTimer = setInterval(function(){
										right();
									},opts.time);
								break;
								default : 
									alert('参数错误！');
								break;
							}							
						}).trigger('mouseleave');		
						
						$(".mk-prev").on('click',function(){
							flag ? left() : "";
						});
						$(".mk-next").on('click',function(){
							flag ? right() : "";
						}); 
						
						
					});	
					
					function left(){
						flag = false;
						_this.animate({marginLeft : -(w*opts.amount)},1000,function(){
							_this.find(opts.tagName).slice(0,opts.amount).appendTo(_this);
							_this.css({marginLeft:0});
							flag = true;
						});
					};
					function right(){
						flag = false;
						arr = _this.find(opts.tagName).slice(-opts.amount);										
						for(var i = 0; i<opts.amount; i++){
							$(arr[i]).css({marginLeft : -w*(i+1)}).prependTo(_this);
						}										
						_this.animate({marginLeft : w*opts.amount},1000,function(){
							_this.find(opts.tagName).removeAttr('style');
							_this.css({marginLeft:0});
							flag = true;
						});
					};
				};
				//插件默认选项
			    $.fn.parallelRoll.defaults = {
			    	boxName : 'box',//'box'
			        tagName : 'dd',//'dd'
			        time : 5000,  // 5000
			        direction : 'right', // 滚动方向'left'
			        visual : 5 , //可视数7
			        prev : 'prev',//'prev'
			        next : 'next',//'next'
			        amount : 1   // 滚动数  默认是1
			    };
			})(jQuery);
			
			$(document).ready(function(){
				$("#roll").parallelRoll({
					amount : 1

				});				
			});   
		 	

   }