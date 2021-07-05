<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="/favicon.png" type="image/png">
	<title>Create</title>
	<meta name="description" content="PHPWrapper's Create page">
	<link rel="stylesheet" type="text/css" href="/pages/css/modern-normalize.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/global.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/create.css">
	<script>
		function characterThemes() {
			document.getElementById("creation_type").style.display = "none";
			document.getElementById("character_themes").style.display = "block";
			document.getElementById("back").style.display = "block";
			document.getElementById("studio_tutorial").style.display = "none";
			document.getElementById("studiotutorial").style.display = "block";
			document.getElementById("wrapperversion").style.display = "none";
		}
		function movieThemes() {
			document.getElementById("creation_type").style.display = "none";
			document.getElementById("movie_themes").style.display = "block";
			document.getElementById("back").style.display = "block";
			document.getElementById("studio_tutorial").style.display = "none";
			document.getElementById("studiotutorial").style.display = "block";
			document.getElementById("wrapperversion").style.display = "none";
		}
		function creationType() {
			document.getElementById("creation_type").style.display = "block";
			document.getElementById("character_themes").style.display = "none";
			document.getElementById("movie_themes").style.display = "none";
			document.getElementById("back").style.display = "none";
			document.getElementById("studio_tutorial").style.display = "block";
			document.getElementById("studiotutorial").style.display = "none";
			document.getElementById("wrapperversion").style.display = "block";
		}
		function showCredits() {
			document.getElementById("credits").style.display="block";
			document.getElementById("credits_button").style.display="none"
		}
	</script>
</head>
<body>
<header>
	<a href="/">
		<h1 style="margin:0"><img id="logo" src="/pages/img/list_logo.svg" alt="PHPWrapper"/></h1>
	</a>
	<nav id="headbuttons">
		<a class="button_small" id="studio_tutorial" href="/studiotutorial.php" onclick="creationType()" style="display: block">Studio Tutorial</a>
		<a class="button_small" id="back" onclick="creationType()" style="display: none">Back</a>
		
	</nav>
</header>
<main>
	
<div id="creation_type" style="display: unset">
	<h1 id="what-would-you-like-to-create">What would you like to create?</h1>
	<div id="column1">
		<div class="theme pick_creation">
			<div onclick="characterThemes()">
				<img src="/pages/img/themelist/Character.png" alt="Create a character">
				<div>
					<p class="pick_creation_type">Character</p>
					<p class="pick_creation_description">Custom Characters can be a great way to help advance the story you're telling.</p>
				</div>
			</div>
		</div>
		<div class="theme pick_creation">
			<div onclick="movieThemes()">
				<img src="/pages/img/themelist/Movie.png" alt="Create a video">
				<div>
					<p class="pick_creation_type">Video</p>
					<p class="pick_creation_description">Go create a video, movie, short story, tutorial, or whatever. The choice is yours.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="character_themes" style="display: none">
	<h1 id="select-a-theme-for-your-character">Select a theme for your character</h1>
	<h2 id="standard-themes">Standard themes</h2>
	<div id="column1">
		<div class="theme">
			<a href="/characters/browse.php?theme=family">
				<img src="/pages/img/themelist/Comedy_World.jpg" alt="Comedy World">
				<p>Comedy World</p>
			</a>
		</div>
		<div class="theme">
			<a href="/characters/browse.php?theme=cc2">
				<img src="/pages/img/themelist/lil_Peepz.jpg" alt="Lil' Peepz">
				<p>Lil' Peepz</p>
			</a>
		</div>
		<div class="theme">
			<a href="/characters/browse.php?theme=anime">
				<img src="/pages/img/themelist/Anime.jpg" alt="Anime">
				<p>Anime</p>
			</a>
		</div>
	</div><br />
	<div id="column3">
		<div class="theme">
			<a href="/characters/browse.php?theme=ninjaanime">
				<img src="/pages/img/themelist/Ninja_Anime.jpg" alt="Ninja Anime">
				<p>Ninja Anime</p>
			</a>
		</div>
		<div class="theme">
			<a href="/characters/browse.php?theme=spacecitizen">
				<img src="/pages/img/themelist/Space_Citizens.jpg" alt="Space Citizens">
				<p>Space Citizens</p>
			</a>
		</div>
		<div class="theme">
			<a href="/characters/browse.php?theme=chibi">
				<img src="/pages/img/themelist/Chibi_Peepz.jpg" alt="Chibi Peepz">
				<p>Chibi Peepz</p>
			</a>
		</div>
	</div><br />
	<div id="column4">
		<div class="theme">
			<a href="/characters/browse.php?theme=ninja">
				<img src="/pages/img/themelist/Chibi_Ninjas.jpg" alt="Chibi Ninjas">
				<p>Chibi Ninjas</p>
			</a>
		</div>
		<div class="theme">
			<a href="/characters/browse.php?theme=animal">
				<img src="/pages/img/themelist/Lil_Petz_World.jpg" alt="Lil' Petz World">
				<p>Lil" Petz World</p>
			</a>
		</div>
		<div class="theme">
			<a href="/characters/browse.php?theme=space">
				<img src="/pages/img/themelist/Space_Peepz.jpg" alt="Space Peepz">
				<p>Space Peepz</p>
			</a>
		</div>
	</div><br />
