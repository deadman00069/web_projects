<?php
// if(!isset($_SESSION['name']))
// {
//     die("Access Denied");
// }
require_once 'header.php';
require_once 'pdo.php';
$stmpt=$pdo->query('SELECT roll_no,f_name ,l_name ,gender, dob, blood_grp, religion, email, phone, address FROM student_detail');
$rows=$stmpt->fetchAll(PDO::FETCH_ASSOC);
if(isset($_POST['roll_no']))
{
    $search=$pdo->prepare('SELECT * FROM student_detail WHERE roll_no=:ro');
    $search_row=$search->execute(array(
        ':ro'=>$_POST['roll_no']
    ));
    $search_row=$search->fetch(PDO::FETCH_ASSOC);
    if($search_row != false)
    {
        $show='block';
        $s1=htmlentities($search_row['roll_no']);
        $s2=htmlentities($search_row['f_name']);
        $s3=htmlentities($search_row['l_name']);
        $s4=htmlentities($search_row['gender']);
        $s5=htmlentities($search_row['dob']);
        $s6=htmlentities($search_row['blood_grp']);
        $s7=htmlentities($search_row['religion']);
        $s8=htmlentities($search_row['email']);
        $s9=htmlentities($search_row['phone']);
        $s10=htmlentities($search_row['address']);
    }
    else{
        $msg="no record found";
    }
}
if(isset($msg))
    {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../student/css/allstudent.css">
</head>
<body>
    <div class="container-student-1">
        <div class="page-info">
            <h3>Students</h4>
            <p>Home>All Students</p>
        </div>
        <div class="table-wrap">
            <div class="table-contant">
                <div class="nav-menu">
                    <p>All Students Data</p>
                    <form method="post">
                        <div class="search-bar">
                            <input type="text" placeholder="Search by Roll no" name="roll_no">
                            <input type="text" placeholder="Search by Name">
                            <input type="text" placeholder="Search by Class">
                            <input type="submit" value="Search" id="all_stu_search_btn">
                        </div>
                    </form>
                   
                </div>
                <div class="student-table">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Roll</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Blood Group</th>
                            <th scope="col">Religion</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ( $rows != false )
                            {
                                foreach($rows as $row)
                                {
                                $a=htmlentities($row['roll_no']);
                                $b=htmlentities($row['f_name']);
                                $c=htmlentities($row['l_name']);
                                $d=htmlentities($row['gender']);
                                $e=htmlentities($row['dob']);
                                $f=htmlentities($row['blood_grp']);
                                $g=htmlentities($row['religion']);
                                $h=htmlentities($row['email']);
                                $i=htmlentities($row['phone']);
                                $j=htmlentities($row['address']);
                                
                                echo '<tr>';
                                echo '<th scope="row">'.$a.'</th>';
                                echo '<td>'.$b.'</td>';
                                echo '<td>'.$c.'</td>';
                                echo '<td>'.$d.'</td>';
                                echo '<td>'.$e.'</td>';
                                echo '<td>'.$f.'</td>';
                                echo '<td>'.$g.'</td>';
                                echo '<td>'.$h.'</td>';
                                echo '<td>'.$i.'</td>';
                                echo '<td>'.$j.'</td>';
                                echo '</tr>';
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>        
            </div>
        </div>
        <div class="search_result_wrap" id="search_result_wrap"<?php 
                    if(isset($show)){
                        echo 'style="display:block;"';
                    }
                     ?>>
            <table class="table">
                <tbody>
                    <tr>
                    <th scope="row">Roll NO:</th>
                    <td><?= $s1 ?></td>
                    </tr>
                    <tr>
                    <th scope="row">First Name:</th>
                    <td><?= $s1 ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Last Name:</th>
                    <td><?= $s2 ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Gender:</th>
                    <td><?= $s3 ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Date Of Birth:</th>
                    <td><?= $s6 ?></td>
                    </tr>
                    <tr>
                    <tr>
                    <th scope="row">Blood Group:</th>
                    <td><?= $s6 ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Religion:</th>
                    <td><?= $s7 ?></td>
                    </tr>
                    <tr>
                    <th scope="row">E-mail:</th>
                    <td><?= $s8 ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Phone:</th>
                    <td><?= $s9 ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Address:</th>
                    <td><?= $s10 ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="close_btn_wrap">
                <button id="search_close">Close</button>
            </div>
        </div>
    </div>
</body>
</html>