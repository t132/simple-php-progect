const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['عدد المدارس', 'عدد الفصول', 'فصول مسكنة', 'العجز', 'متوقع تسكينه'],
        datasets: [{
            label: '# of Votes',
            data: [1500, 7550, 6500, 1050, 750],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1000
                }
            }
        }
    }
});
const ctx1 = document.getElementById('myChart2').getContext('2d');
const myChart2 = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['عدد المدارس', 'عدد الفصول', 'فصول مسكنة', 'العجز', 'متوقع تسكينه'],
        datasets: [{
            label: '# of Votes',
            data: [1500, 7550, 6500, 1050, 750],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1000
                }

            }
        }
    }
});
$(document).ready( function () {
    var table = $('#example').DataTable({
        columnDefs: [
        {
            targets: 1,
            className: 'bolded'
        }
        
        ]
    });
    } );