</div>
	
<div id="movie_themes" style="display: none">
	<h1 id="select-a-theme-for-your-video">Select a theme for your video</h1>
	
	<h2 id="standard-themes">Standard themes</h2>
	<div id="column1">
		<div class="theme">
			<a href="/videos/create.php?tray=custom">
				<img src="/pages/img/themelist/Comedy_World.jpg" alt="Comedy World">
				<p>Comedy World</p>
			</a>
		</div>
		<div class="theme">
			<a href="/videos/create.php?tray=action">
				<img src="/pages/img/themelist/lil_Peepz.jpg" alt="Lil' Peepz">
				<p>Lil' Peepz</p>
			</a>
		</div>
		<div class="theme">
			<a href="/videos/create.php?tray=retro">
				<img src="/pages/img/themelist/Cartoon_Classics.jpg" alt="Cartoon Classics">
				<p>Cartoon Classics</p>
			</a>
		</div>
	</div><br />
	<div id="column2">
		<div class="theme">
			<a href="/videos/create.php?tray=politic2">
				<img src="/pages/img/themelist/Election_2012.jpg" alt="Election 2012">
				<p>Election 2012</p>
			</a>
		</div>
		<div class="theme">
			<a href="/videos/create.php?tray=stick">
				<img src="/pages/img/themelist/Stick_Figure.jpg" alt="Stick Figure">
				<p>Stick Figure</p>
			</a>
		</div>
		<div class="theme">
			<a href="/videos/create.php?tray=anime">
				<img src="/pages/img/themelist/Anime.jpg" alt="Anime">
				<p>Anime</p>
			</a>
		</div>
	</div><br />
	<div id="column3">
		<div class="theme">
			<a href="/videos/create.php?tray=ninjaanime">
				<img src="/pages/img/themelist/Ninja_Anime.jpg" alt="Ninja Anime">
				<p>Ninja Anime</p>
			</a>
		</div>
		<div class="theme">
			<a href="/videos/create.php?tray=spacecitizen">
				<img src="/pages/img/themelist/Space_Citizens.jpg" alt="Space Citizens">
				<p>Space Citizens</p>
			</a>
		</div>
		<div class="theme">
			<a href="/videos/create.php?tray=chibi">
				<img src="/pages/img/themelist/Chibi_Peepz.jpg" alt="Chibi Peepz">
				<p>Chibi Peepz</p>
			</a>
		</div>
	</div><br />
	<div id="column4">
		<div class="theme">
			<a href="/videos/create.php?tray=ninja">
				<img src="/pages/img/themelist/Chibi_Ninjas.jpg" alt="Chibi Ninjas">
				<p>Chibi Ninjas</p>
			</a>
		</div>
		<div class="theme">
			<a href="/videos/create.php?tray=animal">
				<img src="/pages/img/themelist/Lil_Petz_World.jpg" alt="Lil' Petz World">
				<p>Lil' Petz World</p>
			</a>
		</div>
		<div class="theme">
			<a href="/videos/create.php?tray=space">
				<img src="/pages/img/themelist/Space_Peepz.jpg" alt="Space Peepz">
				<p>Space Peepz</p>
			</a>
		</div>
	</div><br />
	<div id="column5">
		<div class="theme">
			<a href="/videos/create.php?tray=fullenergy">
				<img src="/pages/img/themelist/Full_Energy.png" alt="Full Energy">
				<p>Full Energy</p>
			</a>
		</div>
		<div class="theme">
			<a href="/videos/create.php?tray=politic">
				<img src="/pages/img/themelist/Politics_and_Celebrity.png" alt="Politics & Celebrity">
				<p>Politics & Celebrity</p>
			</a>
		</div>
	</div><br />
</div>
	
</main>
	
<footer>
	<nav id="foot-left">
		<span title="Wrapper: Offline vWRAPPER_VER, build WRAPPER_BLD" id="wrapperversion" style="display: block">vWRAPPER_VER</span>
		<a href="/studiotutorial.php" id="studiotutorial" style="display: none">Studio Tutorial</a>
	</nav>
        
	<nav id="foot-middle">
		<a href="https://josephcrosmanplays532.github.io/faq.html">FAQ</a>
		<a href="https://discord.gg/b7YSRkg">Wrapper Hub</a>
	</nav>
	
	<nav id="foot-right">
		<a href="https://josephcrosmanplays532.github.io">Server Page</a>
		<a href="https://josephcrosmanplays532.github.io/caillou.html">Caillou</a>
	</nav>
</footer>
</body></html>
