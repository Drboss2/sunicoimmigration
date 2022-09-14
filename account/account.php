<div class="udex-main" id="main">
    <div class="row">
        <?php
        if(isset($_GET['account']) && $_GET['account'] =='true'):?>
           <?php if(isset($_GET['name'])):?>
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?php echo $_GET['name']?> !</strong> has been added successfully
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            <?php endif;?>
        <?php elseif(isset($_GET['account']) && $_GET['account'] == 'delete'):?>
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Users !</strong> has been deleted successfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php elseif(isset($_GET['account']) && $_GET['account'] == 'edit'):?>
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>updated!</strong> updated successfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php elseif(isset($_GET['account']) && $_GET['account'] == 'login'):?>
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Login!</strong> has been approved successfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php endif;?>
        <div class="col-md-6 py-1">
            <div class="media about_item h-100 bg-info py-3 px-4 rounded">
                <i class="fas fa-dollar-sign text-white-50"></i>
                <div class="media-body">
                    <p class="my-0 text-white">All Clients</p>
                    <h3 class="my-0 text-white font-weight-bold" style="font-size: 26px">
                       <?php echo $user->getClientRowCount('tracking')?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 py-1">
            <div class="media about_item h-100 bg-primary py-3 px-4 rounded">
                <i class="fas fa-dollar-sign text-white-50"></i>
                <div class="media-body">
                    <p class="my-0 text-white">All Shippment History</p>
                    <h3 class="my-0 text-white font-weight-bold" style="font-size: 26px">
                        <?php echo $user->getClientRowCount('shipping_history')?>

                    </h3>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12 py-2">
        </div>  
    </div>
    <div class="dash_footer mt-4 small">
        <p>
            Copyright © Admin Area.
            <br />
        </p>
    </div>	
</div>

