<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<div class="whitebeard">
    <a href="https://www.whitebeard.me/" target="_blank">Website by <img src="<?php bloginfo('template_url');?>/images/whitebeard-logo-white.png" width="100" alt="WhiteBeard">
    </a> 
</div> 

<footer>
            <div class="menu"> <a href="/" class="logo"></a>
                <nav>
                    <div>
                        <div class="top">
                            <ul>
                            <li class="politics"> <a href="<?php bloginfo('home');?>">الرئيسية</a> </li>
                            <?php wp_list_pages('title_li=');?>
                            </ul>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li> <a href="#">من نحن ؟</a> </li>
                                <li> <a href="#">شروط الاستخدام</a> </li>
                                <li> <a href="#">سياسة الخصوصية</a> </li>
                                <li> <a href="#">للمساهمة معنا</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="social">
                        <div class="newsletter">
                            <form action="/newsletter" method="post">
                                <p>هل تريد الاشتراك في نشرتنا الإخباريّة؟</p> <input name="action" type="hidden"
                                    value="subscribe" /> <input name="email" type="email"
                                    placeholder="سجل بريدك الإلكتروني هنا" /> <a href="#" class="subscribe"><i
                                        class="fa fa-angle-left"></i></a>
                                <p class="error hidden">الرجاء إدخال بريد إلكتروني صحيح</p>
                                <p class="success hidden"></p>
                            </form>
                        </div>
                        <ul>
                            <li><a href="#" class="instagram" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li><a href="#" class="twitter" target="_blank"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="facebook" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="rss" target="_blank"><i></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </footer>
    </section>
    <div class="newsletter-popup-overlay">
        <div class="popup-newsletter-subscriptions"> <a class="closepopup"><i class="fa fa-close"></i></a>
            <div class="newsletter-title"> <span>نشرتنا الأسبوعية</span> </div> <img
                src="<?php bloginfo('template_url');?>/images/newsletter_background.png" width="130" height="auto" />
            <div class="info">
                <h2>اشترك في نشرتنا الأسبوعية لتصلك أبرز مواضيعنا</h2>
                <div class="newsletter">
                    <form id="newsletterForm" action="/newsletter" method="post"> <input name="action" type="hidden"
                            value="subscribe" /> <input type="email" placeholder="أدخل بريدك الإلكتروني" name="email"
                            class="email_for_subscription" /> <button class="submit_popupNewsletter">اشترك</button>
                        <p class="ErrorMessage_ error">الرجاء التأكد من البريد الإلكتروني</p>
                        <p class="success hidden"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="notifications-overlay">
        <div class="popup"> <a href="#" class="close" data-days='na' data-event="closed"></a>
            <figure></figure>
            <h3>هل تريد خدمة الخبر السريع؟<br />Push Notifications</h3>
            <p>يمكنك تعديل هذا الإعداد في أي وقت لاحق.</p> <a href="#" class="yes" data-days='2555'
                data-event="yes">نعم</a> <a href="#" class="later" data-days='7' data-event="later">سأفعل لاحقاً</a> <a
                href="#" class="no" data-days='30' data-event="no">كلا</a>
        </div>
    </div> -->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/slick.min.js"></script>
    <script type="text/javascript"
        src="<?php bloginfo('template_url');?>/js/selectize-0.12.4/js/standalone/selectize.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-ias.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/is-in-viewport/isInViewport.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/notifications.js?1"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/main.js?84"></script>
    <div id="fb-root"></div>
    <script async defer src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script> <a href="#"
        class="to-top hide"><i class="fa fa-angle-up"></i></a>
    <div>
        <div id="66616072-1by1" class="advertisement" data-adunit="/66616072/1by1" data-dimension="[1, 1]"></div>
    </div> <noscript id="deferred-styles">       
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/css/combined.css" /> </noscript>
    <script>
        var loadDeferredStyles = function () {
            var addStylesNode = document.getElementById("deferred-styles");
            var replacement = document.createElement("div");
            replacement.innerHTML = addStylesNode.textContent;
            document.body.appendChild(replacement);
            addStylesNode.parentElement.removeChild(addStylesNode);
        };
        var raf = requestAnimationFrame || mozRequestAnimationFrame ||
            webkitRequestAnimationFrame || msRequestAnimationFrame;
        if (raf) raf(function () { window.setTimeout(loadDeferredStyles, 0); });
        else window.addEventListener('load', loadDeferredStyles);
    </script>
</body>
</html><!-- MISS 6 -->