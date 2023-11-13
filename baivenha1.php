
<?php
// ----------------------------------------------------------------------------------------------------1
echo "<br>";
echo "Bài 1:";
echo "<br>";
function soChan($n)
{
    if (is_int($n)) {
        if ($n % 2 == 0) {
            echo "$n la so chan";
        } else {
            echo "$n khong la so chan";
        }
    } else {
        echo "Khong la so chan";
    }
}
$n = 10.2;
soChan($n);
echo "<br>";

// ----------------------------------------------------------------------------------------------------2
echo "<br>";
echo "Bài 2:";
echo "<br>";
function tongn($n){
  $sum = $n*($n+1)/2;  
  echo $sum; 
}
$n = 10;
echo "Tong cac so tu 1 den $n la: "; tongn($n);
echo "<br>";

// ----------------------------------------------------------------------------------------------------3
echo "<br>";
echo "Bài 3:";
echo "<br>";
function bangCuuChuong($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo "$i x $j = " . $i * $j . '<br>';
        }
    }
}
$n = 2;
bangCuuChuong($n);
echo "<br>";





// ----------------------------------------------------------------------------------------------------4
echo "<br>";
 echo "Bài 4:";
 echo "<br>";
function checkIfExist($word , $my_string){
    if((strpos($my_string, $word)) !== false)
    {echo"word existed";}
    else{ echo "word not exist";}
    }
$word= "hom";
$my_string= "ha hahahahahahahaha hom";
checkIfExist($word,$my_string);
echo "<br>";

// ----------------------------------------------------------------------------------------------------5

echo "<br>";
echo "Bài 5";
function findMax($x){
   $max=$x[0];
   foreach($x as $bon){   
     if($bon>$max){$max=$bon; };
   }
   echo "<br>";
   echo "số lớn nhất trong chuỗi là: $max";
}
$test= array(9,6,7,8);
findMax($test);
echo "<br>";

// ----------------------------------------------------------------------------------------------------6

echo "<br>";
echo "Bài 6";
function sapXepTang($x){
  $test=$x[0];
  $num=count($x)-1;
  for($n=0;$n<$num;$n++){
    for($i=$n+1;$i<=$num;$i++){
      if($x[$i]<$x[$n]){
        $test=$x[$n];
        $x[$n]=$x[$i];
        $x[$i]=$test;
      }
    }
  }
echo "<br>";
echo "Mảng theo thứ tự tăng dần là: ";
foreach($x as $nho){
  echo "$nho, ";
}
echo "Hết.";
}
$x= array(9,6,7,8,10,22,11,33,12);
sapXepTang($x);
echo "<br>";

// ----------------------------------------------------------------------------------------------------7
echo "<br>";
echo "Bài 7";
function tinhGiaiThua($n) {
    $giai_thua = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $giai_thua *= $i;
        }
        echo $giai_thua;
    }
}
$a = 5;
echo "<br>";
echo "Giai thừa của $a là: "; tinhGiaithua($a);
echo "<br>";

// ----------------------------------------------------------------------------------------------------8
echo "<br>";
echo "Bài 8";
function checkPrime($n)
{ for ($i = 2; $i <= sqrt($n); $i++) {
    if ($n % $i == 0){
      return false;
    }
  }
    return true;
}
$n = 7;
echo "<br>";
if(checkPrime($n)){
  echo "{$n} là số nguyên tố";
}
else{echo "{$n} là hợp số";}
echo "<br>";

// ----------------------------------------------------------------------------------------------------9

echo "<br>";
echo "Bài 9";
function tong($n){
  $sum=0;
  foreach($n as $i){
    $sum +=$i;
  }
  echo $sum;
}
$n= array(1,2,4,5);
echo "<br>";
echo "Tổng mảng ";
foreach($n as $i){
  echo "$i ";
}
echo " là: ";
tong($n);
echo "<br>";


// ----------------------------------------------------------------------------------------------------10
echo "<br>";
echo "Bài 10";
function fiBoNaCci($a,$b){
  $x[0]=0;
  $x[1]=1;
  for($n=2;$n<=$b;$n++){
    $x[$n]=$x[$n-1]+$x[$n-2];
  }
  echo "<br>";
  echo "Dãy fibonacci trong khoảng $a đến $b là: ";
  foreach($x as $nho){
    if($a<=$nho && $b>=$nho){
      echo "$nho, ";
    };
  }
  echo "Hết.";
}
$a=5;
$b=100;
fiBoNaCci($a,$b);
echo "<br>";




