<section id="main-content">
    <section class="wrapper">            
              <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Intern Profile</h3>
		<ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="<?php echo base_url("/member/all"); ?>">Member</a></li>
                    <li><i class="fa fa-laptop"></i>Add</li>						  	
		</ol>
            </div>
	</div>
              
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Intern Profile Form
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="feedback_form" action="" method="post">
                                <input type="hidden" name="member_id" value="<?php echo $member_id ?>">
                                <input type="hidden" name="victory_group_id" value="<?php echo $victory_group_id ?>">
                                
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Full Name <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="full_name" minlength="5" required />
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Contact Number <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="contact_number" minlength="5" required />
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Campus <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <select class="form-control input-lg m-bot15" name="campus">
                                            <option value=""></option>
                                            <?php foreach($campuses as $campus):?>
                                            
                                            <option value="<?php echo $campus['name'] ?>"><?php echo $campus['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        
                                    </div>
                                </div>
                            </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>