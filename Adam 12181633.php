<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>12181633</title>
</head>
<body>
    <p>Implode Function</p>
    <?php
    //1
    $mie = array("ayam bawang","soto ayam","goreng spesial");
    echo print_r($mie);
    //implode convert array value to string
    $implode_mie = implode(", ",$mie);
    echo "<br>1. ".$implode_mie;

    //2
    $time = array("hour"=>"12","minute"=>"22","second"=>"45");
    $implode_time = implode(":",$time);
    echo "<br>2. ".$implode_time;

    //3
    $repository = array("nama","repository","github","menggunakan","hypen");
    $implode_repository = implode("-",$repository);
    echo "<br>3. ".$implode_repository;

    //4
    $angka = array("4","3","2","1");
    $implode_angka = implode(" > ",$angka);
    echo "<br>4. ".$implode_angka;

    //5
    $month = array("Maret","April","Mei","Juni");
    $implode_month = implode(" lalu ",$month);
    echo "<br>5. ".$implode_month;
    ?>
    <hr>
    <p>Explode Function</p>
    <?php
    //1
    $mie = "indomie, sarimi, mie sedap";
    //explode function mengubah string dengan delimiter menjadi array
    $explode_mie = explode(",", $mie);
    print_r($explode_mie);
    //2
    $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
    echo "<br>";
    $pieces = explode( " ", $pizza );
    print_r($pieces);
    //3
    $str = 'one|two|three|four';
    echo "<br>";
    print_r( explode( '|', $str, 2 ) );
    echo "<br>";
    print_r( explode( '|', $str, - 1 ) );
    //4
    $path = '/Users/zhangrongxiang/WorkSpace/phpProjects/PHPTEST';
    echo "<br>";
    $rs = explode( '/', $path );
    print_r( $rs );
    echo "<br>";
    //5
    $data = "foo:*:1023:1000::/home/foo:/bin/sh";
    list( $user, $pass, $uid, $gid, $gecos, $home, $shell ) = explode( ":", $data );
    echo $user . PHP_EOL; 
    echo $pass . PHP_EOL; 
    print_r( explode( ';', $data ) );
    ?>
</body>
</html>