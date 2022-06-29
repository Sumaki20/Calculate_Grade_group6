<?php 
$cax = $_POST['cax'];
$cgx = $_POST['cgx'];
$allcre = $_POST['allcre'];
$allgrade = $_POST['allgrade'];
$GP = array();
$allcax = array();
$allcgx = array();

//$i = 0;
//foreach( $allcre as $cre ) {
//    foreach( $allgrade as $grade ) {   
//        echo $p = $cre + $grade + $cax + $cgx."<br>";
//        }
//    $i++;
//}  
echo $cax;
echo $allcre;
echo $_POST["allcre"];
// print "<table border ='1'>";
// print "<tr><td>".$p."</tr></td>";
// print "</table>";
// $i = 0;
// foreach( $allcre as $cre ) {
//     foreach( $allgrade as $grade ) {
//         $GP[$i] = $cre * $grade;
//         $allcgx[$i] = $allcgx + $GP[$i];
//     };
//     $allcax[$i] = $allcax + $cre;
//     echo "cax" . $allcax[$i] . "<br>";
//     echo "cgx" . $allcgx[$i] . "<br>";
//     echo "GP" . $GP[$i] . "<br>";
//     $i++;
// }  

// for ($p=0; $p < $allcre.lenght(); $p++) { 
//     # code...
// }
// $GPA = $allcgx / $allcax;
// echo "cax" . $allcax[0] . "<br>";
// echo "cgx" . $allcgx . "<br>";
// echo "GP" . $GP . "<br>";
// echo "GPA" . $GPA . "<br>";


// $cr1 = $_POST['cre1'];
// $cr2 = $_POST['cre2'];
// $cr3 = $_POST['cre3'];
// $cr4 = $_POST['cre4'];
// $cr5 = $_POST['cre5'];
// $cr6 = $_POST['cre6'];
// $cr7 = $_POST['cre7'];

// $grade1 = $_POST['grade1'];
// $grade2 = $_POST['grade2'];
// $grade3 = $_POST['grade3'];
// $grade4 = $_POST['grade4'];
// $grade5 = $_POST['grade5'];
// $grade6 = $_POST['grade6'];
// $grade7 = $_POST['grade7'];

// $gp1 = $cr1 * $grade1;
// $gp2 = $cr2 * $grade2;
// $gp3 = $cr3 * $grade3;
// $gp4 = $cr4 * $grade4;
// $gp5 = $cr5 * $grade5;
// $gp6 = $cr6 * $grade6;
// $gp7 = $cr7 * $grade7;

// $cax2 = $cax  + $cr2;
// $cax3 = $cax2 + $cr3;
// $cax4 = $cax3 + $cr4;
// $cax5 = $cax4 + $cr5;
// $cax6 = $cax5 + $cr6;
// $cax7 = $cax6 + $cr7;

// $cgx2 = $cgx  + $gp2;
// $cgx3 = $cgx2 + $gp3;
// $cgx4 = $cgx3 + $gp4;
// $cgx5 = $cgx4 + $gp5;
// $cgx6 = $cgx5 + $gp6;
// $cgx7 = $cgx6 + $gp7;

// $totalGp = $gp1 + $gp2 + $gp3 + $gp4 + $gp5 + $gp6 + $gp7;
// $totalcredit = $cr1 + $cr2 + $cr3 + $cr4 + $cr5 + $cr6 + $cr7;
// $gpa1 = $cgx7 + $totalGp;
// $gpa2 = $cax7 + $totalcredit;
// $gpa = $gpa1 / $gpa2; 
// number_format($gpa)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <script>
   //<console class="log"><?php $allcre ?></console>
   success: function($allcre) {
                        if ($allcre.length != 0) {
                            alert($allcre);
                        } else {
                            alert('ไม่พบวิชาที่ค้นหา');
                        }
                    }
   </script>
</body>
</html>