<?//var_dump($this->arrInfo)?>
<!DOCTYPE html>
<html class=" responsive" lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="theme-color" content="#171a21">
		<title><?echo($this->arrInfo["u_id"]);?> 님의 계정</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

	
	
	<link href="https://store.cloudflare.steamstatic.com/public/shared/css/motiva_sans.css?v=2C1Oh9QFVTyK&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/shared/css/shared_global.css?v=s_nq5WnVyY6v&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/shared/css/buttons.css?v=hFJKQ6HV7IKT&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/css/v6/store.css?v=VQb_lMpHXzL_&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/css/v6/account.css?v=P2WLI8B6ddJe&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/css/v6/steamaccount.css?v=iWCG0qGdJKm7&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/shared/css/shared_responsive.css?v=CG8Em6e-Ozq3&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-33786258-1', 'auto', {
					'sampleRate': 0.4				});
				ga('set', 'dimension1', true );
				ga('set', 'dimension2', 'External' );
				ga('set', 'dimension3', 'account' );
				ga('set', 'dimension4', "account\/account" );
				ga('send', 'pageview' );

			</script>
			<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/jquery-1.8.3.min.js?v=.TZ2NKhB-nliU&amp;_cdn=cloudflare" ></script>
<script type="text/javascript">$J = jQuery.noConflict();</script><script type="text/javascript">VALVE_PUBLIC_PATH = "https:\/\/store.cloudflare.steamstatic.com\/public\/";</script><script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/tooltip.js?v=.zYHOpI1L3Rt0&amp;_cdn=cloudflare" ></script>

<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/shared_global.js?v=UNL2xxg7EO_n&amp;l=koreana&amp;_cdn=cloudflare" ></script>

<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/javascript/main.js?v=UNfDCgejaT9o&amp;l=koreana&amp;_cdn=cloudflare" ></script>

<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/javascript/dynamicstore.js?v=JTmPHZreOfDM&amp;l=koreana&amp;_cdn=cloudflare" ></script>

<script type="text/javascript">
	var __PrototypePreserve=[];
	__PrototypePreserve[0] = Array.from;
	__PrototypePreserve[1] = Array.prototype.filter;
	__PrototypePreserve[2] = Array.prototype.flatMap;
	__PrototypePreserve[3] = Array.prototype.find;
	__PrototypePreserve[4] = Array.prototype.some;
	__PrototypePreserve[5] = Function.prototype.bind;
	__PrototypePreserve[6] = HTMLElement.prototype.scrollTo;
</script>
<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/javascript/prototype-1.7.js?v=.a38iP7Khdmyy&amp;_cdn=cloudflare" ></script>
<script type="text/javascript">
	Array.from = __PrototypePreserve[0] || Array.from;
	Array.prototype.filter = __PrototypePreserve[1] || Array.prototype.filter;
	Array.prototype.flatMap = __PrototypePreserve[2] || Array.prototype.flatMap;
	Array.prototype.find = __PrototypePreserve[3] || Array.prototype.find;
	Array.prototype.some = __PrototypePreserve[4] || Array.prototype.some;
	Function.prototype.bind = __PrototypePreserve[5] || Function.prototype.bind;
	HTMLElement.prototype.scrollTo = __PrototypePreserve[6] || HTMLElement.prototype.scrollTo;
</script>
<script type="text/javascript">
	var __ScriptaculousPreserve=[];
	__ScriptaculousPreserve[0] = Array.from;
	__ScriptaculousPreserve[1] = Function.prototype.bind;
	__ScriptaculousPreserve[2] = HTMLElement.prototype.scrollTo;
</script>
<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/javascript/scriptaculous/_combined.js?v=Me1IBxzktiwk&amp;l=koreana&amp;_cdn=cloudflare&amp;load=effects,controls,slider" ></script>
<script type="text/javascript">
	Array.from = __ScriptaculousPreserve[0] || Array.from;
	Function.prototype.bind = __ScriptaculousPreserve[1] || Function.prototype.bind;
	HTMLElement.prototype.scrollTo = __ScriptaculousPreserve[2] || HTMLElement.prototype.scrollTo;
</script>
<script type="text/javascript">Object.seal && [ Object, Array, String, Number ].map( function( builtin ) { Object.seal( builtin.prototype ); } );</script>
		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded', function(event) {
				$J.data( document, 'x_readytime', new Date().getTime() );
				$J.data( document, 'x_oldref', GetNavCookie() );
				SetupTooltips( { tooltipCSSClass: 'store_tooltip'} );
		});
		</script><script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/javascript/youraccount.js?v=Rnfy5KDw-ufb&amp;l=koreana&amp;_cdn=cloudflare" ></script>