// ----------------------------------------------------------------------------------------------------11
echo "<br>";
echo "Bài 11";
echo "<br>";
function checkAmNum($a){
  $num= strlen($a);
  $sum=0;
  for($n=0;$n<$num;$n++){
   $test= substr($a, $n, 1) ; 
   $sum +=$test*$test*$test ;
  }
  if($a==$sum){
    echo "$a là số Amstrong.";
  } else {
    echo "$a không là số Amstrong.";
  }
}
$g=153;
checkAmNum($g);
echo "<br>";


// ----------------------------------------------------------------------------------------------------12
echo "<br>";
echo "Bài 12";
echo "<br>";
function chenMang($a, $b, $c){
  if($c>=count($a)){
    echo "không tồn tại vị trí này";
  } else {
    $test=$a[$c-1];
    $a[$c-1]=$b;
    
    for($n=$c;$n<count($a);$n++){
      $thu=$a[$n];
      $a[$n]=$test;
      $test=$thu;
    }
    echo "Mảng sau khi chèn là: ";
    foreach($a as $nho){
      echo "$nho, ";
    }
    echo "Hết. ";
  }
}
$a =array(1,2,3,4,5,6,7,"");
$b = 9;
$c=2;
chenMang($a,$b,$c);
echo "<br>";

// ----------------------------------------------------------------------------------------------------13
echo "<br>";
echo "Bài 13";
echo "<br>";
function xoaTrung($x){
  $num=count($x)-1;
  for($n=0;$n<$num;$n++){
    for($i=$n+1;$i<=$num;$i++){
      if($x[$i]==$x[$n]){
       $x[$i]=null;
      }
    }
  }
  echo "Mảng sau khi lọc trùng là: ";
  foreach($x as $nho){
    echo "$nho ";
  }
  echo "Hết. ";
}
$x=array(1,2,3,4,4,5,6,7,2,4,7);
xoaTrung($x);
echo "<br>";



// ----------------------------------------------------------------------------------------------------14
echo "<br>";
echo "Bài 14";
echo "<br>";
function timMang($phaneTuCanTim, $mang){
  $test=-1;
  for($n=0; $n<count($mang);$n++){ 
    if($mang[$n]==$phaneTuCanTim){
      $test= $n+1;     
    } 
  }
  return $test;
}
$mang = array(30, 20, 10, 40, 50);
$phaneTuCanTim =10;
$kq=timMang($phaneTuCanTim, $mang);
if($kq==-1){
  echo "không tồn tại trong mảng.";
} else{
  echo "vị trí trong mảng là: $kq";
}
;
echo "<br>";

// ----------------------------------------------------------------------------------------------------15
echo "<br>";
echo "Bài 15";
echo "<br>";
function daoNguoc($a){
  echo strrev($a);
}
$a="helo ban";
daoNguoc($a);
echo "<br>";

// ----------------------------------------------------------------------------------------------------16 
echo "<br>";
echo "Bài 16";
echo "<br>";
function demSoPhanTu($a){
  $dem=0;
  foreach($a as $nho){
    if($nho!=null){$dem+=1;};
  }
  echo "So phan tu là: $dem";
}
$a=array(1,2,3,4);
demSoPhanTu($a);
echo "<br>";


// ----------------------------------------------------------------------------------------------------17
echo "<br>";
echo "Bài 17";
echo "<br>";

function isPalindrome($chuoi) {
  // Chuyển đổi chuỗi thành chữ thường và loại bỏ các ký tự không phải chữ cái
  $chuoiXuoi = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $chuoi));
  
  // Chuỗi đảo ngược
  $chuoiNguoc = strrev($chuoiXuoi);
  
  // So sánh chuỗi xuôi và chuỗi ngược
  return $chuoiXuoi == $chuoiNguoc;
}

// Chuỗi kiểm tra
$chuoiCanKiemTra = "A man, a plan, a canal, Panama";

// Kiểm tra chuỗi có phải là chuỗi palindrome hay không
if (isPalindrome($chuoiCanKiemTra)) {
  echo "$chuoiCanKiemTra là chuỗi palindrome";
} else {
  echo "$chuoiCanKiemTra không phải là chuỗi palindrome";
}
echo "<br>";


// ----------------------------------------------------------------------------------------------------18
echo "<br>";
echo "Bài 18";
echo "<br>";
function demSoLan($mang,$place){
  $dem=0;
  foreach($place as$p){
    if($p==$mang){
      $dem+=1;
    }
  }
  echo "So lan xuat hien là: $dem";
}
$mang=2;
$place= array(1,2,3,4,2,2);
demSoLan($mang,$place);
echo "<br>";


