 <?php
         $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
        $result = $mysqli->query("SELECT * FROM supporttickets") or die($mysqli->error);
    ?>