<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/dselect.js?v=sjouo3-33Gox&amp;l=koreana&amp;_cdn=cloudflare" ></script>
<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/shared_responsive_adapter.js?v=ZveeD3RZOpk8&amp;l=koreana&amp;_cdn=cloudflare" ></script>

						<meta name="twitter:card" content="summary_large_image">
			
	<meta name="twitter:site" content="@steam" />

						<meta property="og:title" content="<?echo($this->arrInfo["u_id"]);?> 님의 계정">
					<meta property="twitter:title" content="<?echo($this->arrInfo["u_id"]);?> 님의 계정">
					<meta property="og:type" content="website">
					<meta property="fb:app_id" content="105386699540688">
					<meta property="og:site" content="Steam">
			
	
			<link rel="image_src" href="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
		<meta property="og:image" content="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
		<meta name="twitter:image" content="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png" />
					<meta property="og:image:secure" content="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
				
	
	
	
	
	</head>
<body class="v6 account responsive_page ">


<div class="responsive_page_frame with_header">
						<div class="responsive_page_menu_ctn mainmenu">
				<div class="responsive_page_menu"  id="responsive_page_menu">
										<div class="mainmenu_contents">
						<div class="mainmenu_contents_items">
															<!-- profile area -->
								<div class="responsive_menu_user_area">
									<div class="responsive_menu_user_persona persona offline">
										<div class="playerAvatar offline">
											<a href="https://steamcommunity.com/profiles/76561198030136515/">
												<img src="https://avatars.cloudflare.steamstatic.com/79a8119bd2a027755f93872d0d09b959909a0405.jpg" srcset="https://avatars.cloudflare.steamstatic.com/79a8119bd2a027755f93872d0d09b959909a0405.jpg 1x, https://avatars.cloudflare.steamstatic.com/79a8119bd2a027755f93872d0d09b959909a0405_medium.jpg 2x">											</a>
										</div>
										<a href="https://steamcommunity.com/profiles/76561198030136515/" data-miniprofile="69870787"><?echo($this->arrInfo["u_name"]);?></a>									</div>

																												<div class="responsive_menu_cartwallet_area persona offline">
																							<div class="responsive_menu_user_cart">
													<a href="https://store.steampowered.com/cart/?snr=1_account_4__global-responsive-menu">
														장바구니 <b>(0)</b>													</a>
												</div>
																																		<div class="responsive_menu_user_wallet">
													<a href="https://store.steampowered.com/account/?snr=1_account_4__global-responsive-menu">
														지갑 <b>(₩ 4.81)</b>													</a>
												</div>
																					</div>
																	</div>

																									<div class="menuitem notifications_item">
										알림										<div class="notification_count_total_ctn no_notifications">
											<span class="notification_envelope"></span>
											<span class="notification_count">0</span>
										</div>
									</div>
									<div class="notification_submenu" style="display: none;" data-submenuid="notifications">
										
									<a data-notification-type="4" class="popup_menu_item notification_ctn header_notification_comments " href="https://steamcommunity.com/profiles/76561198030136515/commentnotifications/">
				<span class="notification_icon"></span>새로운 댓글 <span class="notification_count">0</span>개			</a>
			<div class="header_notification_dropdown_seperator"></div>
						<a data-notification-type="5" class="popup_menu_item notification_ctn header_notification_items " href="https://steamcommunity.com/profiles/76561198030136515/inventory/">
				<span class="notification_icon"></span>새로운 아이템 <span class="notification_count">0</span>개			</a>
			<div class="header_notification_dropdown_seperator"></div>
								<a data-notification-type="6" class="popup_menu_item notification_ctn header_notification_invites " href="https://steamcommunity.com/profiles/76561198030136515/home/invites/">
				<span class="notification_icon"></span>새로운 초대 <span class="notification_count">0</span>개			</a>

					<div class="header_notification_dropdown_seperator"></div>
						<a data-notification-type="8" class="popup_menu_item notification_ctn header_notification_gifts " href="https://steamcommunity.com/profiles/76561198030136515/inventory/#pending_gifts">
				<span class="notification_icon"></span>새로운 선물 <span class="notification_count">0</span>개			</a>
			<div class="header_notification_dropdown_seperator"></div>
						<a data-notification-type="9" class="popup_menu_item notification_ctn header_notification_offlinemessages " href="javascript:void(0)" onclick="LaunchWebChat(); HideMenu( 'header_notification_link', 'header_notification_dropdown' ); return false;">
				<span class="notification_icon"></span>새로운 메시지 <span class="notification_count">0</span>개			</a>
								<a data-notification-type="1" class="popup_menu_item notification_ctn hide_when_empty header_notification_tradeoffers " href="https://steamcommunity.com/profiles/76561198030136515/tradeoffers/">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span>새로운 거래 제안 <span class="notification_count">0</span>개					</a>
								<a data-notification-type="2" class="popup_menu_item notification_ctn hide_when_empty header_notification_asyncgame " href="https://steamcommunity.com/profiles/76561198030136515/gamenotifications">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span>대기 중인 새로운 턴 <span class="notification_count">0</span>개					</a>
								<a data-notification-type="3" class="popup_menu_item notification_ctn hide_when_empty header_notification_moderatormessage " href="https://steamcommunity.com/profiles/76561198030136515/moderatormessages">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span>새로운 메시지 <span class="notification_count">0</span>개					</a>
								<a data-notification-type="10" class="popup_menu_item notification_ctn hide_when_empty header_notification_helprequestreply " href="https://help.steampowered.com/ko/wizard/HelpRequests">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span>Steam 고객지원 답변 <span class="notification_count">0</span>개					</a>
															</div>
									<a class="menuitem supernav" href="https://store.steampowered.com/?snr=1_account_4__global-responsive-menu" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		상점	</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="https://store.steampowered.com/?snr=1_account_4__global-responsive-menu">홈</a>
					<a class="submenuitem" href="https://store.steampowered.com/explore/?snr=1_account_4__global-responsive-menu">탐색 대기열</a>
				<a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">찜 목록</a>
		<a class="submenuitem" href="https://store.steampowered.com/points/shop/?snr=1_account_4__global-responsive-menu">포인트 상점</a>	
       	<a class="submenuitem" href="https://store.steampowered.com/news/?snr=1_account_4__global-responsive-menu">뉴스</a>
					<a class="submenuitem" href="https://store.steampowered.com/stats/?snr=1_account_4__global-responsive-menu">통계</a>
					</div>


			<a class="menuitem supernav" style="display: block" href="https://steamcommunity.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
			커뮤니티		</a>
		<div class="submenu_community" style="display: none;" data-submenuid="community">
			<a class="submenuitem" href="https://steamcommunity.com/">홈</a>
			<a class="submenuitem" href="https://steamcommunity.com/discussions/">토론</a>
			<a class="submenuitem" href="https://steamcommunity.com/workshop/">창작마당</a>
			<a class="submenuitem" href="https://steamcommunity.com/market/">장터</a>
			<a class="submenuitem" href="https://steamcommunity.com/?subsection=broadcasts">방송</a>
											</div>
		

			<a class="menuitem supernav username persona_name_text_content" href="https://steamcommunity.com/profiles/76561198030136515/home/" data-tooltip-type="selector" data-tooltip-content=".submenu_username">
			귀하와 친구들		</a>
		<div class="submenu_username" style="display: none;" data-submenuid="username">
			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/home/">활동</a>
			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/">프로필</a>
			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/friends/">친구</a>
			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/games/">게임</a>
			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/groups/">그룹</a>			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/screenshots/">콘텐츠</a>			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/badges/">배지</a>			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/inventory/">보관함</a>		</div>
	
	
	<a class="menuitem" href="https://help.steampowered.com/ko/">
		지원	</a>

							<div class="minor_menu_items">
																	<a class="menuitem" href="https://store.steampowered.com/account/?snr=1_account_4__global-responsive-menu">계정 정보</a>
									<a class="menuitem" href="https://store.steampowered.com/account/preferences?snr=1_account_4__global-responsive-menu">환경 설정</a>
																								<div class="menuitem change_language_action">
									언어 변경								</div>
																									<div class="menuitem" onclick="Logout();">사용자 변경</div>
																									<div class="menuitem" onclick="Responsive_RequestDesktopView();">
										PC 웹사이트 보기									</div>
															</div>
						</div>
						<div class="mainmenu_footer_spacer  "></div>
						<div class="mainmenu_footer">
															<div class="mainmenu_footer_logo"><img src="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/logo_valve_footer.png"></div>
								© Valve Corporation. 모든 권리 보유. 모든 상표는 미국 및 기타 국가에서 각각 해당 소유자의 재산입니다.								<span class="mainmenu_valve_links">
									<a href="https://store.steampowered.com/privacy_agreement/?snr=1_account_4__global-responsive-menu" target="_blank">개인정보 보호정책</a>
									&nbsp;| &nbsp;<a href="http://www.valvesoftware.com/legal.htm" target="_blank">사용권</a>
									&nbsp;| &nbsp;<a href="https://store.steampowered.com/subscriber_agreement/?snr=1_account_4__global-responsive-menu" target="_blank">Steam 이용 약관</a>
									&nbsp;| &nbsp;<a href="https://store.steampowered.com/steam_refunds/?snr=1_account_4__global-responsive-menu" target="_blank">환불</a>
								</span>
													</div>
					</div>
									</div>
			</div>
		
		<div class="responsive_local_menu_tab"></div>

		<div class="responsive_page_menu_ctn localmenu">
			<div class="responsive_page_menu"  id="responsive_page_local_menu" data-panel="{&quot;onOptionsActionDescription&quot;:&quot;\ud544\ud130&quot;,&quot;onOptionsButton&quot;:&quot;Responsive_ToggleLocalMenu()&quot;,&quot;onCancelButton&quot;:&quot;Responsive_ToggleLocalMenu()&quot;}">
				<div class="localmenu_content" data-panel="{&quot;maintainY&quot;:true,&quot;bFocusRingRoot&quot;:true,&quot;flow-children&quot;:&quot;column&quot;}">
				</div>
			</div>
		</div>



					<div class="responsive_header">
				<div class="responsive_header_content">
					<div id="responsive_menu_logo">
						<img src="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/header_menu_hamburger.png" height="100%">
													<div class="responsive_header_notification_badge_ctn">
								<div class="responsive_header_notification_badge notification_count_total_ctn no_notifications">
									<span class="notification_count">0</span>
								</div>
							</div>
											</div>
					<div class="responsive_header_logo">
						<a href="https://store.steampowered.com/?snr=1_account_4__global-responsive-menu">
															<img src="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/header_logo.png" height="36" border="0" alt="STEAM">
													</a>
					</div>
				</div>
			</div>
		
		<div class="responsive_page_content_overlay">

		</div>

		<div class="responsive_fixonscroll_ctn nonresponsive_hidden ">
		</div>
	
	<div class="responsive_page_content">

		<div id="global_header" data-panel="{&quot;flow-children&quot;:&quot;row&quot;}">
	<div class="content">
		<div class="logo">
			<span id="logo_holder">
									<a href="https://store.steampowered.com/?snr=1_account_4__global-header">
						<img src="https://store.cloudflare.steamstatic.com/public/shared/images/header/logo_steam.svg?t=962016" width="176" height="44">
					</a>
							</span>
		</div>

			<div class="supernav_container">
	<a class="menuitem supernav" href="https://store.steampowered.com/?snr=1_account_4__global-header" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		상점	</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="https://store.steampowered.com/?snr=1_account_4__global-header">홈</a>
					<a class="submenuitem" href="https://store.steampowered.com/explore/?snr=1_account_4__global-header">탐색 대기열</a>
				<a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">찜 목록</a>
		<a class="submenuitem" href="https://store.steampowered.com/points/shop/?snr=1_account_4__global-header">포인트 상점</a>	
       	<a class="submenuitem" href="https://store.steampowered.com/news/?snr=1_account_4__global-header">뉴스</a>
					<a class="submenuitem" href="https://store.steampowered.com/stats/?snr=1_account_4__global-header">통계</a>
							<a class="submenuitem" href="https://store.steampowered.com/about/?snr=1_account_4__global-header">정보</a>
			</div>


			<a class="menuitem supernav" style="display: block" href="https://steamcommunity.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
			커뮤니티		</a>
		<div class="submenu_community" style="display: none;" data-submenuid="community">
			<a class="submenuitem" href="https://steamcommunity.com/">홈</a>
			<a class="submenuitem" href="https://steamcommunity.com/discussions/">토론</a>
			<a class="submenuitem" href="https://steamcommunity.com/workshop/">창작마당</a>
			<a class="submenuitem" href="https://steamcommunity.com/market/">장터</a>
			<a class="submenuitem" href="https://steamcommunity.com/?subsection=broadcasts">방송</a>
											</div>
		

			<a class="menuitem supernav username persona_name_text_content" href="https://steamcommunity.com/profiles/76561198030136515/home/" data-tooltip-type="selector" data-tooltip-content=".submenu_username">
			<?echo($this->arrInfo["u_name"]);?>		</a>
		<div class="submenu_username" style="display: none;" data-submenuid="username">
			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/home/">활동</a>
			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/">프로필</a>
			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/friends/">친구</a>
			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/games/">게임</a>
			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/groups/">그룹</a>			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/screenshots/">콘텐츠</a>			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/badges/">배지</a>			<a class="submenuitem" href="https://steamcommunity.com/profiles/76561198030136515/inventory/">보관함</a>		</div>
	
						<a class="menuitem" href="https://steamcommunity.com/chat/">
				채팅			</a>
			
	<a class="menuitem" href="https://help.steampowered.com/ko/">
		지원	</a>
	</div>
	<script type="text/javascript">
		jQuery(function($) {
			$('#global_header .supernav').v_tooltip({'location':'bottom', 'destroyWhenDone': false, 'tooltipClass': 'supernav_content', 'offsetY':-4, 'offsetX': 1, 'horizontalSnap': 4, 'tooltipParent': '#global_header .supernav_container', 'correctForScreenSize': false});
		});
	</script>

		<div id="global_actions">
			<div id="global_action_menu">
									<div class="header_installsteam_btn header_installsteam_btn_gray">

						<a class="header_installsteam_btn_content" href="https://store.steampowered.com/about/?snr=1_account_4__global-header">
							Steam 설치						</a>
					</div>
				
				
										<!-- notification inbox area -->
																								<div id="header_notification_area">
									<script type="text/javascript">$J(EnableNotificationCountPolling);</script>
		<div id="header_notification_link" class="header_notification_btn global_header_toggle_button notification_count_total_ctn no_notifications" onclick="ShowMenu( this, 'header_notification_dropdown', 'right' );">
			<span class="notification_count">0</span>
			<span class="header_notification_envelope">
				<img src="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/header_menu_notifications.png" width="11" height="8">
			</span>
		</div>
	
			<div class="popup_block_new" id="header_notification_dropdown" style="display: none;">
			<div class="popup_body popup_menu">
									<a data-notification-type="4" class="popup_menu_item notification_ctn header_notification_comments " href="https://steamcommunity.com/profiles/76561198030136515/commentnotifications/">
				<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">새로운 댓글 1개</span><span class="notification_count_string plural" style="">새로운 댓글 <span class="notification_count">0</span>개</span>			</a>
			<div class="header_notification_dropdown_seperator"></div>
						<a data-notification-type="5" class="popup_menu_item notification_ctn header_notification_items " href="https://steamcommunity.com/profiles/76561198030136515/inventory/">
				<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">보관함에 새로운 아이템 1개</span><span class="notification_count_string plural" style="">보관함에 새로운 아이템 <span class="notification_count">0</span>개</span>			</a>
			<div class="header_notification_dropdown_seperator"></div>
								<a data-notification-type="6" class="popup_menu_item notification_ctn header_notification_invites " href="https://steamcommunity.com/profiles/76561198030136515/home/invites/">
				<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">새로운 초대 1개</span><span class="notification_count_string plural" style="">새로운 초대 <span class="notification_count">0</span>개</span>			</a>

					<div class="header_notification_dropdown_seperator"></div>
						<a data-notification-type="8" class="popup_menu_item notification_ctn header_notification_gifts " href="https://steamcommunity.com/profiles/76561198030136515/inventory/#pending_gifts">
				<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">새로운 선물 1개</span><span class="notification_count_string plural" style="">새로운 선물 <span class="notification_count">0</span>개</span>			</a>
			<div class="header_notification_dropdown_seperator"></div>
						<a data-notification-type="9" class="popup_menu_item notification_ctn header_notification_offlinemessages " href="javascript:void(0)" onclick="LaunchWebChat(); HideMenu( 'header_notification_link', 'header_notification_dropdown' ); return false;">
				<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">읽지 않은 채팅 메시지 1개</span><span class="notification_count_string plural" style="">읽지 않은 채팅 메시지 <span class="notification_count">0</span>개</span>			</a>
								<a data-notification-type="1" class="popup_menu_item notification_ctn hide_when_empty header_notification_tradeoffers " href="https://steamcommunity.com/profiles/76561198030136515/tradeoffers/">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">새로운 거래 알림 1개</span><span class="notification_count_string plural" style="">새로운 거래 알림 <span class="notification_count">0</span>개</span>					</a>
								<a data-notification-type="2" class="popup_menu_item notification_ctn hide_when_empty header_notification_asyncgame " href="https://steamcommunity.com/profiles/76561198030136515/gamenotifications">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">대기 중인 턴 1개</span><span class="notification_count_string plural" style="">대기 중인 새로운 턴  <span class="notification_count">0</span>개</span>					</a>
								<a data-notification-type="3" class="popup_menu_item notification_ctn hide_when_empty header_notification_moderatormessage " href="https://steamcommunity.com/profiles/76561198030136515/moderatormessages">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">커뮤니티 메시지 1개</span><span class="notification_count_string plural" style="">커뮤니티 메시지 <span class="notification_count">0</span>개</span>					</a>
								<a data-notification-type="10" class="popup_menu_item notification_ctn hide_when_empty header_notification_helprequestreply " href="https://help.steampowered.com/ko/wizard/HelpRequests">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">Steam 고객지원 답변 1개</span><span class="notification_count_string plural" style="">Steam 고객지원 답변 <span class="notification_count">0</span>개</span>					</a>
									</div>
		</div>
							</div>
					<span class="pulldown global_action_link persona_name_text_content" id="account_pulldown" onclick="ShowMenu( this, 'account_dropdown', 'right', 'bottom', true );">
                    <?echo($this->arrInfo["u_name"]);?>					</span>
					<div class="popup_block_new" id="account_dropdown" style="display: none;">
						<div class="popup_body popup_menu">
															<a class="popup_menu_item" href="https://steamcommunity.com/profiles/76561198030136515/">프로필 보기</a>
								<a class="popup_menu_item" href="https://store.steampowered.com/account/?snr=1_account_4__global-header">계정 정보</a>
																						<a class="popup_menu_item" href="javascript:Logout();">로그아웃: <span class="persona online"><?echo($this->arrInfo["u_id"]);?></span></a>
																						<a class="popup_menu_item" href="https://store.steampowered.com/account/preferences/?snr=1_account_4__global-header">환경 설정</a>
							
															<span class="popup_menu_item" id="account_language_pulldown">언어 변경</span>
								<div class="popup_block_new" id="language_dropdown" style="display: none;">
									<div class="popup_body popup_menu">
																																													<a class="popup_menu_item tight" href="?l=schinese" onclick="ChangeLanguage( 'schinese' ); return false;">简体中文 (중국어 간체)</a>
																																			<a class="popup_menu_item tight" href="?l=tchinese" onclick="ChangeLanguage( 'tchinese' ); return false;">繁體中文 (중국어 번체)</a>
																																			<a class="popup_menu_item tight" href="?l=japanese" onclick="ChangeLanguage( 'japanese' ); return false;">日本語 (일본어)</a>
																																			<a class="popup_menu_item tight" href="?l=koreana" onclick="ChangeLanguage( 'koreana' ); return false;">한국어</a>
																																			<a class="popup_menu_item tight" href="?l=thai" onclick="ChangeLanguage( 'thai' ); return false;">ไทย (태국어)</a>
																																			<a class="popup_menu_item tight" href="?l=bulgarian" onclick="ChangeLanguage( 'bulgarian' ); return false;">Български (불가리아어)</a>
																																			<a class="popup_menu_item tight" href="?l=czech" onclick="ChangeLanguage( 'czech' ); return false;">Čeština (체코어)</a>
																																			<a class="popup_menu_item tight" href="?l=danish" onclick="ChangeLanguage( 'danish' ); return false;">Dansk (덴마크어)</a>
																																			<a class="popup_menu_item tight" href="?l=german" onclick="ChangeLanguage( 'german' ); return false;">Deutsch (독일어)</a>
																																			<a class="popup_menu_item tight" href="?l=english" onclick="ChangeLanguage( 'english' ); return false;">English (영어)</a>
																																			<a class="popup_menu_item tight" href="?l=spanish" onclick="ChangeLanguage( 'spanish' ); return false;">Español - España (스페인어 - 스페인)</a>
																																			<a class="popup_menu_item tight" href="?l=latam" onclick="ChangeLanguage( 'latam' ); return false;">Español - Latinoamérica (스페인어 - 중남미)</a>
																																			<a class="popup_menu_item tight" href="?l=greek" onclick="ChangeLanguage( 'greek' ); return false;">Ελληνικά (그리스어)</a>
																																			<a class="popup_menu_item tight" href="?l=french" onclick="ChangeLanguage( 'french' ); return false;">Français (프랑스어)</a>
																																			<a class="popup_menu_item tight" href="?l=italian" onclick="ChangeLanguage( 'italian' ); return false;">Italiano (이탈리아어)</a>
																																			<a class="popup_menu_item tight" href="?l=hungarian" onclick="ChangeLanguage( 'hungarian' ); return false;">Magyar (헝가리어)</a>
																																			<a class="popup_menu_item tight" href="?l=dutch" onclick="ChangeLanguage( 'dutch' ); return false;">Nederlands (네덜란드어)</a>
																																			<a class="popup_menu_item tight" href="?l=norwegian" onclick="ChangeLanguage( 'norwegian' ); return false;">Norsk (노르웨이어)</a>
																																			<a class="popup_menu_item tight" href="?l=polish" onclick="ChangeLanguage( 'polish' ); return false;">Polski (폴란드어)</a>
																																			<a class="popup_menu_item tight" href="?l=portuguese" onclick="ChangeLanguage( 'portuguese' ); return false;">Português (포르투갈어 - 포르투갈)</a>
																																			<a class="popup_menu_item tight" href="?l=brazilian" onclick="ChangeLanguage( 'brazilian' ); return false;">Português - Brasil (포르투갈어 - 브라질)</a>
																																			<a class="popup_menu_item tight" href="?l=romanian" onclick="ChangeLanguage( 'romanian' ); return false;">Română (루마니아어)</a>
																																			<a class="popup_menu_item tight" href="?l=russian" onclick="ChangeLanguage( 'russian' ); return false;">Русский (러시아어)</a>
																																			<a class="popup_menu_item tight" href="?l=finnish" onclick="ChangeLanguage( 'finnish' ); return false;">Suomi (핀란드어)</a>
																																			<a class="popup_menu_item tight" href="?l=swedish" onclick="ChangeLanguage( 'swedish' ); return false;">Svenska (스웨덴어)</a>
																																			<a class="popup_menu_item tight" href="?l=turkish" onclick="ChangeLanguage( 'turkish' ); return false;">Türkçe (튀르키예어)</a>
																																			<a class="popup_menu_item tight" href="?l=vietnamese" onclick="ChangeLanguage( 'vietnamese' ); return false;">Tiếng Việt (베트남어)</a>
																																			<a class="popup_menu_item tight" href="?l=ukrainian" onclick="ChangeLanguage( 'ukrainian' ); return false;">Українська (우크라이나어)</a>
																															<a class="popup_menu_item tight" href="https://www.valvesoftware.com/ko/contact?contact-person=Translation%20Team%20Feedback" target="_blank">
											번역 관련 문제 보고										</a>
									</div>
								</div>
													</div>
					</div>
					<script type="text/javascript">
						RegisterFlyout( 'account_language_pulldown', 'language_dropdown', 'leftsubmenu', 'bottomsubmenu', true );
					</script>
											<div id="header_wallet_ctn">
							<a class="global_action_link" id="header_wallet_balance" href="https://store.steampowered.com/account/store_transactions/">₩ 4.81</a>
						</div>
												</div>
							<a href="https://steamcommunity.com/profiles/76561198030136515/" class="user_avatar playerAvatar offline">
					<img src="https://avatars.cloudflare.steamstatic.com/79a8119bd2a027755f93872d0d09b959909a0405.jpg">
				</a>
					</div>
			</div>
