 //底部banner
  $(function(){   
      //索引值
      var curIndex = 0;
      var time = null;
      var len = $('.list_img li').length;

      autoRun();

      //设定标示块动作，当鼠标滑过某一标示，显示对应图片，滑出时，重新开始循环输出
      $('._num a').hover(function(){
        clearInterval(time);
        curIndex = $(this).index();
        showCur(curIndex);
      },function(){
        autoRun();
      });

      //循环输出函数
      function autoRun(){
        //每次开启循环输出，先清除现有定时器，解决多重定时器错误
        clearInterval(time);
        time = setInterval(
        function(){
            if(curIndex<len-1){
              curIndex++;
            }else{
              curIndex=1;
            }        
         showCur(curIndex);   
        },2000);
      }    
      //呈现函数
      function showCur(curIndex){   
        if(curIndex == len-1){        
          $('.list_img').animate({
            'top':-(curIndex*100),
          });

         $('.list_img').animate({
           'top':0,
          },0);
         curIndex = 0;
        }else{
          $('.list_img').animate({
          'top':-(curIndex*100),
          });
        }      
       $('._num a').removeClass('current').eq(curIndex).addClass('current');        
      }
    });