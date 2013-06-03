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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
        <title>Dialog</title>
        <link rel="stylesheet" href="../../../utility/lib/lib-iui/iui/iui.css" type="text/css" />
        <link rel="stylesheet" href="../../../utility/lib/lib-iui/iui/t/default/default-theme.css"  type="text/css"/>
        <script type="application/x-javascript" src="../../../utility/lib/lib-iui/iui/iui.js"></script>

        <link rel="stylesheet" href="../../../utility/lib/lib-iui/css/iui-panel-list.css" type="text/css" />

        
    </head>

    <body onclick="console.log('Hello', event.target);">

        <div class="toolbar">
            <h1 id="pageTitle"></h1>
<!--            <a class="button" href="#search">search</a>-->
            <a id="otherButton" class="button" href="#"></a>
        </div>

        <div id="screen1" title="Screen 1" class="panel" selected="true" otherButtonLabel="Search" otherButtonHref="#search" otherButtonClass="blueButton" style="height: 100%">
            <a class="whiteButton" href="#search">Show Search dialog</a>
        </div>

        <form id="search" title="Search" class="dialog" target="_self" name="formname" action="http://demo.iui-js.org/test/form-echo.gtpl" method="GET" style="height: 100%">
            <fieldset>
                <h1>ค้นหา</h1>
                <a class="button leftButton" type="cancel">Cancel</a>
                <a class="button blueButton" type="submit">Search</a>

                <label for="keyword">Search:</label>
                <input id="keyword" type="text" name="q" />
            </fieldset>
            <fieldset>
                <div style="background-color: red">
                    555
                </div>
            </fieldset>
        </form>

    </body>
</html>
