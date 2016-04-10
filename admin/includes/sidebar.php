<div class="sidebar left sidebar-size-3 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
            <div data-scrollable>
                <div class="sidebar-block">
                    <div class="profile">
                        <a href="#">
                            <img src="images/people/110/guy-6.jpg" alt="people" class="img-circle width-80" />
                        </a>
                        <h4 class="text-display-1 margin-none">Instructor Name</h4>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li><a href="inst-dashboard.php"  <?php if($page == "instdashboard"){ ?> style="background-color: #000; color: #FFF;"  <?php } ?>><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                    
                    <li class="hasSubmenuu">
                        <a href="mcat.php"  <?php if($page == "mcat"){ ?> style="background-color: #000; color: #FFF;"  <?php } ?>><i class="fa fa-file-text-o"></i><span>Main Category</span></a>
                        
                    </li>
                    <li class="hasSubmenuu">
                        <a href="subcat.php" <?php if($page == "subcat"){ ?> style="background-color: #000; color: #FFF;"  <?php } ?>><i class="fa fa-mortar-board"></i><span>Sub Category</span></a>
                     </li>
                    
                    <li class="hasSubmenuu">
                        <a href="subject.php" <?php if($page == "subject"){ ?> style="background-color: #000; color: #FFF;"  <?php } ?>><i class="fa fa-bars"></i><span>Subjects</span></a>
                       
                    </li>
                     
                    <li class="hasSubmenuu">
                        <a href="#subject-menu"><i class="fa fa-bars"></i><span>Questions</span></a>
                    </li>
                    
                     <li class="hasSubmenuu">
                        <a href="#option-menu"><i class="fa fa-pencil-square-o"></i><span>Options</span></a>
                        
                    </li>
                    <li class="hasSubmenu">
                        <a href="#account-menu"><i class="fa fa-user"></i><span>Account</span></a>
                        <ul id="account-menu">
                            <li><a href="app-student-profile.html"><span>Edit Profile</span></a></li>
                             </ul>
                    </li>
                    
                    
                    <li class="hasSubmenu">
                        <a href="#forum-menu"><i class="fa fa-envelope"></i><span>Messages</span></a>
                        <ul id="forum-menu">
                            <li><a href="#"><span>Student Forum</span></a></li>
                            <li><a href="#"><span>Messages</span></a></li>
                             </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
                </ul>
            </div>
        </div>