<?php
$this->registerCssFile('/css/cart/cart.css');
?>
<script>
// fml.setOptions({'sversion' : '1506171736.8810.0008','defer' : true ,'modulebase' : 'http://s.meilishuo.net/script-min/'});	 var Meilishuo = {	 'config' : {				nt : '1yQyN1tU7ssTVQ5GeZ16w7IF/0VPJbAp1lO2BxZa52XXRDZgxpBgfn8HDwdPhMlH',				server_url : '/',				picture_url : 'http://i.meilishuo.net/css/',				captcha_url : 'http://captcha.meilishuo.com/',				im_url : 'http://im.meilishuo.com/',				user_id : 0 ,				nickname : "",				fairy_id : 219,				forSale : true,				qzone_notfans : undefined,				controller : '',				avatar_c : 'http://i.meilishuo.net/css/images/0.gif',				level : 0,				weibo_bind : 'undefined',				weibo_act : 'undefined',				block_remain : 0,				mobile_is_actived : 0,				is_iPad : false,				is_service : 0,				domain : {					"www":"http://www.meilishuo.com",					"order":"http://order.meilishuo.com",					"www_hk":"http://hk.meilishuo.com",					"order_hk":"http://order.hk.meilishuo.com",					"hdapp":"http://hdapp.meilishuo.com",					"shop":"http://shop.meilishuo.com",					"wap":"http://m.meilishuo.com",					"webapi":"http://webapi.meilishuo.com"				}			}	 };	
</script>

