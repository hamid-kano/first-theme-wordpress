function isMobile() {
    if($(window).width() <= 960) return true;
    else return false;
}

function inlineComponent(div, position){
    if(div.length > 0 ) {
        var component = div.clone();
        var put_there = div.parents(".text").find(" > p:eq(" + position + ")");
        if(put_there.length == 0) div.parents(".text").append(component);
        else put_there.after(component);
        div.remove();
    }
}

function validEmail(email) {
    return  /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(email);
}

function runRelatedArticles(article_id){
    var article = $('.article-page article[data-articleid=' + article_id + ']');
    if(article.find('.text .relatedArticles').length > 0){
        inlineComponent(article.find('.text .relatedArticles'), 8);
        article.find('.relatedArticles .item').each(function() {
            var figure = $(this).find('figure');
            var src = $(this).find('img').attr('src');
            if(src != '') figure.css('background-image', 'url("' + $(this).find('img').attr('src') + '/r/340")').find('img').remove();
            else figure.addClass('placeholder').find('img').remove();
            if(article.find('.switch-lang').length > 0){
                var related_id = article.find('.switch-lang').data('articleid');
                if(related_id == $(this).data('articleid')) $(this).remove();
            }
        });
        if(article.find('.relatedArticles .item').length == 0) article.find('.relatedArticles').remove();
    }
}

