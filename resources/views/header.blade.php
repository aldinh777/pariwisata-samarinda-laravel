<!DOCTYPE html>
<!--[if lt IE 9]><script src="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/html5shiv.js"></script><![endif]-->
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src='https://www.google.com/recaptcha/api.js'></script>
  <title>@yield("title")</title>
  <link rel='dns-prefetch' href='//maps.google.com' />
  <link rel='dns-prefetch' href='//fonts.googleapis.com' />
  <link rel='dns-prefetch' href='//s.w.org' />
  <link rel="alternate" type="application/rss+xml" title="Travel &amp; Tours &raquo; Feed"
    href="https://themes.themeenergy.com/bookyourtravel/travel-tours/feed/" />
  <link rel="alternate" type="application/rss+xml" title="Travel &amp; Tours &raquo; Comments Feed"
    href="https://themes.themeenergy.com/bookyourtravel/travel-tours/comments/feed/" />
  <!-- This site uses the Google Analytics by MonsterInsights plugin v7.12.3 - Using Analytics tracking - https://www.monsterinsights.com/ -->
  <script type="text/javascript" data-cfasync="false">
    (window.gaDevIds = window.gaDevIds || []).push("dZGIzZG");
    var mi_version = '7.12.3';
    var mi_track_user = true;
    var mi_no_track_reason = '';

    var disableStr = 'ga-disable-UA-136871892-1';

    /* Function to detect opted out users */
    function __gaTrackerIsOptedOut() {
      return document.cookie.indexOf(disableStr + '=true') > -1;
    }

    /* Disable tracking if the opt-out cookie exists. */
    if (__gaTrackerIsOptedOut()) {
      window[disableStr] = true;
    }

    /* Opt-out function */
    function __gaTrackerOptout() {
      document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
      window[disableStr] = true;
    }

    if ('undefined' === typeof gaOptout) {
      function gaOptout() {
        __gaTrackerOptout();
      }
    }

    if (mi_track_user) {
      (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', '__gaTracker');

      __gaTracker('create', 'UA-136871892-1', 'auto');
      __gaTracker('set', 'forceSSL', true);
      __gaTracker('require', 'displayfeatures');
      __gaTracker('require', 'linkid', 'linkid.js');
      __gaTracker('send', 'pageview');
    } else {
      console.log("");
      (function () {
        /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
        var noopfn = function () {
          return null;
        };
        var noopnullfn = function () {
          return null;
        };
        var Tracker = function () {
          return null;
        };
        var p = Tracker.prototype;
        p.get = noopfn;
        p.set = noopfn;
        p.send = noopfn;
        var __gaTracker = function () {
          var len = arguments.length;
          if (len === 0) {
            return;
          }
          var f = arguments[len - 1];
          if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
            console.log('Not running function __gaTracker(' + arguments[0] +
              " ....) because you are not being tracked. " + mi_no_track_reason);
            return;
          }
          try {
            f.hitCallback();
          } catch (ex) {

          }
        };
        __gaTracker.create = function () {
          return new Tracker();
        };
        __gaTracker.getByName = noopnullfn;
        __gaTracker.getAll = function () {
          return [];
        };
        __gaTracker.remove = noopfn;
        window['__gaTracker'] = __gaTracker;
      })();
    }

  </script>
  <!-- / Google Analytics by MonsterInsights -->
  <script type="text/javascript">
    window._wpemojiSettings = {
      "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/",
      "ext": ".png",
      "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/",
      "svgExt": ".svg",
      "source": {
        "concatemoji": "https:\/\/themes.themeenergy.com\/bookyourtravel\/travel-tours\/wp-includes\/js\/wp-emoji-release.min.js?ver=4b70993e99f0b789181420799b3b6c39"
      }
    };
    ! function (e, a, t) {
      var r, n, o, i, p = a.createElement("canvas"),
        s = p.getContext && p.getContext("2d");

      function c(e, t) {
        var a = String.fromCharCode;
        s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0);
        var r = p.toDataURL();
        return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()
      }

      function l(e) {
        if (!s || !s.fillText) return !1;
        switch (s.textBaseline = "top", s.font = "600 32px Arial", e) {
          case "flag":
            return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356,
              56826, 55356, 56819
            ], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418,
              56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
            ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
              56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
            ]));
          case "emoji":
            return !c([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
        }
        return !1
      }

      function d(e) {
        var t = a.createElement("script");
        t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
      }
      for (i = Array("flag", "emoji"), t.supports = {
          everything: !0,
          everythingExceptFlag: !0
        }, o = 0; o < i.length; o++) t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports
        .everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports
          .everythingExceptFlag && t.supports[i[o]]);
      t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
        .readyCallback = function () {
          t.DOMReady = !0
        }, t.supports.everything || (n = function () {
          t.readyCallback()
        }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load",
          n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
          "complete" === a.readyState && t.readyCallback()
        })), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji),
          d(r.wpemoji)))
    }(window, document, window._wpemojiSettings);

  </script>
  <style type="text/css">
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 .07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }

  </style>
  <link rel='stylesheet' id='wp-block-library-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/css/dist/block-library/style.min.css?ver=4b70993e99f0b789181420799b3b6c39'
    type='text/css' media='all' />
  <link rel='stylesheet' id='wc-block-vendors-style-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style.css?ver=3.1.0'
    type='text/css' media='all' />
  <link rel='stylesheet' id='wc-block-style-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=3.1.0'
    type='text/css' media='all' />
  <link rel='stylesheet' id='contact-form-7-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.2.2'
    type='text/css' media='all' />
  <link rel='stylesheet' id='rs-plugin-settings-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.2.17'
    type='text/css' media='all' />
  <style id='rs-plugin-settings-inline-css' type='text/css'>
    #rs-demo-id {}

  </style>
  <link rel='stylesheet' id='woocommerce-layout-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=4.5.2'
    type='text/css' media='all' />
  <style id='woocommerce-layout-inline-css' type='text/css'>
    .infinite-scroll .woocommerce-pagination {
      display: none;
    }

  </style>
  <link rel='stylesheet' id='woocommerce-smallscreen-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=4.5.2'
    type='text/css' media='only screen and (max-width: 768px)' />
  <link rel='stylesheet' id='woocommerce-general-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=4.5.2'
    type='text/css' media='all' />
  <style id='woocommerce-inline-inline-css' type='text/css'>
    .woocommerce form .form-row .required {
      visibility: visible;
    }

  </style>
  <link rel='stylesheet' id='megamenu-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/maxmegamenu/style.css?ver=5e6684'
    type='text/css' media='all' />
  <link rel='stylesheet' id='dashicons-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/css/dashicons.min.css?ver=4b70993e99f0b789181420799b3b6c39'
    type='text/css' media='all' />
  <link rel='stylesheet' id='wc-gateway-ppec-frontend-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce-gateway-paypal-express-checkout/assets/css/wc-gateway-ppec-frontend.css?ver=2.1.0'
    type='text/css' media='all' />
  <link rel='stylesheet' id='bookyourtravel-font-awesome-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/css/lib/font-awesome.min.css?ver=screen,print'
    type='text/css' media='all' />
  <link rel='stylesheet' id='bookyourtravel-base-font-css-style-css'
    href='//fonts.googleapis.com/css?family=Work+Sans%3A400%2C500%2C600%2C700&#038;subset=latin%2Ccyrillic%2Clatin-ext%2Cvietnamese%2Cgreek%2Cgreek-ext%2Ccyrillic-ext&#038;ver=4b70993e99f0b789181420799b3b6c39'
    type='text/css' media='all' />
  <link rel='stylesheet' id='bookyourtravel-heading-font-css-style-css'
    href='//fonts.googleapis.com/css?family=Work+Sans%3A400%2C500%2C600%2C700&#038;subset=latin%2Ccyrillic%2Clatin-ext%2Cvietnamese%2Cgreek%2Cgreek-ext%2Ccyrillic-ext&#038;ver=4b70993e99f0b789181420799b3b6c39'
    type='text/css' media='all' />
  <link rel='stylesheet' id='bookyourtravel-font-icon-style-css'
    href='//fonts.googleapis.com/icon?family=Material+Icons&#038;ver=4b70993e99f0b789181420799b3b6c39'
    type='text/css' media='all' />
  <link rel='stylesheet' id='bookyourtravel-style-main-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/css/style.css?ver=8.15.4'
    type='text/css' media='screen,print' />
  <link rel='stylesheet' id='bookyourtravel-style-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/style.css?ver=4b70993e99f0b789181420799b3b6c39'
    type='text/css' media='all' />
  <link rel='stylesheet' id='bookyourtravel-style-pp-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/css/lib/prettyPhoto.min.css?ver=8.15.4'
    type='text/css' media='screen' />
  <link rel='stylesheet' id='js_composer_front-css'
    href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.2.0'
    type='text/css' media='all' />
  <script type='text/javascript'
    src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'
    id='jquery-core-js'></script>
  <script type='text/javascript' id='monsterinsights-frontend-script-js-extra'>
    /* <![CDATA[ */
    var monsterinsights_frontend = {
      "js_events_tracking": "true",
      "download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx",
      "inbound_paths": "[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]",
      "home_url": "https:\/\/themes.themeenergy.com\/bookyourtravel\/travel-tours",
      "hash_tracking": "false"
    };
    /* ]]> */

  </script>
  <script type='text/javascript'
    src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/google-analytics-for-wordpress/assets/js/frontend.min.js?ver=7.12.3'
    id='monsterinsights-frontend-script-js'></script>
  <script type='text/javascript'
    src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.2.17'
    id='tp-tools-js'></script>
  <script type='text/javascript'
    src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.2.17'
    id='revmin-js'></script>
  <script type='text/javascript'
    src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'
    id='jquery-blockui-js'></script>
  <script type='text/javascript' id='wc-add-to-cart-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
      "ajax_url": "\/bookyourtravel\/travel-tours\/wp-admin\/admin-ajax.php",
      "wc_ajax_url": "\/bookyourtravel\/travel-tours\/?wc-ajax=%%endpoint%%",
      "i18n_view_cart": "View cart",
      "cart_url": "https:\/\/themes.themeenergy.com\/bookyourtravel\/travel-tours\/cart\/",
      "is_cart": "",
      "cart_redirect_after_add": "no"
    };
    /* ]]> */

  </script>
  <script type='text/javascript'
    src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=4.5.2'
    id='wc-add-to-cart-js'></script>
  <script type='text/javascript'
    src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=6.2.0'
    id='vc_woocommerce-add-to-cart-js-js'></script>
  <!-- OG: 2.8.7 -->
  <meta property="og:image"
    content="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/cropped-favicon.png" />
  <meta property="og:description" content="Home Travel Tours" />
  <meta property="og:type" content="article" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:site_name" content="Travel &amp; Tours" />
  <meta property="og:title" content="Home Travel Tours" />
  <meta property="og:url" content="https://themes.themeenergy.com/bookyourtravel/travel-tours/" />
  <meta property="og:updated_time" content="2019-05-24T14:46:50+00:00" />
  <meta property="article:published_time" content="2019-04-24T09:34:48+00:00" />
  <meta property="article:modified_time" content="2019-05-24T14:46:50+00:00" />
  <meta property="article:author"
    content="https://themes.themeenergy.com/bookyourtravel/travel-tours/author/admin/" />
  <meta property="twitter:partner" content="ogwp" />
  <meta property="twitter:card" content="summary" />
  <meta property="twitter:title" content="Home Travel Tours" />
  <meta property="twitter:description" content="Home Travel Tours" />
  <meta property="twitter:url" content="https://themes.themeenergy.com/bookyourtravel/travel-tours/" />
  <meta property="profile:first_name" content="Jane" />
  <meta property="profile:last_name" content="Doe" />
  <meta property="profile:username" content="admin" /><!-- /OG -->
  <link rel="https://api.w.org/" href="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-json/" />
  <link rel="alternate" type="application/json"
    href="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-json/wp/v2/pages/17" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD"
    href="https://themes.themeenergy.com/bookyourtravel/travel-tours/xmlrpc.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml"
    href="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/wlwmanifest.xml" />

  <link rel="canonical" href="https://themes.themeenergy.com/bookyourtravel/travel-tours/" />
  <link rel='shortlink' href='https://themes.themeenergy.com/bookyourtravel/travel-tours/' />
  <link rel="alternate" type="application/json+oembed"
    href="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthemes.themeenergy.com%2Fbookyourtravel%2Ftravel-tours%2F" />
  <link rel="alternate" type="text/xml+oembed"
    href="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthemes.themeenergy.com%2Fbookyourtravel%2Ftravel-tours%2F&#038;format=xml" />
  <noscript>
    <style>
      .woocommerce-product-gallery {
        opacity: 1 !important;
      }

    </style>
  </noscript>
  <style id="bookyourtravel-customizer-css">
    .single .inner-nav li {
      background: #ffffff;
    }

    .single .inner-nav li:hover,
    .single .inner-nav li.active,
    .single .inner-nav li.active:hover,
    .single .inner-nav li.current-menu-item,
    .single .inner-nav li.current-menu-item:hover {
      background: #003580;
    }

    .single .inner-nav li.active a:after,
    .single .inner-nav li.current-menu-item a:after {
      border-left-color: #003580;
    }

    .single .main .inner-nav li:not(.active):not(:hover) a {
      color: #9a9a9a !important;
    }

    .single .main .inner-nav li a:hover,
    .single .main .inner-nav li:hover a,
    .single .main .inner-nav li.active a,
    .single .main .inner-nav li.active a:hover,
    .single .main .inner-nav li.current-menu-item a,
    .single .main .inner-nav li.current-menu-item a:hover,
    .single .main .inner-nav li a:focus,
    .single .main .inner-nav li:focus a,
    .single .main .inner-nav li.active a:hover,
    .single .main .inner-nav li.active a:focus,
    .single .main .inner-nav li.current-menu-item a:hover,
    .single .main .inner-nav li.current-menu-item a:focus {
      color: #ffffff !important;
    }

    .single .inner-nav li a span.material-icons {
      color: #9a9a9a !important;
    }

    .single .inner-nav li.active a span.material-icons,
    .single .inner-nav li a:hover span.material-icons {
      color: #ffffff !important;
    }

    .ui-datepicker .dp-highlight a.ui-state-default,
    .f-item .available span,
    .ui-datepicker .dp-highlight.dp-highlight-start-date:after,
    .ui-datepicker .dp-highlight.dp-highlight-end-date:after {
      background-color: #003580;
    }

    .location_item .ribbon {
      background-color: #003580;
    }

    .location_item .ribbon:before {
      border-right-color: #003580;
    }

    .location_item .ribbon:after {
      border-top-color: #003580;
    }

    .location_item.full-width .ribbon:before {
      border-left-color: #003580;
    }

    .location_item .ribbon:focus,
    .location_item .ribbon:hover {
      background-color: #ffc107;
    }

    .location_item .ribbon:focus:before,
    .location_item .ribbon:focus:after,
    .location_item .ribbon:hover:before,
    .location_item .ribbon:hover:after {
      border-color: #ffc107;
    }

    .deals>.row>article>div,
    .destinations>.row>article>div,
    .offers>.row>article>div,
    .deals>.row>article>div>a>figure img,
    .destinations>.row>article>div>a>figure img,
    .offers>.row>article>div>a>figure img,
    .single-card,
    .single-card img,
    .single-card>div,
    .single-card .details {
      border-radius: 0px;
      -moz-border-radius: 0px;
      -webkit-border-radius: 0px;
    }

    .main aside .widget,
    .tags li:before {
      background-color: #ffffff;
    }

    aside .widget {
      color: #454545 !important;
    }

    aside .widget h4,
    aside .widget h2,
    aside .widget h5,
    .sort-by h3 {
      color: #003580;
    }

    .main aside .widget,
    .deals>.row>article>div,
    .destinations>.row>article>div,
    .offers>.row>article>div,
    .single-card,
    .testimonials,
    .home-footer-sidebar .widget>div,
    .hero-sidebar .byt-widget-search-inner {
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
      -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
      -moz-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
      ;
    }

    .above-footer-sidebar {
      background-color: #003580;
    }

    .above-footer-sidebar .widget>div {
      background-color: #003580;
    }

    a,
    .tab-content h4,
    .home-footer-sidebar .widget>div h4,
    .tab-content .room-types .meta h3,
    .error-type h1,
    aside .widget h5,
    .ico:before,
    blockquote:before,
    .req,
    .woocommerce form .form-row .required,
    p.number:before,
    .tab-content .destinations>.row>article.full-width>div .details .ribbon .half>a:before {
      color: #003580;
    }

    a:hover,
    h1 a:hover,
    h2 a:hover,
    h3 a:hover,
    h4 a:hover,
    h5 a:hover,
    h6 a:hover,
    .breadcrumbs a:hover,
    a:focus,
    h1 a:focus,
    h2 a:focus,
    h3 a:focus,
    h4 a:focus,
    h5 a:focus,
    h6 a:focus,
    .breadcrumbs a:focus {
      color: #4fc3f7;
    }

    .view-type .active,
    .chart dd span,
    .infoBox,
    .ui-slider-horizontal .ui-slider-handle,
    .pager .current,
    .pager a:hover,
    .testimonials,
    .image-overlay:before {
      background: #4fc3f7;
    }

    .infoBox:after {
      border-top-color: #4fc3f7;
    }

    .page-spinner>div:after,
    .tab-content .spinner>div:after {
      border-color: #4fc3f7;
    }

    .promo-ribbon span {
      background: #4fc3f7;
    }

    .iconic .circle {
      background: #4fc3f7;
    }

    .social li a {
      background-color: #003580;
    }

    .social li a:hover,
    social li a:focus {
      background-color: #4fc3f7 !important;
    }

    .main {
      background-color: #f8f8f8;
    }

    .static-content,
    .tab-content>article,
    .sort-by,
    .pager>span,
    .map-wrap,
    .comment,
    .error-type,
    .woocommerce ul.products li.product,
    .woocommerce-page ul.products li.product,
    .woocommerce div.product div.summary,
    .woocommerce div.product .woocommerce-tabs .panel,
    .woocommerce-error,
    .woocommerce-info,
    .woocommerce-message {
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
      -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
      -moz-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
      ;
    }

    input[type="search"],
    input[type="email"],
    input[type="text"],
    input[type="number"],
    input[type="password"],
    input[type="tel"],
    input[type="url"],
    input[type="date"],
    textarea,
    select,
    .select2-container--default .select2-selection--single,
    div.selector,
    div.selector span {
      border-radius: 3px !important;
      -moz-border-radius: 3px !important;
      -webkit-border-radius: 3px !important;
    }

    input[type="search"],
    input[type="email"],
    input[type="text"],
    input[type="number"],
    input[type="password"],
    input[type="tel"],
    input[type="url"],
    input[type="date"],
    select,
    div.selector,
    div.selector span,
    div.selector select,
    .select2-container .select2-selection--single,
    .select2-container--default .select2-selection--single .select2-selection__arrow,
    .select2-container--default .select2-selection--single .select2-selection__rendered {
      height: 44px !important;
    }

    .gradient-button,
    input[type="reset"],
    input[type="submit"],
    .scroll-to-top,
    .button,
    .woocommerce #respond input#submit,
    .woocommerce a.button,
    .woocommerce button.button,
    .woocommerce input.button,
    .woocommerce #respond input#submit.alt,
    .woocommerce a.button.alt,
    .woocommerce button.button.alt,
    .woocommerce input.button.alt {
      background-color: #ffc107;
    }

    .gradient-button:hover,
    .gradient-button:focus,
    .widget .gradient-button:hover,
    .widget .gradient-button:focus,
    input[type="reset"]:hover,
    input[type="reset"]:focus,
    input[type="submit"]:hover,
    input[type="submit"]:focus,
    .scroll-to-top:hover,
    .scroll-to-top:focus,
    .button:hover,
    .button:focus,
    .woocommerce #respond input#submit:hover,
    .woocommerce a.button:hover,
    .woocommerce button.button:hover,
    .woocommerce input.button:hover,
    .woocommerce #respond input#submit:focus,
    .woocommerce a.button:focus,
    .woocommerce button.button:focus,
    .woocommerce input.button:focus,
    .woocommerce #respond input#submit.alt:hover,
    .woocommerce a.button.alt:hover,
    .woocommerce button.button.alt:hover,
    .woocommerce input.button.alt:hover,
    .woocommerce #respond input#submit.alt:focus,
    .woocommerce a.button.alt:focus,
    .woocommerce button.button.alt:focus,
    .woocommerce input.button.alt:focus {
      background-color: #4fc3f7;
    }

    .scroll-to-top,
    .pager a,
    .pager>span,
    .gradient-button,
    input[type="reset"],
    input[type="submit"],
    .button,
    .woocommerce #respond input#submit,
    .woocommerce a.button,
    .woocommerce button.button,
    .woocommerce input.button,
    .woocommerce #respond input#submit.alt,
    .woocommerce a.button.alt,
    .woocommerce button.button.alt,
    .woocommerce input.button.alt {
      border-radius: 3px;
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
    }

    .gradient-button,
    input[type="reset"],
    input[type="submit"],
    .button,
    .woocommerce #respond input#submit,
    .woocommerce a.button,
    .woocommerce button.button,
    .woocommerce input.button,
    .woocommerce #respond input#submit.alt,
    .woocommerce a.button.alt,
    .woocommerce button.button.alt,
    .woocommerce input.button.alt,
    #add_payment_method table.cart td.actions .coupon .input-text,
    .woocommerce-cart table.cart td.actions .coupon .input-text,
    .woocommerce-checkout table.cart td.actions .coupon .input-text {
      padding-top: 14px !important;
    }

    .gradient-button,
    input[type="reset"],
    input[type="submit"],
    .button,
    .woocommerce #respond input#submit,
    .woocommerce a.button,
    .woocommerce button.button,
    .woocommerce input.button,
    .woocommerce #respond input#submit.alt,
    .woocommerce a.button.alt,
    .woocommerce button.button.alt,
    .woocommerce input.button.alt,
    #add_payment_method table.cart td.actions .coupon .input-text,
    .woocommerce-cart table.cart td.actions .coupon .input-text,
    .woocommerce-checkout table.cart td.actions .coupon .input-text {
      padding-bottom: 14px !important;
    }

    body,
    .tab-content h4,
    .infoBox>div {
      font-family: 'Work Sans', sans-serif;
    }

    body {
      font-size: 15px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .price em {
      font-family: 'Work Sans', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .price em {
      color: #212121;
    }

    h3 {
      font-size: 20px;
    }

    h4 {
      font-size: 18px;
    }

    h5 {
      font-size: 23px;
    }

    .logo img {
      height: 50px !important;
    }

    .header,
    .woocommerce-page .header {
      margin-bottom: 20px;
    }

    .header {
      background-color: #003580;
    }

    .header .top-header {
      background-color: #00216c;
    }

    .top-nav li a,
    .top-nav-left li a {
      color: #dddddd;
    }

    .top-nav li a:hover,
    .top-nav li a:focus,
    .top-nav-left li a:hover,
    .top-nav-left li a:focus {
      color: #4fc3f7;
    }

    .header .contact:before {
      background-color: #4fc3f7;
    }

    .header .contact span {
      color: #ffffff;
    }

    .header .ribbon {
      background-color: #4fc3f7 !important;
    }

    .header .ribbon:before {
      border-top-color: #4fc3f7;
    }

    .header .ribbon:after {
      border-right-color: #4fc3f7;
    }

    .footer {
      background-color: #00216c;
    }

    .footer .widget h6,
    .footer .widget h5,
    .footer .widget h4,
    .footer .widget h3 {
      color: #4fc3f7;
    }

    .footer .widget div,
    .footer .widget p {
      color: #ffffff;
    }

    .footer .widget a {
      color: #ffffff;
    }

    .footer .widget a:hover {
      color: #4fc3f7;
    }

    .footer p.copy {
      color: #677ba7;
    }

    .footer div.full-width nav li a {
      color: #677ba7;
    }

    .footer div.full-width nav li a:hover,
    .footer div.full-width nav li a:focus {
      color: #ffffff !important;
    }

    .footer .widget div em,
    .footer .widget p em {
      color: #ffffff;
    }

  </style>
  <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
  <style type="text/css" id="custom-background-css">
    body.custom-background {
      background-color: #f8f8f8;
    }

  </style>
  <meta name="generator"
    content="Powered by Slider Revolution 6.2.17 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
  <link rel="icon"
    href="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/cropped-favicon-100x100.png"
    sizes="32x32" />
  <link rel="icon"
    href="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/cropped-favicon-300x300.png"
    sizes="192x192" />
  <link rel="apple-touch-icon"
    href="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/cropped-favicon-300x300.png" />
  <meta name="msapplication-TileImage"
    content="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/cropped-favicon-300x300.png" />
  <script type="text/javascript">
    function setREVStartSize(e) {
      //window.requestAnimationFrame(function() {				 
      window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
      window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
      try {
        var pw = document.getElementById(e.c).parentNode.offsetWidth,
          newh;
        pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
        e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
        e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
        e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
        e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
        e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
        e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
        e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
        if (e.layout === "fullscreen" || e.l === "fullscreen")
          newh = Math.max(e.mh, window.RSIH);
        else {
          e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
          for (var i in e.rl)
            if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
          e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
          e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
          for (var i in e.rl)
            if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

          var nl = new Array(e.rl.length),
            ix = 0,
            sl;
          e.tabw = e.tabhide >= pw ? 0 : e.tabw;
          e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
          e.tabh = e.tabhide >= pw ? 0 : e.tabh;
          e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
          for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
          sl = nl[0];
          for (var i in nl)
            if (sl > nl[i] && nl[i] > 0) {
              sl = nl[i];
              ix = i;
            }
          var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
          newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
        }
        if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document
          .createElement("style"));
        document.getElementById(e.c).height = newh + "px";
        window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
      } catch (e) {
        console.log("Failure at Presize of Slider:" + e)
      }
      //});
    };

  </script>
  <style type="text/css" id="wp-custom-css">
    /*custom footer*/
    .above-footer-sidebar {
      color: #ddd;
    }

    .above-footer-sidebar h4 {
      color: #fff;
    }

    .above-footer-sidebar .widget>div {
      box-shadow: none !important;
    }

    @media screen and (min-width: 1024px) {
      .above-footer-sidebar {
        padding: 60px 75px 0;
      }

      .footer {
        padding: 30px 100px 0;
      }
    }

    /*custom hero search*/
    .hero-sidebar div.selector,
    .hero-sidebar div.selector span,
    .hero-sidebar div.selector select {
      height: 51px !important;
    }

    .hero-sidebar .gradient-button {
      font-size: 16px !important;
      padding-bottom: 16px !important;
      padding-top: 16px !important;
    }

    .hero-sidebar .byt-widget-search-inner {
      -webkit-box-shadow: none !important;
      -moz-box-shadow: none !important;
      box-shadow: none !important;
    }

    @media screen and (max-width: 960px) {
      .byt-widget-search {
        background: #003580;
      }
    }

  </style>
  <style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1557824355992 {
      padding-top: 50px !important;
      padding-bottom: 50px !important;
    }

    .vc_custom_1557848127473 {
      padding-top: 100px !important;
      padding-bottom: 100px !important;
      background-image: url(https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/sample_media/sites/26/2019/04/tac11.jpg?id=128) !important;
      background-position: center !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;
    }

    .vc_custom_1557824652572 {
      padding-top: 15px !important;
      padding-bottom: 50px !important;
    }

    .vc_custom_1557848166265 {
      padding-top: 150px !important;
      padding-bottom: 130px !important;
      background-image: url(https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/sample_media/sites/26/2019/04/tac9.jpg?id=126) !important;
      background-position: center !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;
    }

    .vc_custom_1557823908354 {
      margin-bottom: 0px !important;
    }

    .vc_custom_1557824316629 {
      margin-bottom: 0px !important;
    }

    .vc_custom_1557848329679 {
      margin-bottom: 0px !important;
    }

    .vc_custom_1557824467886 {
      margin-bottom: 0px !important;
    }

    .vc_custom_1556978265987 {
      padding-right: 10px !important;
      padding-left: 10px !important;
    }

    .vc_custom_1556978281260 {
      padding-right: 10px !important;
      padding-left: 10px !important;
    }

    .vc_custom_1556978297526 {
      padding-right: 10px !important;
      padding-left: 10px !important;
    }

    .vc_custom_1556978314905 {
      padding-right: 10px !important;
      padding-left: 10px !important;
    }

  </style><noscript>
    <style>
      .wpb_animate_when_almost_visible {
        opacity: 1;
      }

    </style>
  </noscript>
  <style type="text/css">
    /** Mega Menu CSS: fs **/

  </style>
  <script>
    var hidePreloaderInterval = null;

    function hidePreloader() {
      var pageSpinner = document.querySelector('.page-spinner');
      if (pageSpinner !== null) {
        pageSpinner.style.display = 'none';
        clearInterval(hidePreloaderInterval);
      }
    }

    hidePreloaderInterval = setInterval(hidePreloader, 500);

  </script>
  <link rel='stylesheet'
    href="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/_styler/css/styler.css" />
</head>

<body
  class="tour-template-default single single-tour postid-434 custom-background wp-custom-logo  full-screen has-featured-gallery theme-BookYourTravel woocommerce-no-js mega-menu-primary-menu wpb-js-composer js-comp-ver-6.2.0 vc_responsive currency-usd">
  <div class="page-spinner">
    <div></div>
  </div>
  <div class="page-wrap">
    <!--header-->
    <header class="header header2">
      <div class="wrap">
        <!--logo-->
        <div class="logo">
          <a href="/" style="color: white; font-size: 35px; font-weight: bold">Pariwisata</a>
          <!-- <a href="https://themes.themeenergy.com/bookyourtravel/travel-tours/"
            title="Travel &amp; Tours | Book Your Travel - Premium WordPress Theme site"><img
              src="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/travel-agency-book-your-travel-logo.png"
              alt="Travel &amp; Tours | Book Your Travel - Premium WordPress Theme site" /></a> -->
        </div>
        <!--//logo-->
        <!--contact-->
        <div class="contact">
          <span class="message">Contact Person:</span>

          <span class="number">0822-3980-8869</span>
        </div>
        <!--//contact-->
        <div class="minicart">
          <a href="https://themes.themeenergy.com/bookyourtravel/travel-tours/cart/"><i
              class="material-icons">shopping_cart</i> <span>0</span></a>
        </div>
        <!--primary navigation-->
        <div id="mega-menu-wrap-primary-menu" class="mega-menu-wrap">
          <div class="mega-menu-toggle">
            <div class="mega-toggle-blocks-left"></div>
            <div class="mega-toggle-blocks-center"></div>
            <div class="mega-toggle-blocks-right">
              <div class='mega-toggle-block mega-menu-toggle-block mega-toggle-block-1'
                id='mega-toggle-block-1' tabindex='0'><span class='mega-toggle-label' role='button'
                  aria-expanded='false'><span class='mega-toggle-label-closed'></span><span
                    class='mega-toggle-label-open'></span></span></div>
            </div>
          </div>
          <ul id="mega-menu-primary-menu" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js"
            data-event="hover_intent" data-effect="fade_up" data-effect-speed="200"
            data-effect-mobile="disabled" data-effect-speed-mobile="0" data-panel-inner-width=".wrap"
            data-mobile-force-width="body" data-second-click="go" data-document-click="collapse"
            data-vertical-behaviour="standard" data-breakpoint="960" data-unbind="true"
            data-hover-intent-timeout="300" data-hover-intent-interval="100">
            <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-50'
              id='mega-menu-item-50'><a class="mega-menu-link"
                href="/"
                tabindex="0">Home</a></li>
            <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-54'
              id='mega-menu-item-54'><a class="mega-menu-link"
                href="/wisata"
                tabindex="0">Wisata</a></li>
            <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-53'
              id='mega-menu-item-53'><a class="mega-menu-link"
                href="/kafe"
                tabindex="0">Kafe</a></li>
            <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-52'
              id='mega-menu-item-52'><a class="mega-menu-link"
                href="/kuliner"
                tabindex="0">Kuliner</a></li>
            <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-51'
              id='mega-menu-item-51'><a class="mega-menu-link"
                href="/oleholeh"
                tabindex="0">Oleh-Oleh</a></li>
            <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-50'
              id='mega-menu-item-50'><a class="mega-menu-link"
                href="/workingspace"
                tabindex="0">Working Space</a></li>
            <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-50'
              id='mega-menu-item-50'><a class="mega-menu-link"
                href="/about"
                tabindex="0">About</a></li>
          </ul>
        </div>
        <!--//primary navigation-->
      </div>
      <!--//wrap-->
    </header>
    <!--//header-->
    @section("content")
    @show
    <!--// .wrap -->
    <a href="#" class="scroll-to-top" title="Back up"><i class="material-icons">&#xE316;</i></a>

    <!--// .main -->
    <div class="page-bottom">

      <!--footer-->
      <footer class="footer">
        <div id="footer-sidebar" class="footer-sidebar widget-area wrap">
          <ul>
            <li class="widget widget-sidebar one-third">
              <article class="byt_address_widget BookYourTravel_Address_Widget">
                <h6>Kontak</h6>
                <p><em><i class="material-icons md-16">place</i></em> Jl. Bhayangkara rt. 5 no. 422
                  75279
                </p>
                <p><em><i class="material-icons md-16">call</i></em> 0822-3980-8869</p>
                <p><em><i class="material-icons md-16">email</i></em> <a
                    href="mailto:info@bookyourtravel.com"
                    title="info@bookyourtravel.com">info@mail.com</a></p>
              </article>
            </li>
          </ul>
        </div><!-- #secondary -->
        <div class="wrap">
          <div class="row">
            <div class="full-width">
              <p class="copy">© 2020 All Right Reserved</p>
            </div>
          </div>
        </div>
      </footer>
      <!--//footer-->

      <script>
        (function () {
          function maybePrefixUrlField() {
            if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
              this.value = "http://" + this.value;
            }
          }

          var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
          if (urlFields) {
            for (var j = 0; j < urlFields.length; j++) {
              urlFields[j].addEventListener('blur', maybePrefixUrlField);
            }
          }
        })();

      </script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat:600%2C400" rel="stylesheet"
        property="stylesheet" media="all" type="text/css">

      <script type="text/javascript">
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;

      </script>
      <link rel='stylesheet' id='woocommerce-currency-switcher-css'
        href='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce-currency-switcher/css/front.css?ver=1.3.2'
        type='text/css' media='all' />
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/lib/jquery.uniform.min.js?ver=8.15.4'
        id='bookyourtravel-jquery-uniform-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'
        id='jquery-ui-core-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'
        id='jquery-ui-widget-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4'
        id='jquery-ui-button-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/js/jquery/ui/spinner.min.js?ver=1.11.4'
        id='jquery-ui-spinner-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/search-widget.js?ver=8.15.4'
        id='bookyourtravel-search-widget-js'></script>
      <script type='text/javascript' id='bookyourtravel-scripts-js-extra'>
        /* <![CDATA[ */
        var BYTAjax = {
          "ajaxurl": "https:\/\/themes.themeenergy.com\/bookyourtravel\/travel-tours\/wp-admin\/admin-ajax.php",
          "slimajaxurl": "https:\/\/themes.themeenergy.com\/bookyourtravel\/travel-tours\/wp-content\/themes\/BookYourTravel\/includes\/theme_custom_ajax_handler.php",
          "nonce": "2c2b5e16b8",
          "current_user_id": "0"
        };
        /* ]]> */

      </script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/scripts.js?ver=8.15.4'
        id='bookyourtravel-scripts-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/accommodations.js?ver=8.15.4'
        id='bookyourtravel-accommodations-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/car-rentals.js?ver=8.15.4'
        id='bookyourtravel-car_rentals-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/cruises.js?ver=8.15.4'
        id='bookyourtravel-cruises-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/tours.js?ver=8.15.4'
        id='bookyourtravel-tours-js'></script>
      <script type='text/javascript' id='contact-form-7-js-extra'>
        /* <![CDATA[ */
        var wpcf7 = {
          "apiSettings": {
            "root": "https:\/\/themes.themeenergy.com\/bookyourtravel\/travel-tours\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
          }
        };
        /* ]]> */

      </script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.2.2'
        id='contact-form-7-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'
        id='js-cookie-js'></script>
      <script type='text/javascript' id='woocommerce-js-extra'>
        /* <![CDATA[ */
        var woocommerce_params = {
          "ajax_url": "\/bookyourtravel\/travel-tours\/wp-admin\/admin-ajax.php",
          "wc_ajax_url": "\/bookyourtravel\/travel-tours\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */

      </script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.5.2'
        id='woocommerce-js'></script>
      <script type='text/javascript' id='wc-cart-fragments-js-extra'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
          "ajax_url": "\/bookyourtravel\/travel-tours\/wp-admin\/admin-ajax.php",
          "wc_ajax_url": "\/bookyourtravel\/travel-tours\/?wc-ajax=%%endpoint%%",
          "cart_hash_key": "wc_cart_hash_ca0fdc76f4b5901a2db9238cbe3480ae",
          "fragment_name": "wc_fragments_ca0fdc76f4b5901a2db9238cbe3480ae",
          "request_timeout": "5000"
        };
        /* ]]> */

      </script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.5.2'
        id='wc-cart-fragments-js'></script>
      <script type='text/javascript' id='wc-cart-fragments-js-after'>
        jQuery('body').bind('wc_fragments_refreshed', function () {
          var jetpackLazyImagesLoadEvent;
          try {
            jetpackLazyImagesLoadEvent = new Event('jetpack-lazy-images-load', {
              bubbles: true,
              cancelable: true
            });
          } catch (e) {
            jetpackLazyImagesLoadEvent = document.createEvent('Event')
            jetpackLazyImagesLoadEvent.initEvent('jetpack-lazy-images-load', true, true);
          }
          jQuery('body').get(0).dispatchEvent(jetpackLazyImagesLoadEvent);
        });

      </script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'
        id='jquery-ui-mouse-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/js/jquery/ui/slider.min.js?ver=1.11.4'
        id='jquery-ui-slider-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'
        id='jquery-ui-datepicker-js'></script>
      <script type='text/javascript' id='jquery-ui-datepicker-js-after'>
        jQuery(document).ready(function (jQuery) {
          jQuery.datepicker.setDefaults({
            "closeText": "Close",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July",
              "August", "September", "October", "November", "December"
            ],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug",
              "Sep", "Oct", "Nov", "Dec"
            ],
            "nextText": "Next",
            "prevText": "Previous",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
              "Saturday"
            ],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "dateFormat": "MM d, yy",
            "firstDay": 1,
            "isRTL": false
          });
        });

      </script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/js/jquery/ui/effect.min.js?ver=1.11.4'
        id='jquery-effects-core-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/lib/jquery.validate.min.js?ver=8.15.4'
        id='bookyourtravel-jquery-validate-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/lib/extras.jquery.validate.min.js?ver=8.15.4'
        id='bookyourtravel-extras-jquery-validate-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/lib/jquery.raty.min.js?ver=8.15.4'
        id='bookyourtravel-jquery-raty-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/lib/jquery.ajaxqueue.js?ver=8.15.4'
        id='bookyourtravel-ajaxqueue-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/header-ribbon.js?ver=8.15.4'
        id='bookyourtravel-header-ribbon-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/includes/plugins/lightSlider/js/jquery.lightSlider.js?ver=8.15.4'
        id='bookyourtravel-jquery-lightSlider-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/gallery.js?ver=8.15.4'
        id='bookyourtravel-gallery-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/tabs.js?ver=8.15.4'
        id='bookyourtravel-tabs-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/reviews.js?ver=8.15.4'
        id='bookyourtravel-reviews-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/inquiry.js?ver=8.15.4'
        id='bookyourtravel-inquiry-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/lib/infobox.min.js?ver=8.15.4'
        id='bookyourtravel-infobox-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/maps.js?ver=8.15.4'
        id='bookyourtravel-maps-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/lib/jquery.tablesorter.min.js?ver=1.0'
        id='bookyourtravel-tablesorter-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/extra-items.js?ver=8.15.4'
        id='bookyourtravel-extra-items-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/themes/BookYourTravel/js/lib/jquery.prettyPhoto.min.js?ver=8.15.4'
        id='bookyourtravel-prettyPhoto-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/js/hoverIntent.min.js?ver=1.8.1'
        id='hoverIntent-js'></script>
      <script type='text/javascript' id='megamenu-js-extra'>
        /* <![CDATA[ */
        var megamenu = {
          "timeout": "300",
          "interval": "100"
        };
        /* ]]> */

      </script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/megamenu/js/maxmegamenu.js?ver=2.9.1'
        id='megamenu-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-includes/js/wp-embed.min.js?ver=4b70993e99f0b789181420799b3b6c39'
        id='wp-embed-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce/assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js?ver=4.5.2'
        id='wc-jquery-ui-touchpunch-js'></script>
      <script type='text/javascript' id='wc-price-slider_33-js-before'>
        var woocs_is_mobile = 0;
        var woocs_special_ajax_mode = 0;
        var woocs_drop_down_view = "ddslick";
        var woocs_current_currency = {
          "name": "USD",
          "rate": 1,
          "symbol": "&#36;",
          "position": "right",
          "is_etalon": 1,
          "description": "USA dollar",
          "hide_cents": 0,
          "hide_on_front": 0,
          "flag": ""
        };
        var woocs_default_currency = {
          "name": "USD",
          "rate": 1,
          "symbol": "&#36;",
          "position": "right",
          "is_etalon": 1,
          "description": "USA dollar",
          "hide_cents": 0,
          "hide_on_front": 0,
          "flag": ""
        };
        var woocs_array_of_get = '{}';

        woocs_array_no_cents = '["JPY","TWD"]';

        var woocs_ajaxurl =
          "https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-admin/admin-ajax.php";
        var woocs_lang_loading = "loading";
        var woocs_shop_is_cached = 0;

      </script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce-currency-switcher/js/price-slider_33.js?ver=1.3.2'
        id='wc-price-slider_33-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce-currency-switcher/js/jquery.ddslick.min.js?ver=1.3.2'
        id='jquery.ddslick.min-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/woocommerce-currency-switcher/js/front.js?ver=1.3.2'
        id='woocommerce-currency-switcher-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.2.0'
        id='wpb_composer_front_js-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/js_composer/assets/lib/vc_waypoints/vc-waypoints.min.js?ver=6.2.0'
        id='vc_waypoints-js'></script>
      <script type='text/javascript'
        src='https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/plugins/mailchimp-for-wp/assets/js/forms.min.js?ver=4.8.1'
        id='mc4wp-forms-api-js'></script>
    </div>
  </div>
  <!--//page-wrap-->

</body>

</html>