</div>
<div id="responsive_store_nav_ctn"></div><div id="responsive_store_nav_overlay" style="display:none"><div id="responsive_store_nav_overlay_ctn"></div><div id="responsive_store_nav_overlay_bottom"></div></div><div id="responsive_store_search_overlay" style="display:none"></div><div data-cart-banner-spot="1"></div>
		<div class="responsive_page_template_content" id="responsive_page_template_content" data-panel="{&quot;autoFocus&quot;:true}" >

			


<div class="page_header_ctn">
	<script type="text/javascript">
	var g_AccountID = 69870787;
	var g_sessionID = "a76e77c1b4ca738312622b42";
	var g_ServerTime = 1684467716;

	$J( InitMiniprofileHovers( 'https%3A%2F%2Fstore.steampowered.com%2F' ) );

	
			GStoreItemData.AddNavParams({
			__page_default: "1_account_4_",
			storemenu_recommendedtags: "1_account_4__17"		});
		GDynamicStore.Init( 69870787, false, "", {"primary_language":4,"secondary_languages":0,"platform_windows":0,"platform_mac":0,"platform_linux":0,"timestamp_updated":1684394187,"hide_store_broadcast":0,"review_score_preference":0,"timestamp_content_descriptor_preferences_updated":1547290132,"provide_deck_feedback":0,"additional_languages":null}, 'KR',
			{"bNoDefaultDescriptors":false} );
		GStoreItemData.SetCurrencyFormatter( function( nValueInCents, bWholeUnitsOnly ) { var fmt = function( nValueInCents, bWholeUnitsOnly ) {	var format = v_numberformat( nValueInCents / 100, bWholeUnitsOnly ? 0 : 2, ".", ",");format = format.replace( ".00", '' ); return format; };var strNegativeSymbol = '';return strNegativeSymbol + "\u20a9 " + fmt( nValueInCents, bWholeUnitsOnly );} );
		GStoreItemData.SetCurrencyMinPriceIncrement( 1000 );
	</script>
	<div class="page_content">
		<div class="breadcrumbs">
			<div class="blockbg">
				<a data-panel="{&quot;noFocusRing&quot;:true}" href="https://store.steampowered.com/">홈</a>
				<span class="breadcrumb_separator">&gt;</span>
				<a data-panel="{&quot;noFocusRing&quot;:true}" href="https://store.steampowered.com/account/">계정</a>
			</div>
			<div style="clear: left;"></div>
		</div>
		<h2 class="pageheader youraccount_pageheader"><?echo($this->arrInfo["u_id"]);?> 님의 계정</h2>
	</div>
