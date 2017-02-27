<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">                
            <li class="active">
                <a class="" href="">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Members</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?php echo base_url("/members/add");?>">Add</a></li>                          
                    <li><a class="" href="<?php echo base_url("/members/all");?>">List</a></li>
                    
                </ul>
            </li>  
            <?php if($isAdmin=="admin"): ?>
            
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Campus</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?php echo base_url("/campus/add");?>">Add</a></li>                          
                    <li><a class="" href="<?php echo base_url("/campus/all");?>">List</a></li>
                </ul>
            </li>       
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Victory Groups</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?php echo base_url("/victory_groups/add");?>">Add</a></li>                          
                    <li><a class="" href="<?php echo base_url("/victory_groups/all");?>">List</a></li>
                </ul>
            </li>       
            
            <?php endif; ?>
        </ul>
              <!-- sidebar menu end-->
    </div>
</aside>