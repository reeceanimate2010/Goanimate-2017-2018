<html><head>

<meta charset="utf-8">
<title>Comedy World Template | Slices of Daily Life | PHPWrapper</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="description" content="With PHPWrapper Quick App you can make your own video with just a few clicks and some typing on your keyboard. It's dead simple and fun!">

<meta name="google-site-verification" content="K_niiTfCVi72gwvxK00O4NjsVybMutMUnc-ZnN6HUuA">

<link href="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/css/buttons.css.gz.css" rel="stylesheet" type="text/css">
<link href="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/css/script2cartoon/everydaylife.css.gz.css" rel="stylesheet" type="text/css">
<link href="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/css/script2cartoon/school_golite.css.gz.css" rel="stylesheet" type="text/css">
<link href="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/css/script2cartoon/voiceselectionwidget.css.gz.css" rel="stylesheet" type="text/css">
<link href="https://goanimateforschools.github.io/fonts/schoolfont.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<link href="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/css/script2cartoon/ie.css.gz.css" rel="stylesheet" type="text/css">
<![endif]-->

<script type="text/javascript" src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/js/jquery/jquery-1.4.4.min.js.gz.js"></script>
<script type="text/javascript" src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/js/jquery/jquery.blockUI.js.gz.js"></script>
<script type="text/javascript" src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/js/jquery/jquery.scrollTo.min.js.gz.js"></script>
<script type="text/javascript" src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/js/jquery/jquery.jplayer.min.js.gz.js"></script>
<script type="text/javascript" src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/js/jquery/jquery.tmpl.min.js.gz.js"></script>
<script type="text/javascript" src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/js/lite.js.gz.js"></script>
<script type="text/javascript" src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/js/voiceselectionwidget.js.gz.js"></script>
<script type="text/javascript" src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/js/Gettext.js.gz.js"></script>
<script type="text/javascript" src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/po/goserver_js-en_US.json.gz.json"></script>
<script type="text/javascript">
var srv_tz_os = -4;
var view_name = "school";
var user_cookie_name = "u_info";
var golite_theme = "everydaylife";
var publish_setting = 'public';

var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>

</head>
<body id="school">
<script type="text/javascript">
GoLite.settings.player = {
    swf: "https://josephcrosmanplays532.github.io/static/animatio/player.swf",
    height: 384,
    width: 550
}
GoLite.settings.thumbnailChooser = {
    swf: "https://josephcrosmanplays532.github.io/animation/cce25167cb1d3404/thumbnailChooser.swf",
    height: 170,
    width: 295
}

VoiceRecorder.defaultSettings.swf = "https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/common/dialog/MyMicRecorder.swf";
jQuery.extend(VoiceRecorder.defaultSettings.flashvars, {
    apiserver: "/",
    clientThemePath: "https://josephcrosmanplays532.github.io/static/642cd772aad8e952/<client_theme>",
    u_info_school: "OjI6eThLWkNlQzFaNm12ekJUdUNrNmpSQURJdDltalRQWmhrdDlnWE5xVklubXVXejJGblhMQjZOTm1vbGVUNzlhYW5yblAwOFR0Yjk0WUZ0NUFaOWhBUE9hVE4wdWE4cGhNck9BQXB3bTMrVGV6MDVOK3hkd1ZjPQ=="
});

// scroll to target step
function stepTo(step) {
    var settings = {
        duration: 1500,
        offset: {top: 10}
    };
    // auto focus dialog input
    if (step == '#step3') {
        settings.onAfter = function() { jQuery('#dialogs .focus .dialog_input').focus(); };
    }
    jQuery.scrollTo(step, settings);
}

</script>
<div id="bg"></div>
<div id="container">
<div id="nav_links" style="display: block;">
    <div class="inside">
        <ul>
            <li class="home" title="Back to Home"><a href="/create.php" onclick="return confirm('You will lose your work if you leave this page. Are you sure?');">Home</a></li>
            <li class="seperate">&nbsp;</li>
            <li class="intro"><a onclick="stepTo('#intro')">0</a></li>
            <li class="step1"><a onclick="stepTo('#step1');">1</a></li>
            <li class="step2"><a onclick="stepTo('#step2');">2</a></li>
            <li class="step3 on"><a onclick="stepTo('#step3');">3</a></li>
            <li class="step4"><a onclick="GoLite.preview();stepTo('#step4');">4</a></li>
            <li class="seperate">&nbsp;</li>
            <li class="next" title="Next step"><a>Next</a></li>
            <li class="prev" title="Previous step"><a>Previous</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>


<div id="login_bar" style="display:none">
	<div class="inside">
		The PHPWrapper Quick Video Maker Revival is currently in beta right now.		<div class="options">
			<a href="/" onclick="return confirm('You will lose your work if you leave this page. Are you sure?');">Home</a> -
			<a href="/characters/browse.php?theme=family" onclick="return confirm('You will lose your work if you leave this page. Are you sure?');">Create a Character</a> -
			<a href="/create.php" onclick="return confirm('You will lose your work if you leave this page. Are you sure?');">Make a Video</a>
		</div>
	</div>
</div>
    
    
<div id="intro" class="section">
    <div class="inside">
        <h1 class="hide">Slices of Daily Life</h1>
        <p>GoAnimate brings you a collection of scenes from daily life for you to re-enact and make up comical, satirical or even dramatic stories.</p>
        <p>The drill? 1. Select a template / 2. Choose characters / 3. Pull a script out of your best life observations / 4. Watch your masterpiece!</p>
    </div>

    <a class="btn_next" href="#step1" onclick="stepTo('#step1'); return false;">Next</a>
</div>

<div id="seperator0"></div>

