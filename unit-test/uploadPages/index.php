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

<!--        <script type="text/javascript" src="../../../utility/lib/lib-JQuery/jquery.js"></script>-->
        <script type="text/javascript" src="../../../utility/lib/lib-iui/iui/iui.js"></script> <!-- มันช่วยในการเปลี่ยน Page ได้นะจ๊ะ-->


        <script type="text/javascript" src="scripts/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/jquery.form.js"></script>

        <script type="text/javascript" >
            $(document).ready(function() { 
		
                $('#file1').live('change', function(){ 
                    //alert('555');
                    $("#preview").html('');
                    $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
                    $("#imageform").ajaxForm({
                        target: '#preview'
                    }).submit();
		
                });
            
            
                $("#upfile1").click(function () {
                    //alert('555666');
                    $("#file1").trigger('click');
                });
                
            }); 
            
            function ShowOld(a, b){
                iui.showPageById('home');
            }
        </script>

        <style>

            body
            {
                font-family:arial;
            }
            .preview
            {
                width:200px;
                border:solid 1px #dedede;
                padding:10px;
            }
            #preview
            {
                color:#cc0000;
                font-size:12px
            }

        </style>

    </head>
    <body onclick="console.log('Hello', event.target);">
        <div class="toolbar">
            <h1 id="pageTitle">QR-Code Plant</h1>
            <a id="backButton" class="button" href="#"></a>
            <a id="otherButton" class="button" href="#"></a>
        </div>



        <div id="home" title="HOME" class="panel" selected="true" style="height: 100%" >
            <a class="whiteButton" href="#upload">upload Page</a>
        </div>

        <div id="upload" title="ทดสอบ : อัพโหลดไฟล์" class="panel" style="height: 100%" otherButtonLabel="DONE" otherButtonHref="javascript:ShowOld(2367,146986,2)" otherButtonClass="blueButton">
            <div style="margin:auto;width:600px">
                <form id="imageform" method="post" enctype="multipart/form-data" action='upload.php'>
                    ทดสอบอัพโหลดไฟล์ :
                    <input type="file" name="myfile" id="file1" style="margin-left: -10000px"/>
                </form>
                <a class="whiteButton" id="upfile1">upload File</a>
                <div id='preview'></div>

            </div>
        </div>

    </body>
</html>

