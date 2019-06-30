<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="author" content="author"/>
		<title>Bitter Sweet</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" media="screen"/>
	</head>

	<body>

		<?php
			$name = 'My Company Name';
			$head = ['PHP', 'JAVASCRIPT', 'HTML', 'CSS' ];
			$tag = '05';
			$mon = 'NOV';
		?>
	
		<div class="container">

			<div class="top">
				<a href="index.php"><span><?=$name?></span></a>
			</div>

			<div class="header"></div>

			<div class="main">

				<div class="item">

					<div class="date">
						<div><?=$mon?></div>
						<span><?=$tag?></span>
					</div>

					<div class="content">

						<h1>Porttitor posuere</h1>

						<div class="body">

							<p>In hac habitasse platea dictumst. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at arcu mattis iaculis. Nullam posuere tristique tortor. In bibendum. Aenean ornare, <a href="index.php">nunc eget pretium</a> porttitor, sem est pretium leo, non euismod nulla dui non diam. Pellentesque dictum faucibus leo. Vestibulum ac ante. Sed in est.</p>

							<blockquote><p>Sed sodales nisl sit amet augue. Donec ultrices, augue ullamcorper posuere laoreet, turpis massa tristique justo, sed egestas metus magna sed purus.</p></blockquote>

							<p>Aliquam risus justo, mollis in, laoreet a, consectetuer nec, risus. Nunc blandit sodales lacus. Nam luctus semper mi. In eu diam.</p>

							<p>Fusce porta pede nec eros. Maecenas ipsum sem, interdum non, aliquam vitae, interdum nec, metus. Maecenas ornare lobortis risus. Etiam placerat varius mauris. Maecenas viverra. Sed feugiat. Donec mattis <a href="index.php">quam aliquam</a> risus. Nulla non felis sollicitudin urna blandit egestas. Integer et libero varius pede tristique ultricies. Cras nisl. Proin quis massa semper felis euismod ultricies.
							</p>

						</div>

					</div>

				</div>

				<div class="item">

					<div class="date">
						<div>SEP</div>
						<span>30</span>
					</div>

					<div class="content">

						<h1>Adipiscing</h1>

						<div class="body">

							<p>Aliquam risus justo, mollis in, laoreet a, consectetuer nec, risus. Nunc blandit sodales lacus. Nam luctus semper mi. In eu diam. Phasellus rutrum elit vel nisi. Cras mauris nulla, egestas quis, cursus at, venenatis ac, ante. Fusce accumsan enim et arcu. Duis sagittis libero at lacus. Suspendisse lacinia nulla eget urna.</p>

							<ul>
								<li>Tristique</li>
								<li>Aenean</li>
								<li>Pretium</li>
							</ul>

							<p>In hac habitasse platea dictumst. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at arcu mattis iaculis. Nullam posuere tristique tortor. In bibendum. Aenean ornare, nunc eget pretium porttitor, sem est pretium leo, non euismod nulla dui non diam. Pellentesque dictum faucibus leo. Vestibulum ac ante. Sed in est. Sed sodales nisl sit amet augue. Donec ultrices, augue ullamcorper posuere laoreet, turpis massa tristique justo, sed egestas metus magna sed purus. Fusce eleifend, dui ut posuere auctor, justo elit posuere sapien, at blandit enim quam fringilla mi.</p>

						</div>

					</div>

				</div>

			</div>

			<div class="navigation">

			
				<?php
				
					$anzahl = count($head);
					$navi = '';
					for($n=0; $n<$anzahl; $n++){
						$navi .= '<h1>'.$head[$n].'</h1>';
						$navi .= '<ul>';
						for($x=0; $x<4; $x++){
							$navi .= '<li><a href="index.php">convallis</a></li>';
						}
						$navi .= '</ul>';
					}
					echo $navi;
				
				?>

			</div>

			<div class="clearer"><span></span></div>

			<div class="footer">
				<span class="left">&copy; 2017 <a href="index.php">Website.com</a>. Valid <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &amp; <a href="http://validator.w3.org/check?uri=referer">XHTML</a></span>
				<span class="right"><a href="http://templates.arcsin.se/">Website template</a> by <a href="https://arcsin.se/">Arcsin</a></span>
				<div class="clearer"><span></span></div>
			</div>

		</div>

	</body>

</html>
