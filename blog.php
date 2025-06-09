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

	<!-- PAGE UNDER CONSTRUCTION -->
	<h1 class="blinking-cursor">PAGE IS UNDER CONSTRUCTION</h1>
	<img src="/img/construction.jpg" alt="under construction">

</main>

<!-- SIDEBAR NAV -->
<div id="sidebar">
	<nav class="block">
		<h3>Navigate</h3>
		<ul>
			<li><a href="index.php">Home</a></li>
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
	<small>
		Site deployed via Git · Built with Marlboros and bash · Powered by Vesper-GPT<br>
		<span>
			Last deployed: UTC <?= date("Y-m-d H:i:s", filemtime(__FILE__)) ?>
			· <span id="timestamp"></span>
		</span>
	</small>
</footer>

<script>
function updateTime() {
	const now = new Date();
	const iso = now.toISOString().replace('T', ' ').split('.')[0];
	document.getElementById("timestamp").textContent = `UTC ${iso}`;
}
setInterval(updateTime, 1000);
updateTime();
</script>

</body>
</html>
