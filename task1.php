<!DOCTYPE html>
<html>
<body>


 <!-- Задача №1 -->

<form style='border-color:blue' action="<?= $_SERVER['REQUEST_URI']?>" method="post" >
	<div>
		Строки<br>
		<input type="text" name='row'  required pattern="[0-9]" > 
	</div>	

	
	<div>
		<input type="submit" id='btn' value="Конвертировать"> 
	</div>
</form><br>


<?php
$rows = $_POST['row'];
$cols =  0.61*$rows;
echo ($cols);

?>

 

<!-- Задача №2  -->
<form style='border-color:blue' action="<?= $_SERVER['REQUEST_URI']?>" method="post" >
	<div>
		Первая сторона<br>
		<input type="text" name='side1' > 
	</div>	


    <div>
		Вторая сторона<br>
		<input type="text" name='side2' > 
	</div>

    <div>
		Высота<br>
		<input type="text" name='hight' > 
	</div><br>
	
	<div>
		<input type="submit" id='btn2' value="Посчитать площадь"> 
	</div>
</form><br>


<?php
$a = $_POST['side1'];
$b = $_POST['side2'];
$hight = $_POST['hight'];
$square = 0.5*$hight*($a+$b);
echo($square);
?>


<!--  Задача №3 -->
<form style='border-color:blue' action="<?= $_SERVER['REQUEST_URI']?>" method="post" >
	<div>
		Введите A<br>
		<input type="text" name='aaa'  > 
	</div>	

	<div>
		Введите B<br>
		<input type="text" name='bbb'  > 
	</div>	

	<div>
		Введите C<br>
		<input type="text" name='ccc'  > 
	</div>	

	<div>
		<input type="submit" id='btn3' value="Вычислить"> 
	</div>
</form><br>
<img src="C:\ospanel\domains\tasks\task3.jpg">
<br>
<?php


$a3 = $_POST['aaa'];
$b3 = $_POST['bbb'];
$c3 = $_POST['ccc'];
$x3 = round(($a3*($b3**3)*($c3**5))+(($a3*$b3)**0.5)-($a3*$c3)/($a3**(1/3))) ;
$y3 = cos((2*M_PI*$c3)+($a3*($b3**2)));
echo($x3 );

?>
<br>
<br>
<?php
print_r($y3);
?>

<!-- Задача №4 -->


<form style='border-color:blue' action="<?= $_SERVER['REQUEST_URI']?>" method="post" >
	<div>
		Введите A<br>
		<input type="text" name='a4'  > 
	</div>	

	<div>
		Введите B<br>
		<input type="text" name='b4'  > 
	</div>	

	<div>
		Введите C<br>
		<input type="text" name='c4'  > 
	</div>	

	<div>
		<input type="submit" id='btn4' value="Сравнить"> 
	</div>
</form><br>


<?php
$a4 = $_POST['a4'];
$b4 = $_POST['b4'];
$c4 = $_POST['c4'];
$first = 2*$a4*$b4+$c4;
$second = $a4*$b4+2*$c4;

if ($first > $second) {
    echo "Первое выражение больше второго";
} elseif ($first == $second) {
    echo "Первое выражение равно второму";
} else {
    echo "Первое выражение меньше второго";
}
?>


<!-- Задача №5 -->

<form style='border-color:blue' action="<?= $_SERVER['REQUEST_URI']?>" method="post" >
	<div>
		Введите A<br>
		<input type="text" name='a5'  > 
	</div>	

	<div>
		Введите B<br>
		<input type="text" name='b5'  > 
	</div>	

	<div>
		<input type="submit" id='btn5' value="Сравнить числа"> 
	</div>
</form><br>


<?php
$a5 = $_POST['a5'];
$b5 = $_POST['b5'];


if ($a5 > $b5) {
	$b5=$a5;
	echo($a5);echo("\n");echo($b5);

} elseif ($a5 == $b5) {

	$a5 = 0;
	$b5 = 0;
	echo($a5);echo("\n");echo($b5);

} else {
	$a5 = $b5;
    echo($a5);echo("\n");echo($b5);
}
?>


<!-- Задача №6 -->
<form style='border-color:blue' action="<?= $_SERVER['REQUEST_URI']?>" method="post" >
	<div>
		Введите A<br>
		<input type="text" name='a6'  > 
	</div>	

	<div>
		Введите B<br>
		<input type="text" name='b6'  > 
	</div>	

	<div>
		<input type="submit" id='btn6' value="Найти сумму"> 
	</div>
</form><br>


<?php
$a6 = $_POST['a6'];
$b6 = $_POST['b6'];



$summa = 0;
for ($i = $a6; $i <= $b6; $i++) {
	$summa += $i**2;
    
}
echo($summa);
?>



