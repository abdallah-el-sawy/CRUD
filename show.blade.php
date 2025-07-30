<html>
<head>
    <title>Show Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 40px;
            color: #333;
        }

        h3 {
            color: #007bff;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 6px;
            max-width: 400px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        li {
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
        }

        li:last-child {
            border-bottom: none;
        }

        li::before {
            content: "• ";
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h3>Welcome to show page</h3>

    <ul>
        <li>ID: {{ $movie['id'] }}</li>
        <li>Title: {{ $movie['title'] }}</li>
        <li>Description : {{ $movie['description'] }}</li>
        <li>Hours: {{ $movie['hours'] }}</li>
    </ul>
</body>
</html>
