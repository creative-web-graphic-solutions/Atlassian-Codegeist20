<?php

$mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist') or die($mysqli->connect_error);
$date = $_POST['dateofjoin'];
   
$phpFileUploadErrors = array(
    0 => 'The file successfully Uploaded to the database',
    1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    3 => 'The uploaded file was only partially uploaded',
    4 => 'No file was uploaded',
    6 => 'Missing a temporary folder',
    7 => 'Failed to write file to disk.',
    8 => 'A PHP extension stopped the file upload.',
);

//$_$FILES global variable
if(isset($_FILES['userfile'])){
    
    $file_array = reArrayFiles($_FILES['userfile']);
    //pre_r($file_array);
    for ($i=0;$i<count($file_array);$i++){
        if ($file_array[$i]['error']) 
        {
            ?> <div class="alert alert-danger"> 
            <?php echo $file_array[$i]['name'].' - '.$phpFileUploadErrors[$file_array[$i]['error']]; 
            ?> </div> <?php
        }
        else {
            
            $extensions = array('jpg','png','gif','jpeg');
            
            $file_ext = explode('.',$file_array[$i]['name']);
            
                        
            $name = $file_ext[0];
            $name = preg_replace("!-!"," ",$name);
            $name = ucwords($name);
            
            $file_ext = end($file_ext);
            
            if (!in_array($file_ext, $extensions)) 
            {
                ?> <div class="alert alert-danger"> 
                <?php echo "$name - Invalid file extension!"; 
                ?> </div> <?php
            }
            else {
                
                $img_dir = 'web/'.$file_array[$i]['name'];
                
                move_uploaded_file($file_array[$i]['tmp_name'], $img_dir);
                
//                $sql = "INSERT IGNORE INTO $table (name,myphoto) VALUES('$name','$img_dir')";
               $sql = "INSERT INTO employees (employeeno, employeename, joblocation, dateofjoin, contactnumber, designation, status, photo) VALUES ('$_POST[num]', '$_POST[emp_name]', '$_POST[joblocation]', STR_TO_DATE('$date', '%m/%d/%Y'), '$_POST[contactno]', '$_POST[designation]', '$_POST[status]', '$img_dir')";
                $mysqli->query($sql) or die($mysqli->error);
                
                ?> <div class="alert alert-success"> 
                <?php echo $name.' - '.$phpFileUploadErrors[$file_array[$i]['error']]; 
                ?> </div> <?php
            }
        }
    }
}

function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>
