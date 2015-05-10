$(function(){
							
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
          var w = 220;//$(opts.tagName).outerWidth(true); //单个显示元素的宽度，计算元素的宽度  包括补白+边框  $(opts.tagName).width();
          _this.css({width: (1320) + 'px'}); // 设置滚动层盒子的宽度，要比已经显示的元素宽度总和多一个元素的宽度 l * w
          return this.each(function(){
            //_this.closest('.'+opts.boxName).hover(function(){ 
            _this.closest(".mk-box").hover(function(){       //查找鼠标浮于盒子上则停止自动滑动
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
            boxName : 'box2',//'box'
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
        $("#roll2").parallelRoll({amount : 1});       
      });   

});
