<?
// var_dump($this->UarrError);
// var_dump($_GET);
// var_dump($_POST);
?>
<!DOCTYPE html>
<html class=" responsive" lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="theme-color" content="#171a21">
		<title>계정 만들기</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

	
	
	<link href="https://store.cloudflare.steamstatic.com/public/shared/css/motiva_sans.css?v=2C1Oh9QFVTyK&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/shared/css/shared_global.css?v=s_nq5WnVyY6v&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/shared/css/buttons.css?v=hFJKQ6HV7IKT&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/css/v6/store.css?v=zD42OiNVEyNp&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/shared/css/login.css?v=2lvGscjyuw2V&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/shared/css/joinsteam.css?v=gWQvTaKyGce7&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/css/v6/cart.css?v=u2FIaietX6aF&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/shared/css/shared_responsive.css?v=CG8Em6e-Ozq3&amp;l=koreana&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-33786258-1', 'auto', {
					'sampleRate': 0.4				});
				ga('set', 'dimension1', false );
				ga('set', 'dimension2', 'External' );
				ga('set', 'dimension3', 'join' );
				ga('set', 'dimension4', "join\/" );
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
		</script><script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/submitonenter.js?v=_wO1TUaI5fl-&amp;l=koreana&amp;_cdn=cloudflare" ></script>
<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/joinsteam.js?v=L7hoSzGnvNfo&amp;l=koreana&amp;_cdn=cloudflare" ></script>
<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/dselect.js?v=sjouo3-33Gox&amp;l=koreana&amp;_cdn=cloudflare" ></script>
<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/shared_responsive_adapter.js?v=ZveeD3RZOpk8&amp;l=koreana&amp;_cdn=cloudflare" ></script>

						<meta name="twitter:card" content="summary_large_image">
			
	<meta name="twitter:site" content="@steam" />

						<meta property="og:title" content="계정 만들기">
					<meta property="twitter:title" content="계정 만들기">
					<meta property="og:type" content="website">
					<meta property="fb:app_id" content="105386699540688">
					<meta property="og:site" content="Steam">
			
	
			<link rel="image_src" href="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
		<meta property="og:image" content="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
		<meta name="twitter:image" content="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png" />
					<meta property="og:image:secure" content="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
				
	
	
	
	
	</head>
<body class="v6 global joinsteam steam responsive_page ">


