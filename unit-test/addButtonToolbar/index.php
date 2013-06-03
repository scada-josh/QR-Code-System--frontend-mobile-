<?php
session_start();
if (isset($_SESSION['MachineID'])) {
    //session_destroy();
}
//session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
<!--        <title>iUI Demo Site</title>-->

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
        <link rel="icon" type="image/png" href="../../../utility/lib/lib-iui/iui/iui-favicon.png">

        <link rel="apple-touch-icon" href="../../../utility/lib/lib-iui/iui/iui-logo-touch-icon.png" />
        <link rel="stylesheet" href="../../../utility/lib/lib-iui/iui/iui.css" type="text/css" />
        <link rel="stylesheet" title="Default" href="../../../utility/lib/lib-iui/iui/t/default/default-theme.css"  type="text/css"/>
        <link rel="stylesheet" href="../../../utility/lib/lib-iui/css/iui-panel-list.css" type="text/css" />
        <style type="text/css">
            .panel p.normalText { text-align: left;  padding: 0 10px 0 10px; }
        </style>

<!--        <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-8634743-10'], ['_trackPageview']);
</script>
<script type="text/javascript">
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>-->

        <script type="text/javascript" src="../../../utility/lib/lib-JQuery/jquery.js"></script>
        <script type="text/javascript" src="../../../utility/lib/lib-iui/iui/iui.js"></script> <!-- มันช่วยในการเปลี่ยน Page ได้นะจ๊ะ-->
        
        <script type="text/javascript">
            $(function(){
                $('#backButton')
            });
            
            function ShowTitle(){
                var myHome = $("#home");
                if (myHome){
                    $("#pageTitle").html('QR-Code Plant');
                }
            }
        </script>

    </head>
    <body onclick="console.log('Hello', event.target);">
        
        <div class="toolbar">
            <h1 id="pageTitle">QR-Code Plant</h1>
            <a id="backButton" class="button" href="#" onclick="ShowTitle()"></a>
            <a id="otherButton" class="button" href="#"></a>
        </div>



        <div id="home" title="" class="panel" selected="true" style="height: 100%" >
            <a class="whiteButton" href="#screen1">Got Screen1</a>
            <a class="grayButton" href="page1.php">Link page1</a>
            <a class="redButton" href="#topic">topic</a>
            <a class="redButton" href="#password">password</a>
        </div>

        <ul id="screen1" title="Screen 11" >
            <li><a href="#screen2">Go to Screen #2</a></li>
        </ul>


        <div id="screen2" class="panel" title="Screen 2">
            
        </div>
        
       
        <div id="password" title="" class="panel" otherButtonLabel="Done" otherButtonHref="#topic" otherButtonClass="blueButton">
            ...
        </div>
        
        
        <ul id="topic" title="" otherButtonLabel="Reply"otherButtonHref="page1.php">
            Topic
        </ul>



    </body>
</html>

