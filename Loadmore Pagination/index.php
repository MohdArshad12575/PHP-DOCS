<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Loadmore Pagination </title>
</head>
<style>
    .header {
        color: white;
        background-color: cadetblue;
        margin: 0px;
        padding: 5px;
        text-align: center;
    }

    /* Basic Table Styling */
    table {
        width: 60%;
        border-collapse: collapse;
        margin: 20px auto;
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

    tfoot td {
        text-align: center;
    }

    .pagination {
        text-align: center;
    }

    button {
        width: 100px;
        height: 40px;
        font-size: medium;
        font-weight: 600;
        background-color: cadetblue;
        color: white;
        border-radius: 10px;
        border-style: none;
    }
</style>

<body>
    <h1 id="heading" class="header"> LOAD MORE PHP AJAX PAGINATION </h1>
    <div class="container">
        <table class="table-container">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>FullName</th>
                </tr>
            </thead>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            function LoadMore(offset) {
                $.ajax({
                    url: "js/pagination.php",
                    type: "POST",
                    data: {
                        offset_id: offset || 0
                    },
                    success: function(data) {
                        if (data) {
                            $("tfoot").remove()
                            $(".table-container").append(data);
                        } else {
                            $(".lmbtn").hide()
                        }
                    }
                })
            }
            LoadMore();

            $(document).on("click", ".lmbtn", function(e) {
                e.preventDefault();
                let curr_offset = $(this).attr("id");
                LoadMore(curr_offset);
            })

        });
    </script>
</body>

</html>