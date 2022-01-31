<!DOCTYPE html>
<html>
    <head>
        <title>Form04</title>
    </head>
    <body>
        <h2>ข้อมูลส่วนตัวเบื้องต้น</h2>
        <b>ชื่อจริง : </b>
        <br><input type="text" name="ชื่อจริง" size="10" maxlength="10" value="ปิยะธิดา" readonly /> <br>
        <b>นามสกุล : </b> <br>
        <input type="text" name="นามสกุล" size="10" maxlength="10" disabled value="วัฒนะทรัพย์"/> <br>
        <b>E-mail : </b><br>
        <input type="text" name="E-mail" size="35" maxlength="50"  /><br>
        <b>PIN : </b><br>
        <input type="password" name="PIN" size="2" maxlength="4"  /><br><br>
        <b>อายุ : </b>
        <input type="number" name="age"  min="1" max="30" /> <br>
        <br>
        <input type="button" value="ยกเลิก">
        <input type="submit" value="บันทึก">

    </body>
</html>