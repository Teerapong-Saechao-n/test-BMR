<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    ชื่อ-นามสกุล : <?php echo $_POST['s_name']; ?><br>
    เพศ : <?php echo $_POST['s_gender']; ?><br>
    น้ำหนัก (กิโลกรัม) : <?php echo $_POST['s_weight']; ?><br>
    ส่วนสูง (เซนติเมตร) : <?php echo $_POST['s_height']; ?><br>
    อายุ (ปี) : <?php echo $_POST['s_age']; ?><br>
    กิจกรรม : <?php echo $_POST['s_exercise']; ?><br>
    <hr>
    <!---------------------------------------------------------------------------------->
    <?php
    //สูตรคำนวณ BMR
    if (isset($_POST['s_height']) && isset($_POST['s_weight']) && isset($_POST['s_age']) && isset($_POST['s_gender'])) {

        $height = $_POST['s_height'];
        $weight = $_POST['s_weight'];
        $age = $_POST['s_age'];
        $gender = $_POST['s_gender'];

        if ($gender == "ผู้หญิง") {
            $bmr = 665 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
            echo 'BMR : ' . $bmr . '<br>';
        } elseif ($gender == "ผู้ชาย") {
            $bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
            echo 'BMR : ' . $bmr . '<br>';
        }
    }
    ?>
    <!---------------------------------------------------------------------------------->
    <!-- สูตรคำนวณ TDEE -->
    <?php
    if (isset($_POST['s_exercise'])) {
        $exercise = $_POST['s_exercise'];
        if ($exercise == "ไม่ออกกำลังกายเลย") {
            $total = $bmr * 1.2;
            echo 'TDEE : ' . $total;
        } elseif ($exercise == "ออกกำลังกาย 1-3 วัน/สัปดาห์") {
            $total = $bmr * 1.375;
            echo 'TDEE : ' . $total;
        } elseif ($exercise == "ออกกำลังกาย 3-5 วัน/สัปดาห์") {
            $total = $bmr * 1.55;
            echo 'TDEE : ' . $total;
        } elseif ($exercise == "ออกกำลังกาย 6-7 วัน/สัปดาห์") {
            $total = $bmr * 1.725;
            echo 'TDEE : ' . $total;
        } elseif ($exercise == "ออกกำลังกายอย่างหนัก") {
            $total = $bmr * 1.9;
            echo 'TDEE : ' . $total;
        }
    }
    ?>



</body>

</html>