<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="dns-prefetch" href="//josephcrosmanplays532.github.io/">

<title>Video Studio</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="The Video Maker lets You make a video for YouTube for free! Drag &amp; drop or type &amp; go.  It's Fast, Fun, Easy and Free -  PHPWrapper!">

<meta property="og:site_name" content="GoAnimate for Schools">
<meta property="fb:app_id" content="122508887813978">
<meta name="google-site-verification" content="Vta3YTpj6Kx6u4p-EzeMArY0alNItkyUYYMvNM8seVI">


<link rel="stylesheet" href="//goanimateforschools.github.io/fonts/schoolfont.css">
<link rel="stylesheet" href="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/school/css/common_combined.css.gz.css">

<link rel="stylesheet" href="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/css/importer.css.gz.css">
<link rel="stylesheet" href="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/school/css/studio.css.gz.css">

<script>
var srv_tz_os = -4, view_name = "school", user_cookie_name = "u_info_school";
var user_country = "US";
</script>

<!--[if lt IE 9]>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/js/lib/html5shiv.js.gz.js"></script>
<![endif]-->
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/school/js/common_combined.js.gz.js"></script>
<script type="text/javascript" src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/po/goserver_js-en_US.json.gz.json"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>
<script src="https://vyondhosterremastered.000webhostapp.com.com/ajax/cookie_policy" async=""></script>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/js/movie.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/js/cookie.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/js/studio.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/js/jquery/jquery.tmpl.min.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/school/js/studio.js.gz.js"></script>

<!-- Google Knowledge Graph -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "GoAnimate",
    "url": "https://phpwrapper.herokuapp.com",
    "logo": "https://gawpstorage.s3.amazonaws.com/img/google_knowledge_graph_logo.jpg",
    "sameAs": [
        "https://www.facebook.com/GoAnimateInc",
        "https://twitter.com/GoAnimate",
        "https://www.linkedin.com/company/goanimate",
        "https://www.youtube.com/user/GoAnimate"
    ]
}
</script>

</head>
<body class="page-action-videomaker full_screen_studio" style="">
<script type="text/javascript">
if (self !== top) {
            jQuery('body').hide();
    }
</script>

<nav class="navbar site-nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <a class="navbar-brand" href="/" title="PHPWrapper">
                <img alt="GoAnimate for Schools" src="logo.png">
            </a>
        </div>

        <ul class="nav site-nav-alert-nav hidden-xs">
            <li>
                <a href="/messages" title="Messages"><span class="glyphicon glyphicon-envelope"></span><span class="count"></span></a>
            </li>
            <li>
                <a href="/notifications" title="Notifications"><span class="glyphicon glyphicon-bell"></span><span class="count"></span></a>
            </li>
        </ul>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Your Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/dashobard/videos">Dashboard</a></li>
                        <li><a href="/pages/html/list.html">Your Videos</a></li>
                        <li class="divider"></li>
                        <li><a href="/account">Account Settings</a></li>
                        <li><a href="/profile/you">Your Profile</a></li>
                        <li class="divider"></li>
                        <li><a class="logout-link" href="/logoff">Logout</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Explore <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/videos/browse.php">Videos</a></li>
                        <li class="divider"></li>
                        <li><a href="https://discord.io/goanimate4schools/">Joseph Animate 2021 Discord Server</a></li>
                        <li><a href="/faq">FAQ</a></li>
                    </ul>
                </li>
                <li>
                    <a class="hidden-sm hidden-md hidden-lg" href="/create.php">Make a Video</a>
                    <span class="site-nav-btn hidden-xs"><a class="btn btn-green" href="/create.php">Make a Video</a></span>
                </li>
            </ul>
        </div>
    </div>
</nav>
<link href="//goanimateforschools.github.io/fonts/schoolfont.css" rel="stylesheet" type="text/css">


<div style="position:relative;">
    <div id="studioBlock" style="height: 0px;"><!-- --></div>

    <div id="playerBlock"></div>
