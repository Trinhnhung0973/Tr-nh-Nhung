<?php 
//1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.

$n=10;
if($n%2==0){// $n % 2 == 0 có nghĩa là số dư của phép chia $n cho 2 bằng 0. Điều này có nghĩa là $n có thể chia hết cho 2 mà không có số dư.
    echo"số $n là số chẵn";
}else {
    echo" số $n là số lẻ";}



//2.Viết chương trình PHP để tính tổng của các số từ 1 đến n.
$n = 10;
$sum = 0;
for($i=1; $i<=$n;$i++){
    $sum = $sum + $i;
}
    echo "Tổng = ".$sum;

//3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10-> vòng lặp 1 đến 10,lồng nhau

for ($i = 1; $i <= 10; $i++) {
    echo "Bảng cửu chương của $i:\n";
    for ($j = 1; $j <= 10; $j++) {
      echo "$i x $j = " . $i * $j . "\n";
    }
  }
//4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.->sử dụng hàm strpos()
$string = "Xin chào mọi người,tôi tên là Nhung";
$word = "Nhung";
if( strpos($string,$word)== true){
    echo "chuỗi chứ từ 'Nhung'";
}else{
    echo "Chuỗi không chứa từ 'Nhung'";
}
//5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
$array = [1, 2, 3, 5, 7, 8, 9, 10, 12];
$max = $array[0];
$min = $array[0];
for($i =1; $i < count($array); $i++){
    if ($array[$i] > $max) {
        $max = $array[$i];
      }
    
      if ($array[$i] < $min) {
        $min = $array[$i];

      }
}
echo "Giá trị nhỏ nhất trong mảng là $min"."<br>";
echo "Giá trị lớn nhất trong mảng là $max";
//6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
$array = [4, 5, 10, 3, 12, 8, 20, 7, 1 ];

sort($array);

echo "Mảng sau khi sắp xếp: "."<br>";
print_r($array);

//7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
$n = 6;
function giaithua($n) {
    if ($n == 0) {
      return 1;
    } else {
      return $n * giaithua($n - 1);
    }
  }
  
  $giaithua = giaithua($n);
  
  echo "Giai thừa của $n là: $giaithua";
  //8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function sieveOfEratosthenes($n) {
    $primes = [];
  
    // Khởi tạo một mảng chứa tất cả các số nguyên từ 2 đến $n
    for ($i = 2; $i <= $n; $i++) {
      $primes[] = $i;
    }
  
    // Xóa các số nguyên tố không phải là số nguyên tố
    for ($i = 2; $i * $i <= $n; $i++) {
      // Nếu $i là số nguyên tố
      if ($primes[$i - 2]) {
        // Xóa tất cả các ước của $i từ mảng $primes
        for ($j = $i * $i; $j <= $n; $j += $i) {
          $primes[$j - 2] = false;
        }
      }
    }
  
    // Trả về các số nguyên tố còn lại trong mảng $primes
    return array_filter($primes, function ($prime) {
      return $prime;
    });
  }
  
  $start = 1;
  $end = 10;
  
  $primes = sieveOfEratosthenes($end);
  
  echo "Các số nguyên tố trong khoảng $start đến $end là: ";
  print_r($primes);
//9.Có hai cách để tính tổng của các số trong một mảng trong PHP:
$numbers = [1, 2, 3, 4, 5];
$total = array_sum($numbers);
echo $total;
//10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($n) {
  if ($n == 0 || $n == 1) {
    return $n;
  } else {
    return fibonacci($n - 1) + fibonacci($n - 2);
  }
}

function in_so_fibonacci($min, $max) {
  for ($i = $min; $i <= $max; $i++) {
    echo fibonacci($i) . " ";
  }
  echo "\n";
}

$min = 0;
$max = 10;

in_so_fibonacci($min, $max);
//11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function is_armstrong($number) {
  $digits = str_split($number);
  $sum = 0;
  foreach ($digits as $digit) {
    $sum += pow($digit, count($digits));
  }
  return $number == $sum;
}

echo is_armstrong(153); // true
echo is_armstrong(123); // false

//12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
$numbers = [1, 2, 3, 4, 5];

// Chèn phần tử 6 vào vị trí thứ 2
array_splice($numbers, 1, 0, [6]);

print_r($numbers); // [1, 6, 2, 3, 4, 5]

//13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
$numbers = [1, 2, 3, 4, 5, 1, 2, 3, 4, 5];

// Loại bỏ các phần tử trùng lặp
$unique_numbers = array_unique($numbers);

print_r($unique_numbers); // [1, 2, 3, 4, 5]

//14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
$numbers = [1, 2, 3, 4, 5];