<div class="responsive_page_frame with_header">
						<div class="responsive_page_menu_ctn mainmenu">
				<div class="responsive_page_menu"  id="responsive_page_menu">
										<div class="mainmenu_contents">
						<div class="mainmenu_contents_items">
															<a class="menuitem" href="https://store.steampowered.com/login/?redir=join%2F%3F%26snr%3D1_60_4__62&redir_ssl=1&snr=1_join_4__global-header">
									로그인								</a>
								<a class="menuitem supernav" href="https://store.steampowered.com/?snr=1_join_4__global-responsive-menu" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		상점	</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="https://store.steampowered.com/?snr=1_join_4__global-responsive-menu">홈</a>
					<a class="submenuitem" href="https://store.steampowered.com/explore/?snr=1_join_4__global-responsive-menu">탐색 대기열</a>
				<a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">찜 목록</a>
		<a class="submenuitem" href="https://store.steampowered.com/points/shop/?snr=1_join_4__global-responsive-menu">포인트 상점</a>	
       	<a class="submenuitem" href="https://store.steampowered.com/news/?snr=1_join_4__global-responsive-menu">뉴스</a>
					<a class="submenuitem" href="https://store.steampowered.com/stats/?snr=1_join_4__global-responsive-menu">통계</a>
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
		

	
	
	<a class="menuitem" href="https://help.steampowered.com/ko/">
		지원	</a>

							<div class="minor_menu_items">
																								<div class="menuitem change_language_action">
									언어 변경								</div>
																																	<div class="menuitem" onclick="Responsive_RequestDesktopView();">
										PC 웹사이트 보기									</div>
															</div>
						</div>
						<div class="mainmenu_footer_spacer  "></div>
						<div class="mainmenu_footer">
															<div class="mainmenu_footer_logo"><img src="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/logo_valve_footer.png"></div>
								© Valve Corporation. 모든 권리 보유. 모든 상표는 미국 및 기타 국가에서 각각 해당 소유자의 재산입니다.								<span class="mainmenu_valve_links">
									<a href="https://store.steampowered.com/privacy_agreement/?snr=1_join_4__global-responsive-menu" target="_blank">개인정보 보호정책</a>
									&nbsp;| &nbsp;<a href="http://www.valvesoftware.com/legal.htm" target="_blank">사용권</a>
									&nbsp;| &nbsp;<a href="https://store.steampowered.com/subscriber_agreement/?snr=1_join_4__global-responsive-menu" target="_blank">Steam 이용 약관</a>
									&nbsp;| &nbsp;<a href="https://store.steampowered.com/steam_refunds/?snr=1_join_4__global-responsive-menu" target="_blank">환불</a>
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
											</div>
					<div class="responsive_header_logo">
						<a href="https://store.steampowered.com/?snr=1_join_4__global-responsive-menu">
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
									<a href="https://store.steampowered.com/?snr=1_join_4__global-header">
						<img src="https://store.cloudflare.steamstatic.com/public/shared/images/header/logo_steam.svg?t=962016" width="176" height="44">
					</a>
							</span>
		</div>

			<div class="supernav_container">
	<a class="menuitem supernav" href="https://store.steampowered.com/?snr=1_join_4__global-header" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		상점	</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="https://store.steampowered.com/?snr=1_join_4__global-header">홈</a>
					<a class="submenuitem" href="https://store.steampowered.com/explore/?snr=1_join_4__global-header">탐색 대기열</a>
				<a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">찜 목록</a>
		<a class="submenuitem" href="https://store.steampowered.com/points/shop/?snr=1_join_4__global-header">포인트 상점</a>	
       	<a class="submenuitem" href="https://store.steampowered.com/news/?snr=1_join_4__global-header">뉴스</a>
					<a class="submenuitem" href="https://store.steampowered.com/stats/?snr=1_join_4__global-header">통계</a>
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
		

	
						<a class="menuitem" href="https://store.steampowered.com/about/?snr=1_join_4__global-header">
				정보			</a>
			
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
									<div class="header_installsteam_btn header_installsteam_btn_green">

						<a class="header_installsteam_btn_content" href="https://store.steampowered.com/about/?snr=1_join_4__global-header">
							Steam 설치						</a>
					</div>
				
				
														<a class="global_action_link" href="https://store.steampowered.com/login/?redir=join%2F%3F%26snr%3D1_60_4__62&redir_ssl=1&snr=1_join_4__global-header">로그인</a>
											&nbsp;|&nbsp;
						<span class="pulldown global_action_link" id="language_pulldown" onclick="ShowMenu( this, 'language_dropdown', 'right' );">언어</span>
						<div class="popup_block_new" id="language_dropdown" style="display: none;">
							<div class="popup_body popup_menu">
																																					<a class="popup_menu_item tight" href="?l=schinese&snr=1_60_4__62" onclick="ChangeLanguage( 'schinese' ); return false;">简体中文 (중국어 간체)</a>
																													<a class="popup_menu_item tight" href="?l=tchinese&snr=1_60_4__62" onclick="ChangeLanguage( 'tchinese' ); return false;">繁體中文 (중국어 번체)</a>
																													<a class="popup_menu_item tight" href="?l=japanese&snr=1_60_4__62" onclick="ChangeLanguage( 'japanese' ); return false;">日本語 (일본어)</a>
																																							<a class="popup_menu_item tight" href="?l=thai&snr=1_60_4__62" onclick="ChangeLanguage( 'thai' ); return false;">ไทย (태국어)</a>
																													<a class="popup_menu_item tight" href="?l=bulgarian&snr=1_60_4__62" onclick="ChangeLanguage( 'bulgarian' ); return false;">Български (불가리아어)</a>
																													<a class="popup_menu_item tight" href="?l=czech&snr=1_60_4__62" onclick="ChangeLanguage( 'czech' ); return false;">Čeština (체코어)</a>
																													<a class="popup_menu_item tight" href="?l=danish&snr=1_60_4__62" onclick="ChangeLanguage( 'danish' ); return false;">Dansk (덴마크어)</a>
																													<a class="popup_menu_item tight" href="?l=german&snr=1_60_4__62" onclick="ChangeLanguage( 'german' ); return false;">Deutsch (독일어)</a>
																													<a class="popup_menu_item tight" href="?l=english&snr=1_60_4__62" onclick="ChangeLanguage( 'english' ); return false;">English (영어)</a>
																													<a class="popup_menu_item tight" href="?l=spanish&snr=1_60_4__62" onclick="ChangeLanguage( 'spanish' ); return false;">Español - España (스페인어 - 스페인)</a>
																													<a class="popup_menu_item tight" href="?l=latam&snr=1_60_4__62" onclick="ChangeLanguage( 'latam' ); return false;">Español - Latinoamérica (스페인어 - 중남미)</a>
																													<a class="popup_menu_item tight" href="?l=greek&snr=1_60_4__62" onclick="ChangeLanguage( 'greek' ); return false;">Ελληνικά (그리스어)</a>
																													<a class="popup_menu_item tight" href="?l=french&snr=1_60_4__62" onclick="ChangeLanguage( 'french' ); return false;">Français (프랑스어)</a>
																													<a class="popup_menu_item tight" href="?l=italian&snr=1_60_4__62" onclick="ChangeLanguage( 'italian' ); return false;">Italiano (이탈리아어)</a>
																													<a class="popup_menu_item tight" href="?l=hungarian&snr=1_60_4__62" onclick="ChangeLanguage( 'hungarian' ); return false;">Magyar (헝가리어)</a>
																													<a class="popup_menu_item tight" href="?l=dutch&snr=1_60_4__62" onclick="ChangeLanguage( 'dutch' ); return false;">Nederlands (네덜란드어)</a>
																													<a class="popup_menu_item tight" href="?l=norwegian&snr=1_60_4__62" onclick="ChangeLanguage( 'norwegian' ); return false;">Norsk (노르웨이어)</a>
																													<a class="popup_menu_item tight" href="?l=polish&snr=1_60_4__62" onclick="ChangeLanguage( 'polish' ); return false;">Polski (폴란드어)</a>
																													<a class="popup_menu_item tight" href="?l=portuguese&snr=1_60_4__62" onclick="ChangeLanguage( 'portuguese' ); return false;">Português (포르투갈어 - 포르투갈)</a>
																													<a class="popup_menu_item tight" href="?l=brazilian&snr=1_60_4__62" onclick="ChangeLanguage( 'brazilian' ); return false;">Português - Brasil (포르투갈어 - 브라질)</a>
																													<a class="popup_menu_item tight" href="?l=romanian&snr=1_60_4__62" onclick="ChangeLanguage( 'romanian' ); return false;">Română (루마니아어)</a>
																													<a class="popup_menu_item tight" href="?l=russian&snr=1_60_4__62" onclick="ChangeLanguage( 'russian' ); return false;">Русский (러시아어)</a>
																													<a class="popup_menu_item tight" href="?l=finnish&snr=1_60_4__62" onclick="ChangeLanguage( 'finnish' ); return false;">Suomi (핀란드어)</a>
																													<a class="popup_menu_item tight" href="?l=swedish&snr=1_60_4__62" onclick="ChangeLanguage( 'swedish' ); return false;">Svenska (스웨덴어)</a>
																													<a class="popup_menu_item tight" href="?l=turkish&snr=1_60_4__62" onclick="ChangeLanguage( 'turkish' ); return false;">Türkçe (튀르키예어)</a>
																													<a class="popup_menu_item tight" href="?l=vietnamese&snr=1_60_4__62" onclick="ChangeLanguage( 'vietnamese' ); return false;">Tiếng Việt (베트남어)</a>
																													<a class="popup_menu_item tight" href="?l=ukrainian&snr=1_60_4__62" onclick="ChangeLanguage( 'ukrainian' ); return false;">Українська (우크라이나어)</a>
																									<a class="popup_menu_item tight" href="https://www.valvesoftware.com/en/contact?contact-person=Translation%20Team%20Feedback" target="_blank">번역 관련 문제 보고</a>
							</div>
						</div>
												</div>
					</div>
			</div>