</div>

    <div id="previewPlayerContainer" style="display: none;">
        <div class="preview-player" id="previewPlayer">
            <h2>Powered by Vyond &amp; Kenny Animate</h2>
            
            <div id="playerdiv"><object data="https://web.archive.org/web/20200810111211im_/https://d3v4eglovri8yt.cloudfront.net/animation/66453a3ba2cc5e1b/player.swf" type="application/x-shockwave-flash" id="Player" width="640" height="360"><param name="quality" value="high"/><param name="scale" value="exactfit"/><param name="allowScriptAccess" value="always"/><param name="allowFullScreen" value="true"/><param name="wmode" value="window"/><param name="flashvars" value="movieOwner=&amp;movieOwnerId=&amp;movieId=&amp;ut=-1&amp;movieLid=8&amp;movieTitle=&amp;movieDesc=&amp;userId=&amp;username=&amp;uemail=&amp;apiserver=https%3A%2F%2Fga.vyond.com%2F&amp;thumbnailURL=&amp;copyable=0&amp;isPublished=0&amp;ctc=go&amp;tlang=en_US&amp;is_private_shared=0&amp;autostart=1&amp;appCode=go&amp;is_slideshow=0&amp;originalId=0&amp;is_emessage=0&amp;isEmbed=0&amp;refuser=&amp;utm_source=&amp;uid=&amp;isTemplate=1&amp;showButtons=0&amp;chain_mids=&amp;showshare=0&amp;averageRating=&amp;s3base=https%3A%2F%2Fs3.amazonaws.com%2Ffs.goanimate.com%2F%2Chttps%3A%2F%2Fassets.vyond.com%2F&amp;ratingCount=&amp;fb_app_url=https%3A%2F%2Fga.vyond.com%2F&amp;numContact=0&amp;isInitFromExternal=1&amp;storePath=https%3A%2F%2Fd3v4eglovri8yt.cloudfront.net%2Fstore%2F3a981f5cb2739137%2F%3Cstore%3E&amp;clientThemePath=https%3A%2F%2Fd3v4eglovri8yt.cloudfront.net%2Fstatic%2F55910a7cd204c37c%2F%3Cclient_theme%3E&amp;animationPath=https%3A%2F%2Fd3v4eglovri8yt.cloudfront.net%2Fanimation%2F66453a3ba2cc5e1b%2F&amp;startFrame=1"/><param name="movie" value="https://d3v4eglovri8yt.cloudfront.net/animation/66453a3ba2cc5e1b/player.swf"/></object></div>
            <div id="h5-playerdiv">
                <video class="hidden" id="h5-preview-player" width="100%" height="100%"></video>
                <div class="player-overlay loading">
                    <div class="loading-icon">
                        <div class="loading-message"></div>
                    </div>
                    <div class="replay-button"></div>
                </div>
                <div class="video-controls">
                    <div class="playback-button">
                        <div class="icon-image"></div>
                    </div>
                    <div class="seek-bar">
                        <div class="value-bar total-bar"></div>
                        <div class="value-bar buffered-bar"></div>
                        <div class="value-bar played-bar"></div>
                        <div class="slider-thumb"></div>
                        <div class="time-tooltip">00:00</div>
                    </div>
                    <div class="time-display">
                        <div class="text">00:00 / 00:00</div>
                    </div>
                    <div class="volume-control">
                        <div class="volume-icon">
                            <div class="icon-image"></div>
                        </div>
                        <div class="volume-slider">
                            <div class="slider-track">
                                <div class="track-value-bar"></div>
                            </div>
                            <div class="slider-thumb"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="preview-alert-block" class="preview-alert-block clearfix" style="display: none;">Auto-pause at end of scenes is not supported in our web video player.<br/>The auto-pause feature is supported once you download the video as presentation in the &#34;Share/Export&#34; overlay.</div>
            <div class="buttons clearfix">
                <button class="preview-button edit" type="button" onclick="switchBackToStudio();">Continue Editing</button>
                            </div>

            <a class="close_btn" href="#" onclick="switchBackToStudio(); return false;">×</a>
        </div>
    </div>

    <div class="video-tutorial" id="video-tutorial" style="display: none;">
        <div class="video-tutorial-body">
            <h2> </h2>
            <div class="video-tutorial-player">
                <div id="wistia_player" class="wistia_embed" style="width:860px;height:445px"> </div>
            </div>
            <a class="close_btn" href="#" onclick="return false;">×</a>
        </div>
        <div class="video-tutorial-footer clearfix">
            <button class="tutorial-button" type="button">
                Close            </button>
        </div>
    </div>
</div>

<div style="display:none">
    
</div>

