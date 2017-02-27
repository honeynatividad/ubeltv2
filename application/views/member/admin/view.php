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
                            
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="home-2" class="tab-pane  active">
                                
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
                                    <table class="table">
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
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