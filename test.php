<!DOCTYPE html>
<html>
<body>

<?php
$mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
$result = $mysqli->query("SELECT * FROM equipments") or die($mysqli->error);
?>
<?php
 while ($row = $result->fetch_assoc()): ?>
                    <?php echo $row['purpose']; ?>
                        <?php echo $row['joblocation']; ?>
                        <?php echo $row['equipmentneed']; ?>
                       <?php echo $row['availableequip']; ?>
                        
                            
                           <button name="edit" class="btn btn-info"> <a href=""  data-toggle="modal" data-dismiss="modal" style="color: brown" >Edit</a> </button>
                        
                        <button name="delete" class="btn btn-info " ><a href="resources.php?delete=<?php echo $row['id']; ?>" style="color: brown">Delete</a> </button> 
                       
                <?php endwhile; ?>    

</body>
</html>
