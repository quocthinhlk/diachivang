jQuery(document).ready(function ($) {
    "use strict";

    var masonaryGrid = null;

    /*tab ajax*/
    $('.barta-tab-cat ul li').on('click', 'span', function () {

        var _this = $(this),
            container = _this.parents('.rtin-tab-container'),
            dataWrapper = _this.parents('.barta-tab-cat'),
            catID = _this.attr("data-tab-cat"),
            wtgetData = dataWrapper.data("settings"),
            template = dataWrapper.data("template"),
            contentWrap = container.find('.rt-tab-news-holder'),
            contentWrapHeight = contentWrap.outerHeight(),
            ul = _this.parents('ul');
        ul.find('li').removeClass('active');
        _this.parent().addClass('active');

        $.ajax({
            url: ThemeObj.ajaxURL,
            data: {catID: catID, action: 'barta_selected_cat', data: wtgetData, template: template},
            type: 'POST',
            beforeSend: function () {
                contentWrap.find('.loading').fadeIn('slow');
            },
            success: function (resp) {
                contentWrap.animate({
                    opacity: 0
                }, 1000, function () {
                    if (resp.remaining) {
                        ul.find('.more-link').show();
                        ul.find('.more-link a').attr('href', resp.cat_link);
                    } else {
                        ul.find('.more-link').hide();
                        ul.find('.more-link a').attr('href', "");
                    }

                    contentWrap.find('.loading').fadeOut('slow');
                    contentWrap.html(resp.html);
                    contentWrap.css({opacity: 1});
                });
            },
            error: function (e) {
                console.log(e);
            }
        });

    });
	
	
   $('.br-filter-form').on('submit', function(e){
		e.preventDefault();
			
		var catIDs = [];
		$.each($("input[name='post_cat']:checked"), function(){
			catIDs.push($(this).val());
		});		

		var contentWrap = $('.site-content-wrap');
		var counter = $('body div.count-post span');

        $.ajax({
            url: ThemeObj.ajaxURL,
            data: { catIDs: catIDs, action:'br_cat_selected_cat' },
            
			type: 'POST',
            beforeSend: function () {
                contentWrap.find('.loading').fadeIn('slow');
            },
            success: function (resp) {
                contentWrap.animate({
                    opacity: 0
                }, 1000, function () {
                    contentWrap.find('.loading').fadeOut('slow');
                    contentWrap.html(resp.html);
                    
					
                    contentWrap.css({opacity: 1});
                });
				counter.html(resp.dd);
				console.log(resp.dd);				
            },
            error: function (e) {
                console.log(e);
            }
        }); 
		
    });

	$('.filter-wrapper').on( 'click', '.filter-title span', function(){
		$('.search-items input.boxes').prop("checked", false); 
	});

    /*Load More JS*/
    var loadMoreData = {
        canBeLoaded: true,
        bottomOffset: 200,
        hasMorePost: true,
        paged: 1,
    };

    $('.barta_loadmore').click(function () {
        var data = {
            action: 'barta_loadmore',
            paged: loadMoreData.paged,
            layout_2: $('.blog-layout-2').data("layout"),
            layout_3: $('.blog-layout-3').data("layout"),
            layout_4: $('.blog-layout-4-masonry').data("layout"),
            layout_5: $('.blog-layout-5-masonry').data("layout"),

            /*termId: $('.blog-layout').parents('.blog-layouts').data('termid') || 0,
            taxonomy: $('.blog-layout').parents('.blog-layouts').data('taxonomy') || null,*/

            termId: $('.blog-layouts').data('termid') || 0,
            taxonomy: $('.blog-layouts').data('taxonomy') || null,

        }
        console.log(data);

        if (loadMoreData.canBeLoaded) {

            $.ajax({
                url: ThemeObj.ajaxURL,
                data: data,
                type: 'POST',
                beforeSend: function (xhr) {
                    loadMoreData.canBeLoaded = false;
                    $('.barta_loadmore').text('Loading...');
                },
                success: function (data) {
                    console.log(data);
                    loadMoreData.paged = data.paged;

                    if (data.html) {
                        if (masonaryGrid) {
                            masonaryGrid.append(data.html)
                                .masonry('appended', data.html)
                                .masonry('reloadItems')
                                .masonry();
                            setTimeout(function () {
                                masonaryGrid.masonry();
                            }, 300);
                        } else {
                            $(".barta-loadmore").append(data.html);
                        }
                    }

                    if (data.more) {
                        $('.barta_loadmore').text('More posts...');
                        loadMoreData.canBeLoaded = true;
                        loadMoreData.hasMorePost = false;
                    } // TODO Nedd to do for else condition
                }
            });
        }
    });

    /*Infinity Scroll JS*/
    var infinityData = {
        canBeLoaded: true,
        bottomOffset: 200,
        hasMorePost: true,
        paged: 1,
        scrollWrapper: $('.barta-infinity-scroll') || false
    };

    if (infinityData.scrollWrapper.length) {
        $(document).on('scroll load', function () {
            var data = {
                    'action': 'barta_infinity_loadmore',
                    'paged': infinityData.paged,
                    'layout_2': $('.blog-layout-2').data("layout"),
                    'layout_3': $('.blog-layout-3').data("layout"),
                    'layout_4': $('.blog-layout-4-masonry').data("layout"),
                    'layout_5': $('.blog-layout-5-masonry').data("layout"),
                    'is_masonry': $('.blog-layout-2.blog-layout-4-masonry').length,

                    termId: $('.blog-layouts').data('termid') || 0,
                    taxonomy: $('.blog-layouts').data('taxonomy') || null,

                },
                scrollPoint = $(document).scrollTop(),
                devHeight = infinityData.scrollWrapper.offset().top + infinityData.scrollWrapper.outerHeight() - 650;

            if (scrollPoint >= devHeight) {

                console.log('Scroll trigger');

                if (infinityData.canBeLoaded) {
                    console.log(data);
                    $.ajax({
                        url: ThemeObj.ajaxURL,
                        data: data,
                        type: 'POST',
                        beforeSend: function (xhr) {
                            infinityData.canBeLoaded = false;
                        },
                        success: function (data) {
                            infinityData.paged = data.paged;
                            if (data.html) {
                                if (masonaryGrid) {
                                    masonaryGrid.append(data.html)
                                        .masonry('appended', data.html)
                                        .masonry('reloadItems')
                                        .masonry();
                                } else {
                                    $(".barta-infinity-scroll").append(data.html);
                                }
                            }
                            if (data.more) {
                                infinityData.canBeLoaded = true;
                                infinityData.hasMorePost = false;
                            } // TODO Need to do for else condition
                        }
                    });
                }
            }
        });
    }

    //lazy load
    var img = $('img');
    if (img.hasClass('rt-lazy')) {
        var myLazyLoad = new LazyLoad({
            elements_selector: "img.rt-lazy",
            load_delay: 500
        });
    }

    /* Scroll to top */
    $('.scrollToTop').on('click', function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

    /* Fixing for hover effect at IOS */
    $('*').on('touchstart', function () {
        $(this).trigger('hover');
    }).on('touchend', function () {
        $(this).trigger('hover');
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
            $("body").addClass("not-top");
            $("body").removeClass("top");
        } else {
            $('.scrollToTop').fadeOut();
            $("body").addClass("top");
            $("body").removeClass("not-top");
        }
    });

    /* Nav smooth scroll */
    $('#site-navigation .menu').onePageNav({
        extraOffset: ThemeObj.extraOffset,
    });

    /* Search Box */
    $(".search-box-area").on('click', '.search-button, .search-close', function (event) {
        event.preventDefault();
        if ($('.search-text').hasClass('active')) {
            $('.search-text, .search-close').removeClass('active');
        } else {
            $('.search-text, .search-close').addClass('active');
        }
        return false;
    });


    /* Header Right Menu */
    var menuArea = $('.additional-menu-area');
    menuArea.on('click', '.side-menu-trigger', function (e) {
        e.preventDefault();
        //$('.sidenav').width(380);
        $('.sidenav').css('transform', 'translateX(0%)');
        if (!menuArea.find('> .rt-cover').length) {
            menuArea.append("<div class='rt-cover'></div>");
        }
    });
    menuArea.on('click', '.closebtn', function (e) {
        e.preventDefault();
        if (menuArea.find('> .rt-cover').length) {
            menuArea.find('> .rt-cover').remove();
        }
        $('.sidenav').css('transform', 'translateX(100%)');
    });

    $(document).on('click', '.rt-cover', function () {
        $(this).remove();
        $('.sidenav').css('transform', 'translateX(100%)');
    });

    $(document).on('click', '.print-share-button', function (e) {
        console.log();
        e.preventDefault();
        window.print();
        return false;
    });


    /* Mega Menu */
    $('.site-header .main-navigation ul > li.mega-menu').each(function () {
        // total num of columns
        var items = $(this).find(' > ul.sub-menu > li').length;
        // screen width
        var bodyWidth = $('body').outerWidth();
        // main menu link width
        var parentLinkWidth = $(this).find(' > a').outerWidth();
        // main menu position from left
        var parentLinkpos = $(this).find(' > a').offset().left;

        var width = items * 220;
        var left = (width / 2) - (parentLinkWidth / 2);

        var linkleftWidth = parentLinkpos + (parentLinkWidth / 2);
        var linkRightWidth = bodyWidth - (parentLinkpos + parentLinkWidth);

        // exceeds left screen
        if ((width / 2) > linkleftWidth) {
            $(this).find(' > ul.sub-menu').css({
                width: width + 'px',
                right: 'inherit',
                left: '-' + parentLinkpos + 'px'
            });
        }
        // exceeds right screen
        else if ((width / 2) > linkRightWidth) {
            $(this).find(' > ul.sub-menu').css({
                width: width + 'px',
                left: 'inherit',
                right: '-' + linkRightWidth + 'px'
            });
        } else {
            $(this).find(' > ul.sub-menu').css({
                width: width + 'px',
                left: '-' + left + 'px'
            });
        }
    });

    $('#site-navigation nav').meanmenu({
        meanMenuContainer: '#meanmenu',
        meanScreenWidth: ThemeObj.meanWidth,
        removeElements: "#masthead",
        siteLogo: ThemeObj.siteLogo
    });

    /* Sticky Menu */
    if (ThemeObj.stickyMenu == 1 || ThemeObj.stickyMenu == 'on') {

        $(window).on('scroll', function () {

            var s = $('#sticker'),
                w = $('body'),
                h = s.outerHeight(),
                windowpos = $(window).scrollTop(),
                windowWidth = $(window).width(),
                h1 = s.parent('#header-1'),
                h2 = s.parent('#header-2'),
                h3 = s.parent('#header-3'),
                h4 = s.parent('#header-4'),
                h5 = s.parent('#header-5'),
                h6 = s.parent('#header-6'),
                h1he = parseInt(s.parent('#header-1').outerHeight()) + 300,
                h2he = parseInt(s.parent('#header-2').outerHeight()) + 200,
                h3he = parseInt(s.parent('#header-3').outerHeight()) + 200,
                h4he = parseInt(s.parent('#header-4').outerHeight()) + 200,
                h5he = parseInt(s.parent('#header-5').outerHeight()) + 200,
                h6he = parseInt(s.parent('#header-6').outerHeight()) + 200,
                h1H = h1.find('.header-top-bar').outerHeight(),
                topBar = s.prev('.header-top-bar'),
                topBarP = w.hasClass('has-topbar'),
                topAdP = $('body .ad-header-top'),
                tempMenu;
            if (windowWidth > 991) {

                w.css('padding-top', '');
                var topBarH, topAdH, totalheight, mBottom, headerFixed = 0;
                topAdH = topAdP.outerHeight();
                /*header 1 */
                if (h1.length || h2.length || h3.length || h4.length || h5.length || h6.length) {

                    // only top bar
                    if ((topBarP == true) && (topAdH == null)) {
                        topBarH = topBar.outerHeight() + 210;
                        headerFixed = $('.masthead-container').outerHeight() + 210;
                        if (windowpos >= headerFixed) {
                            if (h1.length || h2.length || h3.length || h4.length || h5.length || h6.length) {
                                s.addClass('stickp');
                                w.removeClass("stickh");
                                w.addClass("non-stickh");
                            }
                        } else {
                            s.removeClass('stickp');
                            w.removeClass("non-stickh");
                            w.addClass("stickh");
                        }

                    } else {
                        // no topbar now
                        if (windowpos < parseInt(h1he)) {
                            s.addClass('stickp');
                            w.removeClass("non-stickh");
                            w.addClass("stickh");
                        } else if (windowpos < parseInt(h2he)) {
                            s.addClass('stickp');
                            w.removeClass("non-stickh");
                            w.addClass("stickh");
                        } else if (windowpos < parseInt(h3he)) {
                            s.addClass('stickp');
                            w.removeClass("non-stickh");
                            w.addClass("stickh");
                        } else if (windowpos < parseInt(h4he)) {
                            s.addClass('stickp');
                            w.removeClass("non-stickh");
                            w.addClass("stickh");
                        } else if (windowpos < parseInt(h5he)) {
                            s.addClass('stickp');
                            w.removeClass("non-stickh");
                            w.addClass("stickh");
                        } else if (windowpos < parseInt(h6he)) {
                            s.addClass('stickp');
                            w.removeClass("non-stickh");
                            w.addClass("stickh");
                        } else {
                            s.removeClass('stickp');
                            w.removeClass("stickh");
                            w.addClass("non-stickh");
                        }

                        var masthead = $('#masthead');
                        if (masthead.hasClass('header-fixed')) {
                            h1.css('top', '-' + topBarH + 'px');
                            h2.css('top', '-' + topBarH + 'px');
                            h3.css('top', '-' + topBarH + 'px');
                            h4.css('top', '-' + topBarH + 'px');
                            h5.css('top', '-' + topBarH + 'px');
                            h6.css('top', '-' + topBarH + 'px');
                        }
                    }

                    // ad and top bar
                    if ((topBarP == true) && (topAdH != null)) {
                        headerFixed = topBar.outerHeight();

                        totalheight = headerFixed + topAdH;

                        if (windowpos <= topAdH || windowpos <= headerFixed) {
                            if (h1.hasClass('header-fixed') || h2.hasClass('header-fixed') || h3.hasClass('header-fixed') || h4.hasClass('header-fixed') || h5.hasClass('header-fixed') || h6.hasClass('header-fixed')) {
                                h1.css('top', '-' + windowpos + 'px');
                                h2.css('top', '-' + windowpos + 'px');
                                h3.css('top', '-' + windowpos + 'px');
                                h4.css('top', '-' + windowpos + 'px');
                                h5.css('top', '-' + windowpos + 'px');
                                h6.css('top', '-' + windowpos + 'px');
                            }
                        }

                        if (windowpos >= topAdH || windowpos >= headerFixed) {
                            if (h1.length || h2.length || h3.length || h4.length || h5.length || h6.length) {
                                s.addClass('stickp');
                                w.removeClass("stickh");
                                w.addClass("non-stickh");
                            }
                            if (h1.length || h2.length || h3.length || h4.length || h5.length || h6.length) {
                                if (h1.hasClass('header-fixed') || h2.hasClass('header-fixed') || h3.hasClass('header-fixed') || h4.hasClass('header-fixed') || h5.hasClass('header-fixed') || h6.hasClass('header-fixed')) {
                                    h1.css('top', '-' + parseInt(totalheight) + 'px');
                                    h2.css('top', '-' + parseInt(totalheight) + 'px');
                                    h3.css('top', '-' + parseInt(totalheight) + 'px');
                                    h4.css('top', '-' + parseInt(totalheight) + 'px');
                                    h5.css('top', '-' + parseInt(totalheight) + 'px');
                                    h6.css('top', '-' + parseInt(totalheight) + 'px');
                                }
                            }
                        } else {
                            s.removeClass('stickp');
                            w.removeClass("non-stickh");
                            w.addClass("stickh");
                        }
                    }
                }
            }

        });
    }

    if ($('#primary').find('div.rt-masonry-grid').length !== 0) {

        var $grid = $('.rt-masonry-grid').imagesLoaded(function () {
            masonaryGrid = $grid.masonry({
                // set itemSelector so .grid-sizer is not used in layout
                itemSelector: '.rt-grid-item',
                percentPosition: true,
                isAnimated: true,
                isRTL: true,
                //originLeft: false,
                animationOptions: {
                    duration: 700,
                    easing: 'linear',
                    queue: false
                }
            });
            masonaryGrid.masonry('layout');
        });
    }

    /*VC JS*/
    /* Counter */
    if (typeof $.fn.counterUp == 'function') {
        $('.rt-vc-counter .rt-counter , .rt-vc-counter-2 .rt-counter , .rt-vc-counter-3 .rt-counter, .rt-vc-counter-4 .rt-counter').counterUp({
            delay: $(this).data('rtSteps'),
            time: $(this).data('rtSpeed')
        });
    }
    /* Infobox 1 */
    $(".rt-info-text-1").on({
        mouseenter: function () {
            var hovercolor = $(this).data('hover');
            $(this).find(".pull-left i").css('color', hovercolor);

            var bghovercolor = $(this).data('bghovercolor');
            $(this).find(".pull-left i").css('background-color', bghovercolor);

            var title_hover = $(this).data('title-hover');
            $(this).find(".media-body h3, .media-body h3 a").css('color', title_hover);
        },
        mouseleave: function () {
            var color = $(this).data('color');
            $(this).find(".pull-left i").css('color', color);

            $(this).find(".pull-left i").css('background-color', '');

            var title_color = $(this).data('title-color');
            $(this).find(".media-body h3, .media-body h3 a").css('color', title_color);
        }
    }, this);

    /* Pricing Box 1 */
    $(".rt-price-table-box1").on({
        mouseenter: function () {
            var bghover = $(this).data('bghover');
            $(this).css('background-color', bghover);
            $(this).find(".rt-btn a , .price-holder , a.pricetable-btn").css('color', bghover);

        },
        mouseleave: function () {
            var bgcolor = $(this).data('bgcolor');
            $(this).css('background-color', bgcolor);
            $(this).find(".rt-btn a").css('color', '');
            $(this).find(".price-holder").css('color', bgcolor);
            $(this).find("a.pricetable-btn").css('color', '#f8f8f8');
        }
    }, this);

    /* Infobox 5 */
    $('.rt-infobox-5').each(function () {
        var $column = $(this).closest('.vc_column-inner');
        var bgcolor = $column.css('background-color');
        var bghover = $(this).data('hover');
        $column.on({
            mouseenter: function () {
                $column.attr('style', 'background-color: ' + bghover + ' !important');
            },
            mouseleave: function () {
                $column.attr('style', 'background-color: ' + bgcolor + ' !important');
            }
        });
    });

    /* Woocommerce Shop change view */
    $('#shop-view-mode li a').on('click', function () {
        $('body').removeClass('product-grid-view').removeClass('product-list-view');

        if ($(this).closest('li').hasClass('list-view-nav')) {
            $('body').addClass('product-list-view');
            Cookies.set('shopview', 'list');
        } else {
            $('body').addClass('product-grid-view');
            Cookies.remove('shopview');
        }
        return false;
    });

    // Popup - Used in video
    if (typeof $.fn.magnificPopup == 'function') {
        $('.rt-video-popup').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    }

    if (typeof $.fn.magnificPopup == 'function') {
        if ($('.zoom-gallery').length) {
            $('.zoom-gallery').each(function () { // the containers for all your galleries
                $(this).magnificPopup({
                    delegate: 'a.ne-zoom', // the selector for gallery item
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            });
        }
    }

    // start the ticker
    if (typeof $.fn.ticker == 'function') {
        $('#rt-js-news').ticker({
            speed: ThemeObj.tickerSpeed,
            debugMode: true,
            controls: ThemeObj.tickerControl,
            titleText: ThemeObj.tickerTitleText,
            displayType: ThemeObj.tickerStyle,
            direction: ThemeObj.tickerDirection,
            pauseOnItems: ThemeObj.tickerDelay,

        });
    }
});

//function Load
function barta_content_load_scripts() {
    var $ = jQuery;
    // Preloader
    $('#preloader').fadeOut('slow', function () {
        $(this).remove();
    });

    var windowWidth = $(window).width();

    /* Owl Custom Nav */
    if (typeof $.fn.owlCarousel == 'function') {
        $(".owl-custom-nav .owl-next").on('click', function () {
            $(this).closest('.owl-wrap').find('.owl-carousel').trigger('next.owl.carousel');
        });
        $(".owl-custom-nav .owl-prev").on('click', function () {
            $(this).closest('.owl-wrap').find('.owl-carousel').trigger('prev.owl.carousel');
        });

        $(".rt-owl-carousel").each(function () {
            var options = $(this).data('carousel-options');
            if (ThemeObj.rtl == 'yes') {
                options['rtl'] = true; //@rtl
            }
            $(this).owlCarousel(options);
        });


    }

    // Onepage Nav on meanmenu
    $('#meanmenu .menu').onePageNav({
        extraOffset: ThemeObj.extraOffsetMobile,
        end: function () {
            $('.meanclose').trigger('click');
        }
    });
    /* Slider */
    if (typeof $.fn.nivoSlider == 'function') {
        $('.rt-nivoslider , #ensign-nivoslider-3').nivoSlider({
            effect: 'boxRainReverse',
            slices: 15,
            boxCols: 8,
            boxRows: 4,
            animSpeed: 500,
            pauseTime: 6000,
            startSlide: 0,
            autoplay: true,
            directionNav: false,
            controlNav: true,
            controlNavThumbs: false,
            pauseOnHover: false,
            manualAdvance: false,
            prevText: '',
            nextText: '',
            randomStart: false,
            beforeChange: function () {
            },
            afterChange: function () {
            },
            slideshowEnd: function () {
            },
            lastSlide: function () {
            },
            afterLoad: function () {
            }
        });
        rdtheme_slider_fullscreen();
    }

    if (typeof $.fn.slick == 'function') {
        $(".slick-regular").slick();
    }

}

//function ready

function rdtheme_slider_fullscreen() {
    $ = jQuery;
    $('.rt-el-slider').each(function () {
        var width = $(window).width(),
            left = $(this).offset().left,
            $container = $(this).find('.rt-nivoslider');
        if (width < 1921) {
            $container.css('margin-left', -left).width(width);
        } else {
            leftAlt = left - (width - 1920) / 2;
            $container.css('margin-left', -leftAlt).width(1920);
        }
        $container.css('opacity', 1);
    });
}

(function ($) {
    "use strict";

    // Window Load+Resize
    $(window).on('load resize', function () {

        // Define the maximum height for mobile menu
        var wHeight = $(window).height();
        wHeight = wHeight - 50;
        $('.mean-nav > ul').css('max-height', wHeight + 'px');

        // Elementor Frontend Load
        $(window).on('elementor/frontend/init', function () {
            if (elementorFrontend.isEditMode()) {
                elementorFrontend.hooks.addAction('frontend/element_ready/widget', function () {
                    barta_content_load_scripts();
                });
            }
        });
    });

    // Window Load
    $(window).on('load', function () {
        barta_content_load_scripts();
    });

    $(window).on('scroll', scrollFunction);

    function scrollFunction() {
        var target = $('#contentHolder');
		
		if ( target.length > 0 ) {
			var contentHeight = target.outerHeight();
			var documentScrollTop = $(document).scrollTop();
			var targetScrollTop = target.offset().top;
			var scrolled = documentScrollTop - targetScrollTop;
			
			if (0 <= scrolled) {
				var scrolledPercentage = (scrolled / contentHeight) * 100;
				if (scrolledPercentage >= 0 && scrolledPercentage <= 100) {
					scrolledPercentage = scrolledPercentage >= 90 ? 100 : scrolledPercentage;
					$("#bartaBar").css({
						width: scrolledPercentage + "%"
					});
				}
			} else {
				$("#bartaBar").css({
					width: "0%"
				});
			}
		}
    }

})(jQuery);