// ----------------------------------------------------------------------------------------------------19
echo "<br>";
echo "Bài 19";
function sapXepGiam($x){
  $test=$x[0];
  $num=count($x)-1;
  for($n=0;$n<$num;$n++){
    for($i=$n+1;$i<=$num;$i++){
      if($x[$i]>$x[$n]){
        $test=$x[$n];
        $x[$n]=$x[$i];
        $x[$i]=$test;
      }
    }
  }
echo "<br>";
echo "Mảng theo thứ tự giảm dần là: ";
foreach($x as $nho){
  echo "$nho, ";
}
echo "Hết.";
}
$x= array(9,6,7,8,10,22,11,33,12);
sapXepGiam($x);
echo "<br>";




// ----------------------------------------------------------------------------------------------------20
echo "<br>";
echo "Bài 20";
echo "<br>";
function chenDauMang($a, $b){
  $test=$a[0];
  $a[0]=$b;   
  for($n=1;$n<count($a);$n++){
      $thu=$a[$n];
      $a[$n]=$test;
      $test=$thu;
    }
  echo "Mảng sau khi chèn là: ";
  foreach($a as $nho){
    echo "$nho, ";
  }
  echo "Hết. ";
}
$a =array(1,2,3,4,5,6,7,"");
$b = 9;
chenDauMang($a,$b);
echo "<br>";
function chenCuoiMang($a, $b){
  $c=count($a);
  $a[$c]=$b;
  echo "Mảng sau khi chèn là: ";
  foreach($a as $nho){
    echo "$nho, ";
  }
  echo "Hết. ";
}
$a =array(1,2,3,4,5,6,7);
$b = 9;
chenCuoiMang($a,$b);
echo "<br>";


// ----------------------------------------------------------------------------------------------------21
echo "<br>";
echo "Bài 21";
echo "<br>";
function findSecondPlace($x){
  $test=$x[0];
  $num=count($x)-1;
  for($n=0;$n<$num;$n++){
    for($i=$n+1;$i<=$num;$i++){
      if($x[$i]>$x[$n]){
        $test=$x[$n];
        $x[$n]=$x[$i];
        $x[$i]=$test;
      }
    }
  }
  echo "Giá trị lớn thứ 2 là: $x[1] ";
}
$x= array(9,6,7,8,10,22,11,33,12);
findSecondPlace($x);
echo "<br>";

// ----------------------------------------------------------------------------------------------------22
echo "<br>";
echo "Bài 22";
echo "<br>";
function uscln($a, $b) {
  while ($b != 0) {
      $r = $a % $b;
      $a = $b;
      $b = $r;
  }
  return $a;
}
// Hàm để tính BSCNN
function bscnn($a, $b) {
  return ($a * $b) / uscln($a, $b);
}
// Hai số nguyên dương cần tìm USCLN và BSCNN
$so1 = 12;
$so2 = 18;
// Tính và hiển thị USCLN và BSCNN
echo "USCLN của $so1 và $so2 là: " . uscln($so1, $so2) ;
echo "<br>";
echo "BSCNN của $so1 và $so2 là: " . bscnn($so1, $so2) ;
echo "<br>";

// ----------------------------------------------------------------------------------------------------23
echo "<br>";
echo "Bài 23";
echo "<br>";
function laSoHoanHao($so) {
  $tongUocSo = 0;
  for ($i = 1; $i <= $so / 2; $i++) {
      if ($so % $i == 0) {
          $tongUocSo += $i;
      }
  }
  return $tongUocSo == $so;
}
$soCanKiemTra=28;
if (laSoHoanHao($soCanKiemTra)) {
  echo "$soCanKiemTra là số hoàn hảo";
} else {
  echo "$soCanKiemTra không phải là số hoàn hảo";
};
echo "<br>";

// ----------------------------------------------------------------------------------------------------24
echo "<br>";
echo "Bài 24";
echo "<br>";
function timSoLeLonNhat($mang) {
  $soLeLonNhat = null;
  foreach ($mang as $so) {
      // Kiểm tra xem số có là số lẻ và lớn hơn số lẻ lớn nhất hiện tại không
      if ($so % 2 != 0 && ($soLeLonNhat === null || $so > $soLeLonNhat)) {
          $soLeLonNhat = $so;
      }
  }
  return $soLeLonNhat;
}
$mang = array(2, 5, 8, 3, 9, 6, 7, 4);
$soLeLonNhat = timSoLeLonNhat($mang);
if ($soLeLonNhat !== null) {
  echo "Số lẻ lớn nhất trong mảng là: $soLeLonNhat";
} else {
  echo "Không có số lẻ nào trong mảng";
}
echo "<br>";