<script>

    var hideHTMLBox = function() {
        window.close();
    };

    function tutorialStarted() {
    }
    function tutorialStep(sn) {
    }
    function tutorialCompleted() {
    }

    var enable_full_screen = true;

    var studio_data = {
        id: "Studio",
        swf: "https://josephcrosmanplays532.github.io/static/animation/go_full.swf",
        width: "100%",
        height: "100%",

        align: "middle",
        allowScriptAccess: "always",
        allowFullScreen: "true",
        wmode: "window",

        hasVersion: "10.3"
    };

    if (!enable_full_screen) {
        studio_data.width  = 960;
        studio_data.height  = 630;
        resize_studio = false;
    }

studio_data.flashvars = {"movieId":"","loadas":0,"presaveId":"<?php include_once("../goapi/function/videoId.php"); if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo $id + 1; } ?><?php if (isset($_GET["video"])) { echo "&movieId={$_GET["video"]}"; } ?>","asId":"","originalId":"","apiserver":"https:\/\/vyond2018.herokuapp.com\/","storePath":"https:\/\/josephcrosmanplays532.github.io\/store\/4e75f501cfbf51e3\/<store>","clientThemePath":"https:\/\/josephcrosmanplays532.github.io\/static\/642cd772aad8e952\/<client_theme>","animationPath":"https:\/\/josephcrosmanplays532.github.io\/animation\/cce25167cb1d3404\/","userId":"0DyHqK6Yj9dM","username":"good bois","uemail":"crazy suitcase","numContact":"0","ut":23,"ve":false,"isEmbed":0,"nextUrl":"\/movie\/<movieId>\/0\/1","bgload":"https:\/\/josephcrosmanplays532.github.io\/animation\/cce25167cb1d3404\/go_full.swf","lid":"1","ctc":"go","themeColor":"silver","tlang":"en_US","siteId":"1","templateshow":"false","forceshow":"false","appCode":"go","lang":"en","tmcc":"192","fb_app_url":"https:\/\/goanimate4schools.herokuapp.com\/","is_published":"1","is_private_shared":"0","upl":1,"role":"student","hb":"1","pts":"0","msg_index":"","ad":0,"has_asset_bg":0,"has_asset_char":0,"initcb":"studioLoaded","retut":0,"s3base":"https:\/\/s3.amazonaws.com\/fs.goanimate.com\/","st":"","uisa":0,"u_info_school":"OjI6a2JxQzN0MFNSKzFTYW4wTENRc01PZ2N6TURkZ0J3OWFmTzRjeW9aS3l1ak04MCtnUE5CUFo3Y0hmT0JDZndlMDlCM1V0VVVfc05pTU41cGVHYXpKOXV4YVpPZG9icHNoMHNHZmtiWjMxRnpTYlFXNDdPNHk0PQ==","tm":"FIN","tray":"custom","uplp":0,"isWide":1};

var _ccad = null;