<div class="cart_header">	
    <div class="logo_wrap">  
        <a class="logo_new" href="http://www.meilishuo.com/welcome"></a>   
    </div>	
    <div class="status"> 
        <div class="chart"></div> 
            <div class="text"> 
                <span class="first current">我的购物车</span> 
                <span class="middle">填写核对订单信息</span> 
                <span>付款，完成购买</span> 
            </div> 
        </div>
    </div>
    <div class="banner">		
        <div class="banner1">		
            <a target="_blank" href="http://promotion.meilishuo.com/promotion/common/custompage/?fid=363&amp;mid=115&amp;nid=3">			
                <img src="/img/cart/1e0ea2be6a644ae357c24e895452_484_100.jpg">		
            </a>	
        </div>			
        <div class="banner2">		
            <a target="_blank" href="http://promotion.meilishuo.com/promotion/sale_1503/act_venue/?aid=2664&amp;cid=11403&amp;pid=3420&amp;mid=115&amp;nid=4">			
                <img src="/img/cart/c9732568b9fac03d6db03c7eda52_484_100.jpg">		
            </a>
        </div>
    </div>
    <div class="status-top">	
        <span class="tag-item tag-show">		
            <a>			国内商品<span id="China_count">(3)</span>		</a>	
        </span>		
        <span class="right">商品总价：（不含运费和优惠扣减）：<span class="total_price">134.50</span>元<a style="display: inline;" href="javascript:;" class="go_charge">去结算&gt;&gt;</a></span>
    </div>
    <div class="container">	
        <div class="cart">		
            <table cellpadding="0" cellspacing="0">			
                <thead>				
                    <tr>					
                        <th class="tl first" width="55px">						
                            <input id="select_all1" name="" value="" class="select_all mls-input-checkbox" checked="checked" type="checkbox">						
                            <label for="select_all1" class="mls-input-label mls-input-checkbox-label red-check">全选</label>					
                        </th>					
                        <th style="text-align:center" width="254px">商品信息</th>					
                        <th width="100px">&nbsp;&nbsp;&nbsp;</th>					
                        <th width="150px">单价（元）</th>					
                        <th width="130px">数量</th>					
                        <th width="135px">小计（元）</th>					
                        <th class="last">操作</th>				
                    </tr>			
                </thead>							
                <tbody class="shop">					
                    <tr class="blank_tr">						
                        <td colspan="7"><!-- 指定商品满额打折露出 --><!--<div class="discount_outer">满3件打8.5折区</div>--></td>					
                    </tr>					
                    <tr class="shop_title" id="shop_112764">						
                        <td class="first">							
                            <input class="select_shop mls-input-checkbox" checked="checked" name="shop[0]" value="112764" id="select_112764" type="checkbox">							
                            <label for="select_112764" class="mls-input-label mls-input-checkbox-label red-check"></label>							
                            <input value="59.9" id="shop_total_112764" type="hidden">						
                        </td>						
                        <td class="tl last" colspan="6">							
                            <div class="clearfix left_f" style="height:22px;line-height:22px;">						<span class="shop_info">商家：
                                    <a class="red_f" href="http://www.meilishuo.com/shop/112764" target="_blank" title="">爱美丽女装</a>							
                                </span>															
                                <a class="getserviceqq knilmi shop_im" href="###--112764-2-" target="_blank">&nbsp;</a>														
                            </div>							
                            <div class="shop_discount clearfix">													<img src="/img/cart/mail.png">								
                                <!-- 只有超出长度时有title值 -->								
                                <span title="">满1元包邮</span>												
                                <img src="/img/cart/discount.png">								
                                <!-- 只有超出长度时有title值 -->								
                                <span title="">满3件打9.9折</span>	
                            </div>														
                            <span class="right_f red_f coupon mr6_f" id="coupon_112764" data-shopid="112764"><span>优惠券:99减5</span><em class="coupon_arrow">√</em></span> 
                            <!--此处凑单信息暂时不要了：开始-->							
                            <span style="display:none;" class="coupon_words right_f"><a href="" target="_blank"></a></span>							
                            <!--此处凑单信息暂时不要了：结束-->							
                            <!-- 领取优惠券浮窗：开始-->							
                            <div style="display:none;" class="coupon_info" id="coupon_info_112764" data-shopid="112764">								
                                <div>									
                                    <p class="f14_f left_f">店铺优惠券可与直减优惠同时享受</p>			
                                    <span class="right_f mr14_f coupon_close" data-shopid="112764">X</span>		
                        			<div class="clear_f"></div>								
                                </div>								
                                <div class="x-coupon-list" data-hasdata=""></div>							
                            </div>							
                            <!-- 领取优惠券浮窗：结束-->
                        </td>					
                    </tr>				
                </tbody>				
                <tbody>										
                    <tr id="goods_71697884575745856" class="goods last first ">		
            			<td class="tl first">							
                            <input checked="checked" class="select_goods mls-input-checkbox" name="shop[2]goods[0]" value="71697884575745856" id="select_71697884575745856" type="checkbox">	
    						<label for="select_71697884575745856" class="mls-input-label mls-input-checkbox-label red-check"></label>						
                        </td>												
                        <td class="g-content" id="g_content_71697884575745856">							
                            <a href="http://www.meilishuo.com/share/item/3650057315" target="_blank"><img asrc="/img/cart/62a014a4517be7f2edc62f302d6d_640_832.ch.jpg" src="/img/cart/62a014a4517be7f2edc62f302d6d_640_832.jpg"></a>		
    						<div class="name">								
                                <div>									
                                    <a href="http://www.meilishuo.com/share/item/3650057315" target="_blank">显瘦阔腿裤格子休闲七分裤</a>								
                                </div>																		
                            </div>						
                        </td>						
                        <td class="order_detail">							
                            <div class="order_detail_wrapper">								
                                <span class="order_info" id="order_info_71697884575745856" data-sid="71697884575745856" data-shopid="112764" data-twitterid="3650057315">
                                	<span class="order_info_item order_info_item_0 first">颜色：灰色格子</span>
                                    <span class="order_info_item order_info_item_1 ">尺码：均码</span>			
                    	            <span class="order_info_text">编辑</span>								
                                </span>								
                                <div class="order_edit" id="order_edit_71697884575745856">		
        							<span class="arrow_left"></span>								
                                </div>							
                            </div>						
                        </td>						
                        <td class="price_discount">														
                        <!-- 显示实际价格 -->							
                            <span class="price">59.90</span>	
                        </td>						
                        <td>															
                            <span class="minus disabled" data-sid="71697884575745856"></span>			
        					<input class="amount" data-ori="1" data-max="63" value="1" type="text">		
    						<span class="add" data-sid="71697884575745856"></span>				
                        </td>						
                        <td>							
                            <span class="goods_total">59.90</span>						
                        </td>						
                        <td class="last">							
                            <a href="javascript:;" class="del">删除</a>						
                        </td>					
                    </tr>									
                </tbody>							
                <tbody class="shop">					
                    <tr class="blank_tr">						
                        <td colspan="7">							
                        <!-- 指定商品满额打折露出 -->							
                        <!--<div class="discount_outer">满3件打8.5折区</div>-->
                        </td>					
                    </tr>					
                    <tr class="shop_title" id="shop_102231">						
                        <td class="first">							
                        <input class="select_shop mls-input-checkbox" checked="checked" name="shop[1]" value="102231" id="select_102231" type="checkbox">							
                        <label for="select_102231" class="mls-input-label mls-input-checkbox-label red-check"></label>							
                        <input value="15" id="shop_total_102231" type="hidden">						
                    </td>						
                    <td class="tl last" colspan="6">							
                        <div class="clearfix left_f" style="height:22px;line-height:22px;">
                        	<span class="shop_info">商家：
                                <a class="red_f" href="http://www.meilishuo.com/shop/102231" target="_blank" title="">流行新势力</a>
                            </span>															
                            <a class="getserviceqq knilmi shop_im" href="###--102231-2-" target="_blank">&nbsp;</a>														
                        </div>							
                        <div class="shop_discount clearfix">
                            <img src="/img/cart/mail.png">
                            <!-- 只有超出长度时有title值 -->						
                            <span title="">满40元包邮</span>
                            <img src="/img/cart/reduce.png">								
                            <!-- 只有超出长度时有title值 -->								
                            <span title="">满40元减5元</span>
                        </div>														
                        <span class="right_f red_f coupon mr6_f" id="coupon_102231" data-shopid="102231"><span>优惠券:40减5</span><em class="coupon_arrow">√</em></span> 
                        <!--此处凑单信息暂时不要了：开始-->							
                        <span style="display:none;" class="coupon_words right_f"><a href="" target="_blank"></a></span>							
                        <!--此处凑单信息暂时不要了：结束-->							
                        <!-- 领取优惠券浮窗：开始-->							
                        <div style="display:none;" class="coupon_info" id="coupon_info_102231" data-shopid="102231">								
                            <div>
                                <p class="f14_f left_f">店铺优惠券可与直减优惠同时享受</p>		
                				<span class="right_f mr14_f coupon_close" data-shopid="102231">X</span>	
								<div class="clear_f"></div>								
                            </div>								
                            <div class="x-coupon-list" data-hasdata=""></div>							
                        </div>							
                        <!-- 领取优惠券浮窗：结束-->													
                    </td>					
                </tr>				
            </tbody>				
            <tbody>										
                <tr id="goods_71697884575745066" class="goods last first ">
                    <td class="tl first">							
                        <input checked="checked" class="select_goods mls-input-checkbox" name="shop[2]goods[0]" value="71697884575745066" id="select_71697884575745066" type="checkbox">			
                        <label for="select_71697884575745066" class="mls-input-label mls-input-checkbox-label red-check"></label>						
                    </td>												
                    <td class="g-content" id="g_content_71697884575745066">							
                        <a href="http://www.meilishuo.com/share/item/3556011445" target="_blank"><img asrc="/img/cart/8e3bdbe41f539aa583cb58cea4c2_850_1128.cg.jpg" src="/img/cart/8e3bdbe41f539aa583cb58cea4c2_850_1128.jpg"></a>
                        <div class="name">								
                            <div>									
                                <a href="http://www.meilishuo.com/share/item/3556011445" target="_blank">蝴蝶结花朵布艺发饰发髻</a>								
                            </div>
                        </div>						
                    </td>						
                    <td class="order_detail">							
                        <div class="order_detail_wrapper">								
                            <span class="order_info" id="order_info_71697884575745066" data-sid="71697884575745066" data-shopid="102231" data-twitterid="3556011445">			
                    			<span class="order_info_item order_info_item_0 first">颜色：黑色</span>		
                                <span class="order_info_text">编辑</span>								
                            </span>								
                            <div class="order_edit" id="order_edit_71697884575745066">					
                				<span class="arrow_left"></span>								
                            </div>							
                        </div>						
                    </td>						
                    <td class="price_discount">														
                    <!-- 如果有打折则也显示原价 -->							
                        <span class="price_origial"><s>38.00</s></span>						
                		<!-- 显示实际价格 -->							
                        <span class="price">15.00</span>
                    </td>						
                    <td>															
                        <span class="minus disabled" data-sid="71697884575745066"></span>			
                        <input class="amount" data-ori="1" data-max="350" value="1" type="text">		
                		<span class="add" data-sid="71697884575745066"></span>			
                    </td>						
                    <td>							
                        <span class="goods_total">15.00</span>						
                    </td>						
                    <td class="last">							
                        <a href="javascript:;" class="del">删除</a>						
                    </td>					
                </tr>									
                </tbody>							
                <tbody class="shop">					
                    <tr class="blank_tr">						
                        <td colspan="7">							
                        <!-- 指定商品满额打折露出 -->							
                        <!--<div class="discount_outer">满3件打8.5折区</div>-->						
                        </td>					
                    </tr>					
                    <tr class="shop_title" id="shop_174575">						
                        <td class="first">							
                            <input class="select_shop mls-input-checkbox" checked="checked" name="shop[2]" value="174575" id="select_174575" type="checkbox">							
                            <label for="select_174575" class="mls-input-label mls-input-checkbox-label red-check"></label>							
                            <input value="59.6" id="shop_total_174575" type="hidden">						
                        </td>						
                        <td class="tl last" colspan="6">							
                            <div class="clearfix left_f" style="height:22px;line-height:22px;">			
                				<span class="shop_info">商家：<a class="red_f" href="http://www.meilishuo.com/shop/174575" target="_blank" title="">胖妹儿</a></span>		
                                <a class="getserviceqq knilmi shop_im" href="###--174575-2-" target="_blank">&nbsp;</a>														
                            </div>							
                            <div class="shop_discount clearfix">	
                            	<img src="/img/cart/mail.png">								
                                <!-- 只有超出长度时有title值 -->								
                                <span title="">满89元包邮</span>					
                                <img src="/img/cart/reduce.png">								
                                <!-- 只有超出长度时有title值 -->								
                                <span title="">满89元减5元</span>
                            </div>
                            <span class="right_f red_f coupon mr6_f" id="coupon_174575" data-shopid="174575">
                                <span>优惠券:99减3</span><em class="coupon_arrow">√</em>				
                            </span> <!--此处凑单信息暂时不要了：开始-->							
                            <span style="display:none;" class="coupon_words right_f"><a href="" target="_blank"></a></span><!--此处凑单信息暂时不要了：结束-->							
                            <!-- 领取优惠券浮窗：开始-->							
                            <div style="display:none;" class="coupon_info" id="coupon_info_174575" data-shopid="174575">								
                                <div>									
                                    <p class="f14_f left_f">店铺优惠券可与直减优惠同时享受</p>			
                                    <span class="right_f mr14_f coupon_close" data-shopid="174575">X</span>	
                                    <div class="clear_f"></div>								
                                </div>								
                                <div class="x-coupon-list" data-hasdata=""></div>							
                            </div>							
                            <!-- 领取优惠券浮窗：结束-->													
                        </td>					
                    </tr>				
                </tbody>				
                <tbody>										
                    <tr id="goods_71697884575744578" class="goods last first ">				
                        <td class="tl first">							
                            <input checked="checked" class="select_goods mls-input-checkbox" name="shop[2]goods[0]" value="71697884575744578" id="select_71697884575744578" type="checkbox">	
                			<label for="select_71697884575744578" class="mls-input-label mls-input-checkbox-label red-check"></label>
                        </td>												
                        <td class="g-content" id="g_content_71697884575744578">							
                            <a href="http://www.meilishuo.com/share/item/3696993347" target="_blank"><img asrc="/img/cart/91fd0f1c1adffb7439e9d3164516_640_900.ch.jpg" src="/img/cart/91fd0f1c1adffb7439e9d3164516_640_900.jpg"></a>		
                            <div class="name">
                                <div>									
                                    <a href="http://www.meilishuo.com/share/item/3696993347" target="_blank">韩版复古雪纺连衣裙+背心</a>							
                                </div>
                            </div>						
                        </td>						
                        <td class="order_detail">							
                            <div class="order_detail_wrapper">								
                                <span class="order_info" id="order_info_71697884575744578" data-sid="71697884575744578" data-shopid="174575" data-twitterid="3696993347">			
                                    <span class="order_info_item order_info_item_0 first">颜色：绿纹</span>		
                                	<span class="order_info_item order_info_item_1 ">尺码：均码</span>		
                            		<span class="order_info_text">编辑</span>								
                                </span>								
                                <div class="order_edit" id="order_edit_71697884575744578">				
                					<span class="arrow_left"></span>								
                                </div>							
                            </div>						
                        </td>						
                        <td class="price_discount">														
                        <!-- 如果有打折则也显示原价 -->							
                            <span class="price_origial"><s>149.00</s></span>					
                			<!-- 显示实际价格 -->							
                            <span class="price">59.60</span>									
                            <!-- 如果有促销则显示促销相关信息 -->							
                            <span class="promote_wrapper">
                           	    <div class="promo_num"><em class="discount-txt">限时4.0折</em><br><em class="" time="154490.10800004005"><b>1</b>天<b>18</b>小时<b>54</b>分<b>32</b>秒</em></div>							
                            </span>			
                        </td>						
                        <td>															
                            <span class="minus disabled" data-sid="71697884575744578"></span>			
        					<input class="amount" data-ori="1" data-max="263" value="1" type="text">		
    						<span class="add" data-sid="71697884575744578"></span>				
                    	</td>						
                        <td>							
                            <span class="goods_total">59.60</span>
                        </td>
                        <td class="last">							
                            <a href="javascript:;" class="del">删除</a>						
                        </td>					
                    </tr>									
                </tbody>						
                <tbody class="empty">				
                    <tr><td colspan="7"></td></tr>			
                </tbody>
                <tfoot id="float_ctrl">
                    <tr>
                        <td class="tl first" width="65px">
                            <input id="select_all1" name="" value="" class="select_all mls-input-checkbox" checked="checked" type="checkbox">
                            <label for="select_all1" class="mls-input-label mls-input-checkbox-label red-check">全选</label>
                        </td>
                        <!-- 大促期间这个显示 -->                                       
                        <!-- 大促期间这个不显示 -->                  
                        <td colspan="6" id="noTips" class="last tl clearfix_f">
                            <a href="javascript:;" id="removeSelected" class="link red_f">删除选中的商品</a>
                            <span class="link red_f remove_blank"></span>
                            <span class="txt">商品总价（不含运费和优惠扣减）：</span>
                            <span class="red">￥<span class="total_price">134.50</span></span>
                            <a href="javascript:;" class="go_charge charge-btn"></a>    
                        </td>                                   
                    </tr>           
                </tfoot>					
            </table>		
            <div></div>	
        </div>
    </div>
    <div class="cart" style="display:none">		
        <div class="no_logged">		
            <div class="clear">			
                <div class="icon"></div>
                <div class="description">您的购物车还空着呢，<br>
                    <a class="login_in" href="javascript:void(0)"><span>[</span>登录<span>]</span></a>查看以前放入的商品，或者<a href="http://www.meilishuo.com/guang/hot?frm=trac">去逛逛</a>吧！
                </div>
            </div>
        </div>
    </div>
    <div style="left: 184.5px;" class="float_pannel" id="float_pannel">	
        <table cellpadding="0" cellspacing="0"></table>
    </div>
    <form class="cartForm" action="/order/init/" method="get" accept-charset="utf-8" id="form">	
        <input name="sid" id="sid" type="hidden">
        <input name="shop_id" id="shop_id" value="112764" type="hidden">
    </form>
    <span id="userInfo-user-id" style="display:none">0</span>
    <input id="goods_select_list" value="" type="hidden">