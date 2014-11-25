<div class="section" id="list" >
	<div class="column" id="task_list">
		<ol class="list" id="tasks">
			<?php 
			// TODO: populate task list with items with checkboxes.
			// Example on next HTML line. 
			?>
			<li class="task" id="task_0">
				<input class="checkbox" type="checkbox" name="task_0_selected"/>
				<div class="task_description" id="task_0_description">the description</div>
			</li>
			<li class="task" id="task_1">
				<input class="checkbox" type="checkbox" name="task_1_selected"/>
				<div class="task_description" id="task_1_description">the description</div>
			</li>
			<li class="task" id="task_2">
				<input class="checkbox" type="checkbox" name="task_2_selected"/>
				<div class="task_description" id="task_2_description">the description</div>
			</li>
		</ol>
	</div>
	<div class="column" id="task_details">
		<?php
			//TODO: Pull all the information about the task.
		?>
		<div class="task_property" id="task_due">
		due time
		</div>
		<div class="task_property" id="task_duration">
		duration
		</div>
	</div>
</div>