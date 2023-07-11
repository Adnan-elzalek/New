<?php

$sql = 'SELECT * FROM win';
$result = mysqli_query($conn, $sql);
$win= mysqli_fetch_all($result, MYSQLI_ASSOC); // get table from database and convert it to array


// print_r() executes the scripts in database
// echo '<pre>';
// htmlspecialchars(print_r($win));
// echo '</pre>';

// foreach ($win as $key => $user) {
//     // script out database as a htmlspecialchars (string)
//     echo htmlspecialchars("$key => {$user['firstName']}") . "<br/>";

// }
/////// محاولة 


$uniqueId = mt_rand(1000000, 9999999); // توليد رقم عشوائي من سبعة أرقام

// التحقق من عدم تكرار الرقم في الجدول
$sql = "SELECT COUNT(*) AS count FROM win WHERE id = $uniqueId";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// إعادة توليد الرقم حتى لا يتكرر في الجدول
while ($count > 0) {
    $uniqueId = mt_rand(1000000, 9999999);
        $sql = "SELECT COUNT(*) AS count FROM win WHERE id = $uniqueId";
            $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                    $count = $row['count'];
                    }

                    // استخدام الرقم العشوائي الغير متكرر في استعلام الإدخال
                    $sql = "INSERT INTO win (id, firstName, lastName, email) VALUES ($uniqueId, '$firstName', '$lastName', '$email')";








// get winner
$sql = 'SELECT * FROM win  ORDER BY RAND() LIMIT 1';
$result = mysqli_query($conn, $sql);

$winners = mysqli_fetch_all($result, MYSQLI_ASSOC);
