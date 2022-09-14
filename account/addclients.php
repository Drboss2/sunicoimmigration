<div class="udex-main" id="main">
    <ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item active">Client</li>
	</ul>
    <h1 class="clearfix">Add Client
        <div class="float-right"></div>
    </h1>
    <form method="POST" action="modules/addclient.php">
        <div class="row">
            <div class="col-lg-4">
                <label>Applicant's Name</label>
                <input type="text" class="form-control" id="sender_name" name="sender_name" required>
                <input type="hidden" name="csfr" value="<?php echo rand(10000000000000,90000000009)?>" >
            </div>
            <div class="form-group col-lg-4">
                <label>Applicant's Address</label>
                <input type="text" class="form-control" id="sender_address" name="sender_address" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Applicant's Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Applicant's  Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
             <div class="form-group col-lg-4">
                <label>Applicant's Country if Resident</label>
                <input type="text" class="form-control" id="country" name="country" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Applicant's Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Type of Appliation / Visa </label>
                <input type="text" class="form-control" id="visa" name="visa" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Amount For Application</label>
                <input type="text" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Expected Processing Period</label>
                <input type="text" class="form-control" id="period" name="period"required>
            </div>
            <div class="form-group col-lg-4">
                <label>Applicant Agent if Any</label>
                <input type="text" class="form-control" id="agent" name="agent"required>
            </div>
            <div class="form-group col-lg-4">
                <label>Applying with family now /later</label>
                <input type="text" class="form-control" id="family" name="family" required>
            </div>
            <div class="form-group col-lg-4">
                <label>If Yes How Many Family Member</label>
                <input type="text" class="form-control" id="member" name="member" >
            </div>
            <div class="form-group col-lg-4">
                <label>Payment Validate The Processing</label>
                <input type="text" class="form-control" id="payment" name="payment">
            </div>
            <div class="form-group col-lg-4">
                <label>Application History/ Status</label>
                <input type="text" class="form-control" id="status" name="status">
            </div>
            <div class="form-group col-lg-4">
                <label>Visa Tracking Code</label>
                <input type="text" class="form-control" id="track" name="track" readonly>
            </div>
        </div>
        <button id="check" name="client" class="btn btn-primary btn-sm">CONTINUE</button>
    </form>
   
    <div class="dash_footer mt-4 small">
        <p>
            Copyright © Admin.
            <br/>
        </p>
	</div>	
</div>
<script>
	cons = document.querySelector('#check');
    let div = document.getElementById('track')

    window.onload = function(){
        let r = Math.floor(Math.random() * (000, 990 + 100))

        let ran = Math.floor(Math.random() * (10000000000, 999999999999 + 100));
        div.value = r+"-"+ran
    }
</script>
<style>
    label{
        font-size:14px;
        color:grey;
    }
</style>



