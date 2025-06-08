<?php $user = posix_getpwuid(fileowner(__FILE__))["name"]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>~<?=$user?> on envs.net</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="~<?=$user?>'s corner of the net" />
	<link rel="stylesheet" href="https://envs.net/css/neoenvs.css" />
	<link rel="stylesheet" href="https://envs.net/css/fork-awesome.min.css" />
	<style>
		@keyframes blink {
			0%, 50% { opacity: 1; }
			51%, 100% { opacity: 0; }
		}
		.blinking-cursor::after {
			content: "_";
			animation: blink 1s step-end infinite;
		}
	</style>
</head>
<body class="dark-mode">

<main>

	<!-- ASCII ART LOGO -->
	<pre class="block">
	_                                                       _   
	| |                                                     | |  
	| |__  _ __ __ _ _ __    ___ _ ____   _____   _ __   ___| |_ 
	| '_ \| '__/ _` | '_ \  / _ \ '_ \ \ / / __| | '_ \ / _ \ __|
	| |_) | | | (_| | | | ||  __/ | | \ V /\__ \_| | | |  __/ |_ 
	|_.__/|_|  \__,_|_| |_(_)___|_| |_|\_/ |___(_)_| |_|\___|\__|
	</pre>

	<!-- TIME-BASED GREETING -->
	<?php
	$hour = (int)date("G");
	$greeting = "Heya, stranger.";
	if ($hour < 12) $greeting = "Good morning, net wanderer.";
	elseif ($hour < 18) $greeting = "Good afternoon, cyber cowboy.";
	else $greeting = "Good evening, ghost in the machine.";
	?>
	<p><strong><?=$greeting?></strong></p>

	<!-- USERNAME WITH CURSOR -->
	<h1 class="blinking-cursor">~<?=$user?></h1>

	<!-- BIO -->
	<p>Welcome to my tiny, text-based fortress on the web.</p>
	<p>💻 Cybersecurity nerd. 🕹 Indie game dev. 🛵 Vespa tinkerer.</p>

	<!-- CONTACT + SOCIAL COMBO -->
	<section>
		<h3>Contact</h3>
		<ul>
			<li><i class="fa fa-envelope"></i> <a href="mailto:<?=$user?>@envs.net"><?=$user?>@envs.net</a></li>
			<li><i class="fa fa-github"></i> <a href="https://github.com/brannn86">github.com/brannn86</a></li>
			<li><i class="fa fa-comments"></i> <a href="https://mastodon.social/@yourname">@yourname@mastodon.social</a></li>
			<li><i class="fa fa-discord"></i> brannn86 (or <a href="https://discord.gg/RHkP8J8K">server invite</a>)</li>
			<li><i class="fa fa-terminal"></i> IRC: <?=$user?>@tilde.chat</li>
		</ul>
	</section>

</main>

<!-- SIDEBAR NAV -->
<div id="sidebar">
	<nav class="block">
		<h3>Navigate</h3>
		<ul>
			<li><a href="projects.php">Projects</a></li>
			<li><a href="blog.php">Blog</a></li>
			<li><a href="now.php">Now</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
	</nav>
</div>

<!-- FOOTER -->
<footer>
	<small>Site deployed via Git · Built with black coffee and bash · Powered by Vesper-GPT</small>
</footer>

</body>
</html>
