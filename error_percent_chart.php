<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>กราฟแสดง % Error</title>

        <!-- Setting Sencha Touch -->
        <link href="../utility/lib/lib-SenchaTouch/sencha-touch-1.1.1/resources/css/sencha-touch.css" rel="stylesheet" type="text/css" />
        <script src="../utility/lib/lib-SenchaTouch/sencha-touch-1.1.1/sencha-touch-debug.js" type="text/javascript"></script>
        
<!--         Setting Sencha Touch Chart-->
        <script src="../utility/lib/lib-SenchaTouch/touch-charts-1.0.0-gpl/touch-charts/touch-charts-debug.js" type="text/javascript"></script>
        <link href="../utility/lib/lib-SenchaTouch/touch-charts-1.0.0-gpl/touch-charts/resources/css/touch-charts-demo.css" rel="stylesheet" type="text/css" />
        
        <script type="text/javascript" src="../utility/lib/lib-JQuery/jquery.js"></script>
        
        <script src="app.js" type="text/javascript"></script>
        <script src="./js/check_MachineName.js" type="text/javascript"></script>
    </head>
    <body>
        

        
        <input type="hidden" id="myMachineID_hidden_field" value="<?php echo $_REQUEST['year_mn'] ?>"/>
        <input type="hidden" id="myMachineAliasName_hidden_field" value="<?php echo $_REQUEST['m'].'_'.$_REQUEST['year_mn'] ?>"/>
        <input type="hidden" id="MachineName_id" value="<?php echo $_REQUEST['m']?>"/>
        <input type="hidden" id="MachineName_name" value=""/>

        <script type="text/javascript">
            
//            $.ajax({
//                url:'./REST/checkMachineName.php',
//                //data:{myUser:$('#username').val(), myPass:$('#password').val()},
//                data:{paramMachineID:document.getElementById('MachineName_id').value},
//                async:true,
//                success:function(data){
//                    alert(data);
//                    $('#MachineName_name').html(data);
//
//                    //iui.showPageById('manuals_id');
//
//                }
//            });
            
        </script>
        
        <div style="margin: auto;">
<!--            <div id="chart_area" style="margin: auto;width: 500px; height: 500px"></div>-->
            <div id="chart_area" style="margin: auto"></div>
        </div>
        
        
    </body>

</html>