</div>
<div id="responsive_store_nav_ctn"></div><div id="responsive_store_nav_overlay" style="display:none"><div id="responsive_store_nav_overlay_ctn"></div><div id="responsive_store_nav_overlay_bottom"></div></div><div id="responsive_store_search_overlay" style="display:none"></div><div data-cart-banner-spot="1"></div>
		<div class="responsive_page_template_content" id="responsive_page_template_content" data-panel="{&quot;autoFocus&quot;:true}" >

			<script type="text/javascript">
	InitJoinSteamJS( "https://store.steampowered.com/" );
	var g_strRedirectURL = "https:\/\/store.steampowered.com\/join\/completesignup?&snr=1_60_4__62";
	var g_creationSessionID = null;
	var g_bIsSteamChina = false;
	var g_sessionID = "3905d20fc67412557642a5e3";
	var g_rgEUCountries = ["AT","BE","BG","HR","CY","CZ","DK","EE","FI","FR","DE","GR","HU","IE","IT","LV","LT","LU","MT","NL","PL","PT","RO","SK","SI","ES","SE","GB","NO","IS","LI","CH"];

	function BRecaptchaReady() {
		return typeof grecaptcha !== 'undefined' && typeof grecaptcha.enterprise !== 'undefined' && typeof grecaptcha.enterprise.render !== 'undefined';
	}
	function ShowCaptchaOnReady() {
		if ( $J( '#captcha_entry_recaptcha' ) && BRecaptchaReady() )
		{
			RefreshCaptcha();
		}
		else
		{
			setTimeout( function(){ ShowCaptchaOnReady(); }, 30 );
		}
	}
	$J( window ).on('load', function() {
		ShowCaptchaOnReady();
	} );

