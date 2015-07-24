<!doctype html>
<html lang="en">
<head> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>订单确认页 - 美丽说</title>
<link rel="stylesheet" type="text/css" href="/css/base.css">
<link rel="shortcut icon" href="http://www.meilishuo.com/favicon.ico"> 
<!-- <link rel="apple-touch-icon-precomposed" href="/img/custom_icon_precomposed.png"> -->
<link rel="stylesheet" type="text/css" href="/css/order/confirm.css">
</head> 
<body>
	<div class="uinfo_bar">
		<div class="header_top">
			<ul class="menu_leo"> 
				<li id="setting">
					<a href="http://www.meilishuo.com/person/u/394137483?frm=headerprofile" title="hl332422"><span class="/img/order/19e804632c91d96c684320171e31_256_256.jpg"></span>hl332422<em class="redarrow"></em></a>
					<ul class="add_menu_leo hw76 none_f">
						<li><a href="http://www.meilishuo.com/person/u/394137483?type=editor" target="_blank">我的杂志</a></li>
						<li><a href="http://www.meilishuo.com/person/u/394137483?type=share" target="_blank">我的分享</a></li>
						<li><a href="http://www.meilishuo.com/member/member" target="_blank" class="msg">积分兑换</a></li>
						<!--<li><a href="http://www.meilishuo.com/person/u/394137483?type=like" target="_blank">我喜欢的</a></li>-->
						<li class="b_line"><a href="http://www.meilishuo.com/settings/setPersonal" target="_blank">设置账号</a></li>
						<li><a id="headLogoutBtn" href="http://www.meilishuo.com/user/logout">退出</a></li>
					</ul>
				</li>
				<li id="message">
					<a class="msg">消息<b class="mgsTotalNum"></b><em class="redarrow"></em></a>
					<ul class="add_menu_leo hw120 none_f" id="moreMessageBox">
						<li><a class="openIM" href="http://order.meilishuo.com/im/" target="_msg">查看客服消息</a></li>
						<li><a href="http://order.meilishuo.com/ur/fans/394137483" target="_msg">查看关注</a></li>
						<li><a href="http://order.meilishuo.com/atme/" target="_msg">查看@我的</a></li>
						<li><a href="http://order.meilishuo.com/msg/main/user" target="_msg">查看私信</a></li>
						<li><a href="http://order.meilishuo.com/msg/main/syser" target="_msg">查看系统消息</a></li>
						<li><a href="http://order.meilishuo.com/ur/like/394137483" target="_msg">查看喜欢我的</a></li>
						<li><a href="http://order.meilishuo.com/club/recommend/394137483" target="_msg">查看回复我的</a></li>
					</ul>
				</li>
				<li><a class="i_like" href="http://www.meilishuo.com/person/u/394137483?type=like" target="_blank"><i></i>我的喜欢</a></li>
				<li id="myShoppingCartEl"><a href="http://www.meilishuo.com/cart" target="_blank"><em class="i_cart">&nbsp;</em>我的购物车<span class="num_bgc">1</span></a></li>
				<li><a href="http://www.meilishuo.com/order" target="_blank"><em class="i_order">&nbsp;</em>我的订单</a></li>
				<li><a href="http://www.meilishuo.com/client/?frm=daeh" target="_blank"><em class="i_mob">&nbsp;</em>下载App</a></li>
				<li><a class="last" href="http://www.meilishuo.com/help/feedback?frm=top_to_help" target="_blank">帮助中心</a></li>
			</ul>
		</div>
		<div class="clear_f"></div>
	</div>
	<div class="cart_header">
		<div class="logo_wrap">
			<a class="logo_new" href="http://www.meilishuo.com/?frm=logoa"></a>
		</div>
		<div class="status">
			<div class="chart"></div> 
			<div class="text">
				<span class="first current">我的购物车</span>
				<span class="middle current">填写核对订单信息</span>
				<span>付款，完成购买</span>
			</div>
			<div class="chart"></div>
			<div class="text">
				<span class="first current">立即购买</span>
				<span class="middle current">填写核对订单信息</span>
				<span>付款，完成购买</span>
			</div>
		</div>
	</div>
	<div class="container">
		<p class="label">确认收货地址</p>
		<div class="addr">
			<div class="unit adrl_list  active" addr_id="65703698" pid="1" cid="1" did="13" sid="442" street="回龙观东大街442号" is_default="1">
				<div class="hidden">
					<span class="adrl_nickname">小花</span>
					<span class="adrl_address">北京市昌平区回龙观地区回龙观东大街442号</span>
					<span class="adrl_postcode"></span>
					<span class="adrl_phone">137****8978</span>
				</div>
				<input name="addr" checked="checked" value="65703698" id="addr[65703698]" class="mls-input-radio" type="radio">
				<label for="addr[65703698]" class="mls-input-label mls-input-radio-label">
					<span class="adrl_addr">北京市昌平区回龙观地区回龙观东大街442号</span><span>小花</span><span></span><span>联系方式137****8978</span>
				</label>
				<span class="orign_edit adrl_edit edit style=">修改此地址&gt;&gt;</span>
				<span class="update_edit edit" style="display:none">
					<span class="adrl_label">为享受更好的配送服务，请</span>
					<span class="adrl_edit btn-update">升级此地址</span>
				</span>
			</div>
			<div class="new_addr" id="new_adder_wrapper">
				<div class="unit">
					<input value="-1" name="addr" id="addr_new" class="mls-input-radio" type="radio">
					<label style="width:200px" for="addr_new" class="mls-input-label mls-input-radio-label">使用新地址</label>
					<span id="addr_tip" class="new_addr_tentext">收货地址最多支持保存10条，超过10条将会自动替换最早创建的地址</span>
				</div> 
				<div class="form" id="addr_form" style="display:none">
					<form id="addressForm" method="post" onsubmit="return false">
						<div class="infos">
							<p>
								<span class="left"> 
									<b class="red_f mr4_f">*</b>
									<label for="addressPid">所在地：</label>
									<select class="mls-select" id="addressPid" name="pid">
										<option selected="selected" value="0">请选择</option><option value="1">北京</option>
										<option value="2">天津</option>
										<option value="3">河北</option>
										<option value="4">山西</option>
										<option value="5">内蒙古自治区</option>
										<option value="6">辽宁</option>
										<option value="7">吉林</option>
										<option value="8">黑龙江</option>
										<option value="9">上海</option>
										<option value="10">江苏</option>
										<option value="11">浙江</option>
										<option value="12">安徽</option>
										<option value="13">福建</option>
										<option value="14">江西</option>
										<option value="15">山东</option>
										<option value="16">河南</option>
										<option value="17">湖北</option>
										<option value="18">湖南</option>
										<option value="19">广东</option>
										<option value="20">广西壮族自治区</option>
										<option value="21">海南</option>
										<option value="22">重庆</option>
										<option value="23">四川</option>
										<option value="24">贵州</option>
										<option value="25">云南</option>
										<option value="26">西藏自治区</option>
										<option value="27">陕西</option>
										<option value="28">甘肃</option>
										<option value="29">青海</option>
										<option value="30">宁夏回族自治区</option>
										<option value="31">新疆维吾尔自治区</option>
										<option value="32">台湾</option>
										<option value="33">香港特别行政区</option>
										<option value="34">澳门特别行政区</option>
									</select>
									<select class="mls-select" id="addressCid" name="cid">
										<option selected="selected" value="0">请选择</option>
									</select>
									<select class="mls-select" id="addressDid" name="did">
										<option selected="selected" value="0">请选择</option>
									</select>
									<select class="mls-select none_f" id="addressSid" name="sid">
										<option selected="selected" value="0">请选择</option>
									</select>
									<strong>&nbsp;</strong>
								</span>
							</p>
							<p>
								<b class="red_f mr4_f">*</b>
								<label for="addressStreet">街道地址：</label>
								<input class="mls-input-text l_ipt_s street" id="addressStreet" name="street" type="text">
								<strong>&nbsp;</strong>
							</p>
							<p>
								<span class="left">
									<span>
										<b class="red_f mr4_f">*</b>
										<label for="addressUser">收件人：</label>
										<input class="mls-input-text l_ipt reciever" id="addressUser" name="nickname" type="text">
										<strong>&nbsp;</strong>
									</span> 
								</span>
							</p>
							<p>
								<span class="phone">
									<b class="red_f mr4_f">*</b>
									<label for="addressPhone">联系电话：</label>
									<input class="mls-input-text l_ipt contact" id="addressPhone" name="phone" type="text">
									<strong>&nbsp;</strong>
								</span>
							</p>
						</div>
						<div class="buttons">
							<div class="left_f">
								<input class="addressBtn button" value="保存并使用" type="submit">
								<input class="addressBtn cancel" value="取消" type="button">
							</div>
							<span class="set_default_con"> 
								<input class="mls-input-checkbox" name="is_default" id="is_default" value="" type="checkbox"> 
								<label class="mls-input-label mls-input-checkbox-label" for="is_default">设为默认</label> 
							</span>
						</div>
					</form>
				</div>
			</div> 
		</div>
		<p class="label">商品清单</p>
		<div class="order">
			<table cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<th class="first" width="20px"></th>
						<th width="390">商品信息</th>
						<th width="100px">单价（元）</th>
						<th width="284px">数量</th>
						<th width="137px">小计</th>
						<th class="last" width="20px"></th>
					</tr>
				</thead> 
				<tbody class="shop">
					<tr class="blank_tr">
						<td></td>
					</tr>
					<tr>
						<td class="shop_title" colspan="6"><span>商家：<a class="red_f" href="http://www.meilishuo.com/shop/112764" target="_blank">爱美丽女装</a></span><a class="getserviceqq knilmi" href="###-1789225846-112764-2-" target="_blank">&nbsp;</a></td>
					</tr>
				</tbody>
				<tbody class="goods">  
					<tr class="first last" id="goods_72169962286676206">
						<td class="first"></td> 
						<td class="content"> 
							<a class="content-link" target="_blank" href="http://www.meilishuo.com/share/item/3650057315"> 
								<img src="/img/order/62a014a4517be7f2edc62f302d6d_640_832.jpg"> 
								<span class="title">显瘦阔腿裤格子休闲七分裤</span> 
								<span class="props">   
									<span>颜色：灰色格子</span>    
									<span>尺码：均码</span>   
								</span>  
							</a> 
						</td> 
						<td> 
							<div class="u_price">59.90</div>   
						</td> 
						<td>1</td> 
						<td> 59.90 </td> 
						<td class="last"></td> 
					</tr>
					<tr class="total">
						<td class="first"></td>
						<td colspan="2" class="buyer_msg">
							<label>购买留言：</label>
							<textarea name="comment[]" value="" class="mls-input-text comment" id="comment_112764" placeholder="选填：建议填写已经与卖家达成一致的说明"></textarea>
						</td>
						<td colspan="2" style="vertical-align:top;">
							<ul class="coupon_freight">
								<li style="display:none" id="coupon_list_112764">
									<div class="info">
										<label class="lb">店铺优惠券：</label>
										<select class="mls-select shop_coupon" id="coupon_112764"></select>
									</div>
									<div class="price">-<span class="credit">0</span></div>
								</li>
								<li>
									<div id="freight_show" class="info freight_show_112764">
										<label class="lb">运费：</label>
										<span class="freight_info">已满1元，包邮</span>
									</div>
									<div class="price"><span>0.00</span></div>
								</li>
							</ul> 
						</td>
						<td class="last"></td>
					</tr>
					<tr class="total">
						<td class="first"></td>
						<td colspan="2">
							<span class="x-highlight">温馨提示：</span>此商家商品库存紧张,请在 30 分钟内完成付款，超时未支付系统自动取消订单
						</td>
						<td colspan="2" class="shop_total">
							<span>共1件商品，</span>
							<span>店铺合计：<span id="shop_total_price_112764" class="price">59.90</span>元</span>
						</td>
						<td class="last"></td>
					</tr>
				</tbody>
				<tbody class="shop">
					<tr class="blank_tr">
						<td></td>
					</tr>
					<tr>
						<td class="shop_title" colspan="6">
							<span>商家：<a class="red_f" href="http://www.meilishuo.com/shop/102231" target="_blank">流行新势力</a></span>
							<a class="getserviceqq knilmi" href="###-692488881-102231-2-" target="_blank">&nbsp;</a>
						</td>
					</tr>
				</tbody>
				<tbody class="goods">  
					<tr class="first last" id="goods_72169962286676204"> 
						<td class="first"></td> 
						<td class="content"> 
							<a class="content-link" target="_blank" href="http://www.meilishuo.com/share/item/3556011445"> 
								<img src="/img/order/8e3bdbe41f539aa583cb58cea4c2_850_1128.jpg"> 
								<span class="title">蝴蝶结花朵布艺发饰发髻</span> 
								<span class="props">  
									<span>颜色：黑色</span>     
								</span>  
							</a> 
						</td> 
						<td> 
							<div class="u_price">15.00</div>   
						</td> 
						<td>1</td>
						<td> 15.00 </td> 
						<td class="last"></td> 
					</tr>
					<tr class="total">
						<td class="first"></td>
						<td colspan="2" class="buyer_msg">
							<label>购买留言：</label>
							<textarea name="comment[]" value="" class="mls-input-text comment" id="comment_102231" placeholder="选填：建议填写已经与卖家达成一致的说明"></textarea>
						</td>
						<td colspan="2" style="vertical-align:top;">
							<ul class="coupon_freight">
								<li style="display:none" id="coupon_list_102231">
									<div class="info">
										<label class="lb">店铺优惠券：</label>
										<select class="mls-select shop_coupon" id="coupon_102231"></select>
									</div>
									<div class="price">-<span class="credit">0</span></div>
								</li>
								<li>
									<div id="freight_show" class="info freight_show_102231">
										<label class="lb">运费：</label>
										<span class="freight_info">免运费</span>
									</div>
									<div class="price"><span>0.00</span></div>
								</li>
							</ul> 
						</td>
						<td class="last"></td>
					</tr>
					<tr class="total">
						<td class="first"></td>
						<td colspan="2"></td>
						<td colspan="2" class="shop_total">
							<span>共1件商品，</span>
							<span>店铺合计：<span id="shop_total_price_102231" class="price">15.00</span>元</span>
						</td>
						<td class="last"></td>
					</tr>
				</tbody>
				<tbody class="shop">
					<tr class="blank_tr">
						<td></td>
					</tr>
					<tr>
						<td class="shop_title" colspan="6">
							<span>商家：<a class="red_f" href="http://www.meilishuo.com/shop/174575" target="_blank">胖妹儿</a></span>
							<a class="getserviceqq knilmi" href="###-280126979-174575-2-" target="_blank">&nbsp;</a>
						</td>
					</tr>
				</tbody>
				<tbody class="goods">  
					<tr class="first last" id="goods_72169962286676202"> 
						<td class="first"></td> 
						<td class="content"> 
							<a class="content-link" target="_blank" href="http://www.meilishuo.com/share/item/3696993347"> 
								<img src="/img/order/91fd0f1c1adffb7439e9d3164516_640_900.jpg"> 
								<span class="title">韩版复古雪纺连衣裙+背心</span> 
								<span class="props">   
									<span>颜色：绿纹</span>    
									<span>尺码：均码</span>   
								</span>  
							</a> 
						</td> 
						<td> 
							<div class="u_price">59.60</div>   
						</td> 
						<td>1</td> 
						<td> 59.60 </td> 
						<td class="last"></td> 
					</tr>
					<tr class="total">
						<td class="first"></td>
						<td colspan="2" class="buyer_msg">
							<label>购买留言：</label>
							<textarea name="comment[]" value="" class="mls-input-text comment" id="comment_174575" placeholder="选填：建议填写已经与卖家达成一致的说明"></textarea>
						</td>
						<td colspan="2" style="vertical-align:top;">
							<ul class="coupon_freight">
								<li style="display:none" id="coupon_list_174575">
									<div class="info">
										<label class="lb">店铺优惠券：</label>
										<select class="mls-select shop_coupon" id="coupon_174575"></select>
									</div>
									<div class="price">-<span class="credit">0</span></div>
								</li>
								<li>
									<div id="freight_show" class="info freight_show_174575">
										<label class="lb">运费：</label>
										<span class="freight_info">免运费</span>
									</div>
									<div class="price">
										<span>0.00</span>
									</div>
								</li>
							</ul> 
						</td>
						<td class="last"></td>
					</tr>
					<tr class="total">
						<td class="first"></td>
						<td colspan="2">
							<span class="x-highlight">温馨提示：</span>此商家商品库存紧张,请在 30 分钟内完成付款，超时未支付系统自动取消订单
						</td>
						<td colspan="2" class="shop_total">
							<span>共1件商品，</span>
							<span>店铺合计：<span id="shop_total_price_174575" class="price">59.60</span>元</span>
						</td>
						<td class="last"></td>
					</tr>
				</tbody>
				<tbody id="plat_coupon_info" class="empty" style="display:none">
					<tr>
						<td colspan="3" class="first"></td>
						<td colspan="2">
							<div class="platform_coupon">
								<div class="info">
									<label class="lb">美丽说优惠券：</label>
									<select class="mls-select" id="coupon"></select>
								</div>
								<div class="price">
									<span>-<span class="credit " id="coupon_save">0</span></span>
								</div>
							</div> 
						</td>
						<td class="last"></td>
					</tr>
				</tbody>
				<tbody class="empty" id="weixin_info" style="display:none">
					<tr>
						<td colspan="3" class="first"></td>
						<td colspan="2">
							<div class="weixin_pro">
								<div class="info">
									<span class="weixin_tips"></span>
								</div>
								<div class="price">-<span class="x-credit-pay">0.00</span></div>
							</div>
						</td>
						<td class="last"></td>
					</tr>
				</tbody>
				<tbody class="empty" id="weixin_warn" style="display:none">
					<tr>
						<td colspan="2" class="first"></td>
						<td colspan="2">
							<span class="red_f weixin_tips"></span>
						</td>
						<td class="c red_f">-0.00元</td>
						<td class="last"></td>
					</tr>
				</tbody>
				<tbody class="empty">
					<tr>
						<td colspan="3" class="first" style="height:10px;"></td>
						<td colspan="3" class="last" style="height:10px;"></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td class="first">&nbsp;</td>
						<td colspan="5" class="last">
							<span class="right">
								<a class="cart" href="http://order.meilishuo.com/cart/?select_sid=72169962286676206_72169962286676204_72169962286676202">&lt;&lt;返回购物车</a>
								<span>商品总价：</span>
								<span class="price">￥<span id="total_price">134.50</span></span>
								<a href="javascript:;" class="go_charge" id="charge"></a>
							</span>
						</td>
					</tr> 
				</tfoot>
			</table>
		</div>
	</div>

