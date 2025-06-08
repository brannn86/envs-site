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
</head>
<body id="body" class="dark-mode">

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

	<h1>~<?=$user?></h1>
	<p>Welcome to my tiny, text-based fortress on the web.</p>
	<p>💻 Cybersecurity nerd. 🕹 Indie game developer. 🛵 Vespa enthusiast.</p>

	<!-- SOCIAL LINKS -->
	<p>
		<a href="https://github.com/yourname"><i class="fa fa-github"></i> GitHub</a> |
		<a href="https://mastodon.social/@yourname"><i class="fa fa-comments"></i> Mastodon</a> |
		<a href="mailto:<?=$user?>@envs.net"><i class="fa fa-envelope"></i> Email</a> |
		<a href="https://discord.gg/RHkP8J8K"><i class="fa fa-discord"></i> Discord</a>
	</p>

	<!-- CONTACT TABLE -->
	<table>
		<tr><th>Service</th><th>Handle</th></tr>
		<tr><td>IRC:</td><td><?=$user?>@tilde.chat</td></tr>
		<tr><td>Mail:</td><td><code><?=$user?>&#64;envs.net</code></td></tr>
		<tr><td>Discord:</td><td>brannn86</td></tr>
	</table>

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

		<h3>Find Me On</h3>
		<ul>
			<li><a href="https://github.com/brannn86"><i class="fa fa-github"></i> GitHub</a></li>
			<li><a href="#"><i class="fa fa-comments"></i> Mastodon</a></li>
			<li><a href="#"><i class="fa fa-discord"></i> Discord Server</a></li>
		</ul>
	</nav>
</div>

<!-- FOOTER -->
<footer>
	<small>Site deployed via Git · 🚬 fueled · Emotionally supported by Vesper-GPT </small>
</footer>

</body>
</html>
