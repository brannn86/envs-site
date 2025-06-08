<?php $user = posix_getpwuid(fileowner(__FILE__))["name"]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>~<?=$user?> on envs.net</title>
	<meta charset="utf-8" />
	<meta name="author" content="<?=$user?>">
	<meta name="robots" content="noindex,nofollow">
	<meta name="description" content="~<?=$user?> on envs.net" />
	<meta name="keywords" content="<?=$user?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://envs.net/css/neoenvs.css" />
	<link rel="stylesheet" href="https://envs.net/css/fork-awesome.min.css" />
</head>
<body id="body" class="dark-mode">

<main>

<pre>
  _____                      _      
 |_   _|__  _ __ _ __   ___| |_ ___
   | |/ _ \| '__| '_ \ / _ \ __/ __|
   | | (_) | |  | | | |  __/ |_\__ \
   |_|\___/|_|  |_| |_|\___|\__|___/
                                    
</pre>

	<p>hi and welcome to my new website.</p>

	<table>
		<tr><th></th><th></th></tr>
		<tr>
			<td>IRC:</td>
			<td><?=$user?> on tilde.chat</td>
		</tr>
		<tr>
			<td>Mail:</td>
			<td><code><?=$user?>&#64;envs.net</code></td>
		</tr>
		<tr>
			<td>Discord:</td>
			<td><code>yourtag#0000</code></td>
		</tr>
	</table>

</main>

<div id="sidebar">
	<nav class="block">
		<ul>
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="#"><i class="fa fa-book"></i> Blog</a></li>
			<li><a href="#"><i class="fa fa-folder-open"></i> Projects</a></li>
			<li><a href="#"><i class="fa fa-user"></i> About</a></li>
			<li><a href="#"><i class="fa fa-envelope"></i> Contact</a></li>
		</ul>

		<hr>

		<ul>
			<li><a href="#"><i class="fa fa-github"></i> GitHub</a></li>
			<li><a href="#"><i class="fa fa-comments"></i> Mastodon</a></li>
			<li><a href="#"><i class="fa fa-discord"></i> Discord</a></li>
		</ul>
	</nav>
</div>

<footer>Deployed by Git, powered by coffee ☕</footer>

</body>
</html>
