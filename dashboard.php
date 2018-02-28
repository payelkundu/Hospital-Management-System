<?php
 require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Free Bootstrap Template</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
	<!--header start-->
	<div class="row">
    	<div class="col-sm-12">
        	<div class="header bg-white">            		
            			<div class="logo"><a href="#" target="_blank">Hospital M S</a></div>
						<p style="color:green"><span style="color:red">Welcome</span> <?php echo $_SESSION['email']; ?>!</p>
                		<div class="ad-block"></div>            	
            </div>
        </div>
    </div>
    
    <!--sidebar and content-->
  	<div class="row">
    	<!--left sidebar-->
		<div class="col-sm-2">
        	<div class="left-sidebar bg-white">
            	           	
            </div>
        </div>                
        <div class="col-sm-8">
        	
            <!--main content-->           
            <div class="row">
            	<div class="col-sm-12">
                	<div class="main-content bg-white">
					
                    	<div class="row">
            				<div class="col-sm-12">
                				<div class="ad-block"></div>
																
                			</div>
                		</div>
                    </div>
                </div>
            </div>
            
        </div>        
        <!--right sidebar-->   
        <div class="col-sm-2">
        	ffffffffffff
        </div> 
  	</div>
        
    <!--footer start-->
    <div class="row">
    	<div class="col-sm-12">
        	<div class="footer bg-white">
            	<div class="copyright">
                	<p align="center" style="padding-top:10px;">Copyright &copy; H.M.S 2018 &nbsp;&nbsp;&nbsp;<span style="color:#CC0033">contact:<a href="https://www.facebook.com/payel.kundu.710">facebook</a></span></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
