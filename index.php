<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            padding: 30px;
        }
        .box {
            width: 300px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            font-size: 16px;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background: #0056b3;
        }
        .result {
            margin-top: 15px;
            padding: 10px;
            background: #e9ffe8;
            border-left: 4px solid #28a745;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>PHP Calculator</h2>

    <form method="POST">
        <input type="number" name="num1" placeholder="Enter Number 1" required>

        <select name="operator" required>
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>

        <input type="number" name="num2" placeholder="Enter Number 2" required>

        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $op = $_POST['operator'];

        // Calculate
        switch($op){
            case "add":
                $result = $n1 + $n2;
                break;
            case "sub":
                $result = $n1 - $n2;
                break;
            case "mul":
                $result = $n1 * $n2;
                break;
            case "div":
                $result = ($n2 != 0) ? $n1 / $n2 : "Cannot divide by zero!";
                break;
        }

        echo "<div class='result'><strong>Result: </strong> $result</div>";
    }
    ?>

</div>

</body>
</html>