<script type="text/html" id="address_template"><div class="unit adrl_list" addr_id="" pid="" cid="" did="" sid="" street="" is_default=""><div class="hidden"><span class="adrl_nickname"></span><span class="adrl_address"></span><span class="adrl_postcode"></span><span class="adrl_phone"></span></div><input class="mls-input-radio" type="radio" name="addr"  value="" id="addr"/><label class="mls-input-label mls-input-radio-label" for="addr"><span class="adrl_addr"></span><span></span><span>邮编</span><span>联系电话</span></label><span class="adrl_edit edit">修改此地址&gt;&gt;</span></div>
</script>
<script type="text/html" id="address_select_city"><option value="0">请选择</option><option value=""></option></script>
<script type="text/html" id="address_select_district"><option value=""></option></script>
<script type="text/html" id="address_select_street"><option value=""></option></script>
<script type="text/html" id="address_select"><option value="0">请选择</option></script>
<input id="weixin_coupon" value="0" type="hidden">
<form action="/order/create/" method="post" style="display:none" id="confirm_form"></form> 
<div class="clear_f"></div>

    <div class="footer">	
        <div class="foot_con">		
            <div class="f_list service_info">			
                <div class="kefu">				
                    <span class="tel_ico"></span>				
                    <p class="f20_f">4000-800-577</p>				
                    <p class="f14_f mt4_f">美丽说客服热线</p>			
                </div>			
                <ol class="business">				
                    <li>周一至周日：08:00-24:00</li>			
                </ol>		
            </div>		
            <div class="f_list">			
                <h4>用户帮助</h4>			
                <ul>				
                    <li><a href="http://www.meilishuo.com/help/" target="_blank">新手指南</a></li>
                	<li><a href="http://www.meilishuo.com/mlsmapinfo/" target="_blank">网站地图</a></li>				
                    <li><a href="http://www.meilishuo.com/helpcenter/" target="_blank">帮助中心</a></li>			
                </ul>		
            </div>		
            <div class="f_list">			
                <h4>关于我们</h4>			
                <ul>				
                    <li><a href="http://www.meilishuo.com/aboutus?sl=h3" target="_blank">关于美丽说</a></li>
                    <li><a href="http://www.meilishuo.com/aboutus/contactus?sl=h3" target="_blank">联系我们</a></li>				
                    <li><a href="http://www.meilishuo.com/aboutus/joinus?sl=h3" target="_blank">加入美丽说</a></li>								
                    <li><a href="http://zhaoshang.meilishuo.com/business" target="_blank">商家入驻</a></li>				
                    <li><a href="http://pro.meilishuo.com/" target="_blank">商家推广</a></li>	
        		</ul>		
            </div>		
            <div class="f_list">			
                <h4>关注我们</h4>			
                <ul>				
                    <li class="sina_attention">					
                        <a href="http://t.sina.com.cn/meilishuo" target="_blank"><span class="i_sina">&nbsp;</span>新浪微博</a>					
                        <div class="sina_attention_area">一键关注新浪微博<wb:follow-button uid="1718455577" type="red_1" width="67" height="24"></wb:follow-button>	
                		</div>				
                    </li>				
                    <li><a href="http://user.qzone.qq.com/1379986183/" target="_blank"><span class="i_qzone">&nbsp;</span>QQ空间</a></li>				
                    <li><a href="http://t.qq.com/meilishuo" target="_blank"><span class="i_tx">&nbsp;</span>腾讯微博</a></li>			
                </ul>		
            </div>		
            <div class="f_list qr-code">			
                <h4>美丽说微信服务号</h4>			
                <img src="/img/qrcode-new.jpg" alt="美丽说服务号二维码">		
            </div>		
            <div class="f_list weixin_code">			
                <h4>美丽说客户端下载</h4>			
                <a class="client_pic" href="http://www.meilishuo.com/client/" target="_blank"></a>	
        	</div>		
            <div class="clear_f"></div>				
            <div class="record">Copyright ©2015 Meilishuo.com &nbsp;<a href="http://i.meilishuo.net/css/images/about/licenseIPC.jpg" target="_blank">电信与信息服务业务经营许可证100798号</a>&nbsp; <a href="http://i.meilishuo.net/css/images/about/licenseGS.jpg" target="_blank">企业法人营业执照</a>&nbsp; 京ICP备11031139号&nbsp; 京公网安备110108006045&nbsp;<br>客服邮箱：kf@meilishuo.com&nbsp;&nbsp;客服电话：4000-800-577&nbsp; 文明办网文明上网举报电话：010-82615762 &nbsp;<a href="http://net.china.com.cn/index.htm" target="_blank">违法不良信息举报中心</a>&nbsp;<a href="http://www.mps.gov.cn/n16/n983040/n3967568/n4038844/n4110655/toupiao.html" target="_blank">我最喜爱的人民警察评选&gt;&gt;</a></div>			
        </div>
    </div>
    <script type="text/html" id="atSearchKey"><ul class="atSearch pa_f" style="border:1px solid #CCCCCC;border-radius:2px;color:#333;padding:1px;background:#fff;z-index:1000;">	<li class="atTitle" style="padding:5px 10px;white-space:nowrap;">选择最近@的人或直接输入</li></ul>
    </script>
    <ul id="goTop" class="goTop">	
        <li id="go_top" class="none_f"><a class="ico_top"><span>返回顶部</span></a></li>
        <li><a class="ico_guide" href="http://www.meilishuo.com/helpcenter/" target="_blank"><span>购物帮助</span></a></li>		
    </ul>
    <ul class="bot_cart">		
        <li class="last first"><a href="http://www.meilishuo.com/im/" class="openIM">				<em class="b_msg">&nbsp;</em><span style="display: none;" class="msg_nums none_f"></span> 客服消息</a>	
        </li>
    </ul>
<!-- <script src="/js/foot.js"></script> -->
</body>
</html>