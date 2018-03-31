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

    <style type="text/css">
        .table {  
        margin-top: 50px;  
  
    } 
    td,th
        {
        border: 1px solid #ddd;
        padding: 8px;
        }
    tr:nth-child(even)
    {
        background-color: #f2f2f2;
    }
    tr:hover 
    {
        background-color: #ddd;
    }
    th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
    }

    </style>

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
                <li>
                    <a href="account_settings.php">Account Settings<span class="glyphicon glyphicon glyphicon-wrench" style="float:right;"></span></a>
                </li>
                <li>
                    <a href="campaign.php">Campaign Details<span class=" glyphicon glyphicon-th" style="float:right;"></span></a>
                </li>
                <li>
                    <a href="donation.php">Donation<span class=" glyphicon glyphicon-piggy-bank" style="float:right;"></span></a>
                </li>
                <li class="active">
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
            
            <!-- Details Of Get Job -->
            
            
            <!-- Details of Job Post-->
            <h3>Total No Of Jobs Posted: <span>#</span></h3>
            <table>
                <thead>
                    <th>Job Post ID</th>
                    <th>Job Title</th>
                    <th>Job Sector</th>
                    <th>Job Salary</th>
                    <th>Job City</th>
                </thead>
            <?php
                include("../resources/config.php");   
                $query="select * from log_job_post where ljp_user_id=101 order by ljp_timestamp DESC LIMIT 1";//select query for viewing users.  
                $run=mysqli_query($con,$query);//here run the sql query.  
        
                while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
                {  
                    $ljp_id=$row['ljp_id'];  
                    $ljp_title_new=$row['ljp_title_new'];  
                    $ljp_sector_new=$row['ljp_sector_new'];  
                    $ljp_salary_new=$row['ljp_salary_new'];  
                    $ljp_city_new=$row['ljp_city_new'];
  
            ?>

                    <td><?php echo $ljp_id;  ?></td>  
                    <td><?php echo $ljp_title_new;  ?></td>  
                    <td><?php echo $ljp_sector_new;  ?></td>  
                    <td><?php echo $ljp_salary_new;  ?></td>
                    <td><?php echo $ljp_city_new;  ?></td>

                <?php } ?>
            </table>
            
            
            
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
