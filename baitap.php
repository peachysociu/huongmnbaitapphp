<?php
//1. kiểm tra một số có phải số chẵn không
function checkEvenNumbers($number)
{
    if ($number % 2 == 0)
    {
        return true;
    } else 
    {
        return false;
    }
}
$number = 123;
if (checkEvenNumbers($number)) 
{
    echo $number.'số chẵn';
} else {
    echo $number.'số lẻ';
}


//aa
$keyword = "manga";
$string = "Cô gái thích đọc manga và xem anime";
$keyword_length = strlen($keyword);
$string_length = strlen($string);
$found = false;
function checkString($string, $key_work) {
   for ($i = 0; $i <= $string_length - $keyword_length; $i++) {
    $j = 0;
    while ($j < $keyword_length && $string[$i + $j] == $keyword[$j]) {
        $j++;
    }
    if ($j == $keyword_length) {
        $found = true;
        break;
    }
}
}

    if ($found) {
    echo "Chuỗi không chứa từ khóa '$keyword'";
} else {
    echo "Chuỗi chứa từ khóa '$keyword'";
}



//3. in ra bảng cửu chương từ 1 đến 10
function isMultiplicationTable()
{
    for ($i=1;$i<=10;$i++)
    {
        echo "bảng cửu chương của số".$i."<br>";
        for ($j=1;$j<=10;$j++)
        {
            $result = $i*$j;
            echo $i."x"."$j"."=".$result."<br>";
        }
        echo "<br>";
    }
} isMultiplicationTable();


//4.kiểm tra một chuỗi có chứa một từ cụ thể
function checkArray($array, $element) {
    $check = strstr($array, $element);
    if ($check !== false) {
        return true;
    } else {
        return false;
    }
}
    $array = "Co gai thich doc manga va xem anime";
    $element = "manga";

    if (checkArray($array, $element)) {
        echo "Chuỗi chứa từ cụ thể '$element'.";
    } else {
        echo "Chuỗi không chứa từ cụ thể '$element'.";
    }


//Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElements($array) {
    return count($array);
}

// Mảng ban đầu
$array = [1, 2, 3, 4, 5];

// Tính số lượng phần tử trong mảng
$count = countElements($array);

// Hiển thị số lượng phần tử
echo "Số lượng phần tử trong mảng là: $count";
?>