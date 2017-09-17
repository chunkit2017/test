<?php
    
    isset($_GET['AccessType']) ? $AccessType = $_GET['AccessType']  : $AccessType = "pc"; 
    isset($_GET['no']) ? "" : $_GET['no'] = 1; 
    
    
    switch($_GET['no']){
        case 1 : $demo_no = "https://demo.opencart.com/";
                 $margin = "-55px";  
                 $scrolling = "yes";  
                 $price = "2";
                 break; 
        case 2 : $demo_no = "http://opencart.templatemela.com/OPC04/OPC040099/";
                 $margin = "0px";
                 $scrolling = "yes"; 
                 $price = "3";
                 break;      
        case 3 : $demo_no = "http://multipurposethemes.com/opencartdemo/oc008/";
                 $margin = "-55px";
                 $scrolling = "yes"; 
                 $price = "3,5";
                 break;
        case 4 : $demo_no = "http://opencart.templatemela.com/OPCADD/OPC005/";
                 $margin = "-55px";
                 $scrolling = "yes"; 
                 $price = "3,5";
                 break;   
        case 5 : $demo_no = "http://ocdemo.magikthemes.com/";
                 $margin = "-55px";
                 $scrolling = "yes"; 
                 $price = "3,5";
                 break;
        case 6 : $demo_no = "http://matida3.demo.towerthemes.com/";
                 $margin = "-55px";
                 $scrolling = "yes"; 
                 $price = "4";
                 break;                    
        case 7 : $demo_no = "https://www.templatemonster.com/demo/64111.html";
                 $margin = "-60px";
                 $scrolling = "no"; 
                 $price = "4";
                 break;    
        case 8 : $demo_no = "https://www.templatemonster.com/demo/57928.html";
                 $margin = "-60px";
                 $scrolling = "no"; 
                 $price = "4";
                 break;
        case 9 : $demo_no = "https://www.templatemonster.com/demo/54691.html";
                 $margin = "-60px";
                 $scrolling = "no"; 
                 $price = "4";
                 break;         
        case 10 : $demo_no = "https://www.templatemonster.com/demo/52528.html";
                $margin = "-60px";
                $scrolling = "no";
                $price = "4"; 
                break;             
    }
?>   

<html>
<head>
    <title>Web Sample <?= $_GET['no']; ?> - <?= $pricec; ?> </title>
</head>
 
<?php    
    if($AccessType=="pc"){
?>
        <iframe src="<?php echo $demo_no; ?>" frameborder="0" style="width:100%; height:100%;margin-top:<?= $margin;  ?>;" scrolling="<?= $scrolling ?>"></iframe>
 <?php
    }else{
?>    
        

        <iframe src="<?php echo $demo_no; ?>" frameborder="0" style="width:414px; height:736px;margin-top:<?= $margin;  ?>;" scrolling="<?= $scrolling ?>"></iframe>

<?php    
    }
?>

</html>