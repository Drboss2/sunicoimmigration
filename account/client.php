<div class="udex-main" id="main">
    <ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item active">All Clients</li>
	</ul>
    <h1 class="clearfix">All Clients
        <div class="float-right"></div>
    </h1>
    <div class="table-responsive">
        <table class="table table-condensed table-hover mytable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Client Name</th>
                    <th>Country</th>
                    <th>Action</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $data = $user->getRecodesWithPagination('tracking');
                if($data !=="nill"):
                    foreach($data as $key =>$val):
            ?>
                        <tr>
                            <td><?php echo ++$key?></td>
                            <td><?php echo $val->sender?></td>
                            <td><?php echo $val->sender_country?></td>
                            <td>
                                <a href="home?view=<?php echo $val->id?>"><i class="far fa-eye"></i></a> ||
                                <a style="color:red"  href="home?delete=<?php echo $val->id?>"><i class="fas fa-trash"></i></a>
                            </td>
                            <td><?php echo $val->date ?></td>
                        </tr>
                   <?php endforeach;?>
                <?php endif;?>
            </tbody>
                <?php echo $user->pagination('tracking');?>

        </table>
    </div>
</div>