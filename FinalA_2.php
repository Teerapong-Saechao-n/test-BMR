<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="title_bar_2">
        <h1> โปรแกรมคำนวณ BMR-TDEE </h1>
    </div>
    <!-- เลือกเพศของคุณ
                <p>
                    <input type="radio" checked="" align="left" value="MalePick" name="gender">
                    &nbsp;&nbsp;ชาย&nbsp;&nbsp;<br>
                    <input type="radio" align="left" value="FemPick" name="gender">
                    &nbsp;หญิง
                </p> -->
    เพศ : <?php echo $_POST['gender']; ?>
    <!-- ส่วนสูงของคุณ (เซนติเมตร)<br>
            <input size="5" name="cents"><br> -->
    ส่วนสูงของคุณ <?php echo $_POST['cents']; ?>
    <!-- น้ำหนักของคุณ (กิโลกรัม)<br>
            <input size="5" name="kilograms"><br> -->
    น้ำหนักของคุณ <?php echo $_POST['kilograms']; ?>
    <!-- อายุของคุณ (ปี)<br>
            <input size="5" name="years"><br> -->
    อายุของคุณ <?php echo $_POST['years']; ?>
    ระดับการออกกำลังกายของคุณ<br>
    <select name="exercise">
        <option value="1.25">น้อย หรือไม่ค่อยออกกำลังกาย</option>
        <option value="1.375">ปานกลาง ออกกำลังกาย 1-3 ครั้งต่อสัปดาห์</option>
        <option value="1.55">ปานกลาง ออกกำลังกาย 4-5 ครั้งต่อสัปดาห์</option>
        <option value="1.7">หนัก ออกกำลังกาย 6-7 ครั้งต่อสัปดาห์</option>
        <option value="1.9">หนักมาก ออกกำลังกายวันละ 2 ครั้งขึ้นไป</option>
    </select>
    <br><br>
    <input type="submit" name="" id="คำนวณ">
    <input type="reset" name="" id="ยกเลิก">
    <br>
    <br>
    <br>
    BMR (Basal Metabolic Rate) พลังงานที่จำเป็นพื้นฐานในการมีชีวิต<br>
    <input size="5" name="BMR" style="background-color:#FFC; border:solid 1px #CCC"> กิโลแคลอรี่
    <br>
    TDEE (Total Daily Energy Expenditure) พลังงานที่คุณใช้ในแต่ละวัน<br>
    <input size="5" name="tdee" style="background-color:#FFC; border:solid 1px #CCC"> กิโลแคลอรี่
    <br>



</body>

</html>