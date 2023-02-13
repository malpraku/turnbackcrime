
<?php
  
// Use ls command to shell_exec
// function
$output = shell_exec('whoami');
  
// Display the list of all file
// and directory
echo "<pre>$output</pre>";
?>