<!-- Задача №7 -->
<form style='border-color:blue' action="<?= $_SERVER['REQUEST_URI']?>" method="post" >
	<div>
		Введите N<br>
		<input type="text" name='n7'  > 
	</div>	

	<div>
		<input type="submit" id='btn7' value="Определить"> 
	</div>
</form><br>


<?php
$n7 = $_POST['n7'];

$i = 1;
while ($n7 % 3 == 0) {
    $n7 /= 3;  
  exit('Истина');                 
}

echo("ЛОЖЬ ");

?>



<!-- Задача №8 -->
<form style='border-color:blue' action="<?= $_SERVER['REQUEST_URI']?>" method="post" >
	<div>
		Введите количество элементов массива А<br>
		<input type="text" name='a8' > 
	</div>	

	<div>
		<input type="submit" id='btn8' value="Магия массивов"> 
	</div>
</form><br>



<?php

$n8=$_POST['a8'];

//Массив A
foreach (range(0, $n8) as $arrayA) {
    echo $arrayA;
	echo(" ");
}
?>

<br>
<br>

<?php
//Массив B
foreach (range(1, $n8,2) as $arrayB) {
    echo $arrayB;
    echo (" ");
}
?>





<!-- Задача №9 -->

<form style='border-color:blue' action="<?= $_SERVER['REQUEST_URI']?>" method="post" >
	<div>
		Введите значение N<br>
		<input type="text" name='n9' > 
	</div>	
	<div>
		Введите значение M<br>
		<input type="text" name='m9' > 
	</div>

	<div>
		<input type="submit" id='btn9' value="Магия массивов x2"> 
	</div>
</form><br>


<?php

$m9=$_POST['m9'];
$n9=$_POST['n9'];


$MAX = 100;
 
function smallestInRow(&$mat, $n9, $m9)
{
    echo " [ ";
    for ($i = 0; $i < $n9; $i++)
    {
 
        // инициализация минимального элемента в качестве первого
        $minm = $mat[$i][0];
 
        for ($j = 1; $j < $m9; $j++)
        {
 
   /* проверка не меньше ли какой-либо элемент
  чем минимальный элемент строки
  и замена его при необходимости */
            if ($mat[$i][$j] < $minm)
                $minm = $mat[$i][$j];
        }
 
        // вывод наименьшего элемента каждой строки
        
        echo $minm . ", ";
    }
    echo "]";
}
 
// функция для нахождения
// минимального элемента в каждом столбце.
function smallestInCol(&$mat, $n9, $m9)
{
    echo " [ ";
    for ($i = 0; $i < $m9; $i++)
    {
 
        //минимальный элемент в качестве первого элемента
        $minm = $mat[0][$i];
 
        
        for ($j = 1; $j < $n9; $j++)
        {
 
/* проверка не меньше ли какой-либо элемент
  чем минимальный элемент столбца
  и замена его при надобности */
            if ($mat[$j][$i] < $minm)
                $minm = $mat[$j][$i];
        }
 
        // вывод наименьшего элемента строки
        echo $minm . ", ";
    }
 
    echo "]";
}
 



$mat = array(array( 2, 1, 7 ),
             array( 3, 7, 2 ),
             array( 5, 4, 9 ));
 
echo "Минимум каждой строки ";
smallestInRow($mat, $n9, $m9);
 
echo "\nминимальный элемент каждого столбца ";
smallestInCol($mat, $n9, $m9);

?>



<!-- Задача №10 -->

<form style='border-color:blue' action="<?= $_SERVER['REQUEST_URI']?>" method="post" >
	<div>
		Введите символ<br>
		<input type="text" name='symbol'  > 
	</div>	

	<div>
		Введите строку<br>
		<input type="text" name='string10'  > 
	</div>	

	<div>
		<input type="submit" id='btn10' value="Демонстрация"> 
	</div>
</form><br>


<?php
$symbol = $_POST['symbol'];
$string = $_POST['string10'];

echo substr_count($string,$symbol); 
?>



<!-- Задача №12 -->

<form style='border-color:blue' action="<?= $_SERVER['REQUEST_URI']?>" method="post" >
	<div>
		Введите год<br>
		<input type="text" name='year22' > 
	</div>	
	
	<div>
		<input type="submit" id='btn12' value="Показать"> 
	</div>
</form><br>

<?php
$year22 = $_POST['year22'];
function getFridays($year22, $format, $timezone='UTC')
{
    $fridays = array();
    $startDate = new DateTime("{$year22}-01-01 Friday", new DateTimezone($timezone));
    $year22++;
    $endDate = new DateTime("{$year22}-01-01", new DateTimezone($timezone));
    $int = new DateInterval('P7D');
    foreach(new DatePeriod($startDate, $int, $endDate) as $d) {
        $fridays[] = $d->format($format);
    }

    return $fridays;
    
}


$fridays = getFridays($year22, 'F j, Y, g:i a T', 'America/New_York');
print_r($fridays);

?>




</body>
</html>