<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Week 1</title>
    <style>
        body{
            font-family: 'Khmer OS Siemreap';
        }
        h2{
            font-family: 'Khmer OS Moul Light';
        }
    </style>
</head>
<body>
    <h2>អថេរនិងប្រភេទទិន្នន័យ</h2>
    <?php
    $i=2025;
    $s="January";
    $d=3.53;
    $b=false;
    $n=null;
    echo $i . " is a " .gettype( $i )."<br>";
    echo $s . " is a " .gettype( $s )."<br>";
    echo $d . " is a " .gettype( $d )."<br>";
    echo $b . " is a " .gettype( $b )."<br>";
    echo $n . " is a " .gettype( $n )."<br>";
    ?>
    <h2>រចនាសម្ព័ន្ធត្រួតត្រា if</h2>
    <?php
    if(is_int($i)) {
        echo "$i ជាលេខចំនួនគត់"."<br>";
    }
    if(is_string($s)) {
        echo "$s ជាឃ្លា"."<br>";
    }
    if(is_double($d)) {
        echo "$d ជាលេខចំនួនទស្សភាគ"."<br>";
    }
    if(is_bool($b)) {
        echo "$b b ជាចំនួនពិតឬមិនពិត"."<br>";
    }
    if(is_null($n)) {
        echo "$n n គឺទទេ"."<br>";
    }
    ?>
    <h2>ប្រភេទទិន្នន័យកាលបរិច្ឆេទឬពេលវេលា</h2>
    <?php
    $t=new DateTime() ;
    echo $t->format("D d F Y h:m:s A") ."<br>";
    ?>
    <h2>រចនាសម្ព័ន្ធត្រួតត្រា​ for and Swicth</h2>
    <ul>
        <?php
        $day=[
            new DateTime("2025/01/05"),
            new DateTime("2025/01/06"),
            new DateTime("2025/01/07"),
            new DateTime("2025/01/08"),
            new DateTime("2025/01/09"),
            new DateTime("2025/01/10"),
            new DateTime("2025/01/11")
        ] ;
        for($i=0;$i<7; $i++) {
            echo "<li>";
            switch($day[$i]->format("D")) {
                case "Sun":
                    echo "ថ្ងៃអាទិត្យ";
                    break;
                case "Mon":
                    echo "ថ្ងៃចន្ទ";
                    break;
                case "Tue":
                    echo "ថ្ងៃអង្គារ";
                    break;
                case "Wed":
                    echo "ថ្ងៃពុធ";
                    break;
                case "Thu":
                    echo "ថ្ងៃព្រហស្បត្ត៏";
                    break;
                case "Fri":
                    echo "ថ្ងៃសុក្រ";
                    break;
                case "Sat":
                    echo "ថ្ងៃសៅរ៏";
                    break;
            }
            echo"</li>";
        }
        ?>
    </ul>
</body>
</html>