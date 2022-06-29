<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GPA SDU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="jumbotron bg-primary text-light pt-3 pb-3">
        <h1 class="text-center">GPA SDU</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- ส่งค่าไปคำนวน-->
            <div class="col-md-6">
                <div class="container">
                    <form method="POST" action="index.php">
                        <div class="form-group row">
                            <label for="cax" class="col-sm-3 col-form-label">CAX</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="cax" name="cax">
                            </div>
                            <label for="cgx" class="col-sm-3 col-form-label">CGX</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="cgx" name="cgx">
                            </div><br><br>
                          <!-- คำนวน -->
                        <?php 
                       
                          
                        $cax = $_POST['cax'];
                        $cgx = $_POST['cgx'];

                        $cr1 = $_POST['cre1'];
                        $cr2 = $_POST['cre2'];
                        $cr3 = $_POST['cre3'];
                        $cr4 = $_POST['cre4'];
                        $cr5 = $_POST['cre5'];
                        $cr6 = $_POST['cre6'];
                        $cr7 = $_POST['cre7'];

                        $grade1 = $_POST['grade1'];
                        $grade2 = $_POST['grade2'];
                        $grade3 = $_POST['grade3'];
                        $grade4 = $_POST['grade4'];
                        $grade5 = $_POST['grade5'];
                        $grade6 = $_POST['grade6'];
                        $grade7 = $_POST['grade7'];

                        $gp1 = $cr1 * $grade1;
                        $gp2 = $cr2 * $grade2;
                        $gp3 = $cr3 * $grade3;
                        $gp4 = $cr4 * $grade4;
                        $gp5 = $cr5 * $grade5;
                        $gp6 = $cr6 * $grade6;
                        $gp7 = $cr7 * $grade7;

                        $cax2 = $cax  + $cr2;
                        $cax3 = $cax2 + $cr3;
                        $cax4 = $cax3 + $cr4;
                        $cax5 = $cax4 + $cr5;
                        $cax6 = $cax5 + $cr6;
                        $cax7 = $cax6 + $cr7;

                        $cgx2 = $cgx  + $gp2;
                        $cgx3 = $cgx2 + $gp3;
                        $cgx4 = $cgx3 + $gp4;
                        $cgx5 = $cgx4 + $gp5;
                        $cgx6 = $cgx5 + $gp6;
                        $cgx7 = $cgx6 + $gp7;

                        $totalGp = $gp1 + $gp2 + $gp3 + $gp4 + $gp5 + $gp6 + $gp7;
                        $totalcredit = $cr1 + $cr2 + $cr3 + $cr4 + $cr5 + $cr6 + $cr7;
                        $gpa1 = $cgx7 + $totalGp;
                        $gpa2 = $cax7 + $totalcredit;
                        $gpa = $gpa1 / $gpa2; 
                        number_format($gpa)
                        
                        ?>
                            <form method="POST" action="index.php">
                                <table class="table table-striped table-hover">
                                    <tbody class="bg-primary text-light">
                                      
                                        <tr> <th class="text-center">วิชาที่</th> <th class="text-center">หน่วยกิจ</th><th class="text-center">เกรด</th> </tr>
                                        <tr> <td class="text-center">วิชาที่ 1</td>  <td class="text-center"> <input type="text" class="form-control" name="cre1"> </td>  
                                        <td class="text-center"><select name="grade1"id="grade1">
                                        <option value="4">A</option>
                                        <option value="3.5">B+</option>
                                        <option value="3">B</option>
                                        <option value="2.5">C+</option>
                                        <option value="2">C</option>
                                        <option value="1.5">D+</option>
                                        <option value="1">D</option>
                                        <option value="0">F</option></td> </tr>
                                        <tr> <td class="text-center">วิชาที่ 2</td>  <td class="text-center"> <input type="text" class="form-control" name="cre2"> </td>  
                                        <td class="text-center"><select name="grade2"id="grade2">
                                        <option value="4">A</option>
                                        <option value="3.5">B+</option>
                                        <option value="3">B</option>
                                        <option value="2.5">C+</option>
                                        <option value="2">C</option>
                                        <option value="1.5">D+</option>
                                        <option value="1">D</option>
                                        <option value="0">F</option></td> </tr></td> </tr>
                                        <tr> <td class="text-center">วิชาที่ 3</td>  <td class="text-center"> <input type="text" class="form-control" name="cre3"> </td>  
                                        <td class="text-center"><select name="grade3"id="grade3">
                                        <option value="4">A</option>
                                        <option value="3.5">B+</option>
                                        <option value="3">B</option>
                                        <option value="2.5">C+</option>
                                        <option value="2">C</option>
                                        <option value="1.5">D+</option>
                                        <option value="1">D</option>
                                        <option value="0">F</option></td> </tr></td> </tr>
                                        <tr> <td class="text-center">วิชาที่ 4</td>  <td class="text-center"> <input type="text" class="form-control" name="cre4"> </td>  
                                        <td class="text-center"><select name="grade4"id="grade4">
                                        <option value="4">A</option>
                                        <option value="3.5">B+</option>
                                        <option value="3">B</option>
                                        <option value="2.5">C+</option>
                                        <option value="2">C</option>
                                        <option value="1.5">D+</option>
                                        <option value="1">D</option>
                                        <option value="0">F</option></td> </tr></td> </tr>
                                        <tr> <td class="text-center">วิชาที่ 5</td>  <td class="text-center"> <input type="text" class="form-control" name="cre5"> </td>  
                                        <td class="text-center"><select name="grade5"id="grade5">
                                        <option value="4">A</option>
                                        <option value="3.5">B+</option>
                                        <option value="3">B</option>
                                        <option value="2.5">C+</option>
                                        <option value="2">C</option>
                                        <option value="1.5">D+</option>
                                        <option value="1">D</option>
                                        <option value="0">F</option></td> </tr></td> </tr>
                                        <tr> <td class="text-center">วิชาที่ 6</td>  <td class="text-center"> <input type="text" class="form-control" name="cre6"> </td>   
                                        <td class="text-center"><select name="grade6"id="grade6">
                                        <option value="4">A</option>
                                        <option value="3.5">B+</option>
                                        <option value="3">B</option>
                                        <option value="2.5">C+</option>
                                        <option value="2">C</option>
                                        <option value="1.5">D+</option>
                                        <option value="1">D</option>
                                        <option value="0">F</option></td> </tr></td> </tr>
                                        <tr> <td class="text-center">วิชาที่ 7</td>  <td class="text-center"> <input type="text" class="form-control" name="cre7"> </td>  
                                        <td class="text-center"><select name="grade7"id="grade7">
                                        <option value="4">A</option>
                                        <option value="3.5">B+</option>
                                        <option value="3">B</option>
                                        <option value="2.5">C+</option>
                                        <option value="2">C</option>
                                        <option value="1.5">D+</option>
                                        <option value="1">D</option>
                                        <option value="0">F</option></td> </tr></td> </tr>
                                    </tbody>

                                    <tfoot class="bg-primary text-light">
                                        <tr> 
                                          <td> <!-- ปุ่มคำนวน -->
                                            <div class="col-sm-3">
                                              <input type="submit" class="btn btn-primary text-center" id="cal" name="cal" value="คำนวน">
                                            </div> 
                                          </td>
                                          <td colspan="2" class="text-center"> 
                                            <?php echo "GPA =  ".number_format($gpa, 2, '.', ' ');?> 
                                          </td> 
                                      </tr>
                                    </tfoot>
                                </table>
                                
                                

                            </form>
                        </div>
                    

                        

                    </form>  

                    

                

                </div>
            </div>
            <!-- สร้างตารางด้วย Bootstrap 4-->
            <div class="col-md-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="bg-primary text-light">
                         
                            <th class="text-center">รหัสวิชา</th>
                            <th class="text-center">ชื่อวิชา</th>
                            <th class="text-center">หน่วยกิจ</th>
                          <th class="text-center"> <input type="submit" id="delete" value="Delete"> </th>
                        </tr>
                    </thead>
                <form method="post" action="index.php" name="searchS" id="searchS">
                    <tbody id="sub">
                      
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan ="4" class="text-center">
                                ค้นหาวิชา :: <input type="text" name="txtSearch" id="txtSearch">
                                <input type="submit" value="Search">
                                </form>
                        </td>
                    </tr>
                    </tfoot>
                </form>
                </table>
            </div>
        </div>
    </div>

  <div class="container-fluid">
    <div class="col-md-12">
          <!-- โพล -->
                    <form action="insert.php"method="POST">
                        <label>ระดับความพึงพอใจ</label><br>
                        <input type="radio" name="likeing" value="Best"/>ดีมาก<br>
                        <input type="radio" name="likeing" value="Good"/>ดี<br>
                        <input type="radio" name="likeing" value="Moderate"/>พอใช้<br>
                        <input type="radio" name="likeing" value="Bad"/>ปรับปรุง<br>

                        <label>ความคิดเห็น</label><br>
                        <input type="text" name="comment" placeholder="โปรดแสดงความคิดเห็น"/><br>
                        <div class="col-sm-9">
                            <input type="submit" name="insert" class="btn btn-primary" value="ยืนยัน"/>
                        </div>
                    </form>
    </div> 
  </div>

    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- การส่งข้อมูลด้วย jQuery AJAX เพื่อค้นหา ไปที่ไฟล์ search_result.php-->
    <script>
        $(function() {
            $('form#searchS').submit(function(event) {
                event.preventDefault();
                // รับค่าจากฟอร์ม
                var fullname = $('input#txtSearch').val();
                // ส่งค่าไป search_result.php ด้วย jQuery Ajax
                $.ajax({
                    url: 'search_result.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        fullname: fullname,
                    },
                    success: function(data) {
                        if (data.length != 0) {
                            // กรณีมีข้อมูล
                            // กำหนดตัวแปรเก็บโครงสร้างแถวของตาราง
                            var trstring = "";
                            // วนลูปข้อมูล JSON ลงตาราง
                            $.each(data, function(key, value) {
                                // แสดงค่าลงในตาราง
                                trstring += `
                                    <tr>
                                    
                                        <td class="text-center">${value.subject_id}</td>
                                        <td class="text-center">${value.subject_name}</td>
                                        <td class="text-center">${value.subject_credit}</td>
                                        <td class="text-center">
                                          <div>
                                          <input type="checkbox" name="choose">
                                          </div>
                                        </td>
                                    </tr>`;
                                $("table tbody#sub").append(trstring);
                            });
                        } else {
                            alert('ไม่พบวิชาที่ค้นหา');
                        }
                    }
                });
             });
            // ============================================================================
            // เมื่อกดปุ่มล้างข้อมูลการค้นหา
            $('input#resetform').click(function() {
                // ล้างค่าในฟอร์มทั้งหมด
                $("#search_user").trigger('reset');
                // โฟกัสช่องชื่อ
                $('input#fullname').focus();
            });

            // ลบตาราง
            $("#delete").click(function() {
                $("table tbody").find('input[name="choose"]').each(function() {
                    if ($(this).is(":checked")) {
                        $(this).parents("tr").remove();
                    }
                });
            });
        });
    </script>


</html>