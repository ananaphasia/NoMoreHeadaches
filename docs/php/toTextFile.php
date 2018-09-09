<?php
if(isset($_POST['submitForm'])) {
    $data = $_POST['submitForm']. "\r\n";
    $ret = file_put_contents('../php/submittedForm.csv', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        header('Location: http://localhost/noMoreHeadaches/docs');
        die();
    }
}
else {
   die('no post data to process');
}
?>
