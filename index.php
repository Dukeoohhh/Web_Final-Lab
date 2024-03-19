<?php
require("connection.php");

if (isset($_POST['submit']) && isset($_POST["flavor"])) {

    $flavor = $_POST["flavor"];
    $balls = $_POST["balls"];
    $cone = $_POST["cone"];

    $query = "INSERT INTO icecream_info VALUES ('', '$flavor', '$balls', '$cone')";

    mysqli_query($conn, $query);

    echo
    "<script>
            alert('Insert Data Complete');
    </script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icecream Shop</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <header>
        <h1>Fat In Peace</h1>
    </header>

    <table id="menu">
        <tr>
            <td><img src="/img/ic-cookievani.webp" alt=""></td>
            <td><img src="/img/ic-vani.webp" alt=""></td>
        </tr>
        <tr>
            <td><a href="#cookievani">Cookie Vanilla</a></td>
            <td><a href="#vani">Vanilla</a></td>
        </tr>
        <tr>
            <td colspan="2">Ingredient</td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Milk</li>
                    <li>Cookie</li>
                    <li>Sugar</li>
                    <li>Vanilla Bean</li>
                </ul>
            </td>
            <td>
                <ol>
                    <li>Milk</li>
                    <li>Cookie</li>
                    <li>Sugar</li>
                    <li>Vanilla Bean</li>
                </ol>
            </td>
        </tr>
    </table>

    <form action="" method="post">
        <table id="select-menu">
            <tr>
                <td colspan="3">Choose your Order</td>
            </tr>
            <tr>
                <td>
                    <label for="">Choose Your Flavor</label>
                    <br>
                    <select name="flavor" id="" require>
                        <option value="">---</option>
                        <option value="Cookie Vanilla">Cookie Vanilla</option>
                        <option value="Vanilla">Vanilla</option>
                    </select>
                </td>
                <td>
                    <label for="">How Many Balls</label>
                    <br>
                    <select name="balls" id="" require>
                        <option value="">---</option>
                        <option value="1">1 Ball</option>
                        <option value="2">2 Balls</option>
                        <option value="3">3 Balls</option>
                    </select>
                </td>
                <td>
                    <label for="">Choose Cone Type</label>
                    <br>
                    <select name="cone" id="" require>
                        <option value="">---</option>
                        <option value="Regular">Regular</option>
                        <option value="Fish">Fish</option>
                        <option value="Bread">Bread</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">Submit Order</button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>