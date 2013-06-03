Ext.setup({
    
    onReady: function() {

 Ext.regModel('User', {
             fields: [
                 {name: 'name',  type: 'string'},
                 {name: 'android',     type: 'int'},
                 {name: 'ipad',   type: 'int'},
                 {name: 'iphone',   type: 'int'}
//                 {name: 'alive', type: 'boolean', defaultValue: true}
//                    {name: 'name',  type: 'string'},
//                    {name: 'android',  type: 'string'},
//                    {name: 'ipad',   type: 'string'},
//                    {name: 'iphone',   type: 'string'}
] });
        //console.log(document.getElementById('myMachineAliasName_hidden_field').value);
var mystore = new Ext.data.Store({
         model: 'User',
         autoLoad: true,
         proxy: {
           type: 'ajax',
         url: './REST/error_percentage_data.php?paramMachineAliasName='+document.getElementById('myMachineAliasName_hidden_field').value,
           reader: {
               type: 'json',
               root: 'users'
           }
} });    
       
    

        var tapHandler = function(button, event) {
            //var txt = "User tapped the '" + button.text + "' button.";
            //Ext.getCmp('toolbartxt').update(txt);
            //alert('Hello');
            //history.back();
        };
        
        var buttonsGroup1 = [{
            text: 'กลับหน้าหลัก',
            ui: 'back',
            handler: tapHandler,
            position: 'left'
        }
//        ,{xtype: 'spacer'},{xtype:'textfield', value:'ทดสอบ Line Chart'},{xtype: 'spacer'}
    ];
    
    
  var myMachineName;  

        $.ajax({
            url:'./REST/checkMachineName.php',
            //data:{myUser:$('#username').val(), myPass:$('#password').val()},
            data:{paramMachineID:document.getElementById('MachineName_id').value},
            async:true,
            success:function(data){
                myMachineName = data;
                //alert(data);
                //$('#MachineName_name').html(data);

                //iui.showPageById('manuals_id');




        var chartPanel = new Ext.chart.Panel({
           //dockedItems: buttonsGroup1,
           title: 'กราฟแสดงสถิติ %Error'+" : "+myMachineName+" (ปี "+document.getElementById('myMachineID_hidden_field').value+")",
           fullscreen: true,
           //renderTo: Ext.get('chart_area'),
           height:500,





           items: {
                //cls: 'line1',
                theme: 'Demo',
                store: mystore,
                animate: true,
                shadow: true,
//                legend: {
//                    //position: 'right'
//                    position: 'bottom'
//                },
                axes: [{
                            type: 'Numeric',
                            minimum: 0,
                            maximum: 100,
                            position: 'left',
                            fields: ['iphone', 'android', 'ipad'],
                            title: 'สถิติ %Error',
                            minorTickSteps: 1
                       },{
                            type: 'Category',
                            position: 'bottom',
                            fields: ['name'],
                            title: 'เดือน'
                       }],
                series: [{
                            type: 'line',
                            highlight: {
                                size: 7,
                                radius: 7
                            },
                            //fill: true,
                            style: {
                                stroke: '#EF3038'
                                //etc...
                              },
                            smooth: true,
                            axis: 'left',
                            xField: 'name',
                            yField: 'iphone',
                            title: 'iPhone',
                            showMarkers: false
                        },{
                            type: 'line',
                            highlight: {
                                size: 7,
                                radius: 7
                            },
                            axis: 'left',
                            smooth: true,
                            xField: 'name',
                            yField: 'android',
                            title: 'Android'
                        },{
                            type: 'line',
                            highlight: {
                                size: 7,
                                radius: 7
                            },
                            axis: 'left',
                            smooth: true,
                            xField: 'name',
                            yField: 'ipad',
                            title: 'iPad',
                            showMarkers: false,
                            style: {
                                stroke: '#EF3038'
                                //etc...
                              }
                        }]
            }


        });  
        
                    }
        });
        
    } 
    
    

});