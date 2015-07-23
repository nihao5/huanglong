 
 //导航栏
  $(function(){

    $('.dress').hover(function(){
      $('.dress .header_list').fadeIn(0);
    },function(){
      $('.dress .header_list').fadeOut(0);
    });

    $('.report').hover(function(){
      $('.report .header_list').fadeIn(0);
    },function(){
      $('.report .header_list').fadeOut(0);
    });
  });