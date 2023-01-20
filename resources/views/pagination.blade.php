<html>

<head>
    <style>
        .center {
            text-align: center;
        }

        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
            margin: 0 4px;
        }

        .pagination a.active {
            background-color: #321FDB;
            color: white;
            border: 1px solid #321FDB;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <div class="center">
        <div class="pagination">
            <a href="">&laquo;</a>
            <a href="" class="active">1</a>
            <a href="">2</a>
            <a href="">3</a>
            <a href="">4</a>
            <a href="">&raquo;</a>
        </div>
    </div>

</body>

</html>