<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		require_once "functions/functions.php";
	 	$title = "News about nothing";
		require_once "blocks/head.php"; 
		$news = getNews (3, $id);
	?>
</head>
<body>
	<?php require_once "blocks/header.php" ?>
	<div id="wrapper">
		<div id="leftCol">
		<?php
			for ($i = 0; $i < count($news); $i++) {
				if ($i == 0)
					echo '<div id="bigArticle">';
				else
					echo '<div class="article">';
				echo '<img src="img/articles/'.$news[$i]["id"].'.gif" alt="Статья '.$news[$i]["id"].'" title="'.$news[$i]["id"].'">
						<h2>'.$news[$i]["title"].'</h2>
						<p>'.$news[$i]["intro_text"].'</p>
						<a href="article.php?id='.$news[$i]["id"].'">
							<div class="more">Далее</div>
						</a>
					</div>';
						if ($i == 0)
							echo '<div class="clear"><br></div>';
			} 
		?>
		</div>
		<?php require_once "blocks/rightCol.php" ?>
	</div>

	<?php require_once "blocks/footer.php" ?>
</body>
</html>