</script>

<script src="https://recaptcha.net/recaptcha/enterprise.js?render=explicit&hl=ko" async defer></script>

<div class="page_content  steam">
	
	<div class="joinsteam_content_container">
    <div id="error_display" style="<?
    if(isset($this->UarrError)){echo("background-image: none; background-color: rgba(0, 0, 0, 0.5)");}
    else {
        echo("display: none;");
    }
    ?>"><?
    if ((isset($this->UarrError))) {
        foreach ($this->UarrError as $key => $value) {
            echo $value."</br>";
        }
    }?></div>

				<div class="create_account_form_container" id="cart_area">
			<form id="create_account" name="create_account" onsubmit="CreateAccount(); return false;" >
				<input type="hidden" name="lt" id="lt" value="0"/>
				<div id="account_form_box">
					<div class="join_form">
						<div class="section_title">
							개인정보 수정						</div>

						<div class="form_row row_flex">
							<div class="form_area">
								<label for="id">아이디</label>
								<input type="text" maxlength="255" name="id" id="id" readonly value="<? echo $this->arrInfo['u_id']?>"/>
							</div>
						</div>
            </form>
                    <form id="create_account" name="create_account" action="/user/update" method="post">
                    
						<div class="form_row row_flex">
							<div class="form_area">
								<label for="pw">비밀번호</label>
								<input type="password" maxlength="255" name="pw" id="pw" />
							</div>
						</div>
						<div class="form_row row_flex">
							<div class="form_area">
								<label for="pwChk">비밀번호 확인</label>
								<input type="password" maxlength="255" name="pwChk" id="pwChk" />
							</div>
						</div>
						<div class="form_row row_flex">
							<div class="form_area">
								<label for="name">닉네임</label>
								<input type="text" maxlength="255" name="name" id="name" value="<? 
        if (!empty($_POST)) {
            echo $this->arrInput["name"];
        } 
        elseif (!empty($_GET)) {
            echo $this->arrInfo['u_name'];
        }
        ?>"/>
							</div>
						</div>
											<label id="label_agree">
												<input type="checkbox" name="i_agree_check" id="i_agree_check">
												본인은 만 13세 이상이며 <a href="https://store.steampowered.com/subscriber_agreement/" target="_blank">Steem 이용 약관</a> 및 <a href="https://store.steampowered.com/privacy_agreement/" target="_blank">V3lv3 개인정보 보호정책</a>에 무시합니다.											</label>
																			</label>
								</div>
															<div id="priv_and_sub">
								<button type="submit" id="createAccountButton" class="joinsteam_button btn_blue_steamui btn_medium">
									<span>계속</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</form>
					</div>

		<div class="joinsteam_existingaccount_ctn" style="display: none">
			
