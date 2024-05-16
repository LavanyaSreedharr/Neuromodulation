<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Neuromodulation</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">

            <!-- header -->
            <header class="full_bg margin_left60">
               <!-- header inner -->
               <div class="">
                  <div class="container">
                     <div class="row">
                       
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                           <nav class="navigation navbar navbar-expand-md navbar-dark ">
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarsExample04">
                                 <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                       <a class="nav-link" style="color:white;"><?php session_start(); echo $_SESSION['login_user']; ?></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" style="color:white;">Logout</a>
                                    </li>
                                 </ul>
                              </div>
                             
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
      <div class="patient_form">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><strong class="balck">BPI</strong> Details</h2>
                  </div>
               </div>
            </div>
            <div class="row">
        <div class="col-md-12">
        <?php include("config.php"); 
        $patients = "SELECT * FROM bpi_patient_details";
        if($result = mysqli_query($db, $patients)){
           
            if(mysqli_num_rows($result) > 0){ ?>
                <table id="bpi_data" class="col-md-12">
                <tr>
                    <th>Date of Submission</th>
                    <th>First Name</th>
                    <th>Surname</th>
                    <th>Age</th>
                    <th>Date of Birth</th>
                    <th>Total Score</th>
                    <th>Action</th>
                </tr>
                <?php while($row = mysqli_fetch_array($result)){ 
                   $date = date("d-m-Y", strtotime($row['date_of_submission']));

                    ?>
                <tr>
                    <td> <?php echo $date; ?> </td>
                    <td> <?php echo $row['firstname']; ?> </td>
                    <td> <?php echo $row['surname']; ?> </td>
                    <td> <?php echo $row['age']; ?> </td>
                    <td> <?php echo $row['dob']; ?> </td>
                    <td> <?php echo $row['bpi_total_score']; ?> </td>
                    <td> edit, delete </td>
                </tr>
               <?php  } ?>
                </table>
           <?php }
            }
        ?>
        
        </div>
    </div>
       
         </div>
      </div>
     
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>