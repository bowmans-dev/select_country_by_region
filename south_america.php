<?php 
$resultSet = $mysqli->query("SELECT name FROM southamerica");
?> 

<select id="selectSouthAmerica" name="southamerica" selected>
<option value="" selected>South America<option>
<?php
while($rows = $resultSet->fetch_assoc())
{
    $name = $rows['name'];
    echo "<option value='name'>$name</option>";
}
?>
</select>