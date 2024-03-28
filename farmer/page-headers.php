<nav id="sidebar">
    <div class="sidebar-header bg-dark">
        <h4><a href="dashboard.php">Smart Farm</a></h4>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="dashboard.php" class="fa fa-th"> Dashboard</a>

        </li>
         
        <li>
            <a href="weather_view.php" class="fa fa-thermometer-half"> Weather Updates</a>

        </li>
        <li>
            <a href="pest_view.php" class="fa fa-bug"> Pest Control</a>

        </li>

        <li>
            <a href="farm_inputs_view.php" class="fa fa-product-hunt"> Farm Inputs</a>

        </li>

        <li >
                <a href="logout.php" class="fa fa-power-off">  Logout</a>
            </li>
       
        
        </ul>
</nav>


<!-- Page Content  -->
<div id="content">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn sm-btn-toggle ">
            <i class="fa fa-align-left"></i>
        </button>
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-align-justify"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="logout.php" class="fa fa-power-off">Welcome <?php echo $_SESSION['name'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="date_time"></a>
                <script type="text/javascript">window.onload = date_time('date_time');</script>
            </li>
            
        </ul>
    </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>