</div>
<div class="page_content_ctn">
	<div id="main_content" class="page_content">
				<div class="two_column left" data-panel="{&quot;noFocusRing&quot;:true,&quot;onMoveDown&quot;:&quot;BlockMovement&quot;,&quot;onMoveUp&quot;:&quot;BlockMovement&quot;}" >
			
<a data-panel="[]" class="nav_item active" href="https://store.steampowered.com/account/" >계정 정보</a>

		</div>
				<div class="two_column right">
			<div class="account_header_line">
				<div><img src="https://store.cloudflare.steamstatic.com/public/images/account/icon_steamguard.png">계정 보안</div>
			</div>
			<div class="account_setting_block">
				<div class="account_setting_sub_block">
					<div class="account_security_block">
						<div style="float: left">상태:</div>
						<img src="https://store.cloudflare.steamstatic.com/public/images/account/sg_good.png">
						<div class="account_data_field">
							<? echo($this->DDAY."일전 수정") ?>				</div>
						<div style="clear: both"></div>
					</div>
					<div>
						<div>
							<a class="account_manage_link" href="/user/update">
							개인정보 수정</a>
						</div>
						<div class="inner_rule"></div>
						<p>보안보안보안.</p>
					</div>
				</div>
								<div style="clear: both"></div>
			</div>


			</div>
			<div class="account_setting_block_short">
				<div class="account_setting_sub_block_long">
					<div>
						<a class="account_manage_link delete_link" href="https://help.steampowered.com/ko/wizard/HelpDeleteAccount">
							내 Steem 계정 삭제하기						</a> - 계정 및 관련 정보를 영구적으로 삭제하는 것에 대하여 더 자세히 알아보세요.					</div>
				</div>
			</div>

		</div>
	<div class="spacer"></div>
