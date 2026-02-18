<?php
require "db.php";
$limit = 5;
$offset = "";
if (isset($_POST["offset_id"])) {
    $offset = $_POST["offset_id"];
} else {
    $offset = 0;
}

$sql = "SELECT * FROM pagination LIMIT  {$offset},{$limit}";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $output = "";
    $output .= "<tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        $last_id = $row['id'];
        $output .= "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['f_name']} {$row['l_name']}</td>
                    </tr>";
    }
    $output .= "</tbody>";
    $output .= "<tfoot>
                <tr>
                    <td colspan='2'><button id='{$last_id}' class='lmbtn' >Load More</button></td>
                </tr>
                </tfoot>";
    echo $output;
} else {
    echo "";
}
