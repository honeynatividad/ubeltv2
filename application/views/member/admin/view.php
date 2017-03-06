<section id="main-content">
    <section class="wrapper">            
              <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Member</h3>
		<ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="<?php echo base_url("/members/all"); ?>">Member</a></li>
                    <li><i class="fa fa-laptop"></i>List</li>						  	
		</ol>
            </div>
	</div>
              
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                   
                    <header class="panel-heading tab-bg-primary">
                        <ul class="nav nav-tabs">
                            <li  class="active">
                                <a data-toggle="tab" href="#home-2">
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#about-2">
                                    
                                    Victory Group Profile
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('members/edit/'.$member_id) ?>">EDIT</a>
                            </li>
                            
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="home-2" class="tab-pane  active">
                                <a class="btn btn-success" data-toggle="modal" href="#myModal2">
                                  EDIT
                                </a>
                                <table class="table">
                                    
                                    <tbody>
                                       
                                        <tr>
                                            <td>First Name</td>
                                            <td><?php echo $members['first_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Middle Name</td>
                                            <td><?php echo $members['middle_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td><?php echo $members['last_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Contact Number</td>
                                            <td><?php echo $members['contact_number'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Birthday</td>
                                            <td><?php echo $members['birthday'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email Address</td>
                                            <td><?php echo $members['email_address'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Facebook Name</td>
                                            <td><?php echo $members['facebook_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Complete Home Address</td>
                                            <td><?php echo $members['complete_home_address'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Campus</td>
                                            <td><?php echo $members['campus'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Area</td>
                                            <td><?php echo $members['area'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Year Level</td>
                                            <td><?php echo $members['year_level'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Graduating</td>
                                            <td><?php echo $members['graduating'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Youth Services You Attend</td>
                                            <td><?php echo $members['youth_services_you_attend'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Ministry Involvement</td>
                                            <td><?php echo $members['ministry_involvement'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Name of your leadership group</td>
                                            <td><?php echo $members['name_of_your_leadership_group'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>One 2 One</td>
                                            <td><?php echo $members['one_2_one'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Victory Weekend</td>
                                            <td><?php echo $members['victory_weekend'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Making Disciples</td>
                                            <td><?php echo $members['making_disciples'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Church Community</td>
                                            <td><?php echo $members['church_community'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Foundation Class</td>
                                            <td><?php echo $members['foundation_class'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Empowering Leaders</td>
                                            <td><?php echo $members['empowering_leaders'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Leadership 113</td>
                                            <td><?php echo $members['leadership_113'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>How many victory groups you are leading</td>
                                            <td><?php echo $members['how_many_victory_groups_you_are_leading'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="about-2" class="tab-pane">
                                
                                <?php foreach($victory_groups as $victory_group): ?>
                                <div class="col-lg-5">
                                    <table class="table">
                                        <a class="btn btn-warning" data-toggle="modal" href="#myModal">
                                        Edit
                                        </a>
                                        <tbody>
                                            <tr>
                                                <td>Campus</td>
                                                <td><?php echo $victory_group['campus'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>When did you jumpstart your Victory Group?</td>
                                                <td><?php echo $victory_group['when_jumpstart'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>How many times did you meet for the past 3 months?</td>
                                                <td><?php echo $victory_group['how_many_times'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>How many members were connected from Outreach Month</td>
                                                <td><?php echo $victory_group['member_from_outreach'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Demographics</td>
                                                <td><?php echo $victory_group['demographic'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Number of Victory Group Members</td>
                                                <td><?php echo $victory_group['number_of_victory_group_member'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Schedule</td>
                                                <td><?php echo $victory_group['schedule'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Victory Group Members Discipleship Journey</b></td>
                                            </tr>
                                            <tr>
                                                <td>One 2 One</td>
                                                <td><?php echo $victory_group['one_2_one'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Victory Weekend</td>
                                                <td><?php echo $victory_group['victory_weekend'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Water Baptism</td>
                                                <td><?php echo $victory_group['water_baptism'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Making Disciples</td>
                                                <td><?php echo $victory_group['making_disciples'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Church Community</td>
                                                <td><?php echo $victory_group['church_community'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Foundation Class</td>
                                                <td><?php echo $victory_group['foundation_class'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Empowering Leaders</td>
                                                <td><?php echo $victory_group['empowering_leaders'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Leadership 113</td>
                                                <td><?php echo $victory_group['leadership_113'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-5">
                                    
                                    <?php foreach($interns as $intern): ?>
                                    <?php if($intern['victory_group_id']==$victory_group['victory_group_id']): ?>
                                    <a class="btn btn-warning" data-toggle="modal" href="#myModal3">
                                    Edit
                                    </a>
                                    <table class="table-inbox border-content">
                                        <tbody>
                                            <tr>
                                                <td>Intern Name</td>
                                                <td><?php echo $intern['intern_name'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Contact Number</td>
                                                <td><?php echo $intern['contact_number'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Campus</td>
                                                <td><?php echo $intern['campus'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Year Level</td>
                                                <td><?php echo $intern['year_level'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Graduating</td>
                                                <td><?php echo $intern['graduating'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>One 2 One</td>
                                                <td>
                                                    <?php 
                                                    if($intern['one_2_one']==1){
                                                        echo 'Yes';
                                                    }else{
                                                        echo 'No';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Victory Weekend</td>
                                                <td>
                                                    <?php 
                                                    if($intern['victory_weekend']==1){
                                                        echo 'Yes';
                                                    }else{
                                                        echo 'No';
                                                    }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Water Baptism</td>
                                                <td>
                                                    <?php 
                                                    if($intern['water_baptism']==1){
                                                        echo 'Yes';
                                                    }else{
                                                        echo 'No';
                                                    }                                                    
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Making Disciples</td>
                                                <td>
                                                    <?php
                                                    if($intern['making_disciples']==1){
                                                        echo 'Yes';
                                                    }else{
                                                        echo 'No';
                                                    } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Church Community</td>
                                                <td>
                                                    <?php
                                                    if($intern['church_community']==1){
                                                        echo 'Yes';
                                                    }else{
                                                        echo 'No';
                                                    } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Foundation Class</td>
                                                <td>
                                                    <?php
                                                    if($intern['foundation_class']==1){
                                                        echo 'Yes';
                                                    }else{
                                                        echo 'No';
                                                    }
                                                     ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Empowering Leaders</td>
                                                <td>
                                                    <?php 
                                                    if($intern['empowering_leaders']==1){
                                                        echo 'Yes';
                                                    }else{
                                                        echo 'No';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Leadership 113</td>
                                                <td>
                                                    <?php
                                                    if($intern['leadership_113']==1){
                                                        echo 'Yes';
                                                    }else{
                                                        echo 'No';
                                                    } ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                        
                                </div>
                                
                                <?php endforeach; ?>
                            </div>
                           
                        </div>
                     </div>
                </section>
            </div>
        </div>
    </section>
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">EDIT</h4>
            </div>
            <div class="modal-body">
                <form class="form-validate form-horizontal" id="feedback_form" action="" method="post">
                    
                    <input type="hidden" name="member_id" value="<?php echo $member_id ?>">
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">Campus <span class="required">*</span></label>
                        <div class="col-lg-8">
                            <select class="form-control input-lg m-bot15" name="campus">
                                <option value=""></option>
                                <?php foreach($campuses as $campus):?>

                                <option value="<?php echo $campus['name'] ?>"><?php echo $campus['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">When did you jumpstart your victory group <span class="required">*</span></label>
                        <div class="col-lg-8">
                            <input class="form-control datepicker" id="datepicker" data-date-format="mm/yyyy" name="when_jumpstart" minlength="3" type="text" required />
                                            
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">How many times did you meet for the past 3 months <span class="required">*</span></label>
                        <div class="col-lg-8">
                            <select class="form-control input-lg m-bot15" name="how_many_times">
                                <option value=""></option>
                                <option value="1-3 times">1-3 times</option>
                                <option value="4-6 times">4-6 times</option>
                                <option value="7-9 times">7-9 times</option>
                                <option value="more than 9 times">More than 9 times</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">Demographic <span class="required">*</span></label>
                        <div class="col-lg-8">
                            <select class="form-control input-lg m-bot15" name="demographic">
                                <option value=""></option>
                                <option value="High School">High School</option>
                                <option value="Junior High (Grade 7-10)">Junior High (Grade 7-10)</option>
                                <option value="Senior High (Grade 11-12)">Senior High (Grade 11-12)</option>                                                
                                <option value="College">College</option>
                                <option value="Mixed">Mixed</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">Number of Victory Group Members <span class="required">*</span></label>
                        <div class="col-lg-8">
                            <select class="form-control input-lg m-bot15" name="number_victory_group_member">                                            
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">How many members were connected from Outreach Month <span class="required">*</span></label>
                        <div class="col-lg-8">
                            <select class="form-control input-lg m-bot15" name="member_from_outreach">                                            
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">Schedule <span class="required">*</span></label>

                        <div class="col-lg-8">
                            <input class="form-control" id="cname" name="schedule" minlength="5" type="text" required />
                                        </div>
                                        <label for="cname" class="control-label col-lg-4">Day / Time / Location (e.g Monday / 3pm / KFC)<span class="required">*</span></label>

                    </div>
                    
                                
                                
                    
                    <div>
                        <h3>Victory Group Members Discipleship Journey</h3>
                    </div>
                    <div>
                        <p><i>Input total number of members who COMPLETED each discipleship milestone</i></p>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">One 2 One <span class="required">*</span></label>
                        <div class="col-lg-8">
                            <input type="number" id="replyNumber" min="0" step="1" data-bind="value:replyNumber" class="form-control" name="one_2_one" minlength="5" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">Victory Weekend <span class="required">*</span></label>
                        <div class="col-lg-8">
                            <input type="number" id="replyNumber" min="0" step="1" data-bind="value:replyNumber" class="form-control" name="victory_weekend" minlength="5" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">Water Baptism <span class="required">*</span></label>
                        <div class="col-lg-8">
                            <input type="number" id="replyNumber" min="0" step="1" data-bind="value:replyNumber" class="form-control" name="water_baptism" minlength="5" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">Making Disciples<span class="required">*</span></label>
                        <div class="col-lg-8">
                            <input type="number" id="replyNumber" min="0" step="1" data-bind="value:replyNumber" class="form-control" name="making_disciples" minlength="5" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">Church Community <span class="required">*</span></label>
                        <div class="col-lg-8">
                            <input type="number" id="replyNumber" min="0" step="1" data-bind="value:replyNumber" class="form-control" name="church_community" minlength="5" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">Foundation Class<span class="required">*</span></label>
                        <div class="col-lg-8">
                            <input type="number" id="replyNumber" min="0" step="1" data-bind="value:replyNumber" class="form-control" name="foundation_class" minlength="5" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">Empowering Leaders<span class="required">*</span></label>
                        <div class="col-lg-8">
                            <input type="number" id="replyNumber" min="0" step="1" data-bind="value:replyNumber" class="form-control" name="empowering_leaders" minlength="5" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">Leadership 113<span class="required">*</span></label>
                        <div class="col-lg-8">
                            <input type="number" id="replyNumber" min="0" step="1" data-bind="value:replyNumber" class="form-control" name="leadership_113" minlength="5" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-4">Do you have an intern?<span class="required">*</span></label>
                        <div class="col-lg-8">
                                            
                            <input type="radio" name="intern" value="1" <?php echo  set_radio('myradio', '1', TRUE); ?> />Yes
                            <br>
                            <input type="radio" name="intern" value="2" <?php echo  set_radio('myradio', '2'); ?> />No
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="submit" id="submit" name="memberSubmit" class="btn btn-primary" value="SAVE"/>

                            <button class="btn btn-default" type="button">Cancel</button>
                        </div>
                    </div>
                                                    
                                
                </form>
                        
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button"> Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit</h4>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form method="post" id="edit-member">
                        <h3>Personal Information</h3>
                        <input type="text" id="member_id" name="member_id" value="<?php echo $member_id ?>">
                        <hr>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-4">First Name <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control" id="first_name" name="first_name" minlength="3" type="text" value="<?php echo $members['first_name'] ?>" required />
                            </div>
                        </div>
                        <div id="checkName">
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-4">Middle Name <span class="required">*</span></label>
                                <div class="col-lg-8">
                                    <input class="form-control" id="middle_name" name="middle_name" minlength="3" type="text" value="<?php echo $members['middle_name'] ?>" required />
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-4">Last Name <span class="required">*</span></label>
                                <div class="col-lg-8">
                                    <input class="form-control" id="last_name" name="last_name" minlength="3" type="text" value="<?php echo $members['last_name'] ?>" required />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-4">Gender <span class="required">*</span></label>
                            <div class="col-lg-8">
                            <?php
                            print_r($user['gender']);
                            if(!empty($user['gender']) && $user['gender'] == 'Female'){
                                $fcheck = 'checked="checked"';
                                $mcheck = '';
                            }else{
                                $mcheck = 'checked="checked"';
                                $fcheck = '';
                            }
                            ?>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="gender" name="gender" value="Male" <?php echo $mcheck; ?>>
                                    Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="gender" name="gender" value="Female" <?php echo $fcheck; ?>>
                                    Female
                                </label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-4">Contact Number <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control" id="contact_number" name="contact_number" minlength="3" value="<?php echo $members['contact_number'] ?>" type="text" required />
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-4">Birthday <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control datepicker2" data-date-format="mm/dd/yyyy" id="birthday" name="birthday" minlength="3" value="<?php echo $members['birthday'] ?>" type="text" required />
                            </div>

                        </div>

                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-4">Email Address <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control" id="email_address" name="email_address" minlength="3" value="<?php echo $members['email_address'] ?>" type="text" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-4">Password <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
                                <?php echo form_error('password','<span class="help-block">','</span>'); ?>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-4">Facebook Name <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control" id="facebook_name" name="facebook_name" minlength="3" value="<?php echo $members['facebook_name'] ?>" type="text" required />
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-4">Complete Home Address <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <textarea class="form-control" id="complete_home_address" name="complete_home_address"><?php echo $members['complete_home_address'] ?></textarea>

                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-4">Campus <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <select class="form-control input-lg m-bot15" id="campus" name="campus">
                                    <option value="<?php echo $members['campus'] ?>"><?php echo $members['campus'] ?></option>
                                    <?php foreach($campuses as $campus):?>

                                    <option value="<?php echo $campus['name'] ?>"><?php echo $campus['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">Area <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <select class="form-control input-lg m-bot15" id="area" name="area">                                            
                                    <option value="<?php echo $members['area'] ?>"><?php echo $members['area'] ?></option>
                                    <option value="España">España</option>
                                    <option value="Intramuros">Intramuros</option>
                                    <option value="Mendiola">Mendiola</option>
                                    <option value="Sta. Mesa">Sta. Mesa</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">Year Level <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <select class="form-control input-lg m-bot15" id="year_level" name="year_level">                                            
                                    <option value="<?php echo $members['year_level'] ?>"><?php echo $members['year_level'] ?></option>
                                    <option value="Junior HS">Junior HS(Grade 7-10)</option>
                                    <option value="Senior HS">Senior HS(Grade 11-12)</option>
                                    <option value="First year">First Year</option>
                                    <option value="Second Year">Second Year</option>
                                    <option value="Third Year">Third Year</option>
                                    <option value="Fourth Year">Fourth Year</option>
                                    <option value="Fifth Year">Fifth Year</option>
                                    <option value="YP Volunteer">YP Volunteer</option>
                                    <option value="Staff">Staff</option>
                                    <option value="Other">Other</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">Graduating <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <select class="form-control input-lg m-bot15" id="graduating" name="graduating">                                            
                                    <option value="<?php echo $members['graduating'] ?>"><?php echo $members['graduating'] ?></option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Not applicable">Not Applicable if YP or Staff</option>


                                </select>
                            </div>
                        </div>

                        <h3>Ministry Information</h3>
                        <hr>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">Youth Service/s You regularly attend<span class="required">*</span></label>
                            <div class="col-lg-8">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="th-5pm" id="th-5pm" name="th-5pm">Thursday 5pm

                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="th-7pm" value="th-7pm" name="th-7pm">Thursday 7pm

                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="f-3pm" id="f-3pm" name="f-3pm">Friday 3pm

                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="f-5pm" id="f-5pm" name="f-5pm">Friday 5pm

                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="f-7pm" id="f-7pm" name="f-7pm">Friday 7pm

                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="service-other" id="service-other" name="service-other">Other

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">Ministry Involvement<span class="required">*</span></label>
                            <div class="col-lg-8">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Admin Support" id="ministry-admin" name="ministry-admin">Admin Support                                                  
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Communication" id="ministry-communication" name="ministry-communication">Communication
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Kids" id="ministry-kids" name="ministry-kids">Kids
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Music" id="ministry-music" name="ministry-music">Music
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Prayer Ministry" id="ministry-prayer" name="ministry-prayer">Prayer Ministry
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Production Design" id="ministry-production" name="ministry-production">Production Design
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Technical and Stage Management" id="ministry-technical" name="ministry-technical">Technical and Stage Management
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Ushering" id="ministry-ushering" name="ministry-ushering">Ushering
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="None" id="ministry-none" name="ministry-none">None
                                    </label>
                                </div>


                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">Name of Your Leadership Group Leader <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control" id="name_leader" name="name_leader" minlength="3" value="<?php echo $members['name_of_your_leadership_group'] ?>" type="text" required />
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">One 2 one <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control datepicker" data-date-format="mm/yyyy" id="one_2_one" name="one_2_one" value="<?php echo $members['one_2_one'] ?>" minlength="3" type="text" required />
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">Victory Weekend <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control datepicker" data-date-format="mm/yyyy" id="victory_weekend" name="victory_weekend" value="<?php echo $members['victory_weekend'] ?>" minlength="3" type="text" required />
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">Water Baptism <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control datepicker" data-date-format="mm/yyyy" id="water_baptism" name="water_baptism" minlength="3" <?php echo $members['water_baptism'] ?> type="text" required />
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">Making Disciples <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control datepicker" data-date-format="mm/yyyy" id="making_disciples" name="making_disciples" minlength="3" value="<?php echo $members['making_disciples'] ?>" type="text" required />
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">Church Community <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control datepicker" data-date-format="mm/yyyy" id="church_community" name="church_community" value="<?php echo $members['church_community'] ?>" minlength="3" type="text" required />
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">Foundation Class <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control datepicker" data-date-format="mm/yyyy" id="foundation_class" name="foundation_class" value="<?php echo $members['foundation_class'] ?>" minlength="3" type="text" required />
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">Empowering Leaders <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control datepicker" data-date-format="mm/yyyy" id="empowering_leaders" name="empowering_leaders" value="<?php echo $members['empowering_leaders'] ?>" minlength="3" type="text" required />
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-4">Leadership 113 <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control datepicker" data-date-format="mm/yyyy" id="leadership_113" name="leadership_113" minlength="3" <?php echo $members['leadership_113'] ?> type="text" required />
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-4">Number of Victory Group/s You are Leading <span class="required">*</span></label>
                            <div class="col-lg-8">
                                <select class="form-control input-lg m-bot15" id="number_victory_groups" name="number_victory_groups">                                            
                                    <option value="<?php echo $members['how_many_victory_groups_you_are_leading'] ?>"><?php echo $members['how_many_victory_groups_you_are_leading'] ?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>

                                </select>

                            </div>
                        </div>

                        <br>
                        <hr>
                        <div class="tags_clear"></div>
                        <div class="row">

                            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                            <button class="btn btn-success" id="editPersonalInformation" type="button">Save changes</button>
                        </div>
                    
                    </form>            
                
                    </div>
                    <div class="modal-footer">
                        
                    </div>
                    
        </div>
    </div>
</div>
<!-- modal -->


<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit</h4>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" action="" method="post">
                        <input type="hidden" name="member_id" value="<?php echo $member_id ?>">
                        <input type="hidden" name="victory_group_id" value="<?php echo $victory_group_id ?>">
                        <div class="col-lg-12">
                            <p><i>Must be DONE with Victory Weekend, co-leading with Victory Group Leader and has F.A.I.T.H</i></p>
                        </div>
                                
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
                                
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Year Level <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <select class="form-control input-lg m-bot15" name="year_level">                                            
                                            <option value=""></option>
                                            <option value="Junior HS">Junior HS(Grade 7-10)</option>
                                            <option value="Senior HS">Senior HS(Grade 11-12)</option>
                                            <option value="First year">First Year</option>
                                            <option value="Second Year">Second Year</option>
                                            <option value="Third Year">Third Year</option>
                                            <option value="Fourth Year">Fourth Year</option>
                                            <option value="Fifth Year">Fifth Year</option>
                                            <option value="YP Volunteer">YP Volunteer</option>
                                            <option value="Staff">Staff</option>
                                            <option value="Other">Other</option>
                                                                           
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Graduating <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <select class="form-control input-lg m-bot15" name="graduating">                                            
                                            <option value=""></option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Not applicable">Not Applicable if YP or Staff</option>
                                            
                                                                           
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">One 2 One<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="one_2_one">
                                                  
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Victory Weekend<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="victory_weekend">
                                                  
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Water Baptism<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="water_baptism">
                                                  
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Making Disciples<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="making_disciples">
                                                  
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Church Community<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="church_community">
                                                  
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Foundation Class<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="foundation_class">
                                                  
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Empowering Leaders<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="empowering_leaders">
                                                  
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Do you have another intern? <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <select class="form-control input-lg m-bot15" name="do_you_have_another_intern">
                                            <option value=""></option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input type="submit" id="submit" name="memberSubmit" class="btn btn-primary" value="SAVE"/>
                                              
                                        <button class="btn btn-default" type="button">Cancel</button>
                                    </div>
                                </div>
                                
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
    $(document).ready(function(){
	$("#editPersonalInformation").click(function(){
            
            var member_id = $("#member_id").val();
            //alert(member_id);
            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            var middle_name = $("#middle_name").val();
            var contact_number = $("#contact_number").val();
            var birthday = $("#birthday").val();
            var email_address = $("#email_address").val();
            var facebook_name = $("#facebook_name").val();
            var complete_home_address = $("#complete_home_address").val();
            var campus = $("#campus").val();
            var area = $("#area").val();
            var year_level = $("#year_level").val();
            var graduating = $("#graduating").val();
            var th_5pm = $("#th-5pm").val();
            var th_7pm = $("#th-7pm").val();
            var f_3pm = $("#f_3pm").val();
            var f_5pm = $("#f_5pm").val();
            var f_7pm = $("#f_7pm").val();
            var service_other = $("#service-other").val();
            var ministry_admin = $("ministry-admin").val();
            var ministry_communication = $("#ministry-communication").val();
            var ministry_kids = $("#ministry-kids").val();
            var ministry_prayer = $("#ministry-prayer").val();
            var ministry_production = $("#ministry-production").val();
            var ministry_technical = $("#ministry-technical").val();
            var ministry_ushering = $("#ministry-ushering").val();
            var ministry_none = $("#ministry-none").val();
            var name_leader = $("#name_leader").val();
            var one_2_one = $("#one_2_one").val();
            var victory_weekend = $("#victory_weekend").val();
            var water_baptism = $("#water_baptism").val();
            var making_disciples = $("#making_disciples").val();
            var church_community = $("#church_community").val();
            var foundation_class = $("#foundation_class").val();
            var empowering_leaders = $("#empowering_leaders").val();
            var leadership_113 = $("#leadership_113").val();
            var number_victory_groups = $("#number_victory_groups").val();
            
            $.ajax({
                type: 'post',
                url: '<?php echo base_url("members/edit/");?>'+member_id,
                data: {
                    member_id:member_id,
                    first_name:first_name,
                    last_name:last_name,
                    middle_name:middle_name,
                    contact_number:contact_number,
                    birthday:birthday,
                    email_address: email_address,
                    facebook_name:facebook_name,
                    complete_home_address:complete_home_address,
                    campus:campus,
                    area:area,
                    year_level:year_level,
                    graduating:graduating,
                    th_5pm:th_5pm,
                    th_7pm:th_7pm,
                    f_3pm:f_3pm,
                    f_5pm:f_5pm,
                    f_7pm:f_7pm,
                    service_other:service_other,
                    ministry_admin:ministry_admin,
                    ministry_communication:ministry_communication,
                    ministry_kids:ministry_kids,
                    ministry_prayer:ministry_prayer,
                    ministry_production:ministry_production,
                    ministry_technical:ministry_technical,
                    ministry_ushering:ministry_ushering,
                    ministry_none:ministry_none,
                    name_leader:name_leader,
                    one_2_one:one_2_one,
                    victory_weekend:victory_weekend,
                    water_baptism:water_baptism,
                    making_disciples:making_disciples,
                    church_community:church_community,
                    foundation_class:foundation_class,
                    empowering_leaders:empowering_leaders,
                    leadership_113:leadership_113,
                    number_victory_groups:number_victory_groups
                    
         
                },
                success: function (response) {
                    $('#myModal2').hide();  // put your modal id 
                    window.location.href = '<?php echo base_url("members/edit/");?>'+member_id;
                }
            });

        });
            
    });
</script>