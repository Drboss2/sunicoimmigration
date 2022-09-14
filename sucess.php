<?php
 include_once "account/config/db.php";
 include 'account/modules/login.php';

    // instantiate database
    $database = new Database();
    $db = $database->connect();

    //instantiate user object
    $user = new User($db);
    if(!isset($_GET['data']) || $_GET['data'] == ''){
        header("location:failed.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title> Sunico Immigration | UK Visa Agency | Trusted UK Immigration Experts</title>
    <!-- LOAD CSS FILES -->

    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    
   <?php $d =  $user->singleClientTrack('tracking',$_GET['data']);?>

    <!-- subheader begin -->
    <section style='padding-top:50px;padding-bottom:50px;'id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-size:25px;padding-bottom:10px;">Your Tracking Information</h1>      
                        <p style="font-size:15px">Our online tracking  System is the fastest way to find out where your shipment is. No need to call Customer Service when we can offer you real-time details.</p>
                        <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
      <a onclick="history.back()" style='background:black;color:white;padding:10px;' href='#'>Go back</a>
    </div>
    
    <hr>
    <?php if($d != "not found"):?>
        <div class="container mt-3" style="padding-top:60px;padding-bottom:50px;">
            <div class="table-responsive">
            <table style='font-size:14px' class="table table-condensed  table-bordered table-striped mytable">
                <tr class="bg-dark text-light">
                    <td colspan="2">APPLICATION STATUS</td>
                </tr>
                <tr>
                    <td>Reference Number</td>
                    <td><strong><?php echo $d->tracking_number?></strong></td>
                </tr>
                <tr>
                    <td>Full Name</td>
                    <td><strong><?php echo $d->sender?></strong></td>
                </tr>
                <tr>
                    <td>Applicant Address</td>
                    <td><strong><?php echo $d->sender_address?></strong></td>
                </tr>
                <tr>
                    <td>Applicant  Phone</td>
                    <td><strong><?php echo $d->phone?></strong></td>
                </tr>
                <tr>
                    <td>Applicant  Email</td>
                    <td><strong><?php echo $d->email?></strong></td>
                </tr>
                 <tr>
                    <td>Applicant Sex</td>
                    <td><strong><?php echo $d->gender?></strong></td>
                </tr>
                <tr>
                    <td>Type of Appliation / Visa </td>
                    <td><strong><?php echo $d->visa?></strong></td>
                </tr>

                <tr>
                    <td>Amount of Application</td>
                    <td><strong><?php echo number_format($d->amount)?></strong></td>
                </tr>
               
                <tr>
                    <td>Expected Process Period</td>
                    <td><strong><?php echo $d->period?></strong></td>
                </tr>
                <tr>
                    <td>Application Agent if any</td>
                    <td><strong><?php echo $d->agent?></strong></td>
                </tr>
                <tr>
                    <td>Applying with family now /later</td>
                    <td><strong><?php echo $d->family?></strong></td>
                </tr>
                <tr>
                    <td>If Yes How Many Family Member</td>
                    <td><strong><?php echo $d->member?></strong></td>
                </tr>
                <tr>
                    <td>Payment Validate The Processing</td>
                    <td><strong><?php echo $d->payment?></strong></td>
                </tr>
                
                <tr>
                    <td>Application Current Status</td>
                    <td><strong><?php echo $d->status?></strong></td>
                </tr>
                
            </table>
            </div>
            <br>
            <!-- <div class="table-responsive">
                <table class="table table-bordered table-striped mytable">
                    <tr style="background:black;">
                        <td style="color:black;" colspan="3">SHIPPING HISTORY</td>
                    </tr>
                    <?php  $c = $user->getShippingHistory('shipping_history',$_GET['data']);?>
                    <tr>
                        <th>Details</th>
                        <th>Location</th>
                    </tr>
                    <?php foreach($c as $key => $val):?>
                    <tr>
                        <td><strong><?php echo $val->details?></strong></td>
                        <td><strong><?php echo $val->location?></strong></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>   -->

            <p>Application Progress</p>
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $d->progress?>"
                aria-valuemin="0" aria-valuemax="100" style='width:<?php echo $d->progress?>%'>
                    <?php echo $d->progress?>%
                </div>
            </div>
            <p><b style="font-weight:bold">Note :</b>This item may take longer for your application to be approved </p>
        </div>
    <?php endif;?>
    
    <footer>
     
    </footer>      
    <script src="js/jquery.bpopups2.min.js"></script>

</body>

</html>