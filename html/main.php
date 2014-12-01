<ol id="task_list">
	<?php
		require_once 'db/db_interface.php';
		require_once 'core.php';

		$limit = get("task_count", 50);

		$query = $db->query(
			"SELECT id, description, owner
			 FROM tasks
			 WHERE completed = 0
			 ORDER BY priority DESC, due DESC
			 LIMIT $limit");

		if ($query) {
			while ($task_row = $query->fetch_assoc()) {
				echo '<li class="task" id="'.$task_row["id"].'"">';
					echo "". $task_row["owner"].": ";
					echo $task_row["description"];
		
				echo '</li>';
			}
		}

		$query->close();
	?>
</ol>