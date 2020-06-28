<?php
if(!isset($_SESSION['name']))
{
    die("Access Denied");
}
require_once 'pdo.php';   
if(isset($_POST['submit']))
{
    if(isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['blood'])
    && isset($_POST['religion']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['phone']) )
    {
        if(strlen($_POST['f_name'])<1)
        {
            $_SESSION['error_msg']='Please enter first name'; 
        }
        else if(strlen($_POST['l_name'])<1)
        {
            $_SESSION['error_msg']='Please enter last name'; 
        }
        else if(strlen($_POST['gender'])<1)
        {
            $_SESSION['error_msg']='Please enter gender'; 
        }
        else if(strlen($_POST['dob'])<1)
        {
            $_SESSION['error_msg']='Please enter date'; 
        }
        else if(strlen($_POST['blood'])<1)
        {
            $_SESSION['error_msg']='Please enter blood grp'; 
        }
        else if(strlen($_POST['religion'])<1)
        {
            $_SESSION['error_msg']='Please enter religion'; 
        }
        else if(strlen($_POST['email'])<1)
        {
            $_SESSION['error_msg']='Please enter e-mail'; 
        }
        else if(!strpos($_POST['email'],'@')>0)
        {
            $_SESSION['error_msg']='Please enter valid email'; 
        }
        else if(strlen($_POST['address'])<1)
        {
            $_SESSION['error_msg']='Please enter address'; 
        }
        else if(strlen($_POST['phone'])<1)
        {
            $_SESSION['error_msg']='Please enter phone no'; 
        }
        
        else
        {
            $stmpt=$pdo->prepare('INSERT INTO student_detail (f_name ,l_name ,gender, dob, blood_grp, religion, email, phone, address) 
            VALUES ( :fn , :ln , :sx , :dob , :bld , :re , :em , :phno , :add )');
            $stmpt->execute(array(
                ':fn'=>$_POST['f_name'],
                ':ln'=>$_POST['l_name'],
                ':sx'=>$_POST['gender'],
                ':dob'=>$_POST['dob'], 
                ':bld'=>$_POST['blood'], 
                ':re'=>$_POST['religion'],
                ':em'=>$_POST['email'],
                ':phno'=>$_POST['phone'],
                ':add'=>$_POST['address']
            ));
            $_SESSION['success']='Profile added';
        }
    }
}
?>
<body>
    <div class="container-student-3">
        <div class="page-info">
            <h3>Student Form</h3>
            <p>Home>Student Admit form</p>
        </div>
        <div class="server-message">
            <?php
            if(isset($_SESSION['error_msg']))
            {
                echo '<p style="color:red;padding-left: 20px;";>'.$_SESSION['error_msg'].'</p>';
                unset($_SESSION['error_msg']);
            }
            if(isset($_SESSION['success']))
            {
                echo '<p style="color:green;padding-left: 20px;";>'.$_SESSION['success'].'</p>';
                unset($_SESSION['success']);
            }
            ?>
        </div>
        <div class="student-form-wrap">
            <div class="student-form-content">
                <h3>Add New Student</h3>     
                    <form method="post">
                        <div class="form-inputs">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>First Name *</label>
                                <input type="text" placeholder="First Name" name="f_name" class="form-control">
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Last Name *</label>
                                <input type="text" placeholder="Last Name" name="l_name" class="form-control">
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                 <label>Gender *</label>
                                 <input type="text" placeholder="Gender" name="gender" class="form-control">
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Date Of Birth *</label>
                                <input type="date" placeholder="Date of Birth" name="dob" class="form-control">
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Blood Group *</label>
                                <input type="text" placeholder="Blood Group" name="blood" class="form-control">
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Religion *</label>
                                <input type="text" placeholder="Religion" name="religion" class="form-control">
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>E-Mail *</label>
                                <input type="text" placeholder="E-male" name="email" class="form-control">
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Address *</label>
                                <input type="text" placeholder="Address" name="address" class="form-control">
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Phone *</label>
                                <input type="text" placeholder="Phone No" name="phone" class="form-control">
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <input type="submit" value="submit" name="submit">
                                <input type="reset" value="Reset" id="reset">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>