<?php

require "db.php";

$limit_perpage = 7;
$page = "";
if (isset($_POST["page_no"])) {
    $page = $_POST["page_no"];
} else {
    $page = 1;
}

$offset = ($page - 1) * $limit_perpage;


// Basic Query to get all data
$sql = "SELECT * FROM pagination LIMIT {$offset},{$limit_perpage}";
$result = mysqli_query($conn, $sql);

$output = "";


if (mysqli_num_rows($result) > 0) {
    // Add the table headers first
    $output .= '<table class="table-container">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                </thead>';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tbody>
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['f_name']} {$row['l_name']}</td>
                    </tr>
                    </tbody>";
    }

    $output .= '</table>';

    $sql = "SELECT * FROM pagination ";
    $records = mysqli_query($conn, $sql) or die("query unsuccessful");
    $total_rec = mysqli_num_rows($records);
    $total_pages = ceil($total_rec / $limit_perpage);

    $output .= "<div class='pagination'>";

    for ($i = 1; $i <= $total_pages; $i++) {
        $output .= "<button id=' {$i}'>{$i}</button>";
    }

    $output .= '</div>';


    echo $output;
} else {
    echo "<tr><td colspan='2'>No records found in database.</td></tr>";
}