function proceedWithFullscreenStudio() {
    // These should be executed only when we are really ready to show the studio
    window.onbeforeunload = function(e) {
        var e = e || window.event;
        var msg = null;
        if (loadedFullscreenStudio && studioApiReady) {
            msg = 'You are about to lose all your unsaved changes in the studio.';
        }
        if (e && msg != null) {
            e.returnValue = msg;
        }

        if (msg != null) {
            return msg;
        }
    };

    $('div#studioBlock').css('height', '0px');
    $('#studio_holder').flash(studio_data);
    full_screen_studio();

    ajust_studio();
}


    var studioApiReady = false;
    var videoTutorial = null;

    function studioLoaded() {
        studioApiReady = true;
        $(document).trigger('studioApiReady');
    };
    $(document).ready(function() {
        if (enable_full_screen) {

            if (!true) {
                $('#studio_container').css('top', '0px');
            }
            $('#studio_container').show();
            $('.site-footer').hide();
            $('#studioBlock').css('height', '1800px');

            if (false) {
                checkCopyMovie('javascript:proceedWithFullscreenStudio()', '');
            } else if (false) {
                checkEditMovie('');
            } else {
                proceedWithFullscreenStudio();
            }

            $(window).on('resize', function() {
                ajust_studio();
            });
            $(window).on('studio_resized', function() {
                if (show_cc_ad) {
                    _ccad.refreshThumbs();
                }
            });

            if (studioApiReady) {
                var api = studioApi($('#studio_holder'));
                api.bindStudioEvents();
            }
            $('.ga-importer').prependTo($('#studio_container'));
        } else {
            $('#studioBlock').flash(studio_data);
        }
        // Video Tutorial
        videoTutorial = new VideoTutorial($("#video-tutorial"));
    })
    // restore studio when upsell overlay hidden
    .on('hidden', '#upsell-modal', function(e) {
        if ($(e.target).attr('id') == 'upsell-modal') {
            restoreStudio();
        }
    })
    .on('studioApiReady', function() {
        var api = studioApi($('#studio_holder'));
        api.bindStudioEvents();
    })
    jQuery("#previewPlayerContainer, #video-tutorial").hide();

    function initPreviewPlayer(dataXmlStr, startFrame) {
        savePreviewData(dataXmlStr);

        if (typeof startFrame == 'undefined') {
            startFrame = 1;
        } else {
            startFrame = Math.max(1, parseInt(startFrame));
        }

        previewSceen();
        jQuery("#previewPlayerContainer").show();

        createPreviewPlayer("playerdiv", {
            height: 360,
            width: 640,
            player_url: "https://josephcrosmanplays532.github.io/static/animation/player.swf",
            quality: "medium"
        }, {
            movieOwner: "", movieOwnerId: "", movieId: "", ut: "-1",
            movieLid: "8", movieTitle: "", movieDesc: "", userId: "", username: "", uemail: "",
            apiserver: "https://goanimate4schools.herokuapp.com/", thumbnailURL: "", copyable: "0", isPublished: "0", ctc: "go", tlang: "en_US", is_private_shared: "0",
            autostart: "1", appCode: "go", is_slideshow: "0", originalId: "0", is_emessage: "0", isEmbed: "0", refuser: "",
            utm_source: "", uid: "", isTemplate: "1", showButtons: "0", chain_mids: "", showshare: "0", averageRating: "",
                        s3base: "https://s3.amazonaws.com/fs.goanimate.com/",
                        ratingCount: "", fb_app_url: "https://goanimate4schools.herokuapp.com/", numContact: 0, isInitFromExternal: 1, storePath: "https://josephcrosmanplays532.github.io/store/4e75f501cfbf51e3/<store>", clientThemePath: "https://josephcrosmanplays532.github.io/static/642cd772aad8e952/<client_theme>", animationPath: "https://josephcrosmanplays532.github.io/animation/cce25167cb1d3404/",
            startFrame: startFrame
        });
    }
    function switchBackToStudio() {
        try {
            (jQuery("#previewPlayerContainer #Player").get(0) || {pause:function(){}}).pause();
        } catch (err) {};
        jQuery("#previewPlayerContainer").hide();
        restoreStudio();
        document.getElementById("Studio").onExternalPreviewPlayerCancel();
    }
    function publishStudio() {
        try {
            (jQuery("#previewPlayerContainer #Player").get(0) || {pause:function(){}}).pause();
        } catch (err) {};
        jQuery("#previewPlayerContainer").hide();
        restoreStudio();
        document.getElementById("Studio").onExternalPreviewPlayerPublish();
    }
    function exitStudio(share) {
        loadedFullscreenStudio = false;
    }

    VideoTutorial.tutorials.composition = {
        title: 'Composition Tutorial',
        wistiaId: 'nuy96pslyp',
    };
    VideoTutorial.tutorials.enterexit = {
        title: 'Enter and Exit Effects Tutorial',
        wistiaId: 'fvjsa3jnzc',
    }
</script>

<script id="importer-file-tmpl" type="text/x-jquery-tmpl">
    <li class="ga-importer-file clearfix fade">
        <div class="ga-importer-file-icon"><div class="ga-importer-file-progress-bar"><div class="upload-progress"></div></div></div>
        <div class="ga-importer-file-body">
            <div class="filename"></div>
            <div class="actions clearfix">
                <span class="menu"></span>
                <span class="category"></span>
                <a class="cancel" href="#" data-action="cancel-upload" title="Cancel">&times;</a>
                <a class="add-to-scene" href="#" data-action="add-to-scene">Add to scene</a>
                <span class="processing">Processing. Please wait...</span>
                <span class="error"></span>
            </div>
        </div>
    </li>
</script>

<script id="importer-select-sound-tmpl" type="text/x-jquery-tmpl">
    <div class="dropdown">
        <a class="import-as-btn dropdown-toggle" data-toggle="dropdown" href="#">Import as <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
            <li><a tabindex="-1" href="#" data-subtype="bgmusic">Music</a></li>
            <li><a tabindex="-1" href="#" data-subtype="soundeffect">Sound Effect</a></li>
            <li><a tabindex="-1" href="#" data-subtype="voiceover">Voice-Over</a></li>
        </ul>
    </div>
