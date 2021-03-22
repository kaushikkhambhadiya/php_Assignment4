<?php

require('mysqli_oop_connect.php');

//run the query using object oriented php
$q = "SELECT * from messages";
$r = $mysqli->query($q);

// echo statement which displays the username and the message
$rowCount = $r->num_rows;
if ($rowCount > 0) {
    echo '<table class="table table-striped text-center">
	<thead>
	<tr>
	<th>User Name</th>
	<th>Messages</th>
	</tr>
	</thead>
	<tbody>
';

    
    while ($row = $r->fetch_object()) {
        echo '<tr>
              <td>' . $row->username . '</td>
              <td>' . $row->message . '</td>
              </tr>';
    }

    echo '</tbody>
          </table>';

} else {

    echo '<p class="text-center text-danger">There are currently no users .</p>';

}

$mysqli->close();
?>
