Name:
<input type="text" id="txtName" />
<br />
<input id="btnWrite" type="button" value="Write Cookie" onclick="WriteCookie()" />
<input id="btnRead" type="button" value="Read Cookie" onclick="ReadCookie()" />
<input id="btnDelete" type="button" value="Remove Cookie" onclick="RemoveCookie()" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnWrite").click(function () {
            $.cookie("Name", true,{expires: 7,path:'/'});
        });
        $("#btnRead").click(function () {
            alert($.cookie("Name"));
        });
        $("#btnDelete").click(function () {
            $.removeCookie("Name",{path:'/'})
        });
    });
</script>


My first commmit
My Second commmit


function m1
{
    echo "hello world";
}

function m2
{
    echo "eco world eco sky 00098";  
}


function m3
{
     echo "eco sky"; 	
}
