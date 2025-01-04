<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <DOCTYPE html>
        <html lang="en">

        <head>
            <title>Calorie and BMR Calculator by John Keenan</title>
            <style type="text/css">
                * {
                    font-family: helvetica;
                    color: #000623;
                }

                body {
                    background-color: #000623;
                }

                .wrapper {
                    margin: 0 auto;
                    width: 800px;
                    text-align: center;
                }

                .ui {
                    margin-top: 80px;
                    background-color: #4A6C74;
                    padding: 20px;
                    border-radius: 3px;
                    border: 3px solid #8BA693;
                }

                input:not([type='radio']) {
                    height: 50px;
                    width: 240px;
                    font-size: 18px;
                    border-radius: 6px;
                    border: none;
                }

                input[type='submit'] {
                    background-color: #28475C;
                    color: #F0E3C0;
                }

                strong {
                    color: #F0E3C0;
                    line-height: 24px;
                }

                hr {
                    border: 0;
                    height: 0;
                    border-top: 1px solid rgba(0, 0, 0, 0.1);
                    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
                }

                p {
                    color: #F0E3C0;
                }
            </style>
        </head>

        <body>
            <div class="wrapper">
                <div class="ui">
                    <h2>BMR & Calorie intake calculator</h2>
                    <form action="" method="get">
                        <div>
                            <strong> Weight:</strong><br />
                            <input type="number" name="weight" value="<?php echo $_GET['weight']; ?>" required />
                        </div>
                        <br />
                        <div>
                            <strong>Height:</strong><br />
                            <input type="number" style="width: 120px" name="inches" value="<?php echo $_GET['inches']; ?>" placeholder="Inches" required />
                        </div>
                        <br />
                        <div>
                            <strong>Age:</strong><br />
                            <input type="number" name="age" value="<?php echo $_GET['age']; ?>" required />
                        </div>
                        <br />
                        <div>
                            <strong>Gender:</strong><br />
                            <input type="radio" name="gender" value="M">Male
                            <input type="radio" name="gender" value="F">Female
                        </div>
                        <div>
                            <br />
                            <input type="submit" value="Calculate!" />
                        </div>
                    </form>
                    <hr>
                    <?php

                    if (isset($_POST['weight']) && isset($_POST['inches']) && isset($_POST['age']) && isset($_POST['gender'])) {

                        $weight = $_POST['weight'];
                        $inches = $_POST['inches'];
                        $age = $_POST['years'];
                        $gender = $_POST['gender'];

                        if ($gender == "หญิง") {
                            $bmr = 655 + (9.6 * $weight) + (1.8 * $inches) - (4.7 * $age);
                            echo "<p>Your BMR is " . $bmr . "</p>";
                        } elseif ($gender == "ชาย") {
                            $bmr = 66 + (13.7 * $weight) + (5 * $inches) - (6.8 * $age);
                            echo "<p>Your BMR is " . $bmr . "</p>";
                        }
                    };

                    ?>
                </div>
            </div>
        </body>

        </html>
</body>

</html>