<div class="corner">
<?php include '../head.php';?>
<body style="background: #E9ECEF;">
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
    <?php include 'headerpnt.php';?>
        <div style="background: #fff; padding: 10px; margin: 0;">
            <div class="text-center">
                <h3>Result</h3>
            </div>
        <hr>

<?php 
    require "../includes/config.php";
    $con=new Connection;
    $con=$con->isConnect();

    if (isset($_POST['submit'])) {
        $key=$_POST['search'];

        if ($con !=null) {
            $sql=" SELECT * FROM stdresult WHERE roll like '%".$key."%' OR registration like '%".$key."%' OR department like '%".$key."%' OR semester like '%".$key."%' year like '%".$key."%' ";

        $query=mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($query)){
                    ?>
                   
            <table class="table table-bordered" width="100%">
                <tr>
                    <td><b>Name:</b> <?php echo $row['name']; ?> <br></td>
                    <td><b>Roll:</b> <?php echo $row['roll']; ?> <br></td>
                </tr>
                <tr>
                    <td><b>Father's Name:</b> <?php echo $row['f_name']; ?><br></td>
                    <td><b>Registration:</b> <?php echo $row['registration']; ?> <br></td>
                </tr>
                <tr>
                    <td><b>Mother's Name:</b> <?php echo $row['m_name']; ?><br></td>
                    <td><b>Department:</b> <?php echo $row['department']; ?> <br></td>
                </tr>
                <tr>
                    <td><b>Date of Birth:</b> <?php echo $row['birth']; ?><br></td>
                    <td><b>Semester:</b> <?php echo $row['semester']; ?> <br></td>
                </tr>
                <tr>
                    <td><b>Institute:</b> <?php echo $row['institute']; ?><br></td>
                    <td><b>Status:</b> <?php echo $row['result']; ?> <br></td>
                </tr>
                <tr>
                    <td><b>Passing year:</b> <?php echo $row['year']; ?></td>
                    <td>
                        <div class="text-center">
                            <b>GPA: <span class="text-warning"><?php echo $row['gpa']; ?></span> </b><br>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-lg-2"></div>
</div>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div style="background: #fff; padding: 10px; margin: 0;">
        <h2 class="text-center">Subject wish grade</h2>
    <hr>
        <table class="table table-bordered text-center" width="100%">
            <tr class="table-success">
                <th scope="col">Subject Code</th>
                <th scope="col" colspan="3">Name</th>
                <th scope="col">GPA</th>
            </tr>
            <tr>
                <td><?php echo $row['sub_code_1']; ?></td>
                <td colspan="3"><?php echo $row['sub_name_1']; ?></td>
                <td><?php echo $row['sub_gpa_1']; ?></td>
            </tr>
            <tr>
                <td><?php echo $row['sub_code_2']; ?></td>
                <td colspan="3"><?php echo $row['sub_name_2']; ?></td>
                <td><?php echo $row['sub_gpa_2']; ?></td>
            </tr>
            <tr>
                <td><?php echo $row['sub_code_3']; ?></td>
                <td colspan="3"><?php echo $row['sub_name_3']; ?></td>
                <td><?php echo $row['sub_gpa_3']; ?></td>
            </tr>
            <tr>
                <td><?php echo $row['sub_code_4']; ?></td>
                <td colspan="3"><?php echo $row['sub_name_4']; ?></td>
                <td><?php echo $row['sub_gpa_4']; ?></td>
            </tr>
            <tr>
                <td><?php echo $row['sub_code_5']; ?></td>
                <td colspan="3"><?php echo $row['sub_name_5']; ?></td>
                <td><?php echo $row['sub_gpa_5']; ?></td>
            </tr>
            <tr>
                <td><?php echo $row['sub_code_6']; ?></td>
                <td colspan="3"><?php echo $row['sub_name_6']; ?></td>
                <td><?php echo $row['sub_gpa_6']; ?></td>
            </tr>
            <tr>
                <td><?php echo $row['sub_code_7']; ?></td>
                <td colspan="3"><?php echo $row['sub_name_7']; ?></td>
                <td><?php echo $row['sub_gpa_7']; ?></td>
            </tr>
        </table>
        </div>
<?php
            }
        }
    }
?>
        
            <div class="bg-white">
                <a class="nav-link text-center" href="../index.php"><b>Search Again</b></a>
            </div>
        <?php include 'footer.php';?>
    </div>
    <div class="col-lg-2"></div>
</div>
</body>
</div>

