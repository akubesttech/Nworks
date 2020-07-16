<?php include('header.php');?>
<?php 
		//$user_query = mysql_query("select * from schoolsetuptd")or die(mysql_error());
												//	while($row = mysql_fetch_array($user_query)){
												//	$get_FormStatus = $row['RegNo'];
													//}
					$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
					switch ($view) {
                	case 'Our_institutions' :
		            $content    = 'o_institution.php';		
		            break;

	                case 'About' :
		            $content    = 'about_cms.php';		
		            break;
                    
                     case 'Need_More_Info' :
		            $content    = 'nminfo.php';		
		            break;
		            case 'Help' :
		            $content    = 'helps.php';		
		            break;
		            case 'Before_You_Start' :
		            $content    = 'get_started.php';		
		            break;
		         
		            case 'Application_Process' :
		            $content    = 'apply_pro.php';		
		            break;
		            case 'System_Availability' :
		            $content    = 's_avail.php';		
		            break;
		            case 'FAQ' :
		            $content    = 'faq.php';		
		            break;
		            
	                default :
		            $content    = 'home.php';
				
                            }
                     require_once $content;
				
				?>
				
				
<?php include('footer.php'); ?>