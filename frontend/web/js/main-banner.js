
//主banner轮播图
    $(function(){

      var curIndex = 0;
      var time = null;
      var len = $('#main_bn li').length;

      autoRun();

      //设定标示块动作，当鼠标点击某一标示，显示对应图片
      $('.adType a').click(function(){
        clearInterval(time);
        curIndex = $(this).index();
        showCur(curIndex);
      }).mouseout(function(){
        autoRun();
      });

      //设定鼠标悬停大图效果
      $('#main_bn li').mouseover(function(){
        clearInterval(time);
        $('.bnr_btn_left').fadeIn(0);
        $('.bnr_btn_right').fadeIn(0);
      });

      $('.bnr_btn_left').mouseover(function(){
        clearInterval(time);
        $('.bnr_btn_left').fadeIn(0);
        $('.bnr_btn_right').fadeIn(0);
      });
      $('.bnr_btn_right').mouseover(function(){
        clearInterval(time);
        $('.bnr_btn_left').fadeIn(0);
        $('.bnr_btn_right').fadeIn(0);
      });
      $('#main_bn li').mouseout(function(){
          autoRun();        
          $('.bnr_btn_left').fadeOut(0);
          $('.bnr_btn_right').fadeOut(0);       
      });

      //设定前后翻页按钮动作
      $('.bnr_btn_left').click(function(){
        if(curIndex>0){
            curIndex--;
        }else{
            curIndex=len-1;
        }
        showCur(curIndex);
      });

      $('.bnr_btn_right').click(function(){
        if(curIndex<len-1){
            curIndex++;
        }else{
            curIndex=0;
        }
        showCur(curIndex);
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
                curIndex=0;
              }            
           showCur(curIndex);   
          },3000);
      }
      //呈现函数
      function showCur(curIndex){    
        $('#main_bn li').fadeOut(500).eq(curIndex).fadeIn(500);
        $('.adType a').removeClass('current').eq(curIndex).addClass('current');
      }
    });    