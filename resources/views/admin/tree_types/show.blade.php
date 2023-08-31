<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-datatables@1.0.0/dist/style.css">
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@1.0.0/dist/umd.js"></script>
</head>

<body>
    <table id="myTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>28</td>
                <td>USA</td>
            </tr>
            <!-- ... more rows ... -->
        </tbody>
    </table>

    <script>
        new simpleDatatables.DataTable('#myTable');
    </script>
</body>

</html>
