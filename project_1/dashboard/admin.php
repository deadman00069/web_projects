<?php
// if(!isset($_SESSION['name']))
// {
//     die("Access Denied");
// }
?>
<body>
    <div class="dashboard">
        <div class="page-info">
            <h3>Admin Dashboard</h3>
            <p>Home > admin</p>
        </div>
        <div class="cards">
           <div class="card" id="lol">
               <div class="card1" >
                   <div class="img">
                    <i class="fas fa-user-graduate"></i>
                   </div>
                <div class="info">
                    <p>Student</p>
                    <span>1500000</span>
                </div>
               </div>
           </div>
           <div class="card">
                <div class="card1">
                    <div class="img">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="info">
                        <p>Teacher</p>
                        <span>1500000</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card1">
                    <div class="img">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="info">
                        <p>Parents</p>
                        <span>1500000</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card1">
                    <div class="img">
                        <i class="far fa-money-bill-alt"></i>
                    </div>
                    <div class="info">
                        <p>Earning</p>
                        <span>1500000</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mychart">
            <div class="chart-wrap-1">
                <div>
                    <canvas id="expense_chart">

                    </canvas>
                </div>
            </div>
            <div class="chart-wrap-2">
                <div>
                    <canvas id="student_ratio" width="365" height="365">

                    </canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="./script/script.js"></script>
</body>