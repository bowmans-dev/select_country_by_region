<?php 
$resultSet = $mysqli->query("SELECT name FROM asia");
?> 

<select id="selectAsia" name="asia" selected>
<option value="" selected>Asia<option>
<?php
while($rows = $resultSet->fetch_assoc())
{
    $name = $rows['name'];
    echo "<option value='name'>$name</option>";
}
?>
</select>