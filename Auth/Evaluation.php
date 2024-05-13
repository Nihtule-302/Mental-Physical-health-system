<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f8fa;
            color: #4f4f4f;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 40px 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid #e3e4f3;
            width: 100%;
            max-width: 350px; /* Restrict max width for better aesthetics */
            text-align: center;
        }
        h1 {
            font-size: 24px;
            font-weight: 600;
            color: #00b5c3;
            margin-bottom: 20px;
        }
        label {
            font-weight: 500;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .dropdown, button, input {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            cursor: pointer;
        }
        button {
            background: linear-gradient(to right, #0093E9, #80D0C7);
            color: #ffffff;
            font-weight: 600;
            border: none;
            transition: background-color 0.3s;
        }
        button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Evaluation</h1>
    <form action="updateEvaluationTable.php" method="get">
        <label for="selection">Rating:</label>
        <select name="selection" id="selection" class="dropdown">
            <option value=5 selected>5</option>
            <option value=4>4</option>
            <option value=3>3</option>
            <option value=2>2</option>
            <option value=1>1</option>
        </select>

        <br>
        <br>

        <label for="details">Details:</label><br>
        <input type="text" id="details" name="details" required><br><br>

        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
