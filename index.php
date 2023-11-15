<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add and Retrieve Data</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        h2 {
            margin-top: 40px;
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background-color: #fff;
            padding: 10px;
            margin: 8px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <form action="process.php" method="post">
        <label for="data">Enter Data:</label>
        <input type="text" name="data" id="data" required>
        <button type="submit">Add to Database</button>
    </form>

    <h2>Stored Data:</h2>
    <?php
    // Include environment variables
    include 'renv.php';

    // Include PHP script to retrieve data
    include 'retrieve.php';
    ?>

</body>
</html>
