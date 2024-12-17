<H3>try Catch</H3>
<?php 
try{
    $x = 10 / 0;
} catch(DivisionByZeroError $e){
    echo "เกิดข้อผิดพลาด: ไม่สามารถหารด้วยศูนย์ได้";
    //แสดงข้อความ error
}catch(Throwable $e){
    //ดักerror อื่นๆ ที่อาจเกิดขึ้น
    echo "เกิดข้อพลาดอื่นๆ: ". $e->getMessage();
}
?>