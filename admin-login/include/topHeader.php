<?php
$objComm->authenticate($_COOKIE['username'],$_COOKIE['password']);
?>

<div class="topheader">
        <div class="left"> 
            <h1 class="logo"> <span> NET  </span>PRO  </h1>
            <span class="slogan">admin panel</span>
            
            <!--<div class="search">
            	<form action="" method="post">
                	<input type="text" name="keyword" id="keyword" value="Enter keyword(s)" />
                    <button class="submitbutton"></button>
                </form>
            </div>--><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
        	
            <div class="userinfo">
            	<!--<img src="images/thumbs/avatar.png" alt="" />-->
                <span><?=$_COOKIE['username']?></span>
            </div><!--userinfo-->
            
            <div class="userinfodrop">
            	<div class="avatar">
                	<!--<a href=""><img src="images/thumbs/avatarbig.png" alt="" /></a>-->
                    <div class="changetheme">
                    	Change theme: <br />
                    	<a class="default"></a>
                        <a class="blueline"></a>
                        <a class="greenline"></a>
                        <a class="contrast"></a>
                        <a class="custombg"></a>
                    </div>
                </div><!--avatar-->
				<div class="userdata">
                	<h4><?=$_COOKIE['username']?></h4>
                    <!--<span class="email"><?=$_COOKIE['email']?></span>-->
                    <ul>
                    	<!--<li><a href="editprofile.php?id=1">Edit Profile</a></li>-->
                        <!--<li><a href="#">Account Settings</a></li>-->
                        
                        <li><a href="logout.php">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
    	<ul class="headermenu">
        	<li class="current"><a href="welcome.php"><span class="icon icon-flatscreen"></span>Dashboard</a></li>
     <!--       <li><a href="#"><span class="icon icon-pencil"></span>Manage Blog</a></li>
            <li><a href="#"><span class="icon icon-message"></span>Messages</a></li>
            <li><a href="#"><span class="icon icon-chart"></span>Reports</a></li>  -->
        </ul>
        
       <?php /*<div class="headerwidget">
        	<div class="earnings">
            	<div class="one_half">
                	<h4>Today's Earnings</h4>
                    <h2>$640.01</h2>
                </div><!--one_half-->
                <div class="one_half last alignright">
                	<h4>Current Rate</h4>
                    <h2>53%</h2>
                </div><!--one_half last-->
            </div><!--earnings-->
        </div><!--headerwidget--> */ ?>
        
    </div><!--header-->