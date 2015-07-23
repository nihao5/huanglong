//左导航栏
    $(function(){
      var curindex=0;
      $('.sidebar_rec .list').hover(function(){
        curindex = $(this).index();
        $(this).addClass('active');
        $('.sidebar_rec .more').fadeOut(0).eq(curindex).fadeIn(0);
      },function(){
        $('.sidebar_rec .more').fadeOut(0);
        $(this).removeClass('active');
      });
    });