// Tìm vị trí của phần tử 3
$position = array_search(3, $numbers);  

echo $position; // 2

//15.Viết chương trình PHP để đảo ngược một chuỗi.
$string = "hello";

// Đảo ngược chuỗi
$reversed_string = strrev($string);

echo $reversed_string; // olleh

//16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.
$numbers = [1, 2, 3, 4, 5];

echo count($numbers); // 5

//17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function is_palindrome($string) {
  $length = strlen($string);
  for ($i = 0; $i < $length / 2; $i++) {
    if ($string[$i] != $string[$length - $i - 1]) {
      return false;
    }
  }
  return true;
}

echo is_palindrome("madam"); // true
echo is_palindrome("hello"); // false

//18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function is_palindrome($string) {
  $length = strlen($string);
  for ($i = 0; $i < $length / 2; $i++) {
    if ($string[$i] != $string[$length - $i - 1]) {
      return false;
    }
  }
  return true;
}

echo is_palindrome("madam"); // true
echo is_palindrome("hello"); // false

//19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
$numbers = [1, 5, 3, 2, 4];

sort($numbers); // sắp xếp theo thứ tự tăng dần
rsort($numbers); // sắp xếp theo thứ tự giảm dần

print_r($numbers); // [5, 4, 3, 2, 1]

//20..Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
$numbers = [1, 2, 3];

array_unshift($numbers, 0); // thêm phần tử 0 vào đầu mảng
array_push($numbers, 4); // thêm phần tử 4 vào cuối mảng

print_r($numbers); // [0, 1, 2, 3, 4]

//21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function find_second_largest($numbers) {
  $largest = $numbers[0];
  for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $largest) {
      $second_largest = $largest;
      $largest = $numbers[$i];
    } else if ($numbers[$i] > $second_largest) {
      $second_largest = $numbers[$i];
    }
  }
  return $second_largest;
}

$numbers = [1, 5, 3, 2, 4];
echo find_second_largest($numbers); // 3

//22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function gcd($a, $b) {
  while ($b != 0) {
    $temp = $a;
    $a = $b;
    $b = $temp % $b;
  }
  return $a;
}

echo gcd(10, 20); // 10
//bội chung nhở nhất a và b:
lcm(a, b) = ab / gcd(a, b)

//23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function is_perfect_number($number) {
  $sum = 1;
  for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
      $sum += $i + $number / $i;
    }
  }
  return $sum == $number;
}

echo is_perfect_number(6); // true
echo is_perfect_number(15); // false

//24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function find_largest_odd_number($numbers) {
  $largest_odd_number = -1;
  for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 1) {
      if ($numbers[$i] > $largest_odd

//25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function is_prime_number($number) {
  for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
      return false;
    }
  }
  return true;
}

echo is_prime_number(2); // true
echo is_prime_number(15); // false

//26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function find_largest_positive_number($numbers) {
  $largest_positive_number = -1;
  for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > 0) {
      if ($numbers[$i] > $largest_positive_number) {
        $largest_positive_number = $numbers[$i];
      }
    }
  }
  return $largest_positive_number;
}

$numbers = [1, 2, 3, -4, 5, 6];
echo find_largest_positive_number($numbers); // 6

//27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function find_largest_negative_number($numbers) {
  $largest_negative_number = 0;
  for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] < 0) {
      if ($numbers[$i] < $largest_negative_number) {
        $largest_negative_number = $numbers[$i];
      }
    }
  }
  return $largest_negative_number;
}

$numbers = [1, 2, 3, -4, 5, 6];
echo find_largest_negative_number($numbers); // -4

//28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sum_of_odd_numbers($n) {
  $sum = 0;
  for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 1) {
      $sum += $i;
    }
  }
  return $sum;
}

echo sum_of_odd_numbers(10); // 55

//29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function find_perfect_squares($min, $max) {
  $perfect_squares = [];
  for ($i = $min; $i <= $max; $i++) {
    if (floor(sqrt($i)) == sqrt($i)) {
      $perfect_squares[] = $i;
    }
  }
  return $perfect_squares;
}

echo implode(" ", find_perfect_squares(1, 100)); // 1 4 9 16 25 36 49 64 81 100


//30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function is_substring($main_string, $sub_string) {
  $main_string_length = strlen($main_string);
  $sub_string_length = strlen($sub_string);
  for ($i = 0; $i <= $main_string_length - $sub_string_length; $i++) {
    if (substr($main_string, $i, $sub_string_length) == $sub_string) {
      return true;
    }
  }
  return false;
}

echo is_substring("hello world", "world"); // true
echo is_substring("hello world", "hello"); // true
echo is_substring("hello world", "worlds"); // false
