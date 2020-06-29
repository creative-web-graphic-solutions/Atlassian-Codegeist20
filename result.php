<?php require_once employeeprocess.php; ?>
<?php $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist') or die($mysqli->connect_error); 
    $result = $mysqli->query("select * from employees") or die($mysqli->connect_error);
        pre_r($result);
       function pre_r($array){
           echo '<pre>';
           print_r($array);
           echo '</pre>';
       }
    
?>
			