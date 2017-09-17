<?php
    
    isset($_GET['AccessType']) ? $AccessType = $_GET['AccessType']  : $AccessType = "pc"; 
    isset($_GET['no']) ? "" : $_GET['no'] = 1; 
    
    
    switch($_GET['no']){
        case 1 : $demo_no = "https://demo.opencart.com/";
                 break; 
        case 2 : $demo_no = "http://multipurposethemes.com/opencartdemo/oc008/";
                 break;        
    }
    
    
    if($AccessType=="pc"){
?>
        <iframe src="<?php echo $demo_no; ?>" frameborder="0" style="width:100%; height:100%;margin-top:-55px;" scrolling="yes"></iframe>
 <?php
    }else{
?>    
        <iframe src="<?php echo $demo_no; ?>" frameborder="0" style="width:414px; height:736px;margin-top:-55px;" scrolling="yes"></iframe>
<?php    
    }
?>