<div class="section_title">사용 중인 이메일</div>

	<div class="existingaccount_intro">
		이메일 주소가 다른 Steam 계정과 연계되어 있는 것 같습니다.<br><br>기존 계정을 사용할 수 있으며, 로그인 정보를 잊어버린 경우 계정을 복구할 수 있습니다.	</div>

<div class="use_existing_account_ctn">
	<button onclick="GoToExistingAccount( false );" href="https://store.steampowered.com/login" class="use_existing_btn btn_blue_steamui btn_medium"><span>기존 계정 사용하기</span></button>
	<a href="https://help.steampowered.com/ko/wizard/HelpWithLoginInfo?issueid=406">내 계정 복구하기</a>
</div>

<div class="existingaccount_ruler"></div>

<div class="create_newaccount_ctn">
	<div class="create_newaccount_intro">원하는 경우, 새로운 Steam 계정을 별도로 만들 수 있습니다.</div>
	<button onclick="EmailConfirmedVerified( 0 );" class="use_existing_btn btn_grey_steamui btn_medium"><span>계속</span></button>
</div>		</div>

	</div>

		<div id="email_verification_dialog" class="email_verification_container" style="display: none;" >

		<div class="email_verification_header_container">
			<div class="email_verification_subheader">Steam에서 보내드린 이메일을 <span class="insert_verification_email"></span>에서 확인하시고 계정 설정을 완료하세요.</div>
					<div class="LoadingWrapper">
			<div class="LoadingThrobber">
				<div class="Bar Bar1"></div>
				<div class="Bar Bar2"></div>
				<div class="Bar Bar3"></div>
			</div>
							<div class="LoadingText">인증 대기 중...</div>
					</div>
				</div>
		<div class="verification_missingemail_ctn">
			<div class="email_verification_missingemail">이메일을 받지 못하셨나요?</div>
			<div class="email_verification_expand_btn btn_grey_steamui btn_medium" onclick="ToggleEmailVerificationHelp();" ><span>펼치기 <i class="ico16 arrow_down"></i></span></div>
		</div>
		<div class="email_verification_troubleshooting" style="display: none" >
			<div>이메일을 받지 못했다면, 아래의 문제 해결 절차를 따라 주세요.</div>
			<ul>
				<li>본인의 이메일 주소가 '<span class="insert_verification_email"></span>'이 맞는지, 오타가 포함되어 있지는 않은지 확인해 주세요.</li>
				<li>'steampowered.com'에서 온 이메일이 스팸 또는 휴지통 폴더에 있는지 확인해 주세요. 간혹 귀하의 이메일 제공 업체에 의해 스팸 메일로 잘못 식별될 수 있습니다.</li>
				<li>잠시만 기다려 주세요. 간혹 이메일 서버가 느려져 메일 수신에 다소 시간이 걸릴 수 있습니다.</li>
			</ul>
			<div>일부 이메일 서비스 제공 업체는 Steam 이메일을 지원하지 않습니다. 저희가 보내드리는 이메일이 계속해서 수신되지 않는다면, Steam에 다른 이메일 주소를 사용할
 것을 권장합니다. 이메일 주소를 변경하려면 <span class="email_verification_changeemail" onclick="ChangeEmail();">여기를 클릭</span>하세요.</div>
		</div>
	</div>

		<div id="age_gate_dialog" class="age_gate_container" style="display: none;" >
		<div class="age_gate_buttons_container">
			<a id="underAgeButton" class="btn_blue_steamui btn_medium" href="javascript:GetParentalConsentEmail();">
				<span>만 <span class="insert_min_age"></span>세 미만</span>
			</a>
			<a id="overAgeButton" class="btn_blue_steamui btn_medium" href="javascript:StartCreationSession();">
				<span>만 <span class="insert_min_age"></span>세 이상</span>
			</a>
		</div>
		<div class="age_gate_footer_container" style="clear: left;">
			<p>이 정보는 계정 생성에만 사용되며 저장되지는 않습니다</p>
		</div>
	</div>

		<div id="parental_consent_email_dialog" class="parental_consent_email_container" style="display: none;" >
		<div class="parental_consent_email_header_container">
			<div class="parental_consent_email_header">Steam 계정 생성하려면 부모나 보호자로부터 이메일을 통해 동의를 얻어야 합니다.</div>
		</div>
		<div class="parental_consent_email_body_container">
			<br>
			<div class="parental_consent_email_body">Steam에서는 개인정보로 인식되는 데이터 및 고객님의 국가에서 16세 미만의 사용자인 경우 부모의 동의를 필요로 하는 데이터를 활용합니다.</div>
			<div class="form_area">
				<br>
				<label for="parental_email">부모 또는 보호자의 이메일 주소:</label>
				<input type="text" maxlength="255" name="parental_email" id="parental_email" />
			</div>
		</div>
		<br>
		<div id="error_display_parental" style="display: none; clear: left;"></div>
		<div class="parental_consent_email_footer_container" style="clear: left;" >
			<br>
			<p style="float:left;">이 정보는 계정 생성에만 사용되며 저장되지는 않습니다</p>
			<a id="sendParentalConsentRequestButton" class="btnv6_blue_hoverfade btn_medium" href="javascript:StartCreationSessionParentalConsent();" style="float: right;">
				<span>계속</span>
			</a>
		</div>
	</div>

		<div id="parental_consent_requested_dialog" class="parental_consent_requested_container" style="display: none;" >
		<div class="parental_consent_requested_header_container">
			<div class="parental_consent_requested_header">잘 하셨어요! 부모님 또는 보호자 분께 이메일을 보내드렸으며 현재 답장을 기다리고 있습니다.</div>
		</div>
		<div class="parental_consent_requested_body_container">
			<br>
			<div class="parental_consent_requested_body">계정 생성을 계속 진행할 수 있게되면 고객님의 주소<span class="insert_verification_email"></span>로 이메일을 보내드리겠습니다.</div>
		</div>
		<div class="parental_consent_requested_footer_container" style="clear: left;" >
			<br>
			<div style="float:left;">이 창을 닫으셔도 됩니다.</div>
		</div>
	</div>

	<br clear="all">
</div>
<!-- End Main Background -->

<!-- Footer -->

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
</html><!-- End Footer -->
