<!DOCTYPE html>

<html lang="en">

<head>
	
	<meta charset="UTF-8">
	
	<title>Document</title>
	
	<style>
		
		header {
			
			background-color: #e3e3e3;
			
			padding: 2em;
			
			text-align: center;
		}

	</style>

</head>

<body>

	<nav>
		
		<ul>
			<li><a href="about.view.php">About</a></li>
			<li><a href="contact.view.php">Contact us</a></li>
		</ul>
	</nav>

	<h1>Index File</h1>

	<ul>

		<?php foreach ($tasks as $task) : ?>
			
			<li>
				
				<?php if($task->completed) : ?>

					<strike> <?= $task->description; ?> </strike>

				<?php else : ?>
				
					<?= $task->description; ?>

				<?php endif; ?>
					
			</li>

		<?php endforeach; ?>

	</ul>

</body>

</html>