<div id="step1" class="section">
    <h2>1. Choose a Setting</h2>

    <a class="previous_step" href="#intro" onclick="stepTo('#intro'); return false;">Back</a>

    <div class="inside">
        <div id="template_name">Chilling Out in the Office</div>
        <div id="template_desc">Your characters are taking a break from a stressful day in the pantry. Now what could they be talking about?!</div>
        <div id="templates" class="item_selector">
            <a class="select_button prev" href="#">&lt;</a>
            <div class="items">
                <div class="item" data-tid="0RQRwrb_54Us" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124123.jpg" title="Honey. We have to talk..." data-desc="It's time for serious couple talk... or maybe not. This is just a bedroom chat." data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg01_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg01_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg01.jpg">
                </div>
                <div class="item" data-tid="0l87L_vwbfMM" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124124.jpg" title="You forgot the eggs, didn't you!?" data-desc="Get imaginative. You need to deal with this kitchen face-off." data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg02_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg02_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg02.jpg">
                </div>
                <div class="item selected" data-tid="0nZrWjgxqytA" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124125.jpg" title="Chilling Out in the Office" data-desc="Your characters are taking a break from a stressful day in the pantry. Now what could they be talking about?!" data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg03_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg03_b.jpg">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg03.jpg">
                </div>
                <div class="item" data-tid="0ksXlNHEjspI" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124126.jpg" title="B.F.D.E.?" data-desc="Is this going to be the best or the worst first date ever? Or... is it just not a first date at all? Up to you!" data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg05_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg05_b.jpg">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg05.jpg">
                </div>
                <div class="item" data-tid="09QnavQrm0dU" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124127.jpg" title="I'll get a small latte..." data-desc="Small? You mean tall, right? Or maybe you want to spend a little more for a Grande?!" data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg08_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg08_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg08.jpg">
                </div>
                <div class="item" data-tid="0xflAvM8ERQQ" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124128.jpg" title="Emergency coffee shop meeting" data-desc="A friend in distress asked to meet in a coffee shop. Now, what's all this about?" data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg09_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg09_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg09.jpg">
                </div>
                <!--<div class="item" data-tid="0BVv0No9N3qI" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124129.jpg" title="A round for everyone!" data-desc="Why is it that everyone loves to tell their life story to bartenders?" data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg10_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg10_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg10.jpg">
                </div>-->
                <div class="item" data-tid="0uXrmLS6VVUg" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124130.jpg" title="Done your homework?" data-desc="The bell has rung, but the teacher won't end class until the students answer some tough questions." data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg15_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg15_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step01/bg15.jpg">
                </div>
                <div class="item" data-tid="0H2Frh7BBGmA" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124131.jpg" title="Subway Encounter" data-desc="Talking to strangers in the subway sounds like a great idea... NOT! Well. It happens anyways..." data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg16_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg16_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg16.jpg">
                </div>
                <div class="item" data-tid="0uVFaGOBrfHI" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124132.jpg" title="The President" data-desc="It's the oval office. It's time to let the president know what you really think... Let it all out." data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg04_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg04_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg04.jpg">
                </div>
                <div class="item" data-tid="0NQ88JTAJm4I" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124133.jpg" title="Got any grapes?" data-desc="Now what's with that customer again. Some kind of weird request?" data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg06_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg06_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg06.jpg">
                </div>
                <!--<div class="item" data-tid="0OgqovHxGjZI" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124134.jpg" title="Do not disturb..." data-desc="Imagine sitting on a toilet and someone bursts into the bathroom!... Done? Now, animate the conversation!" data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg07_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg07_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg07.jpg">
                </div>-->
                <div class="item" data-tid="0vq8xZhq6D5g" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124135.jpg" title="Are you on the list?" data-desc="Striking a conversation while queuing up to get into the new trendy place in town." data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg11_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg11_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg11.jpg">
                </div>
                <div class="item" data-tid="0J4ki2ZURTVY" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124136.jpg" title="Step aside, Sir!" data-desc="A passenger sets the alarm off at the airport security check. Animate the ensuing discussion with the security officer." data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg12_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg12_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg12.jpg">
                </div>
                <div class="item" data-tid="0VqO7WZa6s6U" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124137.jpg" title="She looks better on TV" data-desc="Watching the latest performance from a popular singer, it's hard not to make comments throughout the show." data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg13_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg13_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg13.jpg">
                </div>
                <div class="item" data-tid="06K7KyoeDc_c" data-thumb="https://s3.amazonaws.com/fs.goanimate4schools.com/files/thumbnails/movie/532/60532/124138.jpg" title="Where's the pilot?" data-desc="Flying in a 747 commercial airplane across the world is piece of cake... as long as you're not in the pilot seat. Oh boy!..." data-char-thumb-a="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg14_a.jpg" data-char-thumb-b="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/school/img/script2cartoon/everydaylife/step02/thumbs/bg14_b.jpg" data-plus="true">
                    <img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step01/bg14.jpg">
                </div>
            </div>
            <a class="select_button next" href="#">&gt;</a>
        </div>
    </div>

    <a class="btn_next" href="#step2" onclick="stepTo('#step2'); return false;">Next</a>
    <div class="upgrade" style="display: none;">
        <a href="javascript:popUpgrade();" class="buttonbase buttonblue dark" style="margin:0 auto;float:none;display:block;">
<div class="buttontitle">Upgrade Now</div>
</a>
    </div>
</div>

<div id="seperator1"></div>

