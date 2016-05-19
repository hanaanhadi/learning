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
                    
                 
                    </li>
                    <li class="hasSubmenu">
                        <a href="#main-cat"><i class="fa fa-user"></i><span>Main Category</span></a>
                        <ul id="main-cat">
                            <li> <a href="mcat.php"  <?php if($page == "mcat"){ ?> style="background-color: #000; color: #FFF;"  <?php } ?><span>Insert Category</span></a></li>
                            <li> <a href="viewmcat.php"  <?php if($page == "viewmcat"){ ?> style="background-color: #000; color: #FFF;"  <?php } ?><span>View Category</span></a></li>
                             
                        </ul>
                    </li>
                    
                    <li class="hasSubmenu">
                        <a href="#sub-cat"><i class="fa fa-user"></i><span>Sub Category</span></a>
                        <ul id="sub-cat">
                            <li> <a href="subcat.php"  <?php if($page == "subcat"){ ?> style="background-color: #000; color: #FFF;"  <?php } ?><span>Insert Category</span></a></li>
                            <li> <a href="viewsubcat.php"  <?php if($page == "viewsubcat"){ ?> style="background-color: #000; color: #FFF;"  <?php } ?><span>View Category</span></a></li>
                             
                        </ul>
                    </li>
                          <li class="hasSubmenu">
                        <a href="#det-cat"><i class="fa fa-user"></i><span>Subjects</span></a>
                        <ul id="det-cat">
                            <li> <a href="dcat.php"  <?php if($page == "dcat"){ ?> style="background-color: #000; color: #FFF;"  <?php } ?><span>Insert Subjects</span></a></li>
                            <li> <a href="viewdcat.php"  <?php if($page == "viewdcat"){ ?> style="background-color: #000; color: #FFF;"  <?php } ?><span>View Subjects</span></a></li>
                        </ul>
                    </li>
                    
                     
                    <li class="hasSubmenu">
                        <a href="#question"><i class="fa fa-user"></i><span>Questions</span></a>
                        <ul id="question">
                            <li> <a href="question.php"  <?php if($page == "question"){ ?> style="background-color: #000; color: #FFF;"  <?php } ?><span>Insert Questions</span></a></li>
                            <li> <a href="viewquestion.php"  <?php if($page == "viewquest"){ ?> style="background-color: #000; color: #FFF;"  <?php } ?><span>View Questions</span></a></li>
                        </ul>
                    </li>
                    
                     <li class="hasSubmenu">
                        <a href="#setting-menu"><i class="fa fa-user"></i><span>Setting</span></a>
                        <ul id="setting-menu">
                            <li><a href="admin-control.php"><span>Admin Control</span></a></li>
                            <li><a href="new-admin.php"><span>Make New Admin</span></a></li>
                        </ul>
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