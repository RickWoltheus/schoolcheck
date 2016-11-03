
<?php

$q = $_GET['q'];//data from HTML
require 'config.php';
require 'database.php';

$sql="SELECT * FROM newsarticles WHERE title LIKE '$q%'";//prepare query

$result = mysqli_query($mysqli,$sql);//do it

echo "<table>
<tr>
<th>title</th>
<th>date_created</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['date_created'] . "</td>";
    echo "</tr>";
}
echo "</table>";


