#Info and possible bugs#
- welcome.php is for returning users
- not sure if returning to Index.php logs the user out



->So we know what pages link to where<-
#HTML STRUCTURE#
- Start: Index.php --> newtask/login.php
- login.php --> newuser.php OR welcome.php

##Path 1: newuser.php##
- newuser.php --> createtask.php
- createtask.php --> task.php
- task.php  --> createtask.php OR viewtask.php OR Index.php
- viewtask.php --> createtask.php OR Index.php

##Path 2: welcome.php##
- welcome.php --> createtask.php OR viewtask.php OR Index.php
- createtask.php --> task.php
- task.php  --> createtask.php OR viewtask.php OR Index.php
- viewtask.php --> createtask.php OR Index.php
