<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Outsourcing/TAD Management</h1>
    </div>
    <div class="row">

    <!-- Earnings (Monthly) Card Example -->

    <div class="col-xl-2 col-md-6 mb-4">
        <a href="#" onclick="showOR()" class="badge element">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center text-center">

                    <div class="col-xl-12 mr-2 mb-2">
                        <i class="fas fa-bezier-curve fa-2x text-gray-300"></i>
                    </div>
                    <div class="col-xl-12 mr-2 mt-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Create OR </div>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-xl-2 col-md-6 mb-4">
        <a href="<?php echo base_url()?>TAD/MRF/create" class="badge element">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center text-center">

                    <div class="col-xl-12 mr-2 mb-2">
                        <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                    </div>
                    <div class="col-xl-12 mr-2 mt-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Create MRF </div>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    </div>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Personnel Candidate</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Active Personnel (Assignment)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Employee
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $emp_count ?></div>
                                </div>
                                <div class="col">
                                    <!-- <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Kontrak PJP</div>
                            <div class="h5 mb-0 font-weight-bold text-danger"><?php echo $contr_count ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Charts</h1>
    <p class="mb-4"></p>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-6 col-lg-6">

            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Expenses</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Education Background</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <!-- Bar Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Filled Position</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                    <hr>
                </div>
            </div>
        </div>


        <!-- Donut Chart -->
        
         <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">My Team</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                        <a class="dropdown-item align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate">Emily Fowler</div>
                                <div class="small text-gray-500">Assoc. Analyst HCBP - Contract Until 31 Feb 2023</div>
                            </div>
                        </a>
                        <a class="dropdown-item align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <div class="status-indicator"></div>
                            </div>
                            <div>
                                <div class="text-truncate font-weight-bold">Jae Chun</div>
                                <div class="small text-gray-500">Assoc Analyst TPM - Contract Until 1 Dec 2023</div>
                            </div>
                        </a>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function showOR(){
                     Swal.fire({
                       title: 'Konfimasi Pembuatan OR',
                       text: 'Apakah akan menambah posisi baru atau mengganti atribut?',
                       icon: 'warning',
                       html:  '<div class="container-fluid">'+
                       '<p>Apakah akan menambah posisi baru atau mengganti atribut?</p>'+
                       '<div class="row justify-content-md-right">'+
                        '<div class="col-xl-6 col-md-6 mb-6">'+
                            `<a href="<?php echo base_url()?>TAD/orgChange/create" class="badge element">`+
                            '<div class="card shadow h-100 py-2">'+
                                '<div class="card-body">'+
                                    '<div class="row no-gutters align-items-center text-center">'+
                                        '<div class="col-xl-12 mr-2 mb-2">'+
                                            '<i class="fas fa-folder-plus fa-2x text-gray-300"></i>'+
                                        '</div>'+
                                        '<div class="col-xl-12 mr-2 mt-2">'+
                                            '<div class="h5 mb-0 font-weight-bold text-gray-800">New Position</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '</a>'+
                        '</div>'+
                        '<div class="col-xl-6 col-md-6 mb-6">'+
                            `<a href="<?php echo base_url()?>TAD/orgChange/change" class="badge element">`+
                            '<div class="card shadow h-100 py-2">'+
                                '<div class="card-body">'+
                                    '<div class="row no-gutters align-items-center text-center">'+
                                        '<div class="col-xl-12 mr-2 mb-2">'+
                                            '<i class="fas fa-pen fa-2x text-gray-300"></i>'+
                                        '</div>'+
                                        '<div class="col-xl-12 mr-2 mt-2">'+
                                            '<div class="h5 mb-0 font-weight-bold text-gray-800">Change Atribut</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '</a>'+
                        '</div>'+
                        '</div>'+
                        '</div',

                       width : 700,
                     })
    }
</script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url()?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url()?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url()?>assets/js/demo/chart-area-demo.js"></script>
<script type="text/javascript">
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';
    var empEducation = JSON.parse('<?= json_encode($empEducation)?>');
    const arrayEdu = [];
    const arrayEduVal = [];
    const arrayColor = [];
    const arrayColorHov = [];
    empEducation.forEach(row => {
        arrayEdu.push(row.Edu)
        arrayEduVal.push(row.total)
        color = Math.floor(Math.random() * 16777215).toString(16);
        colorHov = Math.floor(Math.random() * 16777215).toString(16);
        const randomColor = "#" + color
        arrayColor.push(randomColor)
        arrayColorHov.push("#4e73e0")
    })
    console.log(arrayColor)
    console.log(arrayColorHov)
    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: arrayEdu,
        datasets: [{
          data: arrayEduVal,
          backgroundColor: arrayColor,
          hoverBackgroundColor: arrayColorHov,
          hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          caretPadding: 10,
        },
        legend: {
          display: true
        },
        cutoutPercentage: 20,
      },
    });

</script>
<script src="<?php echo base_url()?>assets/js/demo/chart-bar-demo.js"></script>