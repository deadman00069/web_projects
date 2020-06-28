<?php
if(!isset($_SESSION['name']))
{
    die("Access Denied");
}
require_once 'pdo.php';
if(isset($_POST['roll_no']))
{
    $search=$pdo->prepare('SELECT * FROM student_detail WHERE roll_no=:ro');
    $search_row=$search->execute(array(
        ':ro'=>$_POST['roll_no']
    ));
    $search_row=$search->fetch(PDO::FETCH_ASSOC);
    if($search_row != false)
    {
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
    else
    {
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
    <link rel="stylesheet" href="../student/css/studentdetail.css">
</head>
<body>
    <div class="container-student-2">
        <div class="page-info">
            <h3>Student</h3>
            <p>Home>Student Details</p>
        </div>
        <div class="student-detail-wrap">
    
            <div class="student-detail-content-wrap">
                <h3>Student Details</h3>
                <div class="nav-menu">
                    <form method="post">
                        <div class="search-bar">
                            <input type="text" placeholder="Search by Roll no" name="roll_no">
                            <input type="text" placeholder="Search by Name">
                            <input type="text" placeholder="Search by Class">
                            <input type="submit" value="Search">
                        </div>
                    </form>
                </div>
                <div class="student-detail-content">
                    <div class="img">
                    <i class="far fa-id-card"></i>
                    </div>
                    <div class="student-detail-display">
                        <table class="table">
                            <tbody>
                                <tr>
                                <th scope="row">Roll No:</th>
                                <td>
                                    <?php
                                        if(isset($s1))
                                        {
                                            echo $s1;
                                        } 
                                        else
                                        {
                                            echo '---';
                                        }
                                    ?>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">First Name:</th>
                                <td>
                                    <?php
                                        if(isset($s2))
                                        {
                                            echo $s2;
                                        }
                                         else
                                        {
                                            echo '---';
                                        } 
                                    ?>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">Last Name:</th>
                                <td>
                                    <?php
                                        if(isset($s3))
                                        {
                                            echo $s3;
                                        }
                                         else
                                        {
                                            echo '---';
                                        } 
                                    ?>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">Gender:</th>
                                <td>
                                    <?php
                                        if(isset($s4))
                                        {
                                            echo $s4;
                                        }
                                         else
                                        {
                                            echo '---';
                                        } 
                                    ?>
                                </td>
                                </tr>
                               <tr>
                                <th scope="row">Date Of Birth:</th>
                                <td>
                                    <?php
                                        if(isset($s5))
                                        {
                                            echo $s5;
                                        }
                                         else
                                        {
                                            echo '---';
                                        } 
                                    ?>
                                </td>
                               <tr>
                                <th scope="row">Blood Group:</th>
                                <td>
                                    <?php
                                        if(isset($s6))
                                        {
                                            echo $s6;
                                        }
                                         else
                                        {
                                            echo '---';
                                        } 
                                    ?>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">Religion:</th>
                                <td>
                                    <?php
                                        if(isset($s7))
                                        {
                                            echo $s7;
                                        }
                                         else
                                        {
                                            echo '---';
                                        } 
                                    ?>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">E-mail:</th>
                                <td>
                                    <?php
                                        if(isset($s8))
                                        {
                                            echo $s8;
                                        }
                                         else
                                        {
                                            echo '---';
                                        } 
                                    ?>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">Address:</th>
                                <td>
                                <?php
                                        if(isset($s9))
                                        {
                                            echo $s9;
                                        }
                                         else
                                        {
                                            echo '---';
                                        } 
                                    ?>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">Phone:</th>
                                <td>
                                <?php
                                        if(isset($s10))
                                        {
                                            echo $s10;
                                        }
                                         else
                                        {
                                            echo '---';
                                        } 
                                    ?>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>
