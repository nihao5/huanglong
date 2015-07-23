//左导航栏
    $(function(){
      var curindex=0;
      $('.sec_attr li').filter('.list').hover(function(){
        curindex = $(this).index();
        $(this).addClass('active');
        $('.sec_attr .nav_list').fadeOut(0).eq(curindex).fadeIn(0);
      },function(){
        $('.sec_attr .nav_list').fadeOut(0);
        $(this).removeClass('active');
      });
    });