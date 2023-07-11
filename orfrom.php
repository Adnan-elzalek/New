
<?php
if (isset($_POST['search'])) {
        $id = $_POST['ordrid'];

            // استعلام البحث واسترجاع ثلاثة عناصر
                $sql = "SELECT firstName, lastName, email FROM win WHERE id = $id";
                    $result = mysqli_query($conn, $sql);

                        if ($result) {
                                // استخراج البيانات
                                        $row = mysqli_fetch_assoc($result);
                                                $firstName = $row['firstName'];
                                                        $lastName = $row['lastName'];
                                                                $email = $row['email'];

                                                                        // استخدام البيانات كما تريد
                                                                                echo "First Name: " . $firstName . "<br>";
                                                                                        echo "Last Name: " . $lastName . "<br>";
                                                                                                echo "Email: " . $email . "<br>";
                                                                                                    } else {
                                                                                                            echo "حدث خطأ في الاستعلام: " . mysqli_error($conn);
                                                                                                                }
                                                                                                                }

}
?>



 <form action="search.php" 
method="POST" id='searchorder'>
  <input type='text' name='ordrid' value='' placeholder='رقم الطلب' style='width:55%;display:inline-block;' class='center' pattern='\d*' title='أرقام فقط' required>
    <input type='submit' name='search' value='بحـــث'>
    <div class='hidden' id='loading'><img src='images/loading.gif' style='width:40px;height:40px;'></div><div class='hidden' id='result'></div>	</center>		</div>	

