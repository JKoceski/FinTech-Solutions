<html>
 <head>
  <link rel="stylesheet" type="text/css" href="leaderboards.css">
 </head>

<body>
<table border="all" style="text-align: center;">
	

	<?php
		include_once 'resource/session.php';
		include_once 'resource/Database.php';

		$sql = "SELECT users.username, scores.score 
				FROM users JOIN scores ON users.id = scores.userId
				WHERE scores.type = 'movie'
				ORDER BY scores.score DESC";

		$result = $db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$rank = 1;
		if ($result->rowCount() > 0)
		{
			echo "
			<tr>
				<th colspan=\"3\"><h1 >Movie Quiz</h1></th>
			</tr>
			<tr>
				<th>Rank</th>
				<th>User</th>
				<th>Score</th>
			</tr>";

			while ($row = $result->fetch())
			{
				echo "
				<tr>
					<td>{$rank}</td>
					<td>{$row['username']}</td>
					<td>{$row['score']}</td>
				</tr>";
				$rank++;
			}
		}
	?>
</table>

<table border="all" style="text-align: center;">
	

	<?php
		include_once 'resource/session.php';
		include_once 'resource/Database.php';

		$sql = "SELECT users.username, scores.score 
				FROM users JOIN scores ON users.id = scores.userId
				WHERE scores.type = 'music'
				ORDER BY scores.score DESC";

		$result = $db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$rank = 1;
		if ($result->rowCount() > 0)
		{
			echo "
			<tr>
				<th colspan=\"3\"><h1 >Music Quiz</h1></th>
			</tr>
			<tr>
				<th>Rank</th>
				<th>User</th>
				<th>Score</th>
			</tr>";

			while ($row = $result->fetch())
			{
				echo "
				<tr>
					<td>{$rank}</td>
					<td>{$row['username']}</td>
					<td>{$row['score']}</td>
				</tr>";
				$rank++;
			}
		}
	?>
</table>

<table border="all" style="text-align: center;">
	

	<?php
		include_once 'resource/session.php';
		include_once 'resource/Database.php';

		$sql = "SELECT users.username, scores.score 
				FROM users JOIN scores ON users.id = scores.userId
				WHERE scores.type = 'sports'
				ORDER BY scores.score DESC";

		$result = $db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$rank = 1;
		if ($result->rowCount() > 0)
		{
			echo "
			<tr>
				<th colspan=\"3\"><h1 >Sports Quiz</h1></th>
			</tr>
			<tr>
				<th>Rank</th>
				<th>User</th>
				<th>Score</th>
			</tr>";

			while ($row = $result->fetch())
			{
				echo "
				<tr>
					<td>{$rank}</td>
					<td>{$row['username']}</td>
					<td>{$row['score']}</td>
				</tr>";
				$rank++;
			}
		}
	?>
</table>

<table border="all" style="text-align: center;">
	

	<?php
		include_once 'resource/session.php';
		include_once 'resource/Database.php';

		$sql = "SELECT users.username, scores.score 
				FROM users JOIN scores ON users.id = scores.userId
				WHERE scores.type = 'videogame'
				ORDER BY scores.score DESC";

		$result = $db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$rank = 1;
		if ($result->rowCount() > 0)
		{
			echo "
			<tr>
				<th colspan=\"3\"><h1 >Video Game Quiz</h1></th>
			</tr>
			<tr>
				<th>Rank</th>
				<th>User</th>
				<th>Score</th>
			</tr>";

			while ($row = $result->fetch())
			{
				echo "
				<tr>
					<td>{$rank}</td>
					<td>{$row['username']}</td>
					<td>{$row['score']}</td>
				</tr>";
				$rank++;
			}
		}
	?>
</table>

<table border="all" style="text-align: center;">
	

	<?php
		include_once 'resource/session.php';
		include_once 'resource/Database.php';

		$sql = "SELECT users.username, scores.score, scores.type
				FROM users JOIN scores ON users.id = scores.userId
				ORDER BY scores.score DESC";

		$result = $db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$rank = 1;
		if ($result->rowCount() > 0)
		{
			echo "
			<tr>
				<th colspan=\"4\"><h1 >Global Leaderboards</h1></th>
			</tr>
			<tr>
				<th>Rank</th>
				<th>User</th>
				<th>Score</th>
				<th>Catagory</th>
			</tr>";

			while ($row = $result->fetch())
			{
				echo "
				<tr>
					<td>{$rank}</td>
					<td>{$row['username']}</td>
					<td>{$row['score']}</td>
					<td>{$row['type']}</td>
				</tr>";
				$rank++;
			}
		}
	?>
</table>

</body>
</html>