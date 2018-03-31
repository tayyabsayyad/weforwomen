<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 3</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <center>
                    <img id="profile_pic" src="img/user_female_circle-48.png" alt="profile image" class="img-circle"/>
                </center>
                <center>
                    <button class="btn btn-danger">Logout&nbsp; &nbsp;<span class="glyphicon glyphicon-off"></span></button>
                </center>
            </div>

            <ul class="list-unstyled components">
                <p>Welcome UserName</p>
                <li>
                    <a href="dashboard_responsive.php">Dashboard <span class="glyphicon glyphicon-dashboard" style="float:right;"></span> </a>
                </li>
                <li>
                    <a href="update_profile.php">Update Profile<span class="glyphicon glyphicon-edit" style="float:right;"></span></a>
                </li>
                <li class="active">
                    <a href="account_settings.php">Account Settings<span class="glyphicon glyphicon glyphicon-wrench" style="float:right;"></span></a>
                </li>
                <li>
                    <a href="campaign.php">Campaign Details<span class=" glyphicon glyphicon-th" style="float:right;"></span></a>
                </li>
                <li>
                    <a href="donation.php">Donation<span class=" glyphicon glyphicon-piggy-bank" style="float:right;"></span></a>
                </li>
                <li>
                    <a href="job.php">Job<span class="glyphicon glyphicon-briefcase" style="float:right;"></span></a>
                </li>
                <li>
                    <a href="investment.php">Investment<span class="glyphicon glyphicon-export" style="float:right;"></span></a>
                </li>
                <li>
                    <a href="volunteer.php">Volunteer<span class=" glyphicon glyphicon-user" style="float:right;"></span></a>
                </li>
                <li>
                    <a href="payment.php">Payment<span class="glyphicon glyphicon-usd" style="float:right;"></span></a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <div class="container-fluid">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </nav>
            </div>


            <div class="container-fluid">
                <div class="col-md-12">
                    <form role="form" method="post" action="account_settings.php">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="E-Mail" name="email">
                        </div>

                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                        </div>

                        <div class="form-group">
                            <label for="pwd">Confirm Password:</label>
                            <input type="password" class="form-control" id="pwd2" placeholder="Confirm password" name="pwd2">
                        </div>

                        <div class="modal-footer">
                            <div class="col-sm-offset-4 col-sm-4">
                                <button type="button" class="btn btn-success btn-block">Update Account Settings</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });

    </script>



</body>

</html>
