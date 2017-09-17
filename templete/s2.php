<?php
    
    isset($_GET['AccessType']) ? $AccessType = $_GET['AccessType']  : $AccessType = "pc"; 
    isset($_GET['no']) ? "" : $_GET['no'] = 1; 
    
    
    switch($_GET['no']){
        case 1 : $demo_no = "http://opencart.templatemela.com/OPC04/OPC040099/";
                 break;  
        case 2 : $demo_no = "http://opencart.templatemela.com/OPCADD/OPC005/";
                 break;   
        case 3 : $demo_no = "http://ocdemo.magikthemes.com/";
                 break;
        case 4 : $demo_no = "http://matida3.demo.towerthemes.com/";
                 break;   
                         
    }
    
    
    if($AccessType=="pc"){
?>
        <iframe src="<?php echo $demo_no; ?>" frameborder="0" style="width:100%; height:100%;margin-top:0px;" scrolling="yes"></iframe>
 <?php
    }else{
?>    
        <iframe src="<?php echo $demo_no; ?>" frameborder="0" style="width:414px; height:736px;margin-top:0px;" scrolling="yes"></iframe>
<?php    
    }
?>

