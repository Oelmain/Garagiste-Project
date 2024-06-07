<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddddddc2;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2be;
        }

        #customers tr:hover {
            background-color: #ce50da;
        }

        #customers th {
            padding-top: 11px;
            padding-bottom: 11px;
            text-align: left;
            background-color: #f5c3f1;
            color: rgba(209, 137, 203, 0.678);
        }
    </style>
</head>

<body>

    <h1>Table Of Users</h1>

    <table id="customers">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
  

    </table>

</body>

</html>