<div id="step2" class="section">
    <h2>2. Select Your Actors</h2>

    <a class="previous_step" href="#step1" onclick="stepTo('#step1'); return false;">Back</a>

    <div class="inside">
        <div class="character">
            <div id="character1_title" class="title"><img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step02/thumbs/bg03_a.jpg" alt=""></div>
            <div id="character1" class="item_selector character_selector">
                <a class="select_button prev" href="#">&lt;</a>
                <div class="items">
                    <div class="item selected" data-cid="0C8xO7kYl65U" data-name="" data-voice="joey" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487299.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487299.png" alt=""></span></div>
                    <div class="item" data-cid="0z1JxKx6sGek" data-name="" data-voice="amy" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487300.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487300.png" alt=""></span></div>
                    <div class="item" data-cid="0a6L9Az1X_7U" data-name="" data-voice="brian" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487301.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487301.png" alt=""></span></div>
                    <div class="item" data-cid="0Z6jBNZQ0Eac" data-name="" data-voice="eric" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487302.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487302.png" alt=""></span></div>
                    <div class="item" data-cid="0QZgCi2tZf2E" data-name="" data-voice="emma" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487303.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487303.png" alt=""></span></div>
                    <div class="item" data-cid="0hxu4pGuL0ns" data-name="" data-voice="eric" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487304.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487304.png" alt=""></span></div>
                    <div class="item" data-cid="0803WH6cvZug" data-name="" data-voice="jennifer" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487305.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487305.png" alt=""></span></div>
                    <div class="item" data-cid="0o8Yyunbixs4" data-name="" data-voice="brian" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487306.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487306.png" alt=""></span></div>
                    <div class="item" data-cid="0-EftFs07HKM" data-name="" data-voice="brian" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487307.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487307.png" alt=""></span></div>
                    <div class="item" data-cid="0jvXC7ies6p8" data-name="" data-voice="joey" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487308.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487308.png" alt=""></span></div>
                    <div class="item" data-cid="0Xay3rNbNiqY" data-name="" data-voice="joey" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487309.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487309.png" alt=""></span></div>
                    <div class="item" data-cid="0x1VUfBwAUUk" data-name="" data-voice="kimberly" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487310.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487310.png" alt=""></span></div>
                    <div class="item" data-cid="0P-T7QnCDoh8" data-name="" data-voice="joey" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487311.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487311.png" alt=""></span></div>
                    <div class="item" data-cid="0pyRezQ1El6k" data-name="" data-voice="kendra" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487312.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487312.png" alt=""></span></div>
                    <div class="item" data-cid="0i5nxYaBNv54" data-name="" data-voice="eric" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487313.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487313.png" alt=""></span></div>
                    <div class="item" data-cid="0bn3URIMd9Ys" data-name="" data-voice="brian" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487314.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487314.png" alt=""></span></div>
                    <div class="item" data-cid="0_PllkZdhn-o" data-name="" data-voice="eric" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487317.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487317.png" alt=""></span></div>
                    <div class="item" data-cid="0KXVWGDHGVqI" data-name="" data-voice="emma" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487318.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487318.png" alt=""></span></div>
                    <div class="item" data-cid="09y_C1g2vRvI" data-name="" data-voice="kimberly" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487319.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487319.png" alt=""></span></div>
                    <div class="item" data-cid="02DzR0IbvoAg" data-name="" data-voice="amy" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487320.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487320.png" alt=""></span></div>
                    <div class="item" data-cid="0jHfmHZDbd4k" data-name="" data-voice="eric" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487321.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487321.png" alt=""></span></div>
                    <div class="item" data-cid="0i3FiP4mEBI4" data-name="" data-voice="eric" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487322.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487322.png" alt=""></span></div>
                    <div class="item" data-cid="0yeqP-cf9peg" data-name="" data-voice="emma" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487323.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487323.png" alt=""></span></div>
                    <div class="item" data-cid="0wXKa9CK1ZiE" data-name="" data-voice="brian" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487324.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487324.png" alt=""></span></div>
                </div>
                <a class="select_button next" href="#">&gt;</a>
            </div>
            <div class="name"></div>

        </div>

        <div class="character">
            <div id="character2_title" class="title"><img src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/img/script2cartoon/everydaylife/step02/thumbs/bg03_b.jpg" alt=""></div>
            <div id="character2" class="item_selector character_selector">
                <a class="select_button prev" href="#">&lt;</a>
                <div class="items">
                    <div class="item" data-cid="0C8xO7kYl65U" data-name="" data-voice="joey" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487299.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487299.png" alt=""></span></div>
                    <div class="item selected" data-cid="0z1JxKx6sGek" data-name="" data-voice="amy" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487300.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487300.png" alt=""></span></div>
                    <div class="item" data-cid="0a6L9Az1X_7U" data-name="" data-voice="brian" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487301.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487301.png" alt=""></span></div>
                    <div class="item" data-cid="0Z6jBNZQ0Eac" data-name="" data-voice="eric" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487302.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487302.png" alt=""></span></div>
                    <div class="item" data-cid="0QZgCi2tZf2E" data-name="" data-voice="emma" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487303.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487303.png" alt=""></span></div>
                    <div class="item" data-cid="0hxu4pGuL0ns" data-name="" data-voice="eric" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487304.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487304.png" alt=""></span></div>
                    <div class="item" data-cid="0803WH6cvZug" data-name="" data-voice="jennifer" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487305.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487305.png" alt=""></span></div>
                    <div class="item" data-cid="0o8Yyunbixs4" data-name="" data-voice="brian" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487306.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487306.png" alt=""></span></div>
                    <div class="item" data-cid="0-EftFs07HKM" data-name="" data-voice="brian" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487307.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487307.png" alt=""></span></div>
                    <div class="item" data-cid="0jvXC7ies6p8" data-name="" data-voice="joey" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487308.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487308.png" alt=""></span></div>
                    <div class="item" data-cid="0Xay3rNbNiqY" data-name="" data-voice="joey" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487309.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487309.png" alt=""></span></div>
                    <div class="item" data-cid="0x1VUfBwAUUk" data-name="" data-voice="kimberly" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487310.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487310.png" alt=""></span></div>
                    <div class="item" data-cid="0P-T7QnCDoh8" data-name="" data-voice="joey" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487311.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487311.png" alt=""></span></div>
                    <div class="item" data-cid="0pyRezQ1El6k" data-name="" data-voice="kendra" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487312.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487312.png" alt=""></span></div>
                    <div class="item" data-cid="0i5nxYaBNv54" data-name="" data-voice="eric" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487313.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487313.png" alt=""></span></div>
                    <div class="item" data-cid="0bn3URIMd9Ys" data-name="" data-voice="brian" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487314.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487314.png" alt=""></span></div>
                    <div class="item" data-cid="0_PllkZdhn-o" data-name="" data-voice="eric" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487317.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487317.png" alt=""></span></div>
                    <div class="item" data-cid="0KXVWGDHGVqI" data-name="" data-voice="emma" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487318.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487318.png" alt=""></span></div>
                    <div class="item" data-cid="09y_C1g2vRvI" data-name="" data-voice="kimberly" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487319.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487319.png" alt=""></span></div>
                    <div class="item" data-cid="02DzR0IbvoAg" data-name="" data-voice="amy" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487320.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487320.png" alt=""></span></div>
                    <div class="item" data-cid="0jHfmHZDbd4k" data-name="" data-voice="eric" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487321.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487321.png" alt=""></span></div>
                    <div class="item" data-cid="0i3FiP4mEBI4" data-name="" data-voice="eric" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487322.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487322.png" alt=""></span></div>
                    <div class="item" data-cid="0yeqP-cf9peg" data-name="" data-voice="emma" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487323.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487323.png" alt=""></span></div>
                    <div class="item" data-cid="0wXKa9CK1ZiE" data-name="" data-voice="brian" data-thumb="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487324.png"><span><img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/532/60532/2487324.png" alt=""></span></div>
                </div>
                <a class="select_button next" href="#">&gt;</a>
            </div>
            <div class="name"></div>

        </div>
    </div>
	    
    <div class="snippets" style="display: none">
        <strong class="plus-char-txt">GoPlus Character</strong>
        <div class="plus-cover"><div><strong>GoPlus Template</strong> Upgrade to GoPlus to go to the next step.</div></div>
        <div class="item" data-cid="" data-name="" data-voice="amy" data-thumb=""><span><img alt=""></span></div>
        <div class="selectccoverlay lightbox" style="display:none">
    <div class="lightbox_wrapper">
        <h2>1. Select your character:</h2>

