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
        <link rel="icon" type="image/png" href="iui/iui-favicon.png">
        <link rel="icon" type="image/png" href="../utility/lib/lib-iui/iui/iui-favicon.png">

        <link rel="apple-touch-icon" href="../utility/lib/lib-iui/iui/iui-logo-touch-icon.png" />
        <link rel="stylesheet" href="../utility/lib/lib-iui/iui/iui.css" type="text/css" />
        <link rel="stylesheet" title="Default" href="../utility/lib/lib-iui/iui/t/default/default-theme.css"  type="text/css"/>
        <link rel="stylesheet" href="../utility/lib/lib-iui/css/iui-panel-list.css" type="text/css" />
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

        <script type="text/javascript" src="../utility/lib/lib-JQuery/jquery.js"></script>
        <script type="text/javascript" src="../utility/lib/lib-iui/iui/iui.js"></script> <!-- มันช่วยในการเปลี่ยน Page ได้นะจ๊ะ-->
        
<!--        <script type="text/javascript" src="./unit-test/uploadPages/scripts/jquery.min.js"></script>
        <script type="text/javascript" src="./unit-test/uploadPages/scripts/jquery.form.js"></script>-->
        
        <!-- ฟังก์ชัน ต่างๆ -->
        <script type="text/javascript" src="./js/checkLogin.js"></script>
        <script type="text/javascript" src="./js/check_Manual_files.js"></script>
        <script type="text/javascript" src="./js/check_forms_year_excel_files.js"></script>
        <script type="text/javascript" src="./js/check_forms_excel_files.js"></script>
        
        <script type="text/javascript" src="./js/about_upload_page/jquery.form.js"></script>
        <script type="text/javascript" src="./js/about_upload_page/script_upload_page.js"></script>
        
        <script type="text/javascript" src="./js/check_MachineName.js"></script>
        <script type="text/javascript" src="./js/check_year_chart.js"></script>
        
        <script type="text/javascript">
            function showPage_byID(paramPage_ID){
                iui.showPageById(paramPage_ID);
            }
        </script>
        
    </head>
    <body >
        <div class="toolbar">
            <h1 style="width: auto" id="pageTitle">ระบบบำรุงรักษาเครื่องจักร</h1>
            <a id="backButton" class="button" href="#"></a>
            <a id="otherButton" class="button" href="#"></a>
        </div>

        <div id="home" class="panel" selected="true" style="height: 100%" >
            <fieldset>
<!--                <p class="normalText" style="text-align: center"><b>ระบบบำรุงรักษาเครื่องจักร<br/><?php //echo $_REQUEST['m']   ?></b></p>-->
                <p class="normalText" style="text-align: center"><b>ชื่อเครื่องจักร : <span class="MachineName_id"></span><br/><?php //echo $_REQUEST['m'] ?></b></p>
            </fieldset>
            <h2>Login : เข้าสู่ระบบ</h2>
            <form id="targ-self" title="Target Self" class="panel" onsubmit="return confirm('Are you sure?');" target="_self" action="form-echo.gtpl" method="POST">
                <fieldset>
                    <div class="row">
                        <label>ชื่อผู้ใช้งาน :</label>
                        <input type="text" name="username" id="username" value="M0000001"/>
                    </div>
                    <div class="row">
                        <label>รหัสผ่าน:</label>
                        <input type="text" name="password" id="password" value="M0000001"/>
                    </div>
                    <input type="hidden" id="myMachineID" value="<?php echo $_REQUEST['m'] ?>" />
                </fieldset>
                <a class="whiteButton" type="button" onclick="checkLogin()">เข้าสู่ระบบ</a>
                <div class="spinner"></div>
            </form>
            <br/>
            <fieldset style="text-align: center">
                <img  src="../resource/<?php echo $_REQUEST['m'] ?>/Images/<?php echo $_REQUEST['m'] ?>.png" width="250px" />
            </fieldset>


            <h2>เกี่ยวกับระบบ</h2>
            <fieldset>
                <p class="normalText">ระบบบำรุงรักษาเครื่องจักรด้วย QR Code. ถูกพัฒนาขึ้นโดยความร่วมมือระหว่างสายงานผลิตฯ และสายงานเทคโนโลยีสารสนเทศ เพื่อให้การจัดเก็บข้อมูลเครื่องจักรเป็นระบบและสามารถนำมาวิเคราะห์หาแนวโน้มและประสิทธิภาพของเครื่องจักรได้</p>
                <p class="normalText">เวอร์ชั่น : QRCode-IT 0.2</p>
            </fieldset>

        </div>
        
