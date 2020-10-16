<?php
$email = "clifton@example"; //Note the .com missing
echo "PHP Version: ".phpversion().'<br>';
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo $email.'<br>';
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
}else{
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));   
}
?>