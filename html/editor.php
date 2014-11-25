<div class="section" id="editor">
    <form method="post" action="db/add_task.php">
	    <div class="form_row" id="editor_description_row">
	    	<input name="input_task_description" type="text"/>
	    	<input name="button_add_task" type="submit" value="ADD"/>
    	</div>
    	<div class="form_row" id="editor_time_row">
	    	<div class="form_label">DUE</div><input name="input_task_date_due" type="datetime"/>
	    	<div class="form_label">START</div><input name="input_task_date_start" type="datetime"/>
	    	<div class="form_label">DURATION (minutes)</div><input name="input_task_duration" type="number" value="30"/>
	    	<div class="form_label">MANDATORY</div><input name="checkbox_mandatory" type="checkbox"/>
    	</div>
    </form>
</div>