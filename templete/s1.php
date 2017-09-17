<?php
    
    isset($_GET['AccessType']) ? $AccessType = $_GET['AccessType']  : $AccessType = "pc"; 
    isset($_GET['no']) ? "" : $_GET['no'] = 1; 
    
    
    switch($_GET['no']){
        case 1 : $demo_no = "64111";
                 break;    
        case 2 : $demo_no = "57928";
                 break;
        case 3 : $demo_no = "54691";
                 break;         
        case 4 : $demo_no = "52528";
                 break;           
    }
    
    
    if($AccessType=="pc"){
?>
        <iframe src="https://www.templatemonster.com/demo/<?php echo $demo_no; ?>.html" frameborder="0" style="width:100%; height:100%;margin-top:-60px;" scrolling="no"></iframe>
 <?php
    }else{
?>    
        <iframe src="https://www.templatemonster.com/demo/<?php echo $demo_no; ?>.html" frameborder="0" style="width:414px; height:736px;margin-top:-60px;" scrolling="no"></iframe>
<?php    
    }
?>

