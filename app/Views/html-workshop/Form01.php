<!DOCTYPE html>
<html>
    <head>
        <title>Form01</title>
    </head>
    <body>
    <form name="register" >
        <b>ชื่อจริง : </b>
        <br><input type="text" name="ชื่อจริง" size="10" maxlength="10" disabled /> <br>
        <b>นามสกุล : </b> <br>
        <input type="text" name="นามสกุล" size="10" maxlength="10" disabled /> <br><br>
        <b>เพศ : </b><br>
        <input type="Radio" name="เพศ" value="ชาย" > ชาย <br>
        <input type="Radio" name="เพศ" value="หญิง" > หญิง <br><br>
        <b>ภาษาที่ถนัด : </b> <br>
        <input type="checkbox" name="ภาษาที่ถนัด" value="HTML"> HTML <br>
        <input type="checkbox" name="ภาษาที่ถนัด" value="CSS" > CSS <br>
        <input type="checkbox" name="ภาษาที่ถนัด" value="PHP" > PHP <br>
        <br>
        <input type="button" value="ยกเลิก">
        <input type="submit" value="บันทึก">
</form>

    </body>
</html>