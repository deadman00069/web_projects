$(document).ready(function(){
    $("#menu-item-1").click(function(){
        $("#drop-menu-1").toggle();
    });
    $("#menu-item-2").click(function(){
        $("#drop-menu-2").toggle();
    });
    $("#burger").click(function(){
        $("#left-menu").toggle();
    });
    $("#n-4").click(function(){
        $("#logout-box").show();
    });
    $("#logout-cancel").click(function(){
        $("#logout-box").hide();
    });
    $("#search_close").click(function(){
        $("#search_result_wrap").hide();
    });
    
    // $("#all_stu_search_btn").click(function(){
    //     $("#search_result_wrap").show();
    // });

    
var ctx=document.getElementById("expense_chart");
var chart = new Chart(ctx, {
    responsive: true,
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September'],
        datasets: [{
            
            backgroundColor: 'rgb(19, 63, 242)',
            borderColor: 'rgb(19, 63, 242)',
            data: [0, 10, 5, 2, 20, 30, 45,65,43]
        }]
    },

    // Configuration options go here
    options:{
        responsive: true,
        
    }
});

var ctx2=document.getElementById("student_ratio");
var myPieChart = new Chart(ctx2, {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [10, 20],
            backgroundColor: [
                'rgb(19, 63, 242)',
                'rgb(142, 163, 142)'
                
            ],
        }],
    
        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
            'Yellow',
            'Blue'
        ]
    },
    options:{
        responsive: true,
       
    }
   
});
});