// ----------------------------------------------------------------------------------------------------25
echo "<br>";
echo "Bài 25";
echo "<br>";
function laSoNguyenTo($so) {
  if ($so < 2) {
      return false; 
  }
  for ($i = 2; $i <= sqrt($so); $i++) {
      if ($so % $i == 0) {
          return false; 
      }
  }
  return true; 
}
$soCanKiemTra = 17;
if (laSoNguyenTo($soCanKiemTra)) {
  echo "$soCanKiemTra là số nguyên tố";
} else {
  echo "$soCanKiemTra không phải là số nguyên tố";
}
echo "<br>";



// ----------------------------------------------------------------------------------------------------26
echo "<br>";
echo "Bài 26";
echo "<br>";
function findMaxPos($x){
  $test=$x[0];
  $num=count($x)-1;
  for($n=0;$n<$num;$n++){
    for($i=$n+1;$i<=$num;$i++){
      if($x[$i]>$x[$n]){
        $test=$x[$n];
        $x[$n]=$x[$i];
        $x[$i]=$test;
      }
    }
  }
  if($x[0]>0){
  echo "Giá trị dương lớn nhất là: $x[0] ";
  } else {
    echo "Không tồn tại giá trị dương nào.";
  }
}
$x= array(9,6,7,8,10,22,11,-33,12);
findMaxPos($x);
echo "<br>";

// ----------------------------------------------------------------------------------------------------27
echo "<br>";
echo "Bài 27";
echo "<br>";
function findMaxNeg($x){
  $test=$x[0];
  $num=count($x)-1;
  for($n=0;$n<$num;$n++){
    for($i=$n+1;$i<=$num;$i++){
      if($x[$i]>$x[$n]){
        $test=$x[$n];
        $x[$n]=$x[$i];
        $x[$i]=$test;
      }
    }
  }
  foreach($x as $nho){
    if($nho<0){
      return $nho;
    } 
  }
  if($x[0]>0){
  echo "Giá trị dương lớn nhất là: $x[0] ";
  } else {
    echo "Không tồn tại giá trị dương nào.";
  }
}
$x= array(9,6,7,8,10,-22,11,-33,-12);
$thu=findMaxNeg($x);
if($thu==null){
  echo "Không tồn tại giá trị âm nào";
} else {
  echo "Giá trị âm lớn nhất là: $thu";
}
echo "<br>";

// ----------------------------------------------------------------------------------------------------28
echo "<br>";
echo "Bài 28";
echo "<br>";
function tinhTongSoLe($n) {
  $tong = 0;
  for ($i = 1; $i <= $n; $i += 2) {
    $tong += $i;
  }
  return $tong;
}
$n = 10;
$tong = tinhTongSoLe($n);
echo "Tổng các số lẻ từ 1 đến $n là: $tong";
echo "<br>";

// ----------------------------------------------------------------------------------------------------29
echo "<br>";
echo "Bài 29";
echo "<br>";
function laSoChinhPhuong($so) {
  return (sqrt($so) == (int)sqrt($so));
}
function timSoChinhPhuongTrongKhoang($batDau, $ketThuc) {
  $dem=0;
  for ($i = $batDau; $i <= $ketThuc; $i++) {
    if (laSoChinhPhuong($i)) {       
      $soChinhPhuong[$dem] = $i;
      $dem++;
    }
  }
  foreach( $soChinhPhuong as $nho){
    echo"$nho ";
  };
}
$batDau = 1;
$ketThuc = 100;
echo "Các số chính phương trong khoảng từ $batDau đến $ketThuc là: ";
timSoChinhPhuongTrongKhoang($batDau, $ketThuc);
echo "<br>";

// ----------------------------------------------------------------------------------------------------30
echo "<br>";
echo "Bài 30";
echo "<br>";
function checkIfIn($word , $my_string){
    if((strpos($my_string, $word)) !== false)
    {echo"'$word' là chuỗi con của '$my_string'";}
    else{ echo "'$word' là không chuỗi con của '$my_string'";}
    }
$word= "hom";
$my_string= "ha hahahahahahahaha hom";
checkIfIn($word,$my_string);
echo "<br>";
?>