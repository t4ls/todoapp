<html>
<head>
<link rel="stylesheet" href="../style.css"/>
<script type="text/javascript">
   function validatetask() {
      if ((document.addtask.description.value=="")){
         alert ("Please add a description");
        return false;
      } else {
         return true;
      }
   }
</script>
</head>
<body>
<?php 
session_start(); 
$username = $_SESSION['username'];
echo "hello ".$username;
?>
<h1>Add Task</h1>

<form name ="addtask" form action="task.php" onsubmit="return validatetask();" method="post">

   <div class="form_row">
      <span class="form_label">Description: </span>
      <textarea name="description" rows="5" cols="40"></textarea>
   </div>
   <div class="form_row">
      <span class="form_label">Priority: </span>
      <input type="radio" name="priority" <?php if (isset($priority) && $priority=="low") echo "checked";?>  value="low">low</input>
      <input type="radio" name="priority" <?php if (isset($priority) && $priority=="routine") echo "checked";?>  value="routine">routine</input>
      <input type="radio" name="priority" <?php if (isset($priority) && $priority=="pressing") echo "checked";?>  value="pressing">pressing</input>
      <input type="radio" name="priority" <?php if (isset($priority) && $priority=="urgent") echo "checked";?>  value="urgent">urgent</input></div>
   <div class="form_row">
      <span class="form_label">Due Date: </span><input class="textbox" type="date" name="duedate"/>
   </div>
   <div class="form_row">
      <input type="submit" value="Submit"/>
   </div>
</form>
<?php
echo $description;
echo $priority;
echo $_POST['duedate'];
?>
</body>
</html>