</script>

<script id="importer-select-prop-tmpl" type="text/x-jquery-tmpl">
    <div class="dropdown">
        <a class="import-as-btn dropdown-toggle" data-toggle="dropdown" href="#">Import as <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
            <li><a tabindex="-1" href="#" data-subtype="prop">Prop</a></li>
            <li><a tabindex="-1" href="#" data-subtype="bg">Background</a></li>
        </ul>
    </div>
</script>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/school/js/importer.js.gz.js"></script>
<script>window.searchTermsDataUrl = 'https://josephcrosmanplays532.github.io/store/4e75f501cfbf51e3/common/terms.json';</script>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/js/search-suggestion.js.gz.js"></script>

<script>
ImporterFile.defaults.options.accept_mime = ["image\/png","image\/jpeg","image\/gif","image\/bmp","audio\/mpeg","audio\/wav","audio\/x-wav","audio\/vnd.wave","audio\/wave","audio\/mp3","audio\/mp4","audio\/ogg","audio\/vorbis","audio\/aac","audio\/m4a","audio\/x-m4a","application\/x-shockwave-flash","video\/mp4","video\/mpeg4","video\/x-flv","video\/x-ms-wmv","application\/mp4"];
ImporterFile.defaults.options.restricted_mime = [];
</script>

<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js"></script><style id="wistia_19_style" type="text/css" class="wistia_injected_style">
@font-face {
font-family: 'WistiaPlayerOverpassNumbers';
src: url(data:application/x-font-ttf;charset=utf-8;base64,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);
}
</style><style id="wistia_19_style" type="text/css" class="wistia_injected_style">
@font-face {
font-family: 'WistiaPlayerOverpassNumbers';
src: url(data:application/x-font-ttf;charset=utf-8;base64,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);
}
</style>

<footer class="site-footer hidden-print" style="display: none;">
    <div class="container">
        <div class="row site-footer-nav">
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>About GoAnimate</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://josephcrosmanplays532.github.io/about">Who We Are</a></li>
                        <li><a href="https://josephcrosmanplays532.github.io/contactus">Contact Us</a></li>
                        <li><a href="https://josephcrosmanplays532.github.io/video-maker-tips">Blog</a></li>
                        <li><a href="/faq">FAQ</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>GoAnimate Solutions</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://goanimateforschools.github.io/" target="_blank">GoAnimate for Schools</a></li>
                        <li class="hidden-xs">&nbsp;</li>
                        <li class="hidden-xs">&nbsp;</li>
                        <li class="hidden-xs">&nbsp;</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>Usage Guidelines</h5>
                    <ul class="list-unstyled">
                        <li><a href="/termsofuse">Terms of Service</a></li>
                        <li><a href="/privacy">Privacy Policy</a></li>
                        <li class="hidden-xs">&nbsp;</li>
                        <li class="hidden-xs">&nbsp;</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>Getting Help</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://discord.io/goanimate4schools">Joseph Animate 2021 Discord Server</a></li>
                        <li><a href="https://help.vyond.com/hc/en-us">Help Center</a></li>
                        <li class="hidden-xs">&nbsp;</li>
                        <li class="hidden-xs">&nbsp;</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>

        <div class="row site-footer-copyright">
            <div class="col-sm-6">
                <div class="site-footer-socials-container">
                    Follow us on:
                    <ul class="site-footer-socials clearfix">
                        <li><a class="facebook" href="https://www.facebook.com/GoAnimateInc">Facebook</a></li>
                        <li><a class="twitter" href="https://twitter.com/Go4Schools">Twitter</a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com/company/goanimate">Linked In</a></li>
                        <li><a class="youtube" href="https://www.youtube.com/user/GoAnimate">YouTube</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="pull-right">
                    <img src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/school/img/site/logo_amazon.png" alt="AWS Partner Network">
                    &nbsp;&nbsp;&nbsp;
                    GoAnimate © 2018
                </div>
            </div>
        </div>

    </div>
</footer>


