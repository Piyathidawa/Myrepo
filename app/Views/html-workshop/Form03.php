<!DOCTYPE html>
<html>
    <head>
        <title>Form03</title>
    </head>
    <body>
        <h2>อาการไม่พึงประสงค์หลังฉีดวัคซีน</h2>
    <form name="register" >
        <b>ชื่อผู้ฉีดวัคซีน : </b>
        <input type="text" name="Fname" size="20" maxlength="15" disabled />
        <br><br>
        <b>ความรู้สึกฉันตอนนี้ : </b><br>
            <textarea> </textarea><br><br>
        <b>ฉันรู้สึก : </b><br>
        <input type="Radio" name="ฉันรู้สึก" value="โชคดี" > โชคดี <br>
        <input type="Radio" name="ฉันรู้สึก" value="โชคร้าย" > โชคร้าย <br>
        <input type="Radio" name="ฉันรู้สึก" value="ยอมรับในโชคชะตา" > ยอมรับในโชคชะตา <br><br>
        <input type="checkbox" name="ยืนยันข้อมูล" value="ยืนยันข้อมูล"  required> ยืนยันข้อมูล <br>
        <br>
        <input type="button" value="ยกเลิก">
        <input type="submit" value="บันทึก">
</form>

    </body>
</html>