<?php
session_start();
require_once 'header.php';
if(!isset($_SESSION['name']))
{
    die("Access Denied");
}
if(isset($_POST['logout']))
{
    header('Location: logout.php');
    return;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../management/dashboard/css/admin.css">
    <link rel="stylesheet" href="../management/student/css/addstudent.css">
    <link rel="stylesheet" href="../management/student/css/allstudent.css">
    <link rel="stylesheet" href="../management/student/css/studentdetail.css">
    </head>
<body>
    <header>
        <nav>
            <div class="logo">
                <div class="img">
                    <img src="./images/ll.svg" alt="logo">
                </div>
            </div>
            <ul class="nav-links">
                <li id="n-1">
                    <div class="admin">
                        <p>Konark</p>
                        <i class="fas fa-user-circle"></i>
                    </div>
                </li>
                <li id="n-2">
                    <i class="fas fa-envelope"></i>
                </li>
                <li id="n-3">
                    <i class="fas fa-bell"></i>
                </li>
                <li id="n-4">
                    <i class="fas fa-sign-out-alt"></i>
                </li>
            </ul>
            <div class="burger" >
                <i class="fas fa-sort-down" id="down"></i>
                <i class="fas fa-bars" id="burger"></i>
            </div>
        </nav>
        <div class="nav-link-drop">
        <li id="n-1">
                    <div class="admin-drop">
                        <i class="fas fa-user-circle"></i>    
                        <p>Konark Shivam</p>
                    </div>
                </li>
                <li id="n-2">
                    <i class="fas fa-envelope"></i>
                </li>
                <li id="n-3">
                    <i class="fas fa-bell"></i>
                </li>
                <li id="n-4">
                    <i class="fas fa-sign-out-alt"></i>
                </li>
            </ul>
        </div>
    </header>
    <!-- for logout -->
    <section>
        <div class="logout-box" id="logout-box">
            <div class="logout-content">
                    <p>Do you want to logout</p>
                        <form method="post">
                            <div class="logout-button">
                                <input type="submit" name="logout" value="Logout">
                                <input type="submit" name="cancel" value="Cancel" id="logout-cancel" onclick="return false">
                            </div>
                        </form>
                </div>
        </div>
    </section>
    <menu>
        <div class="left-menu" id="left-menu">
            <ul>
                <li class="menu-items" id="menu-item-1">
                    <a href="#">Dashboard</a>
                    <span class="arrow">></span>
                </li >
                <div class="drop-menu" id="drop-menu-1">
                    <ul>
                        <li class="drop-items"> 
                            <div class="name"></div>
                            <a id="d-i-admin" href="home.php?page=dashboard/admin">> Admin</a>
                        </li>
                        <li class="drop-items"> 
                            <div class="name"></div>
                            <a href="#" id="d-i-teacher">> Teacher</a>
                        </li>
                        <li class="drop-items"> 
                            <div class="name"></div>
                            <a href="#">> Students</a>
                        </li>
                        <li class="drop-items"> 
                            <div class="name"></div>
                            <a href="#">> Parents</a>
                        </li>
                    </ul>
                </div>

                <li class="menu-items" id="menu-item-2">
                    <span>Student</span>
                    <span class="arrow">></span>
                </li>
                <div class="drop-menu" id="drop-menu-2">
                    <ul>
                        <li class="drop-items"> 
                            <div class="name"></div>
                            <a href="home.php?page=student/allstudent" id="s-d-1">> All Students </a>
                        </li>
                        <li class="drop-items"> 
                            <div class="name"></div>
                            <a href="home.php?page=student/studentdetail">> Student Details</a>
                        </li>
                        <li class="drop-items"> 
                            <div class="name"></div>
                            <a href="home.php?page=student/addstudent">> Admission Form</a>
                        </li>
                        <li class="drop-items"> 
                            <div class="name"></div>
                            <a href="#">> Student Promotion</a>
                        </li>
                    </ul>
                </div>

                <li class="menu-items" id="menu-item3">
                    <span>Teacher</span>
                    <span class="arrow">></span>
                </li>
                <div class="drop-menu" id="drop-menu-3">
                    <ul>
                        <li class="drop-items"> 
                            <div class="name"></div>
                            <a href="#">> Admin</a>
                        </li>
                        <li class="drop-items"> 
                            <div class="name"></div>
                            <a href="#">> Teacher</a>
                        </li>
                        <li class="drop-items"> 
                            <div class="name"></div>
                            <a href="#">> Students</a>
                        </li>
                        <li class="drop-items"> 
                            <div class="name"></div>
                            <a href="#">> Parents</a>
                        </li>
                    </ul>
                </div>


                <li class="menu-items">
                    <span>Parents</span>
                    <span class="arrow">></span>
                </li>
                <li class="menu-items">
                    <span>Library</span>
                    <span class="arrow">></span>
                </li>
                <li class="menu-items">
                    <span>Subjects</span>
                    <span class="arrow">></span>
                </li>
                <li class="menu-items">
                    <span>Class Routines</span>
                    <span class="arrow">></span>
                </li>
                <li class="menu-items">
                    <span>Attendence</span>
                    <span class="arrow">></span>
                </li>
                <li class="menu-items">
                    <span>Exams</span>
                    <span class="arrow">></span>
                </li>
                <li class="menu-items">
                    <span>Transport</span>
                    <span class="arrow">></span>
                </li>
                <li class="menu-items">
                    <span>Hostel</span>
                    <span class="arrow">></span>
                </li>
                <li class="menu-items">
                    <span>Notice</span>
                    <span class="arrow">></span>
                </li>
                <li class="menu-items">
                    <span>Message</span>
                    <span class="arrow">></span>
                </li>
                <li class="menu-items">
                    <span>Accounts</span>
                    <span class="arrow">></span>
                </li>
            </ul>
        </div>
    </menu>
    <main>
       <div class="presentation">
           <div class="my-container" id="container">
               <?php
                    if(isset($_GET['page']))
                    {
                        $page=$_GET['page'];
                        $lol=$page.'.php';
                        require_once $lol; 
                    }
                    else{
                        require_once 'dashboard/admin.php';
                    }
               ?>
           </div>
       </div>
    </main>
    <script src="script.js"></script>
</body>
</html>