<div id="studio_container" style="width: 960px; height: 717px;"><div class="ga-importer">
        <div class="ga-importer-header">
            <form class="ga-importer-base-form" action="/ajax/saveUserProp" method="post">
                <a class="ga-importer-collapse" href="#" title="Collapse" onclick="hideImporter(); return false;">×</a>
                <div class="fileinputs">
                    <div class="importer-button file-trigger" style="width:140px;">SELECT FILES</div>
                    <input class="ga-importer-file-input" type="file" name="file" multiple="">
                </div>
                <span class="hints">
                    <i class="i-help"></i>
                    <div class="tooltip in" style="display:none;">
                        <div class="tooltip-arrow"></div>
                        <div class="tooltip-inner">
                            <ul>
                                <li>Maximum file size: 15MB</li>
                                <li>Images: JPG, PNG<br>To cover the whole stage in a 1080p video, use an image at least 1920px x 1080px.</li>
                                <li>Audio: MP3, WAV, M4A</li>
                                    <li>Video: MP4, SWF.</li>
                                </ul>
                        </div>
                    </div>
                </span>
                <input type="hidden" name="subtype" value="">
            </form>
        </div>
        <div class="ga-importer-content" style="height: 666px;">
            <div class="ga-importer-start">
                <div class="ga-importer-start-draghere">Drag files here</div>
                <div class="ga-importer-instruction general">
                    <ul>
                        <li><strong>Maximum file size:</strong> 15MB</li>
                        <li><strong>Images:</strong> JPG, PNG<br>To cover the whole stage in a 1080p video, use an image at least 1920px x 1080px.</li>
                        <li><strong>Audio:</strong> MP3, WAV, M4A</li>
                            <li><strong>Video:</strong> MP4, SWF. For more information about uploading SWF files, please click <a href="#" onclick="$('.ga-importer-instruction').toggle(); return false;">here</a>.</li>
                        </ul>
                </div>
                <div class="ga-importer-instruction for-swf" style="display: none;">
                    <p class="text-center"><b>For a .swf file</b></p>
                    <ul>
                        <li><strong>Frame rate:</strong> 24 frames per second</li>
                        <li><strong>Flash Player version:</strong> 9</li>
                        <li><strong>Load order:</strong> Bottom up</li>
                        <li><strong>Action Script version:</strong> 3.0<br>You may use limited frame-navigation functions in ActionScript functions like "gotoAndPause", "pause" or "play". Please note that ActionScript functions may create problems when users watch a video and drag the player timeline manually.</li>
                        <li><strong>Content positioning:</strong> Place the center of your prop at the origin of your stage (i.e. x=0 and y=0).</li>
                    </ul>
                    <div class="text-center"><a href="#" onclick="$('.ga-importer-instruction').toggle(); return false;">Back</a></div>
                </div>
            </div>
            <div class="ga-importer-results">
                <div class="ga-importer-notice clearfix"><span class="ga-importer-notice-count pull-left">0 file have been added to Your Library.</span> <a class="ga-importer-notice-clear pull-right" href="#">Clear</a></div>
                <ul class="ga-importer-files"></ul>
            </div>
            <div class="ga-importer-queue-message">
                Assign a category to start importing
                <span class="hints pull-right">
                    <i class="i-help"></i>
                    <div class="tooltip in" style="display:none;">
                        <div class="tooltip-arrow"></div>
                        <div class="tooltip-inner">
                            <p>Imported files are categorized to simplify browsing.</p>
                            <p>Use the "IMPORT AS" drop down to see the available categories based on the format of the file you import.</p>
                        </div>
                    </div>
                </span>
            </div>
            <ul class="ga-importer-queue"></ul>
        </div>
        <div class="ga-import-dnd-hint">
            Release to start uploading        </div>
    </div>
    <div id="studio_holder" style="width: 960px;"><object data="https://josephcrosmanplays532.github.io/static/animation/go_full.swf" type="application/x-shockwave-flash" id="Studio" width="100%" height="100%">
	<!-- The flashvars are a huge mess, have fun looking at them. :) -->
	<param name="flashvars" value="apiserver=https://vyond2018.herokuapp.com/&storePath=https://josephcrosmanplays532.github.io/static/store/<store>&isEmbed=1&ctc=go&ut=60&bs=default&appCode=go&page=&siteId=go&lid=13&isLogin=Y&retut=1&clientThemePath=https://josephcrosmanplays532.github.io/static/<client_theme>&themeId=custom&tlang=en_US&presaveId=<?php include_once("../goapi/function/videoId.php"); if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo $id + 1; } ?><?php if (isset($_GET["video"])) { echo "&movieId={$_GET["video"]}"; } ?>&goteam_draft_only=1&isWide=1&collab=0&nextUrl=./browse.php&tray=custom">
	<param name="allowScriptAccess" value="always">
	<param name="allowFullScreen" value="true">
</object></div>
</div>



</body></html>
