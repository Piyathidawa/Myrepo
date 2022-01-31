<!DOCTYPE html>
<html>
    <head>
        <title>รายละเอียดข้อมูลนิสิต</title>
    </head>
    <body>

        <img src ="<?php echo base_url() .'/picture/Buu-logo.png'  ?> " width='5%'>
        <font size='100'> รายละเอียดข้อมูลนิสิต </font>
        <h3> 1. ข้อมูลส่วนตัว </h3>
        รหัสนิสิต :<?php echo $id ?> <br><br>
        คำนำหน้า : <?php echo $name_title.' '.$firstname.' '.$lastname ?><br><br>
        วันเกิด : <?php echo $bod ?> <br><br>
        อีเมล : <?php echo $email ?> <br><br>
        <hr>
        <h3> 2. ข้อมูลการเรียน </h3>
        นิสิตชั้นปีที่ : <?php echo $year ?> <br><br>
        มกุล : <?php echo $cluster ?> <br><br>
        
        ภาษาที่ถนัด :  <br>
            <?php  
                $i = 1;
                foreach($code as $value){
                    echo $i.'. ';
                    echo $value .'<br>' ;
                    $i++;
                } 
            ?> <br><br>
        <hr>
        <h3> 3. รูปภาพและไฟล์ข้อมูล </h3>
        <img src ="<?php echo base_url().'./picture/'.$image  ?> " width='5%'> <br>
        <iframe src="<?php echo base_url() .'/file/'.$file ?>" width="50%" height="500px" ></iframe>

       
        <hr>
       
            
            
        </form>

    </body>
</html>