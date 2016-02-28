<?php
	
	try{

		$stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
		while($row = $stmt->fetch())
		{
			echo '<div>';
				echo '<h1><a href="viewpost.php?id='.$row['postID'].'">.'.$row['postTitle'].'</a></h1>';
				echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
		}
	}
?>