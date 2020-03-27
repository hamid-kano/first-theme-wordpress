<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name');?></title>
    <meta name="viewport" content="initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css"  type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-1.11.2.min.js"></script>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <meta property="fb:app_id" content="399057257349307" />
    <link rel="apple-touch-icon" sizes="60×60"
        href="<?php bloginfo('template_url');?>/images/touch-icon-iphone-60×60.png?1">
    <link rel="apple-touch-icon" sizes="76×76" href="<?php bloginfo('template_url');?>/images/touch-icon-ipad-76×76.png?1">
    <link rel="apple-touch-icon" sizes="120×120"
        href="<?php bloginfo('template_url');?>/images/touch-icon-iphone-retina-120×120.png?1">
    <link rel="apple-touch-icon" sizes="152×152"
        href="<?php bloginfo('template_url');?>/images/touch-icon-ipad-retina-152×152.png?1">
    <link rel="apple-touch-icon" sizes="180×180"
        href="<?php bloginfo('template_url');?>/images/apple-touch-icon-180×180.png?1">
    <link rel="icon" sizes="192×192" href="<?php bloginfo('template_url');?>/images/touch-icon-192×192.png?1">
    <link rel="icon" sizes="128×128" href="<?php bloginfo('template_url');?>/images/touch-icon-128×128.png?1">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-4797021194760449",
            enable_page_level_ads: true
        });
    </script>

    <meta property="og:title" content="first theme by ararat group" />
    <meta property="og:description" content="first theme by ararat group" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php bloginfo('template_url');?>/" />
    <link rel="canonical" href="<?php bloginfo('template_url');?>/" />
    <meta property="og:image" content="<?php bloginfo('template_url');?>/images/logo-white-social.jpg" />
    <meta property="og:site_name" content="first theme by ararat group" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@raseef22">
    <meta name="twitter:title"content="first theme by ararat group">
    <meta name="twitter:description"content="first theme by ararat group">
    <meta name="twitter:image" content="<?php bloginfo('template_url');?>/images/logo-white-social.jpg">
    <link rel="image_src" href="<?php bloginfo('template_url');?>/images/logo-white-social.jpg" />
    <meta name="title" content="first theme by ararat group"/>
    <meta name="description"content="first theme by ararat group"/>
    <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
    <script>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
    </script>
    <script>
        $(document).ready(function () {
            googletag.cmd.push(function () {
                $('.advertisement:visible').each(function () {
                    googletag.defineSlot($(this).data('adunit'), $(this).data('dimension'), $(this).attr('id')).addService(googletag.pubads());
                });
                googletag.pubads().collapseEmptyDivs(true);
                googletag.pubads().enableSingleRequest();
                googletag.enableServices();
            });

            googletag.cmd.push(function () {
                $('.advertisement:visible').each(function () {
                    googletag.display($(this).attr('id'));
                    $(this).attr('data-loaded', '1');
                });
            });
        });
    </script>
    <script
        type="text/javascript">!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = "https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } }(document, "script", "twitter-wjs");</script>
    <script async defer src="https://platform.instagram.com/en_US/embeds.js"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-46576023-1', 'auto');
        ga('require', 'displayfeatures');

        ga('send', 'pageview');
        //Disable the addition of undefined variables
        window.suggestmeyes_loaded = true;

        var trackOutboundLink = function (url) {
            ga('send', 'event', 'outbound', 'click', url, {
                'transport': 'beacon',
                'hitCallback': function () { document.location = url; }
            });
        }
    </script>
    <script type="text/javascript">
        var _paq = _paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(["setCookieDomain", "*.raseef22.com"]);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        _paq.push(['enableHeartBeatTimer']);
        (function () {
            var u = "https://analytics-cms.whitebeard.me/";
            _paq.push(['setTrackerUrl', u + 'js/']);
            _paq.push(['setSiteId', '19']);
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript'; g.async = true; g.defer = true; g.src = u + 'js/'; s.parentNode.insertBefore(g, s);
        })();
    </script>
    <script>

        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1029614057072712');

        fbq('track', 'PageView');

    </script> <noscript><img height="1" width="1"
            src="https://www.facebook.com/tr?id=1029614057072712&ev=PageView&noscript=1" /></noscript>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-4797021194760449",
            enable_page_level_ads: true
        });
    </script>
    <script async src="//domslc.com/c/raseef22.com.js"></script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <section class="rtl-container">
        <header>
            <div class="desktop-header"> <a href="#" class="donate">ادعموا الصحافة الحرة</a>
                <nav>
                    <ul class="main">
                        <li class="politics"> <a href="<?php bloginfo('home');?>">الرئيسية</a> </li>
                        <li class="logo"> <a href="<?php bloginfo('home');?>"></a> </li>
                         <?php wp_list_pages('title_li=');?>
                    </ul>
                </nav>




                <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="search">
                 <input type="text" value="<?php the_search_query(); ?>" name="s" placeholder="إبحث" />
                  <a href="#"><i class="fa fa-search"></i></a> 
                    </form>
                      
                    




                        <a href="#" class="notification-icon"
                    data-channelid="5"> <i class="fa fa-bell"></i> </a>
            </div>
            <div class="mobile-header">
                <div> <a href="#" class="toggle-menu">
                        <div class="box"> <span></span> </div>
                    </a> <a href="/" class="logo"></a> <a href="#" class="open-search"><i class="fa fa-search"></i></a>
                </div>
                <div class="search-container">
                    <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="search"> 
                    <input type="text" value="<?php the_search_query(); ?>" name="s"
                            placeholder="أدخل كلمة أو جملة للبحث" /> <a href="#">إبحث</a> </form>
                </div> <a href="#" class="notification-icon" data-channelid="5"> <i class="fa fa-bell"></i> </a>
                <div class="menu">
                    <div class="menu-move">
                        <nav>
                            <ul>
                                <li class="politics"> <a href="<?php bloginfo('home');?>">الرئيسية</a> </li>
                                <?php wp_list_pages('title_li=');?>
                            </ul>
                        </nav> <a href="#" class="donate">ادعموا الصحافة الحرة</a> <a href="#"
                            class="donate">UnblockRaseef22</a>
                        <div class="newsletter">
                            <p>هل تريد الاشتراك في نشرتنا الاخباريّة؟</p>
                            <form action="/newsletter" method="post"> <input name="action" type="hidden"
                                    value="subscribe" /> <input name="email" type="email"
                                    placeholder="سجل بريدك الإلكتروني هنا" /> <a href="#" class="subscribe"><i
                                        class="fa fa-angle-left"></i></a>
                                <p class="error hidden">الرجاء إدخال بريد إلكتروني صحيح</p>
                                <p class="success hidden"></p>
                            </form>
                        </div>
                        <ul class="social">
                            <li class="instagram"> <a href="#" class="instagram"
                                    target="_blank"><i class="fab fa-instagram"></i></a> </li>
                            <li class="twitter"> <a href="#" target="_blank"><i
                                        class="fab fa-twitter"></i></a> </li>
                            <li class="facebook"> <a href="#" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        
            