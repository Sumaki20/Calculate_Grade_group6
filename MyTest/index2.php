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
    <?php
        
    ?>
       
</div>

    <!-- การส่งข้อมูลด้วย jQuery AJAX เพื่อค้นหา ไปที่ไฟล์ search_result.php-->
            <!-- สร้างตารางด้วย Bootstrap 4-->
            <div class="container">
                
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr class="bg-primary text-light">
                                 <th class="text-center"> <input type="submit" id="delete" value="Delete"> </th>
                                    <th class="text-center">รหัสวิชา</th>
                                    <th class="text-center">ชื่อวิชา</th>
                                    <th class="text-center">หน่วยกิจ</th>
                                    <th class="test-center">เกรด</th>
                          
                                </tr>
                            </thead>
                        <form method="post" action="index.php" name="searchS" id="searchS">
                            <tbody id="sub">
                                    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
                                                                        <td class="text-center">
                                                                          <div>
                                                                          <input type="checkbox" name="choose">
                                                                          </div>
                                                                        <td class="text-center">${value.Subject_id}</td>
                                                                        <td class="text-center">${value.Subject_name}</td>
                                                                        <td class="text-center">${value.Subject_credit}</td>
                                                                        <td ><select name="grade1"id="grade1">
                                                                        <option value="4">A</option>
                                                                        <option value="3.5">B+</option>
                                                                        <option value="3">B</option>
                                                                        <option value="2.5">C+</option>
                                                                        <option value="2">C</option>
                                                                        <option value="1.5">D+</option>
                                                                        <option value="1">D</option>
                                                                        <option value="0">F</option></td> </tr>
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
                        </form>
                        </table>
                    </div>
            </div>
            </div>

</html>