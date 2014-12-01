<?php 
session_start(); 
$username = $_SESSION['username'];
echo "hello ".$username;
?>
<br>
<h3>Add Task</h3>
<form action="task.php" method="post">
   description: <textarea name="description" rows="5" cols="40"><?php echo $description;?></textarea>
   <br><br>
   
   Priority:
   <input type="radio" name="priority" <?php if (isset($priority) && $priority=="low") echo "checked";?>  value="low">low
   <input type="radio" name="priority" <?php if (isset($priority) && $priority=="routine") echo "checked";?>  value="routine">routine
   <input type="radio" name="priority" <?php if (isset($priority) && $priority=="pressing") echo "checked";?>  value="pressing">pressing
   <input type="radio" name="priority" <?php if (isset($priority) && $priority=="urgent") echo "checked";?>  value="urgent">urgent      
   <span class="error">* <?php echo $priorityErr;?></span>
   <br><br>
   Due Date:
   <input class="textbox" type="date" name="duedate"/>
   <br><br>
   <input type="submit">
<?php
echo $description;
echo $priority;
echo $_POST['duedate']

?>