<style type="text/css">
.selectccoverlay h2 { margin-left: 66px; margin-bottom: 0em; }
.selectccoverlay .ccbrowsercontainer { width: 545px; height: 210px; padding: 5px 0px; margin-left: 33px; }
.selectccoverlay .voiceselectorwidget { margin-left: 92px; }
.selectccoverlay .ccbrowsercontainer .leftarrow, .rightarrow { position: relative; margin-left: auto; margin-right: auto; top: 72px; width: 11px; height: 28px; }
.selectccoverlay .ccbrowsercontainer .leftarrow { background: url('/static/go/img/script2cartoon/voiceselectionwidget/btn_arrow_l.png') no-repeat 0px 0px; cursor: pointer; }
.selectccoverlay .ccbrowsercontainer .disabled .leftarrow { background: none; cursor: default; }
.selectccoverlay .ccbrowsercontainer .disabled .leftarrow:hover { background: none; cursor: default; }
.selectccoverlay .ccbrowsercontainer .leftarrow:hover { background: url('/static/go/img/script2cartoon/voiceselectionwidget/btn_arrow_l.png') no-repeat 0px -28px; }
.selectccoverlay .ccbrowsercontainer .rightarrow { background: url('/static/go/img/script2cartoon/voiceselectionwidget/btn_arrow_r.png') no-repeat 0px 0px; cursor: pointer; }
.selectccoverlay .ccbrowsercontainer .disabled .rightarrow { background: none; cursor: default; }
.selectccoverlay .ccbrowsercontainer .disabled .rightarrow:hover { background: none; cursor: default; }
.selectccoverlay .ccbrowsercontainer .rightarrow:hover { background: url('/static/go/img/script2cartoon/voiceselectionwidget/btn_arrow_r.png') no-repeat 0px -28px; }
.selectccoverlay .ccbrowsercontainer .leftarrowcontainer { float: left; height: 175px; width: 25px; margin-right: 10px; }
.selectccoverlay .ccbrowsercontainer .rightarrowcontainer { float: right; height: 175px; width: 25px; margin-left: 5px; }
.selectccoverlay .ccbrowsercontainer .selectedcc { border-width: 3px; border-style: solid; border-color: #999999 !important; }
.selectccoverlay .ccbrowsercontainer .cc { overflow: hidden; position: relative; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; background-color: #dddddd; width: 85px; height: 85px; float: left; margin-right: 5px; margin-bottom: 5px; border-width: 3px; border-color: #dddddd; border-style: solid; }
.selectccoverlay .ccbrowsercontainer .cc.enabled { cursor: pointer; }
.selectccoverlay .ccbrowsercontainer .cc.enabled:hover { background-color: #eeeeee; border-color: #eeeeee; }
.selectccoverlay .ccbrowsercontainer .cc img { position: absolute; }
.selectccoverlay .pagenumdisplay { text-align: center; margin-bottom: 1em; clear: both; font-size: 14px; font-weight: bold; color: #aaaaaa; }
.selectccoverlay a.bottomcancel { float: left; text-align: center; margin: 30px auto; display: block; color: #666666; font-size: 16px; font-weight: bold; text-decoration: none; }
.selectccoverlay a.bottomcancel:hover { color: #777777; text-decoration: none; }
</style>

		<div class="ccbrowsercontainer">
			<div class="leftarrowcontainer"><div class="leftarrow"></div></div>
			<div class="rightarrowcontainer"><div class="rightarrow"></div></div>
			<div class="cc"></div>
			<div class="cc"></div>
			<div class="cc"></div>
			<div class="cc"></div>
			<div class="cc"></div>
			<div class="cc"></div>
			<div class="cc"></div>
			<div class="cc"></div>
			<div class="cc"></div>
			<div class="cc"></div>
			<div class="pagenumdisplay"></div>
		</div>
        <h2>2. Select a voice for your character:</h2>
        <script type="text/javascript">
var VoiceCatalog = (function() {
    var lang_model = {"en":{"desc":"English","options":[{"id":"brian","desc":"Brian","vendor":"Ivona","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_brian.mp3","lang":"en","country":"GB","plus":false},{"id":"oc_bridget","desc":"Bridget","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_bridget.mp3","lang":"en","country":"GB","plus":false},{"id":"oc_catherine","desc":"Catherine","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_catherine.mp3","lang":"en","country":"GB","plus":false},{"id":"oc_simon","desc":"Simon","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_simon.mp3","lang":"en","country":"GB","plus":false},{"id":"eric","desc":"Eric","vendor":"Ivona","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_eric.mp3","lang":"en","country":"US","plus":false},{"id":"oc_julie","desc":"Julie","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_julie.mp3","lang":"en","country":"US","plus":false},{"id":"oc_kate","desc":"Kate","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_kate.mp3","lang":"en","country":"US","plus":false},{"id":"oc_paul","desc":"Paul","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_paul.mp3","lang":"en","country":"US","plus":false},{"id":"salli","desc":"Salli","vendor":"Ivona","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_salli.mp3","lang":"en","country":"US","plus":false},{"id":"oc_susan","desc":"Susan","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_susan.mp3","lang":"en","country":"US","plus":false},{"id":"oc_alan","desc":"Alan","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_alan.mp3","lang":"en","country":"AU","plus":false},{"id":"oc_grace","desc":"Grace","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_grace.mp3","lang":"en","country":"AU","plus":false},{"id":"amy","desc":"Amy","vendor":"Ivona","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_amy.mp3","lang":"en","country":"GB","plus":false},{"id":"oc_elizabeth","desc":"Elizabeth","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_elizabeth.mp3","lang":"en","country":"GB","plus":false},{"id":"emma","desc":"Emma","vendor":"Ivona","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_emma.mp3","lang":"en","country":"GB","plus":false},{"id":"oc_veena","desc":"Veena","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_veena.mp3","lang":"en","country":"IN","plus":false},{"id":"oc_allison","desc":"Allison","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_allison.mp3","lang":"en","country":"US","plus":false},{"id":"oc_dave","desc":"Dave","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_dave.mp3","lang":"en","country":"US","plus":false},{"id":"ivy","desc":"Ivy","vendor":"Ivona","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_ivy.mp3","lang":"en","country":"US","plus":false},{"id":"jennifer","desc":"Jennifer","vendor":"Ivona","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_jennifer.mp3","lang":"en","country":"US","plus":false},{"id":"joey","desc":"Joey","vendor":"Ivona","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_joey.mp3","lang":"en","country":"US","plus":false},{"id":"kendra","desc":"Kendra","vendor":"Ivona","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_kendra.mp3","lang":"en","country":"US","plus":false},{"id":"kimberly","desc":"Kimberly","vendor":"Ivona","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_kimberly.mp3","lang":"en","country":"US","plus":false},{"id":"oc_steven","desc":"Steven","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_steven.mp3","lang":"en","country":"US","plus":false}]},"es":{"desc":"Spanish","options":[{"id":"oc_carmen","desc":"Carmen","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_carmen.mp3","lang":"es","country":"ES","plus":false},{"id":"oc_jorge","desc":"Jorge","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_jorge.mp3","lang":"es","country":"ES","plus":false},{"id":"oc_juan","desc":"Juan","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_juan.mp3","lang":"es","country":"ES","plus":false},{"id":"oc_leonor","desc":"Leonor","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_leonor.mp3","lang":"es","country":"ES","plus":false},{"id":"oc_diego","desc":"Diego","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_diego.mp3","lang":"es","country":"AR","plus":false},{"id":"oc_francisca","desc":"Francisca","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_francisca.mp3","lang":"es","country":"CL","plus":false},{"id":"oc_violeta","desc":"Violeta","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_violeta.mp3","lang":"es","country":"ES","plus":false},{"id":"oc_esperanza","desc":"Esperanza","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_esperanza.mp3","lang":"es","country":"MX","plus":false},{"id":"oc_carlos","desc":"Carlos","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_carlos.mp3","lang":"es","country":"US","plus":false},{"id":"miguel","desc":"Miguel","vendor":"Ivona","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_miguel.mp3","lang":"es","country":"US","plus":false},{"id":"penelope","desc":"Pen\u00e9lope","vendor":"Ivona","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_penelope.mp3","lang":"es","country":"US","plus":false},{"id":"oc_soledad","desc":"Soledad","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_soledad.mp3","lang":"es","country":"US","plus":false},{"id":"oc_ximena","desc":"Ximena","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_ximena.mp3","lang":"es","country":"US","plus":false}]},"pt":{"desc":"Portuguese","options":[{"id":"oc_felipe","desc":"Felipe","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_felipe.mp3","lang":"pt","country":"BR","plus":false},{"id":"oc_gabriela","desc":"Gabriela","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_gabriela.mp3","lang":"pt","country":"BR","plus":false},{"id":"oc_amalia","desc":"Amalia","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_amalia.mp3","lang":"pt","country":"PT","plus":false},{"id":"oc_eusebio","desc":"Eusebio","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_eusebio.mp3","lang":"pt","country":"PT","plus":false},{"id":"oc_fernanda","desc":"Fernanda","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_fernanda.mp3","lang":"pt","country":"BR","plus":false}]},"ja":{"desc":"Japanese","options":[{"id":"akari","desc":"Akari","vendor":"Aij","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_akari.mp3","lang":"ja","country":"JP","plus":false},{"id":"hiroshi","desc":"Hiroshi","vendor":"Aij","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_hiroshi.mp3","lang":"ja","country":"JP","plus":false},{"id":"kaho","desc":"Kaho","vendor":"Aij","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_kaho.mp3","lang":"ja","country":"JP","plus":false},{"id":"oc_misaki","desc":"Misaki","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_misaki.mp3","lang":"ja","country":"JP","plus":false},{"id":"nanako","desc":"Nanako","vendor":"Aij","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_nanako.mp3","lang":"ja","country":"JP","plus":false},{"id":"seiji","desc":"Seiji","vendor":"Aij","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_seiji.mp3","lang":"ja","country":"JP","plus":false},{"id":"oc_show","desc":"Show","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_show.mp3","lang":"ja","country":"JP","plus":false},{"id":"anzu","desc":"Anzu","vendor":"Aij","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_anzu.mp3","lang":"ja","country":"JP","plus":true},{"id":"koutarou","desc":"Koutarou","vendor":"Aij","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_koutarou.mp3","lang":"ja","country":"JP","plus":false},{"id":"maki","desc":"Maki","vendor":"Aij","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_maki.mp3","lang":"ja","country":"JP","plus":true}]},"default":{"desc":"More","options":[{"id":"oc_empar","desc":"Empar (Catalan)","vendor":"Oddcast","sex":"F","demo":"","lang":"ca","country":false,"plus":false},{"id":"oc_jordi","desc":"Jordi (Catalan)","vendor":"Oddcast","sex":"M","demo":"","lang":"ca","country":false,"plus":false},{"id":"oc_montserrat","desc":"Montserrat (Catalan)","vendor":"Oddcast","sex":"F","demo":"","lang":"ca","country":false,"plus":false},{"id":"oc_ludoviko","desc":"Ludoviko (Esperanto)","vendor":"Oddcast","sex":"M","demo":"","lang":"eo","country":false,"plus":false},{"id":"oc_carmela","desc":"Carmela (Galician)","vendor":"Oddcast","sex":"F","demo":"","lang":"gl","country":false,"plus":false},{"id":"oc_henrik","desc":"Henrik","vendor":"Oddcast","sex":"M","demo":"","lang":"no","country":false,"plus":false},{"id":"oc_vilde","desc":"Vilde","vendor":"Oddcast","sex":"F","demo":"","lang":"no","country":false,"plus":false},{"id":"oc_hui","desc":"Hui (Mandarin)","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_hui.mp3","lang":"zh","country":"CN","plus":false},{"id":"oc_liang","desc":"Liang (Mandarin)","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_liang.mp3","lang":"zh","country":"CN","plus":false},{"id":"oc_lisheng","desc":"Lisheng (Mandarin)","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_lisheng.mp3","lang":"zh","country":"CN","plus":false},{"id":"oc_katrin","desc":"Katrin","vendor":"Oddcast","sex":"F","demo":"","lang":"de","country":"DE","plus":false},{"id":"oc_stefan","desc":"Stefan","vendor":"Oddcast","sex":"M","demo":"","lang":"de","country":"DE","plus":false},{"id":"oc_frida","desc":"Frida","vendor":"Oddcast","sex":"F","demo":"","lang":"da","country":"DK","plus":false},{"id":"oc_magnus","desc":"Magnus","vendor":"Oddcast","sex":"M","demo":"","lang":"da","country":"DK","plus":false},{"id":"oc_marko","desc":"Marko","vendor":"Oddcast","sex":"M","demo":"","lang":"fi","country":"FI","plus":false},{"id":"oc_milla","desc":"Milla","vendor":"Oddcast","sex":"F","demo":"","lang":"fi","country":"FI","plus":false},{"id":"oc_bernard","desc":"Bernard","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_bernard.mp3","lang":"fr","country":"FR","plus":false},{"id":"oc_florence","desc":"Florence","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_florence.mp3","lang":"fr","country":"FR","plus":false},{"id":"oc_afroditi","desc":"Afroditi","vendor":"Oddcast","sex":"F","demo":"","lang":"el","country":"GR","plus":false},{"id":"oc_nikos","desc":"Nikos","vendor":"Oddcast","sex":"M","demo":"","lang":"el","country":"GR","plus":false},{"id":"oc_giulia","desc":"Giulia","vendor":"Oddcast","sex":"F","demo":"","lang":"it","country":"IT","plus":false},{"id":"oc_luca","desc":"Luca","vendor":"Oddcast","sex":"M","demo":"","lang":"it","country":"IT","plus":false},{"id":"oc_marcello","desc":"Marcello","vendor":"Oddcast","sex":"M","demo":"","lang":"it","country":"IT","plus":false},{"id":"oc_paola","desc":"Paola","vendor":"Oddcast","sex":"F","demo":"","lang":"it","country":"IT","plus":false},{"id":"oc_junwoo","desc":"Junwoo","vendor":"Oddcast","sex":"M","demo":"","lang":"ko","country":"KR","plus":false},{"id":"oc_yumi","desc":"Yumi","vendor":"Oddcast","sex":"F","demo":"","lang":"ko","country":"KR","plus":false},{"id":"oc_saskia","desc":"Saskia","vendor":"Oddcast","sex":"F","demo":"","lang":"nl","country":"NL","plus":false},{"id":"oc_willem","desc":"Willem","vendor":"Oddcast","sex":"M","demo":"","lang":"nl","country":"NL","plus":false},{"id":"oc_krzysztof","desc":"Krzysztof","vendor":"Oddcast","sex":"M","demo":"","lang":"pl","country":"PL","plus":false},{"id":"oc_zosia","desc":"Zosia","vendor":"Oddcast","sex":"F","demo":"","lang":"pl","country":"PL","plus":false},{"id":"oc_ioana","desc":"Ioana","vendor":"Oddcast","sex":"F","demo":"","lang":"ro","country":"RO","plus":false},{"id":"oc_dmitri","desc":"Dmitri","vendor":"Oddcast","sex":"M","demo":"","lang":"ru","country":"RU","plus":false},{"id":"oc_olga","desc":"Olga","vendor":"Oddcast","sex":"F","demo":"","lang":"ru","country":"RU","plus":false},{"id":"oc_annika","desc":"Annika","vendor":"Oddcast","sex":"F","demo":"","lang":"sv","country":"SE","plus":false},{"id":"oc_sven","desc":"Sven","vendor":"Oddcast","sex":"M","demo":"","lang":"sv","country":"SE","plus":false},{"id":"oc_kerem","desc":"Kerem","vendor":"Oddcast","sex":"M","demo":"","lang":"tr","country":"TR","plus":false},{"id":"oc_selin","desc":"Selin","vendor":"Oddcast","sex":"F","demo":"","lang":"tr","country":"TR","plus":false},{"id":"oc_zeynep","desc":"Zeynep","vendor":"Oddcast","sex":"F","demo":"","lang":"tr","country":"TR","plus":false},{"id":"oc_charlotte","desc":"Charlotte (French)","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_charlotte.mp3","lang":"fr","country":"CA","plus":false},{"id":"oc_olivier","desc":"Olivier (French)","vendor":"Oddcast","sex":"M","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_olivier.mp3","lang":"fr","country":"CA","plus":false},{"id":"oc_lily","desc":"Lily (Mandarin)","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_lily.mp3","lang":"zh","country":"CN","plus":false},{"id":"oc_linlin","desc":"Linlin (Mandarin)","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_linlin.mp3","lang":"zh","country":"CN","plus":false},{"id":"oc_jolie","desc":"Jolie","vendor":"Oddcast","sex":"F","demo":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/add8e214e09bd155\/go\/voicedemo\/voicedemo_oc_jolie.mp3","lang":"fr","country":"FR","plus":false},{"id":"oc_federica","desc":"Federica","vendor":"Oddcast","sex":"F","demo":"","lang":"it","country":"IT","plus":false},{"id":"oc_matteo","desc":"Matteo","vendor":"Oddcast","sex":"M","demo":"","lang":"it","country":"IT","plus":false},{"id":"oc_roberto","desc":"Roberto","vendor":"Oddcast","sex":"M","demo":"","lang":"it","country":"IT","plus":false},{"id":"oc_silvana","desc":"Silvana","vendor":"Oddcast","sex":"F","demo":"","lang":"it","country":"IT","plus":false},{"id":"oc_valentina","desc":"Valentina","vendor":"Oddcast","sex":"F","demo":"","lang":"it","country":"IT","plus":false}]}};

    return {
        getModel: function() {
            return lang_model;
        },
        lookupVoiceInfo: function(voice_id) {
            for (var langId in lang_model) {
                var voice_count = lang_model[langId]['options'].length;
                for (var i = 0; i < voice_count; i++) {
                    if (lang_model[langId]['options'][i].id == voice_id) {
                        return {
                            desc: lang_model[langId]['options'][i].desc,
                            sex: lang_model[langId]['options'][i].sex,
                            plus: lang_model[langId]['options'][i].plus,
                            locale: { id: langId, lang: lang_model[langId]['options'][i].lang, country: lang_model[langId]['options'][i].country, desc: lang_model[langId].desc }
                        };
                    }
                }
            }
            return null;
        },
        getDefaultVoice: function() {
            for (var langId in lang_model) {
                var voice_count = lang_model[langId]['options'].length;
                for (var i = 0; i < voice_count; i++) {
                    if (typeof lang_model[langId]['options'][i].id === 'string') {
                        return lang_model[langId]['options'][i].id;
                    }
                }
            }
            return null;
        }
    };
})();
</script>
<div class="voiceselectorwidget">
    <div class="voiceselector">
    </div>
    <!-- Templates -->
    <div class="templates" style="display: none">
        <!-- Voice list -->
        <div class="categorytab">
            <div class="flag" title="Language"></div>
            <div class="masteroptionscontainer">
                <div class="optionscontainer">
                </div>
            </div>
        </div>
        <!-- Voice option -->
        <div class="option">
            <div class="cflag"></div>
            <div class="sex"></div>
            <span class="desc"></span>
                            <span class="plus"> (Premium account only)</span>
                        <div class="playercontrol">
                <div class="button play"></div>
            </div>
        </div>
    </div>
    <div class="jplayer"></div>
</div>
        <div style="overflow: auto; padding-left: 135px;">
            <a href="javascript:;" class="buttonbase buttonorange" id="voiceselect_confirm" style="margin:15px auto;float:left;display:block;">
<div class="buttontitle">Confirm</div>
</a>
            <a href="javascript:;" class="buttonbase buttonblue dark" id="voiceselect_plusupgrade" style="margin:15px auto;float:left;display:none;">
<div class="buttontitle">Upgrade Now</div>
</a>
            <a href="#" onclick="jQuery.unblockUI();return false;" class="bottomcancel"><div style="width: 180px">Cancel</div></a>
        </div>
        <a onclick="jQuery.unblockUI()" class="close_btn">×</a>
    </div>
</div>
        <div class="selectvoiceoverlay lightbox" style="display:none">
    <div class="lightbox_wrapper">

<style type="text/css">
.selectvoiceoverlay { width: 550px; }
.selectvoiceoverlay h2 { text-align: center; color: black; margin-bottom: 0px; font-size: 18px; line-height: 20px; }
.selectvoiceoverlay h3 { text-align: center; color: #999999; font-style: oblique; margin-top: 0px; margin-bottom: 2em; font-weight: normal; font-size: 13px; line-height: 20px; }
.selectvoiceoverlay .voiceselectorwidget { margin-left: auto; margin-right: auto; }
.selectvoiceoverlay a.bottomcancel { float: left; text-align: center; margin: 30px auto; display: block; color: #666666; font-size: 16px; font-weight: bold; text-decoration: none; }
.selectvoiceoverlay a.bottomcancel:hover { color: #777777; text-decoration: none; }
</style>

        <h2>Select a voice for your character</h2>
        <h3>This change applies to the whole video</h3>
        <script type="text/javascript">
</script>
<div class="voiceselectorwidget">
    <div class="voiceselector">
    </div>
    <!-- Templates -->
    <div class="templates" style="display: none">
        <!-- Voice list -->
        <div class="categorytab">
            <div class="flag" title="Language"></div>
            <div class="masteroptionscontainer">
                <div class="optionscontainer">
                </div>
            </div>
        </div>
        <!-- Voice option -->
        <div class="option">
            <div class="cflag"></div>
            <div class="sex"></div>
            <span class="desc"></span>
                            <span class="plus"> (Premium account only)</span>
                        <div class="playercontrol">
                <div class="button play"></div>
            </div>
        </div>
    </div>
    <div class="jplayer"></div>
</div>
        <div style="overflow: auto; padding-left: 85px;">
            <a href="javascript:;" class="buttonbase buttonorange" id="voiceselectonly_confirm" style="margin:15px auto;float:left;display:block;">
<div class="buttontitle">Confirm</div>
</a>
                            <a href="/public_features" class="buttonbase buttonpurple3 dark" id="voiceselectonly_plusupgrade" style="margin:15px auto;float:left;display:none;">
<div class="buttontitle">Get a quote</div>
</a>
                        <a href="#" onclick="jQuery.unblockUI();return false;" class="bottomcancel"><div style="width: 180px">Cancel</div></a>
        </div>
        <a onclick="jQuery.unblockUI()" class="close_btn">×</a>
    </div>
</div>
    </div>

<script id="dialogTmpl" type="text/x-jquery-tmpl">
    <div class="dialog">
        <div class="num"></div>
        <div class="char_thumb">
            <img src="${thumbURL}" alt="" />
            <a class="switch">Switch</a>
            <div class="tips">Switch Actor</div>
        </div>
        <div class="box">
            <div class="dialog_input_wrapper">
                <textarea class="dialog_input" name="script_text[]"></textarea>
                <span class="label">Type in or Record Your dialog</span>
            </div>
            <div class="counter" style="display:none;"></div>
            <div class="voice_recorder"></div>
            <div class="dialog_options">
                <a class="dialog_switch">Actor<span class="tips">Switch Actor</span></a>
                {{if hasFacial}}
                <a class="dialog_facial">Emotion<span class="tips">Switch Emotion</span></a>
                {{/if}}
                <div class="langarea">
                    <div class="lang"></div>
                    <div class="gender"></div>
                    Voice                    <div class="tips">Switch Voice</div>
                </div>
            </div>
            <div class="dialog_input_control">
                <a class="dialog_tts on" data-method="tts"><div class="icon"></div><span class="tips">Text to Speech</span></a>
                <a class="dialog_mic" data-method="mic"><div class="icon"></div><span class="tips">Voice Recording</span></a>
            </div>
            <div class="dialog_control">
                <a title="Delete" class="dialog_delete">Delete</a>
                <a title="Insert Line" class="dialog_insert">Insert Line</a>
            </div>
        </div>
    </div>
</script>

    <a class="btn_next" href="#step3" onclick="stepTo('#step3'); return false;">Next</a>
    <div class="upgrade" style="display: none;">
        <a href="javascript:popUpgrade();" class="buttonbase buttonblue dark" style="margin:0 auto;float:none;display:block;">
<div class="buttontitle">Upgrade Now</div>
</a>
    </div>
</div>

<div id="seperator2"></div>

<div id="step3" class="section">
    <h2><span>3. Type in or Record Your dialog</span></h2>

    <a class="previous_step" href="#step2" onclick="stepTo('#step2'); return false;">Back</a>

    <div id="dialog_wrapper">
    <div id="dialogs">
        <div class="dialog focus" data-charid="0" data-facial="default">
            <div class="num">1</div>
            <div class="char_thumb">
                <img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/532/60532/2487299.png" alt="">
                <a class="switch">Switch</a>
                <div class="tips">Switch Actor</div>
            </div>
            <div class="box">
                <div class="dialog_input_wrapper">
                    <textarea class="dialog_input" name="script_text[]"></textarea>
                    <span class="label" style="opacity: 1;">Type in or Record Your dialog</span>
                </div>
                <div class="counter" style="display: none;">180 characters remaining</div>
                <div class="voice_recorder"></div>
                <div class="dialog_options">
                    <a class="dialog_switch">Actor<span class="tips">Switch Actor</span></a>
                    <a class="dialog_facial">Emotion<span class="tips">Switch Emotion</span></a>
                    <div class="langarea">
                        <div class="lang US"></div>
                        <div class="gender M"></div>
                        Voice                        <div class="tips">Switch Voice</div>
                    </div>
                </div>
                <div class="dialog_input_control">
                    <a class="dialog_tts on" data-method="tts"><div class="icon"></div><span class="tips">Text to Speech</span></a>
                    <a class="dialog_mic" data-method="mic"><div class="icon"></div><span class="tips">Voice Recording</span></a>
                </div>
                <div class="dialog_control">
                    <a title="Delete" class="dialog_delete">Delete</a>
                    <a title="Insert Line" class="dialog_insert">Insert Line</a>
                </div>
            </div>
        </div>
        <div class="dialog fake" data-charid="1">
            <div class="char_thumb">
                <img src="https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/2132/1352132/51288759.png" alt="">
            </div>
            <div class="box">
                <div class="dialog_input_wrapper">
                    <div class="langarea">
                    </div>
                    <textarea id="fake_dialog_input" class="dialog_input" name="script_text[]"></textarea>
                </div>
                <label for="fake_dialog_input" class="dialog_input_message">
                    <span class="basic" style="display: none;">Add as many as 10 dialog lines for free.<br>Upgrade to GoPlus to add up to 20.</span>
                    <span class="plus">Add up to 20 dialog lines</span>
                </label>
            </div>
        </div>
    </div>
    </div>

    <div class="footer">
        <div class="bottom"></div>
        <a class="btn_next" onclick="GoLite.preview();stepTo('#step4');">Preview</a>

        <div class="upgrade" style="display: none;">
            <a href="javascript:popUpgrade();" class="buttonbase buttonblue dark" style="margin:0 auto;float:none;display:block;">
<div class="buttontitle">Upgrade Now</div>
</a>
        </div>
    </div>

    <div id="facial_expression" class="lightbox" style="display:none">
        <div class="lightbox_wrapper">
            <h2>Choose a facial expression:</h2>
            <div id="expression">
                Expressions:
                <ul id="expression_list">
                    <li><a data-facial="default" class="default selected">Default</a></li>
                    <li><a data-facial="happy" class="happy">Happy</a></li>
                    <li><a data-facial="angry" class="angry">Angry</a></li>
                    <li><a data-facial="sad" class="sad">Sad</a></li>
                    <li><a data-facial="cry" class="cry">Cry</a></li>
                </ul>
            </div>

            <a id="facial_expression_submit" href="javascript:;">Confirm</a>
            <a onclick="jQuery.unblockUI();" class="close_btn">×</a>
        </div>
    </div>

<script type="text/javascript">
facialExpression.init({
"default" : "Default",
"happy": "Happy",
"angry": "Angry",
"sad": "Sad",
"cry": "Cry"
});
</script>

    <div id="dialog_input_change_confirm" class="lightbox confirmbox" style="display:none">
        <div class="lightbox_wrapper">
            <p>Switch Voice Input</p>
            <p>The current line of dialog will reset if you switch to a different voice input.</p>
            <div class="confirm_buttons">
                <a class="action-btn alert" onclick="jQuery.unblockUI();">Proceed</a>
                <a class="action-btn disabled" onclick="jQuery.unblockUI();">Cancel</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
jQuery('#dialogs .dialog').scriptDialog();
</script>

<div id="seperator3"></div>

<div id="step4" class="section">
    <h2>4. Preview Your Video</h2>

    <a class="previous_step" href="#step3" onclick="stepTo('#step3'); return false;">Back</a>

    <div class="inside">
        <div class="upgrade" style="display:none">
            <h3>Upgrade to GoPlus to enable preview and save your video.</h3>

            <a href="javascript:popUpgrade();" class="buttonbase buttonblue dark" id="btn_upgrade" style="margin:15px auto;float:none;display:block;">
<div class="buttontitle">Upgrade Now</div>
</a>
        </div>
        <div class="generate">
            <a class="btn_preview" href="#" onclick="GoLite.preview(); return false;">Generate Preview</a>
            <p>You made all the changes you wanted to your video?<br>
            Let's see how it looks like then!</p>
        </div>
        <div class="loading"></div>
        <div class="preview" style="display:none">
            <div id="player_container">
                You can't use GoAnimate because Flash might be disabled. <a href="https://get.adobe.com/flashplayer/">Enable Flash</a>.
            </div>
            <a id="btn_save" href="#" onclick="jQuery(document).trigger('GoLite.stateChange', ['save']); return false;">Save Now</a>
        </div>

        <div class="save" style="display:none">
            <div class="thumbnail">
                Choose your thumbnail
                <div id="thumb_chooser_container">
                    You can't use GoAnimate because Flash might be disabled. <a href="https://get.adobe.com/flashplayer/">Enable Flash</a>.
                </div>
            </div>

            <div class="title">
                <label for="movie_title">TITLE:</label>
                <input type="text" id="movie_title" name="movie_title" value="" maxlength="140" placeholder="Enter your title here">
            </div>

            <div class="description">
                <label for="movie_description">DESCRIPTION:</label>
                <textarea id="movie_description" name="movie_description" placeholder="Enter your description (optional)"></textarea>
            </div>


            <div class="clear"></div>
            <div class="group_message" style="color:#999999;font-size:19px;padding-top:10px;text-align:center;">When you are finished with your video, you can post it to a group from the video page.</div>
            <div class="buttons">
                <a id="btn_publish" href="#" style="font-size:21px;" onclick="GoLite.save(); return false;">Save and Go To Video Page</a>
            </div>
            <div class="clear"></div>

            <a id="back_preview" href="#" onclick="jQuery(document).trigger('GoLite.stateChange', ['preview']); return false;">&lt; Back to Preview</a>
        </div>
    </div>
</div>

<script type="text/javascript">
GoLite.init(2);
jQuery('div.character .customlink').addClass('isplus');
</script>

<div id="footer">
</div>

</div>

<div id="publishing" class="lightbox" style="display:none">
    <div class="lightbox_wrapper">Publishing ...</div>
</div>


<div id="upgrade" class="lightbox" style="display:none">
    <div class="lightbox_wrapper">
        <h2>Make animated videos exactly the way you want!</h2>
        <p>Complete the transaction in the browser window that just opened and confirm below to enable the upgrade.</p>
        <div>
            <a href="javascript:;" class="buttonbase buttonorange" id="upgrade_confirm" style="margin:15px auto;float:none;display:block;">
<div class="buttontitle">Confirm</div>
</a>
        </div>
        <a class="close_btn">×</a>
    </div>
</div>
<script type="text/javascript">
jQuery('#upgrade_confirm, #upgrade .close_btn').click(function(e) {
    e.preventDefault();
    GoLite.updateUserState(function(userState) {
        if (userState == 2) reloadCCList();
    });
    jQuery.unblockUI();
});
</script>

<script type="text/javascript" src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/js/jquery/jquery.swfobject.min.js.gz.js"></script>
<script type="text/javascript" src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/js/jquery/jquery.waypoints.min.js.gz.js"></script>
<script type="text/javascript" src="https://d3v4eglovri8yt.cloudfront.net/static/add8e214e09bd155/go/js/jquery/jquery.placeholder.min.js.gz.js"></script>
<script type="text/javascript">
jQuery.flash.expressInstall = "/static/libs/expressInstall.swf";

var customCC_model = [];
var reloadCCList = function() {
    // jQuery.ajax({
        // url: '/ajax/getCCCharacters',
        // type: 'POST',
        // data: { cc_theme_id: 'family', tags: '' },
        // dataType: 'json',
        // success: function(data, dummy1, dummy2) {
            // customCC_model = jQuery.grep(data, function(cc) { return (cc.head_url && cc.thumb_url); });
            // jQuery('div.character .customlink').addClass('ready');
        // }
    // });
};

(function($) {
$(document).ready(function() {
    reloadCCList();

    var next = 'step1', prev = '';

    $('#nav_links .next').click(function(e) {
        e.preventDefault();

        next && stepTo('#' + next);
    });
    $('#nav_links .prev').click(function(e) {
        e.preventDefault();

        prev && stepTo('#' + prev);
    });

    $('.section').waypoint({offset: '50%'});

    $('body').delegate('.section', 'waypoint.reached', function(e, direction) {
        var $this = $(this);
        var id = $this.attr('id');

        if (direction == 'up') {
            if (id == 'step1') {
                next = 'step1';
                prev = '';
                id = 'intro';
            } else if (id == 'step2') {
                next = 'step2';
                prev = 'intro';
                id = 'step1';
            } else if (id == 'step3') {
                next = 'step3';
                prev = 'step1';
                id = 'step2';
            } else if (id == 'step4') {
                next = 'step4';
                prev = 'step2';
                id = 'step3';
            }
        } else {
            if (id == 'step1') {
                next = 'step2';
                prev = 'intro';
            } else if (id == 'step2') {
                next = 'step3';
                prev = 'step1';
            } else if (id == 'step3') {
                next = 'step4';
                prev = 'step2';
            } else if (id == 'step4') {
                next = '';
                prev = 'step3';
            }
        }

        $('#nav_links').find('li').removeClass('on').end()
        .find('.' + id).addClass('on');
    });

    if ($('#login_bar').length) {
        $('#seperator0').waypoint(function(e) {
            $('#login_bar').slideDown();
        }, {offset: 'bottom-in-view', triggerOnce: true});

        $(document).bind('user.signup user.login', function(e) {
            GoLite.updateUserState(function(userState) {
                if (userState == 2) reloadCCList();
                $(document).trigger('GoLite.stateChange', ['']);
                $('#login_bar').slideUp();
                showNotice('You are now logged in to GoAnimate');
            });
        });
    }

    jQuery('#movie_title, #movie_description').placeholder();
});
$(window).load(function() {$('#nav_links').fadeIn();});
})(jQuery);
</script>

<script type="text/javascript">
    var customCCHeadsBaseUrl = 'https://josephcrosmanplays532.github.io/s3base/files/thumbnails/cchead/2132/1352132/';
    var customCCThumbsBaseUrl = 'https://josephcrosmanplays532.github.io/s3base/files/thumbnails/ccthumb/2132/1352132/';


    var goliteEditorMode = 'new';

</script>
    </body>
</html>