<!-- Menu : Start here -->
        <div id="menu" class="panel" otherButtonLabel="Log Out" otherButtonHref="#home"  style="height: 100%" hideBackButton="true">
            
            <fieldset>
                <p class="normalText" style="text-align: center"><b>ชื่อเครื่องจักร : <span class="MachineName_id"></span><br/><?php //echo $_REQUEST['m'] ?></b></p>
            </fieldset>

            <h2>รายการเมนู</h2>
            <ul>
                <li><a onclick="check_forms_year_excel_files()">แบบฟอร์มการทำงาน</a></li>
                <li><a onclick="showUploadPage()">Upload File</a></li>
<!--                <li><a target="_blank" href="./error_percent_chart.php?m=<?php //echo $_REQUEST['m'] ?>">GRAPH</a></li>-->
                <li><a onclick="check_year_chart()">GRAPH</a></li>
<!--                <li><a href="./page1.php">Link page1</a></li>-->
                <li><a  onclick="check_Manual_files()" >คู่มือและเอกสารที่เกี่ยวข้อง</a></li>
            </ul>      
            <h2>เกี่ยวกับระบบ <?php //echo $_SESSION['MachineID'];  ?></h2>
            <fieldset>
                <p class="normalText">ระบบบำรุงรักษาเครื่องจักรด้วย QR Code. ถูกพัฒนาขึ้นโดยความร่วมมือระหว่างสายงานผลิตฯ และสายงานเทคโนโลยีสารสนเทศ เพื่อให้การจัดเก็บข้อมูลเครื่องจักรเป็นระบบและสามารถนำมาวิเคราะห์หาแนวโน้มและประสิทธิภาพของเครื่องจักรได้</p>
                <p class="normalText">เวอร์ชั่น : QRCode-IT 0.2</p>
            </fieldset>
        </div>
<!-- Menu : End here -->

<!-- CheckSheet Folder : Start here -->
        <div id="forms_year"  class="panel" style="height: 100%" otherButtonLabel="HOME" otherButtonHref="javascript:showPage_byID('menu')" otherButtonClass="blueButton">

        </div>
<!-- CheckSheet Folder : End here -->

<!-- CheckSheet : Start here -->
        <div id="forms"  class="panel" style="height: 100%" otherButtonLabel="HOME" otherButtonHref="javascript:showPage_byID('menu')" otherButtonClass="blueButton">

        </div>
<!-- CheckSheet : End here -->


<!-- Upload : Start here -->
        <div id="upload"  class="panel" style="height: 100%" otherButtonLabel="DONE" otherButtonHref="javascript:ShowOld(2367,146986,2)" otherButtonClass="blueButton">
            <div style="margin:auto;width:600px">
                <form id="imageform" method="post" enctype="multipart/form-data" action='../resource/upload.php'>
                    อัพโหลดไฟล์ :&nbsp;<span class="MachineName_id"></span>
                    <input type="file" name="myfile" id="file1" style="margin-left: -10000px"/>
                </form>
                <a class="whiteButton" id="upfile1">upload File</a>
                <div id='preview'></div>

            </div>
        </div>
<!-- Upload : Ehd here -->

<!-- Year Folder : Start here -->
        <div id="chart_year"  class="panel" style="height: 100%" otherButtonLabel="HOME" otherButtonHref="javascript:showPage_byID('menu')" otherButtonClass="blueButton">

        </div>
<!-- Year Folder : End here -->

<!-- Manual : Start here -->
        <div id="manuals_id" class="panel" style="height: 100%" otherButtonLabel="HOME" otherButtonHref="javascript:showPage_byID('menu')" otherButtonClass="blueButton">

        </div>
<!-- Manual : Ehd here -->

    </body>
    <script type="text/javascript">
        check_MachineName('<?php echo $_REQUEST['m'] ?>');
    </script>
</html>