</div>

<!-- End Center Column -->
<div style="clear: both;"></div>

		</div>	<!-- responsive_page_legacy_content -->

		<div id="footer_spacer" style="" class=""></div>
<div id="footer"  class="">
<div class="footer_content">

    <div class="rule"></div>
				<div id="footer_logo_steam"><img src="https://store.cloudflare.steamstatic.com/public/images/v6/logo_steam_footer.png" alt="Valve Software" border="0" /></div>
	
    <div id="footer_logo"><a href="http://www.valvesoftware.com" target="_blank" rel=""><img src="https://store.cloudflare.steamstatic.com/public/images/footerLogo_valve_new.png" alt="Valve Software" border="0" /></a></div>
    <div id="footer_text" data-panel="{&quot;flow-children&quot;:&quot;row&quot;}" >
        <div>&copy; 2023 Valve Corporation. All rights reserved. 모든 상표는 미국 및 기타 국가에서 해당하는 소유자의 재산입니다.</div>
        <div>부가가치세 포함&nbsp;&nbsp;

            <a href="https://store.steampowered.com/privacy_agreement/?snr=1_44_44_" target="_blank" rel="">개인정보 보호정책</a>
            &nbsp; | &nbsp;
            <a href="https://store.steampowered.com/legal/?snr=1_44_44_" target="_blank" rel="">사용권</a>
            &nbsp; | &nbsp;
            <a href="https://store.steampowered.com/subscriber_agreement/?snr=1_44_44_" target="_blank" rel="">Steam 이용 약관</a>
            &nbsp; | &nbsp;
            <a href="https://store.steampowered.com/steam_refunds/?snr=1_44_44_" target="_blank" rel="">환불</a>
            &nbsp; | &nbsp;
            <a href="https://store.steampowered.com/account/cookiepreferences/?snr=1_44_44_" target="_blank" rel="">쿠키</a>

        </div>
					<div class="responsive_optin_link">
				<div class="btn_medium btnv6_grey_black" onclick="Responsive_RequestMobileView()">
					<span>모바일 웹사이트 보기</span>
				</div>
			</div>
		
    </div>



    <div style="clear: left;"></div>
	<br>

    <div class="rule"></div>

    <div class="valve_links" data-panel="{&quot;flow-children&quot;:&quot;row&quot;}" >
        <a href="http://www.valvesoftware.com/about" target="_blank" rel="">Valve 정보</a>
        &nbsp; | &nbsp;<a href="http://www.valvesoftware.com" target="_blank" rel="">채용 정보</a>
        &nbsp; | &nbsp;<a href="http://www.steampowered.com/steamworks/" target="_blank" rel="">Steamworks</a>
        &nbsp; | &nbsp;<a href="https://partner.steamgames.com/steamdirect" target="_blank" rel="">Steam 배포</a>
        &nbsp; | &nbsp;<a href="https://help.steampowered.com/ko/?snr=1_44_44_">지원</a>
                        		&nbsp; | &nbsp;<a href="https://store.steampowered.com/digitalgiftcards/?snr=1_44_44_" target="_blank" rel="">기프트 카드</a>
		&nbsp; | &nbsp;<a href="https://steamcommunity.com/linkfilter/?url=http://www.facebook.com/Steam" target="_blank" rel=" noopener"><img src="https://store.cloudflare.steamstatic.com/public/images/ico/ico_facebook.gif"> Steam</a>
		&nbsp; | &nbsp;<a href="http://twitter.com/steam" target="_blank" rel=""><img src="https://store.cloudflare.steamstatic.com/public/images/ico/ico_twitter.gif"> @steam</a>
            </div>

</div>
</div>
	</div>	<!-- responsive_page_content -->

</div>	<!-- responsive_page_frame -->
</body>
</html>