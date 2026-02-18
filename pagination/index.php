<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .header {
        color: white;
        background-color: blue;
        margin: 0px;
        padding: 5px;
        text-align: center;
    }

    /* Basic Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-family: sans-serif;
        /* Clean, standard font */
    }

    /* Borders and Spacing */
    table,
    th,
    td {
        border: 1px solid #dee2e6;
        /* Standard light gray border */
    }

    th,
    td {
        padding: 12px;
        text-align: left;
    }

    /* Header Background */
    thead th {
        background-color: #f8f9fa;
        /* Very light gray header */
        font-weight: 600;
    }

    /* Light Zebra Striping (Optional) */
    tbody tr:nth-child(even) {
        background-color: #fafafa;
    }

    .pagination {
        text-align: center;
    }

    button {
        width: 50px;
        height: 40px;
        font-size: medium;
        font-weight: 700;
    }
</style>

<body>
    <h1 id="heading" class="header"> PHP & AJAX PAGINATION </h1>
    <div class="container">
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            function loadTable(page) {
                $.ajax({
                    url: "js/pagination.php",
                    type: "POST",
                    data: {
                        page_no: page
                    },
                    success: function(data) {
                        $(".container").html(data)
                    }
                });
            };
            loadTable();

            // pagination code 
            $(document).on("click", ".pagination button", function(e) {
                e.preventDefault();
                let page_id = $(this).attr("id");
                loadTable(page_id)

            })
        });
    </script>
</body>

</html>