<!DOCTYPE html>
<html>
    <head>
        <title>Form05</title>
    </head>
    <body>
        <h2>แบบสอบถามข้อมูลส่วนบุคคล</h2>
        <hr>
    <form name="register" >
        <b> คำนำหน้าชื่อ </b>
        <select name="คำนำหน้าชื่อ" >
            <option value="นาย"> นาย </option>
            <option value="นาง"> นาง </option>
            <option value="นางสาว"> นางสาว </option>
        </select>
        <br><br>
        <b>ชื่อจริง</b>
        <input type="text" name="Fname" size="15" maxlength="5" />
        <b>นามสกุล</b>
        <input type="text" name="Lname" size="15" maxlength="5"  />
        <br><br>
        <b>วันเกิด</b>
        <input type="date" id="birthday" name="birthday">
        <br><br>
        <b>รหัสนิสิต</b>
        <input type="number" name="รหัสนิสิต"  /> 
        <br><br>
        <b>อีเมล</b>
        <input type="email" id="email" name="email">
        <br><br>
        <b>รหัสนิสิต</b>
        <input type="password" name="รหัสนิสิต" size="20" maxlength="20"  />
        <br><br><hr>
        <b>คณะ</b>
        <select name="คณะ" disabled >
            
            <option value="คณะแพทยศาสตร์" > คณะแพทยศาสตร์ </option>
            <option value="คณะพยายาลศาสตร์"> คณะพยายาลศาสตร์</option>
            <option value="คณะวิทยาการสารสนเทศ" selected > คณะวิทยาการสารสนเทศ </option>
            
        </select><br><br>
        <b>นิสิตชั้นปีที่</b>
        <input type="number" name="นิสิตชั้นปีที่" value="2"  disabled /> 
        <br><br>
        <b>มกุล</b><br>
        <input type="Radio" name="Cluster" value="0-3" > Cluster 0 - Cluster 3 <br>
        <input type="Radio" name="Cluster" value="4-6" > Cluster 4 - Cluster 6 <br>
        <input type="Radio" name="Cluster" value="7-9" > Cluster 7 - Cluster 9 <br><br>
        <b>ภาษาที่ถนัด</b> <br>
        <input type="checkbox" name="ภาษาที่ถนัด" value="HTML" checked> HTML  <br>
        <input type="checkbox" name="ภาษาที่ถนัด" value="CSS"  checked > CSS   <br>
        <input type="checkbox" name="ภาษาที่ถนัด" value="MySQL" checked> MySQL <br>
        <input type="checkbox" name="ภาษาที่ถนัด" value="JS" checked> JS <br>
        <input type="checkbox" name="ภาษาที่ถนัด" value="PHP" checked> PHP <br>
        <br>
        <input type="button" value="ยกเลิก">
        <input type="submit" value="บันทึก">
        
        
</form>

    </body>
</html>