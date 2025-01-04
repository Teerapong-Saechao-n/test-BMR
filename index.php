<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="POST">
        ชื่อ-นามสกุล : <input type="text" name="s_name" id="" placeholder="ป้อนชื่อ-นามสกุล" required>
        <br><br>
        เพศ :
        <input type="radio" name="s_gender" value="ผู้ชาย" checked>ผู้ชาย
        <input type="radio" name="s_gender" value="ผู้หญิง">ผู้หญิง <br><br>
        น้ำหนัก (กิโลกรัม) : <input type="number" name="s_weight" id="" placeholder="ป้อนน้ำหนัก (kg)" required><br><br>
        ส่วนสูง (เซนติเมตร) : <input type="number" name="s_height" id="" placeholder="ป้อนส่วนสูง (cm)" required><br><br>
        อายุ (ปี) : <input type="number" name="s_age" id="" placeholder="ป้อนอายุ (ปี)" required><br><br>
        กิจกรรม :
        <select name="s_exercise" id="">
            <option value="ไม่ออกกำลังกายเลย" selected id="1">ไม่ออกกำลังกายเลย</option>
            <option value="ออกกำลังกาย 1-3 วัน/สัปดาห์" id="2">ออกกำลังกาย 1-3 วัน/สัปดาห์</option>
            <option value="ออกกำลังกาย 3-5 วัน/สัปดาห์" id="3">ออกกำลังกาย 3-5 วัน/สัปดาห์</option>
            <option value="ออกกำลังกาย 6-7 วัน/สัปดาห์" id="4">ออกกำลังกาย 6-7 วัน/สัปดาห์</option>
            <option value="ออกกำลังกายอย่างหนัก" id="5">ออกกำลังกายอย่างหนัก</option>
        </select>
        <br>
        <hr>
        <!---------------------------------------------------------------------------------->
        <input type="submit" name="" id="คำนวณ">
        <input type="reset" name="" id="ยกเลิก">


    </form>
</body>
</html>