function runPostquotes(article_id){
    var article = $('.article-page article[data-articleid=' + article_id + ']');
    if(article.find('.text .postquote').length > 0){
        var postquote = article.find('.text .postquote');
        postquote.each(function() {
            var quote = $(this);
            quote.wrap('<div class="postquotes"></div>');
            var text = quote.text().replace(/\s\s+|'|"|:/g, ' ');
            (quote).append('<div class="share"><a href="https://www.facebook.com/sharer/sharer.php?u=' + window.location.href + '&display=popup&ref=plugin&src=quote&quote=' + text + '" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://www.twitter.com/intent/tweet?url=' + window.location.href + '&via=Raseef22&text=' + text + '" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>');
        });
    }
}

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function UnblockRaseefArticleView(){
    $('.popup-overlay.unblock_raseef22 .popup div.links a.close').on('click',function(e){
        e.preventDefault();
        $('.thisCarousel .carousel_unblockRaseef').slick('destroy');
        $('.unblock_raseef22 div.thisCarousel').empty('');
        $('.popup-overlay').hide();
        $('.category-page.unblock_raseef').removeClass('fixed');
    });
    $('.unblock_raseef_article_details').on('click',function(e){
        e.preventDefault();
        if($('.unblock_raseef22.popup-overlay').is(':visible') == true) {return;}
        var id = $(this).data('id');
        var title = $(this).data('title');
        var externalUrl = $(this).data('externalurl');
        var html = $(this).find('.copied_data').html();
        $('.unblock_raseef22 div.thisCarousel').append(html);
        if($(this).hasClass('featured')){
            if(externalUrl != '') {
                $('.unblock_raseef22 .readmore').attr('href',externalUrl);
                $('.unblock_raseef22 .readmore').removeClass('hidden');
            }else{
                $('.unblock_raseef22 .readmore').addClass('hidden');
            }
        }else{
            $('.unblock_raseef22 .readmore').attr('href',url);
            $('.unblock_raseef22 .readmore').removeClass('hidden');
        }
        $('.unblock_raseef22.popup-overlay .socials a.facebook').attr('href','http://www.facebook.com/sharer.php?u=https://raseef22.com/unblock-raseef22/'+id);
        $('.unblock_raseef22.popup-overlay .socials a.twitter').attr('href','https://www.twitter.com/intent/tweet?url=https://raseef22.com/unblock-raseef22/'+id+'&via=Raseef22&text='+title);
        $('.unblock_raseef22.popup-overlay .socials a.mail').attr('href','mailto:?subject='+title+'&body=https://raseef22.com/unblock-raseef22/'+id);
        $('.unblock_raseef22.popup-overlay .socials a.whatsapp').attr('href','whatsapp://send?text='+title+'&https://raseef22.com/unblock-raseef22/'+id);
        $('.unblock_raseef22.popup-overlay').show();
        $('.thisCarousel .carousel_unblockRaseef').slick();
        $('.category-page.unblock_raseef').addClass('fixed');
        // $('.carousel_unblockRaseef').slick('init');
    });
}

function eraseCookie(name) {
    setCookie(name, "", -1);
}

$(document).ready(function() {

    if($(".category-page.unblock_raseef").length > 0) {
        if(!isMobile()){
            var intro_height = $('.category-page.unblock_raseef div.main-container .introduction').height();
            var window_height = $( window ).height();
            var wrapper_body_height = window_height - intro_height - 150;
            $('.wrapper-body').css('height',wrapper_body_height+'px');
            $('.wrapper-body').css('max-height',wrapper_body_height+'px');
            $('.category-page.unblock_raseef div.main-container div.div-wrapper.right ul').css('height',wrapper_body_height+'px');
            $('body').css('overflow','hidden');
        }

        if($(".carousel_unblockRaseef2").length > 0) {
            $(".featuredVideos").each(function (index) {
                var video = $(this).find('.inlineVideo').clone();
                $(this).find('.inlineVideo').remove();
                $(this).find('.videoPlay').append(video);
            });
            $('.carousel_unblockRaseef2').slick();
        }

        UnblockRaseefArticleView();
        var url = window.location.href;
        var id = url.substring(url.lastIndexOf('/') + 1);
        if($.isNumeric(id))  $('.unblock_raseef_article_details[data-id="'+id+'"]').get(0).click();

    }

    if($(".article-page").length > 0) {
        if (typeof readCookie('wb_rx') === 'undefined' || typeof readCookie('wb_rx') == null || readCookie('wb_rx') == null) {
            setCookie("wb_rx", 1, 365);
        } else {
            var articlesRead = parseInt(readCookie("wb_rx"));
            if(articlesRead < 3) {
                setCookie("wb_rx", articlesRead + 1, 365);
                fbq('track', 'ViewContent', {
                    content_ids: '1',
                    content_type: 'Page View (' + readCookie('wb_rx') + ' articles)'
                });
            }
        }
    }

    if(readCookie('banner-closed')) $('.donate-banner').remove();
    else $('.donate-banner').show();

    $('.donate-banner .close').click(function(e) {
        e.preventDefault();
        setCookie('banner-closed', 1, 180);
        $('.donate-banner').addClass('hide');
    });

    if($('.carousel').length > 0) {
        $('.carousel').each(function() {
            if($(this).hasClass('stories') || $(this).hasClass('contributors-carousel')){
                if (isMobile()) $(this).slick();
            }
            else $(this).slick();
        });
    }

    $('.navigate-carousel a').click(function(e) {
        e.preventDefault();
        if($(this).hasClass('disabled')) return false;
        var class_name = $(this).attr('class');
        var slick_navigator = $('.customised-navigation .slick-' + class_name);
        slick_navigator.trigger('click');
    });

    $('header .mobile-header .toggle-menu').click(function(e) {
        e.preventDefault();
        $('body').toggleClass('no-overflow');
        $('.mobile-header .open-search').removeClass('active');
        $('.mobile-header .search-container').removeClass('active');
        $('.mobile-header .toggle-menu').toggleClass('active');
        $('.mobile-header .menu').toggleClass('active');
    });

    $('.mobile-header > div .open-search').click(function(e) {
        e.preventDefault();
        $('body').removeClass('no-overflow');
        $('.mobile-header .toggle-menu').removeClass('active');
        $('.mobile-header .menu').removeClass('active');
        $('.mobile-header .open-search').toggleClass('active');
        $('.mobile-header .search-container').toggleClass('active');
        $('.mobile-header .search-container form.search input[type=text]').focus();
    });

    // $(".stories li a video").on("mouseenter", function(){
    //     $(this).trigger('play');
    // }).on("mouseleave", function(){
    //     $(this).trigger('pause');
    // });
    
    if(isMobile()) {
        $('.countries-page a.toggle-list').click(function(e) {
            e.preventDefault();
            $('.countries-page .countries-list ul').slideToggle(500);
            $(this).toggleClass('active');
        });

        // $(".stories li a video").each(function() {
        //     $(this).trigger('play');
        // });
        // $('.countries-page .countries-list ul li a').click(function (e) {
        //     e.preventDefault();
        //     $('.countries-page a.toggle-list').html($(this).html()).removeClass('active');
        //     $('.countries-page .countries-list ul').slideUp(500);
        //     $('.countries-page .countries-list ul li').removeClass('active');
        //     $(this).parent().addClass('active');
        //     $('html, body').animate({scrollTop: $(".main-container").offset().top}, 500);
        // });

        // inlineComponent($(".article-page article .text .mostread-component"), 10);
    }
        // else{
        //     $(".stories li a video").on("mouseenter", function(){
        //         $(this).trigger('play');
        //     }).on("mouseleave", function(){
        //         $(this).trigger('pause');
        //     });
        // }

    // inlineComponent($(".article-page article .text .quotes"), 3);

    if($('.homepage .latest-news').length > 0 && !isMobile()){
        var latest_news = $('.homepage .latest-news');
        var latest_news_position = latest_news.offset().top + 120;
        var limit = $('footer').offset().top - latest_news.height() + 100;
        $(window).scroll(function() {
            if($(window).scrollTop() >= latest_news_position && $(window).scrollTop() < limit){
                latest_news.addClass('fixed').find('.content').css('width', latest_news.width());
            }
            else latest_news.removeClass('fixed').find('.content').css('width', 'auto');
        });
    }

    if ($(".ias-list").length > 0) {
        var ias = jQuery.ias({
            container: '.ias-list',
            item: '.ias-item',
            pagination: '.ias-list .ias-pagination',
            next: '.ias-list .ias-pagination .next',
            negativeMargin: 500,
            delay: 0
        });
        ias.on('rendered', function (items) {
            reloadAds();
            if($(".unblock_raseef").length > 0) UnblockRaseefArticleView();
        });
        if($(".unblock_raseef").length > 0) {
            ias.extension(new IASSpinnerExtension({
                html: '<div class="ias-spinner infinite-item" style="padding:30px 0;width:100%;text-align: center;color:#DE673D;font-size:16px;"><i class="fa fa-spinner fa-spin fa-3x fa-fw margin-bottom"></i></div>'
            }));
        }else{
            ias.extension(new IASSpinnerExtension());
        }

    }

    if ($('.authors-page select').length > 0) {
        var select = $('.authors-page select').selectize({
            onChange: function (value) {
                window.location = value;
            }
        });
    }

    $(".poll .choice").on("click", function (e) {
        $('.poll .choice').removeClass('active');
        $('.poll .choice input[type=checkbox]').prop('checked', false);
        $(this).addClass('active');
        $(this).find('input[type=checkbox]').prop('checked', true);
    });

    $(".poll input[type=submit]").on("click", function (e) {
        e.preventDefault();
        var form = $(this).parents('form');
        form.children('p').html('Ø¬Ø§Ø±ÙŠ Ø§Ù„ØªØµÙˆÙŠØª...');
        $.post(form.attr('action'), form.serialize(), function(data) {
            if (data.error === true) {
                var message = '';
                if(data.message == 'You already voted in this poll.') message = 'Ù„Ù‚Ø¯ ØµÙˆÙ‘Øª Ù…Ø³Ø¨Ù‚Ø§Ù‹ Ø¹Ù„Ù‰ Ù‡Ø°Ø§ Ø§Ù„Ø¥Ø³ØªÙØªØ§Ø¡';
                else message = data.message;
                form.children('p.error').html(message);
            } else {
                form.children("input[type=submit]").hide();
                form.children(".choice").hide();
                form.children(".results").html(data.html);
                form.children('p.error').html('').remove();
            }
        }, 'json');
    });

    if ($(".poll").length > 0 && $(".choiceSelect").length == 0) {
        $(".poll .choiceResult .bar").each(function() {
            $(this).animate({width: $(this).data('value')});
        });
    }

    if($('.liveBlog').length > 0){
        $('.liveBlog .messages .entry').each(function() {
            var text = $(this).find(".message").text().replace(/\s\s+/g, ' ');
            $(this).find('.date').append('<div class="share"><a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=' + window.location.href + '&display=popup&ref=plugin&src=quote&quote=' + text + '" target="_blank"><i class="fa fa-facebook"></i></a><a class="twitter" href="https://www.twitter.com/intent/tweet?url=' + window.location.href + '&via=Raseef22&text=' + text + '" target="_blank"><i class="fa fa-twitter"></i></a></div>');
        });
        if(!isMobile()){
            $(document).on('mouseenter', '.liveBlog .messages .entry', function(e) {
                $(this).find('.date .share').css('opacity', 1);
            });
            $(document).on('mouseleave', '.liveBlog .messages .entry', function(e) {
                $(this).find('.date .share').css('opacity', 0);
            });
        }
    }

    $('.video-page .article-content a.expand').click(function(e) {
        e.preventDefault();
        $('.video-page .article-content').toggleClass('collapsed');
    });

    $('header form.search a').click(function(e) {
        e.preventDefault();
        var form = $(this).parent('form');
        if(!form.hasClass('expand') && !isMobile()){
            form.addClass('expand');
            form.find('input[type=text]').focus();
        }
        else {
            var input = form.find('input[type=text]');
            if (input.val() == '') {
                input.addClass('error');
                return false;
            }
            form.submit();
        }
    });

    $("header form.search input[type=text]").on("keypress", function(e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            $(this).parent('form').find('a').trigger('click');
        }
    });

    $('.newsletter form a, .newsletter-popup-overlay .newsletter form .submit_popupNewsletter').click(function(e) {
        e.preventDefault();
        var form = $(this).parent('form');
        var input = form.find('input[type=email]');
        $(form.find('p.error')).fadeOut(250);
        $(form.find('p.success')).fadeOut(250);
        if(!validEmail(input.val())){
            input.addClass('error');
            $(form.find('p.error')).fadeIn(250);
            return false;
        }
        input.removeClass('error');
        $.post(form.attr('action'), form.serialize(), function(data) {
            if (data.error === true) form.find('p.error').fadeIn(250).html(data.message);
            else {
                form.find('p.success').fadeIn(250).html('Ø´ÙƒØ±Ø§Ù‹ Ù„Ø§Ø´ØªØ±Ø§ÙƒÙƒ ÙÙŠ Ù†Ø´Ø±ØªÙ†Ø§ Ø§Ù„Ø¥Ù„ÙƒØªØ±ÙˆÙ†ÙŠØ©');
                if($('.newsletter-popup-overlay').length > 0) $('.newsletter-popup-overlay div.info button i').remove();
                fbq('track', 'Subscribe');
            }
        }, 'json');
    });

    $(".newsletter form input[type=email]").on("keypress", function(e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            $('.newsletter form a').trigger('click');
        }
    });

    $('.donate-page form .items li a').click(function(e) {
        e.preventDefault();
        $(this).parent().siblings().find('input[type=radio]').prop('checked', false);
        $(this).siblings('input[type=radio]').prop('checked', true);
        $(this).parent().siblings().find('a').removeClass('active');
        $(this).addClass('active');
    });

    $('.donate-page form .amount li a').click(function(e) {
        e.preventDefault();
        $(this).parent().siblings().find('input[type=number]').val('');
        $(this).parent().siblings().find('input[type=radio]').prop('checked', false);
        $(this).siblings('input[type=radio]').prop('checked', true);
        $(this).parent().siblings().find('a').removeClass('active');
        $(this).addClass('active');
        $('.donate-page form .step-2').fadeIn();
    });

    $('.amount li input[type=number]').click(function(e) {
        $(this).parent().siblings().find('input[type=radio]').prop('checked', false);
        $(this).parent().siblings().find('a').removeClass('active');
        $('.donate-page form .step-2').fadeIn();
    });

    $('input[type=number]').keydown(function(event) {
        if (event.keyCode == 69 || event.keyCode == 189 || event.keyCode == 109 || event.keyCode == 187 || event.keyCode == 107 || event.keyCode == 110 || event.keyCode == 190) return false;
    });

    $('.donate-page form ul.payment-method li').click(function(e) {
        e.preventDefault();
        var this_item = $(this);
        this_item.siblings().removeClass('active');
        this_item.addClass('active');
        this_item.siblings().find('input[type=radio]').prop('checked', false);
        this_item.find('input[type=radio]').prop('checked', true);
        var selected = this_item.find('input[type=radio]').val();
        if(selected === 'card'){
            $('.form-footer').find('p.donation-info').hide();
            $('.form-footer a.submit').show();
        }
            else{
            $('.form-footer a.submit').hide();
            if(selected === 'paypal'){
                $('.form-footer').find('p.donation-info').hide();
                window.location = 'https://www.paypal.me/raseef22';
            }
            else $('.form-footer p.donation-info').show();
            }
    });

    $('.donate-page form ul.payment-method li a.mail').click(function(e) {
        e.stopPropagation();
    });

    $('.donate-page form a.submit').click(function(e) {
        e.preventDefault();
        var this_button = $(this);
        if(this_button.hasClass('disabled')) return false;
        var form = this_button.parents('form');
        var check = true;
        form.find('p.required').fadeOut();
        if(!form.find('.amount input[type=radio]').is(":checked") && form.find('.amount li input[type=number]').val() == ''){
            form.find('p.amount-required').fadeIn();
            check = false;
        }
        if(form.find('input[name=email]').val() === '' || !validEmail(form.find('input[type=email]').val())){
            form.find('p.email-required').fadeIn();
            check = false;
        }
        if(form.find('select').val() === ''){
            form.find('p.country-required').fadeIn();
            check = false;
        }
        if(form.find('input[name=name]').val() === ''){
            form.find('p.name-required').fadeIn();
            check = false;
        }
        // if(form.find("ul.payment-method li input[type='radio']:checked").val() === 'card'){
        //     form.find('ul.payment-method li input').each(function(){
        //         if($(this).val() === ''){
        //             form.find('p.card-required').fadeIn();
        //             check = false;
        //         }
        //     });
        // }
        if(!check){
            $('html, body').animate({scrollTop: form.offset().top + 90}, 500);
            return false;
        }

        this_button.addClass('disabled');
        $.post(form.attr('action'), form.serialize(), function(data) {
            if (!data.error){
                Checkout.configure({
                    merchant: '10729999',
                    order: {
                        amount: function () {
                            return data.amount;
                        },
                        currency: 'USD',
                        description: 'Donation',
                        id: data.order_id
                    },
                    interaction: {
                        merchant: {
                            name: 'Raseef 22',
                            address: {
                                line1: '',
                                line2: ''
                            },
                            email: '',
                            phone: '',
                            logo: ''
                        }
                    },
                    session: {
                        id: data.session_id
                    }
                });
            Checkout.showPaymentPage();
        }
            else{
                fail_message = $('.donate-page .col-left .payment-fail');
                fail_message.addClass('show');
                $('html, body').animate({scrollTop: fail_message.offset().top - 20}, 500);
                this_button.removeClass('disabled');
            }
        }, 'json').fail(function(e){});
    });

    $(document).on('click', '.article-page .col-left a.show-comments', function(e) {
        e.preventDefault();
        $(this).siblings('.fb-comments-container').slideToggle();
    });

    // Load more articles in article page
    if ($(".article-page").length > 0) {
        var article_id = $('.article-page').find('article.main').data('articleid');
        runRelatedArticles(article_id);
        runPostquotes(article_id);

        var stateWorker = true;
        var currentArticle = {id: article_id, title: document.title, url: window.location.href };
        $(window).on('popstate', function(e) {
            var position = 0;
            if($('article.main.back-to').length > 0) {
                var article = $('article.main.back-to');
                position = article.offset().top - 80;
                if($('article.main.back-to').length == 1) {
                    $('article.main').removeClass('back-to');
                }
            }
            stateWorker = false;
            $('html, body').animate({scrollTop: position}, 500, function() {
                stateWorker = true;
            });
        });

        $(window).scroll(function() {
            $("article.main:in-viewport:last").each(function() {
                $('article.main').removeClass('back-to');
                $(this).parent('.main-container').prevAll('.main-container').first().find('article.main').addClass('back-to');
                if (stateWorker === false) return;
                var article_id = $(this).data('articleid');
                if(currentArticle.id !== article_id){
                    var slug = $(this).attr('data-slug');
                    var title = $(this).find(".main-figure h1").text();
                    var main_image_url = $(this).data("mainimage");
                    var fulltitle = title + ' - Ø±ØµÙŠÙ 22';

                    currentArticle = {id: article_id, title: fulltitle, url: '/article/' + article_id + '-' + slug};
                    history.pushState({id: currentArticle.id}, currentArticle.title, currentArticle.url);
                    document.title = fulltitle;
                    var twitter_account = '';
                    if($(this).parent('.main-container').hasClass('english-article')) twitter_account = 'Raseef22En';
                    else twitter_account = 'Raseef22';
                    $('.article-page ul.social li a.facebook').attr('href', 'http://www.facebook.com/sharer.php?u=https://raseef22.com/article/' + article_id);
                    $('.article-page ul.social li a.twitter').attr('href', 'https://www.twitter.com/intent/tweet?url=https://raseef22.com/article/' + article_id + '&via=' + twitter_account + '&text=' + title);
                    $('.article-page ul.social li a.mail').attr('href', 'mailto:?subject=' + title + '&body=https://raseef22.com/article/' + article_id);
                    $('.article-page ul.social li a.whatsapp').attr('href', 'whatsapp://send?text=' + title + '%20-%20https://raseef22.com/article/' + article_id);

                    /* Analytics */
                    if (typeof (_em) !== 'undefined') _em('send', 'ajax', '');
                    var categoryName = $(this).attr('data-categoryname');
                    var categoryId = $(this).attr('data-categoryid');
                    var parentName = $(this).attr('data-parentname');
                    var typeId = $(this).data('typeid');
                    if (categoryName !== '') {
                        ga('send', 'pageview', {
                            title: title,
                            dimension1: categoryName,
                            dimension2: parentName
                        });
                        if (typeof(_paq) !== 'undefined') {
                            _paq.push(['trackPageView', title, { dimension1: categoryId, dimension2: parentName, dimension3: 0, dimension4: typeId}]);
                        }
                        $.post('/cmsapi/articles/track',{articleId: currentArticle.id}, function(data) { }, 'json');
                    }
                }
            });
            if($(".next-article").length > 0) {
                var articles = $(".next-article").data("articles");
                var offsetCalc = $(".next-article").offset().top - $(window).scrollTop() - 600;
                var loading_id = $("article .loading-article").data('articleid');
                if ((offsetCalc <= 1500) && (articles.length > 0)) {
                    var pagination= $('.next-article').data('pagination');
                    $(".next-article").remove();
                    var nextArticleId = articles[0];
                    var articlesCount = $(".article-page .main-container").length;
                    if(nextArticleId != '') {
                        $.get("/article/" + nextArticleId, {pagination: articlesCount + 1}, function (data) {
                            var newArticleFull = $(data);
                            var newArticle = newArticleFull.find(".article-page .main-container");
                            $('ul.social', newArticle).remove();
                            // var localSignalContainer = newArticleFull.filter("#signal");
                            // if (localSignalContainer.length > 0) {
                            //     signal = localSignalContainer.data("signal");
                            // }

                            var selectors = $(newArticle).find("div.advertisement[data-loaded!='1']");
                            selectors.each(function (index,value) {
                                id_ = $(this).attr('id');
                                $(this).attr("id",id_+"_"+loading_id);
                            });

                            // var related = $(newArticle).find(".related_topics").clone();
                            // $(newArticle).find(".related_topics").remove();
                            // var putThere = $(newArticle).find(".main_column .text").children('p:eq(3)');
                            // if (putThere.length == 0) putThere = $(newArticle).find(".main_column .text p:last");
                            // putThere.after(related);

                            $(".page").append(newArticle);
                            // $(document).trigger("ajaxLoadMore");
                            FB.XFBML.parse();
                            runRelatedArticles(nextArticleId);
                            runPostquotes(nextArticleId);
                            $("article .loading-article[data-articleid='" + loading_id + "']").remove();
                            articles.splice(0, 1);
                            if (articles.length == 0) {
                                $("article .loading-article").remove();
                            }
                            $(".next-article").data("articles", articles);
                            reloadAds();
                        });
                    }
                }
            }
        });
    }

    $(window).scroll(function(e) {
        var reach = $(window).scrollTop();
        if(reach > 500) $("a.to-top").removeClass('hide');
        else $("a.to-top").addClass('hide');
    });

    $(document).on("click", "a.to-top", function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop:$("header").offset().top
        }, 500);
    });

    if($(".outAdsInArticle").length > 0) {
        var script = document.createElement('script');
        script.setAttribute('src', 'https://cdn.wickplayer.pro/player/thewickfirm.js');
        script.setAttribute('type', 'text/javascript');
        script.async = true;
        document.getElementsByTagName('head')[0].appendChild(script);
        (function(){var i='D7sAYgtrXjGUXf4p9EMhnLH9FA-7Aq26RTHJ5nM494ElqcY2Vbnl';document.getElementsByClassName('outAdsInArticle')[0].insertAdjacentHTML('beforeend', '<div id="'+i+'"></div>');(wickPro=window.wickPro||[]).push(i);})();
    }

    $('header .notification-icon').click(function(e) {
        e.preventDefault();
        var channel_id = $(this).data('channelid');
        if(!$(this).hasClass('active')) subscribeUserToPush(channel_id);
        else unsubscribeUser(channel_id);
    });

    $('.notifications-overlay .popup a.yes, .notifications-overlay .popup a.later, .notifications-overlay .popup a.no, .notifications-overlay .popup .close').click(function(e) {
        e.preventDefault();
        if($(this).hasClass('yes')) notificationsSubscribe(5);
        var days = $(this).data('days');
        if(days !== 'na') setCookie('raseef-notificationspopup-close', 1, days);
        var event = $(this).data('event');
        ga('send', 'event', 'notifications-popup', event)
        _paq.push(['trackEvent', 'notifications-popup', event]);
        $('.notifications-overlay').fadeOut();
    });

    if($('#audio_player').length > 0){
        var player = document.getElementById("audio_player");
        player.addEventListener("play", function (){
            var articleid = $('#audio_player').data('articleid');
            ga('send', 'event', 'podcast-play', articleid);
        });
    }
});

$(window).load(function() {
    var newsletter_hash = window.location.hash.substr(1);
    if (!readCookie('raseef-notificationspopup-close') && ("Notification" in window) && (newsletter_hash === '' || newsletter_hash !== 'newsletter')) {
        $('.notifications-overlay').show();
    }
    if(newsletter_hash === 'newsletter'){
        $('.newsletter-popup-overlay').fadeIn();
    }

    $('.closepopup').on('click', function (e) {
        e.preventDefault();
        $('.newsletter-popup-overlay').fadeOut(500);
    });
});

function reloadAds(){
    googletag.cmd.push(function () {
        $('.advertisement[data-loaded!="1"]:visible').each(function () {
            googletag.defineSlot($(this).data('adunit'), $(this).data('dimension'), $(this).attr('id')).addService(googletag.pubads());
        });
    });

    googletag.cmd.push(function () {
        $('.advertisement[data-loaded!="1"]:visible').each(function () {
            googletag.display($(this).attr('id'));
            $(this).attr('data-loaded', '1');
        });
    });
}