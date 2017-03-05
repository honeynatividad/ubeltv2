<section id="main-content">
    <section class="wrapper">            
              <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Member</h3>
		<ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="<?php echo base_url("/member/all"); ?>">Member</a></li>
                    <li><i class="fa fa-laptop"></i>Add</li>						  	
		</ol>
            </div>
	</div>
        <div class="row">
            <div class="col-lg-12">
                <?php if(isset($success_msg)): ?>
                <div class="alert alert-success fade in">
                    <p><?php echo $success_msg ?></p>
                </div>
                
                <?php endif; ?>
            </div>
        </div>      
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Member Form
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="feedback_form" action="" method="post">
                                <?php echo '<pre>';print_r($members);echo '</pre>';?>
                                <?php foreach($members as $member): ?>

                                <table>
                                    <tr>
                                        <td>First Name</td>
                                        <td><?php echo $member['first_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td><?php echo $member['last_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Middle Name</td>
                                        <td><?php echo $member['middle_name'] ?></td>
                                    <tr>
                                    <tr>
                                        <td>Contact Number</td>
                                        <td><?php echo $member['contact_number'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Birthday</td>
                                        <td><?php echo $member['birthday'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email Address</td>
                                        <td><?php echo $member['email_address'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Facebook Name</td>
                                        <td><?php echo $member['facebook_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Complete Address</td>
                                        <td><?php echo $member['complete_home_address'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Campus</td>
                                        <td><?php echo $member['campus'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Area</td>
                                        <td><?php echo $member['area'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Year Level</td>
                                        <td><?php echo $member['year_level'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Graduating</td>
                                        <td><?php echo $member['graduating'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Youth Servces You Attend</td>
                                        <td><?php echo $member['youth_services_you_attend'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ministry Involvement</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Name of Your Leadership Group</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>One 2 One</td>
                                        <td></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Victory Weekend</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Making Disciples</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Church Community</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Foundation Class</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Empowering Leaders</td>
                                        <td></td>
                                    </tr>
                                </table>

                                <table>

                                    <tr>
                                        <td>When did you jumpstart your Victory Group?</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>How many times did you meet for the past 3 months?</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>How many members were connected from Outreach Month</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Demographics</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Number of Victory Group Members</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Schedule</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>One 2 One</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>Victory Weekend</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Making Disciples</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Church Community</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Foundation Class</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Empowering Class</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leadership 113</td>
                                        <td></td>
                                    </tr>

                                </table>

                                <table>
                                    <tr>
                                        <td>Intern Name</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Contact Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Campus</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Year Level</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Graduting</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>One 2 One</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>Victory Weekend</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Making Disciples</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Church Community</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Foundation Class</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Empowering Class</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leadership 113</td>
                                        <td></td>
                                    </tr>
                                </table>

                            <?php endforeach; ?>
                            </form>
                        </div>
                        <p><i>If you are leading a Victory Group, you will be redirected to Victory Group Information.</i></p>
                          </div>If you
                      </section>
                  </div>
              </div>
              
    </section>
</section>
<script>
    $(document).ready(function(){
	$("#lname").click(function(){
            
        });
            
    });
</script>