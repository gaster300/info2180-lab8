<?php
mysql_connect(
"127.0.0.1",
"root",
"bear123"
);
mysql_select_db("world");


$lookup = $_REQUEST['lookup'];

# execute a SQL query on the database
$results = mysql_query("SELECT * FROM countries WHERE name LIKE '%$lookup%';");
echo $results;
# loop through each country
while ($row = mysql_fetch_array($results)) {
  ?>
  <li> <?php echo $row["name"]; ?>, ruled by <?php echo $row["head_of_state"]; ?> </li>
  <?php
}
?>

