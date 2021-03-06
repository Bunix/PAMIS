<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="uploads/logo.png"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>	
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>

        <!-- PERSONNEL -->
        <li class="<?php
        if ($page_name == 'personnel_add' ||
                $page_name == 'personnel_bulk_add' ||
                $page_name == 'personnel_information' ||
                $page_name == 'personnel_marksheet')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo get_phrase('personnel'); ?></span>
            </a>
            <ul>
            	<!-- SEARCH PERSONNEL -->
            	<li class="<?php if ($page_name == 'search_personnel') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/search_personnel">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('search_personnel'); ?></span>
                    </a>
                </li>
                <!-- personnel ADMISSION -->
                <li class="<?php if ($page_name == 'personnel_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/personnel_add">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('add_personnel'); ?></span>
                    </a>
                </li>
                <!-- SLL -->
                <li class="<?php if ($page_name == 'SLL') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/sll">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('s_l_l'); ?></span>
                    </a>
                </li>
                <!-- AFPOS -->
                <li class="<?php if ($page_name == 'afpos') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/afpos">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('afpos'); ?></span>
                    </a>
                </li>
                <!-- OFFICER -->
                <li class="<?php if ($page_name == 'officer') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/officer">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('officer'); ?></span>
                    </a>
                </li>
                <!-- EP -->
                <li class="<?php if ($page_name == 'enlisted') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/enlisted">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('enlisted'); ?></span>
                    </a>
                </li>
                <!-- TRAINEE -->
                <li class="<?php if ($page_name == 'trainee') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/trainee">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('trainee'); ?></span>
                    </a>
                </li>
                <!-- Civ Employee -->
                <li class="<?php if ($page_name == 'civ_employee') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/civ_employee">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('civilian_employee'); ?></span>
                    </a>
                </li>



                <!-- personnel BULK ADMISSION -->
                <!--li class="<?php if ($page_name == 'personnel_bulk_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/personnel_bulk_add">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('admit_bulk_personnel'); ?></span>
                    </a>
                </li-->

                <!-- personnel INFORMATION -->
                <li class="<?php if ($page_name == 'personnel_information' || $page_name == 'personnel_marksheet') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('personnel_information'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'personnel_information' && $page_name == 'personnel_marksheet' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/personnel_information/<?php echo $row['class_id']; ?>">
                                    <span><?php echo get_phrase('class'); ?> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

            </ul>
        </li>
		
		<!-- LOGISTICS -->
        <li class="<?php
        /*if ($page_name == 'logistics' ||
                $page_name == 'search_logistics'
                $page_name == 'mobility'
                $page_name == 'ammo'
                $page_name == 'firepower')
            echo 'opened active has-sub';*/
        ?> ">
            <a href="#">
                <i class="fa fa-briefcase"></i>
                <span><?php echo get_phrase('logistics'); ?></span>
            </a>
            <ul>
                <!-- mobility -->
                <li class="<?php if ($page_name == 'search') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/search_logistics">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('search'); ?></span>
                    </a>
                </li>
                <!-- mobility -->
                <li class="<?php if ($page_name == 'mobility') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/mobility">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('mobility'); ?></span>
                    </a>
                </li>
                
                <!-- ammo -->
                <li class="<?php if ($page_name == 'ammo') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/ammo">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('ammo'); ?></span>
                    </a>
                </li>
                <!-- firepower -->
                <li class="<?php if ($page_name == 'firepower') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/firepower">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('firepower'); ?></span>
                    </a>
                </li>
            </ul>
        </li>
		<!-- UNIT -->
        <li class="<?php
        if ($page_name == 'unit_add' ||
                $page_name == 'unit_description_add')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-home"></i>
                <span><?php echo get_phrase('unit'); ?></span>
            </a>
            <ul>
            	<!-- UNIT DESCRIPTION -->
            	<li class="<?php if ($page_name == 'unit_description_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/unit_description">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('add_unit_description'); ?></span>
                    </a>
                </li>
				
				<!-- UNIT -->
            	<li class="<?php if ($page_name == 'unit_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/unit_name">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('add_unit'); ?></span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- TRAINING -->
        <li class="<?php
        /*if ($page_name == 'search_training' ||
                $page_name == 'schools'
                $page_name == 'courses')
            echo 'opened active has-sub';*/
        ?> ">
            <a href="#">
                <i class="fa fa-refresh"></i>
                <span><?php echo get_phrase('training'); ?></span>
            </a>
            <ul>
                <!-- UNIT DESCRIPTION -->
                <li class="<?php if ($page_name == 'search_training') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/search_training">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('search_training'); ?></span>
                    </a>
                </li>
                
                <!-- UNIT -->
                <li class="<?php if ($page_name == 'schools') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/schools">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('schools'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'courses') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/courses">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('courses'); ?></span>
                    </a>
                </li>
            </ul>
        </li>



        <!-- TEACHER -->
        <!--li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/teacher">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('teacher'); ?></span>
            </a>
        </li-->

        <!-- PARENTS -->
        <!--li class="<?php if ($page_name == 'parent') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/parent">
                <i class="entypo-user"></i>
                <span><?php echo get_phrase('parents'); ?></span>
            </a>
        </li-->

        <!-- PAMUS -->
        <!--li class="<?php
        if ($page_name == 'pamus' ||
                $page_name == 'unit')
            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-flow-tree"></i>
                <span><?php echo get_phrase('PAMUS'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'pamus') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/pamus">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_pamus'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'unit') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/unit">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_unit'); ?></span>
                    </a>
                </li>
            </ul>
        </li-->

        <!-- SUBJECT -->
        <!--li class="<?php if ($page_name == 'subject') echo 'opened active'; ?> ">
            <a href="#">
                <i class="entypo-docs"></i>
                <span><?php echo get_phrase('subject'); ?></span>
            </a>
            <ul>
                <?php
                $classes = $this->db->get('class')->result_array();
                foreach ($classes as $row):
                    ?>
                    <li class="<?php if ($page_name == 'subject' && $class_id == $row['class_id']) echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>index.php?admin/subject/<?php echo $row['class_id']; ?>">
                            <span><?php echo get_phrase('class'); ?> <?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li-->

        <!-- CLASS ROUTINE -->
        <!--li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/class_routine">
                <i class="entypo-target"></i>
                <span><?php echo get_phrase('class_routine'); ?></span>
            </a>
        </li-->

        <!-- DAILY ATTENDANCE -->
        <!--li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manage_attendance/<?php echo date("d/m/Y"); ?>">
                <i class="entypo-chart-area"></i>
                <span><?php echo get_phrase('daily_attendance'); ?></span>
            </a>

        </li-->

        <!-- EXAMS -->
        <!--li class="<?php
        if ($page_name == 'exam' ||
                $page_name == 'grade' ||
                $page_name == 'marks' ||
                    $page_name == 'exam_marks_sms' ||
                        $page_name == 'tabulation_sheet')
                            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-graduation-cap"></i>
                <span><?php echo get_phrase('exam'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'exam') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/exam">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('exam_list'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'grade') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/grade">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('exam_grades'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'marks') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/marks">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_marks'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'exam_marks_sms') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/exam_marks_sms">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('send_marks_by_sms'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'tabulation_sheet') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/tabulation_sheet">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('tabulation_sheet'); ?></span>
                    </a>
                </li>
            </ul>
        </li-->

        <!-- PAYMENT -->
        <!-- <li class="<?php //if ($page_name == 'invoice') echo 'active'; ?> ">
            <a href="<?php //echo base_url(); ?>index.php?admin/invoice">
                <i class="entypo-credit-card"></i>
                <span><?php //echo get_phrase('payment'); ?></span>
            </a>
        </li> -->

        <!-- ACCOUNTING -->
        <!--li class="<?php
        if ($page_name == 'income' ||
                $page_name == 'expense' ||
                    $page_name == 'expense_category' ||
                        $page_name == 'personnel_payment')
                            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-suitcase"></i>
                <span><?php echo get_phrase('accounting'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'personnel_payment') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/personnel_payment">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('create_personnel_payment'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'income') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/income">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('personnel_payments'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/expense">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('expense'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/expense_category">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('expense_category'); ?></span>
                    </a>
                </li>
            </ul>
        </li-->

        <!-- LIBRARY -->
        <!--li class="<?php if ($page_name == 'book') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/book">
                <i class="entypo-book"></i>
                <span><?php echo get_phrase('library'); ?></span>
            </a>
        </li-->

        <!-- TRANSPORT -->
        <!--li class="<?php if ($page_name == 'transport') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/transport">
                <i class="entypo-location"></i>
                <span><?php echo get_phrase('transport'); ?></span>
            </a>
        </li-->

        <!-- DORMITORY -->
        <!--li class="<?php if ($page_name == 'dormitory') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/dormitory">
                <i class="entypo-home"></i>
                <span><?php echo get_phrase('dormitory'); ?></span>
            </a>
        </li-->

        <!-- NOTICEBOARD -->
        <li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/noticeboard">
                <i class="entypo-doc-text-inv"></i>
                <span><?php echo get_phrase('noticeboard'); ?></span>
            </a>
        </li>

        <!-- MESSAGE -->
        <!--li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/message">
                <i class="entypo-mail"></i>
                <span><?php echo get_phrase('message'); ?></span>
            </a>
        </li-->

        <!-- SETTINGS -->
        <li class="<?php
        if ($page_name == 'system_settings' ||
                $page_name == 'manage_language' ||
                    $page_name == 'sms_settings')
                        echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-lifebuoy"></i>
                <span><?php echo get_phrase('settings'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'system_settings') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/system_settings">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('general_settings'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'sms_settings') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/sms_settings">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('sms_settings'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/manage_language">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('language_settings'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manage_profile">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>

    </ul>

</div>