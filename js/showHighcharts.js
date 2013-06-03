var chart1;

function showHighcharts(chart_year, myMachineID){
    
    //iui.showPageById('chart_show_plotArea');
    //alert(chart_year +" : "+myMachineID);

    chart1 = new Highcharts.Chart({
        chart:{
            renderTo: 'chart_container',
            type:'spline',
            events: {
                load: function(){
                    
//                    // Kick off the loading screen
//                    this.showLoading("ระบบกำลังโหลดข้อมูล stock data ....");
//
//                    // Remove all the chart existing series
//                    while (this.series.length) {
//                        this.series[0].remove();
//                    }
//
//                    // Launch the stock query
//                    $.getJSON('./REST/simple-json.json',
//                        function(jsonData) {
//                            // parse JSON response here
//                            //console.log(jsonData);
//
//                            // Construct series data and add the series
//                            var seriesData = [];
//                            $.each(jsonData.rows, function(idx, data) {
//                                seriesData.push([ data.date, data.price ]);
//                            });
//
//
//                            var seriesOpts = {
//                                name: jsonData.name ,
//                                data: seriesData,
//                                // This is to stop Highcharts rotating the color
//                                // for the series
////                                color: chart1.options.colors[0],
////                                marker: {
////                                    symbol: chart1.options.symbols[0]
////                                }
//                            }
//
//                            console.log(seriesOpts);
//
//                            chart1.hideLoading();
//                            chart1.addSeries(seriesOpts, false);
//                            chart1.redraw();
//                            
//                            iui.showPageById('chart_show_plotArea');
//
//
//                        });
                        
                        
                        
//// Kick off the loading screen
//                    this.showLoading("ระบบกำลังโหลดข้อมูล stock data ....");
//
//                    // Remove all the chart existing series
//                    while (this.series.length) {
//                        this.series[0].remove();
//                    }
//
//                    // Launch the stock query
//                    $.getJSON('./REST/error_data_series.json',
//                        function(jsonData) {
//                            // parse JSON response here
//                            //console.log(jsonData);
//
//                            // Construct series data and add the series
//                            var seriesData = [];
//                            $.each(jsonData.rows, function(idx, data) {
//                                seriesData.push([ data.myDate, data.error_value ]);
//                            });
//
//
//                            var seriesOpts = {
//                                name: jsonData.name ,
//                                data: seriesData,
//                                // This is to stop Highcharts rotating the color
//                                // for the series
////                                color: chart1.options.colors[0],
////                                marker: {
////                                    symbol: chart1.options.symbols[0]
////                                }
//                            }
//
//                            console.log(seriesOpts);
//
//                            chart1.hideLoading();
//                            chart1.addSeries(seriesOpts, false);
//                            chart1.redraw();
//                            
//                            iui.showPageById('chart_show_plotArea');
//
//
//                        }); 
                        
                        
                        
                        
                        
//                    $.getJSON('./rest/simple-json-03.json',function(jsonData) {
//                        // parse JSON response here
//                        //console.log(jsonData);
//
//                        var categories = [];
//                        //var seriesData = [];
//                        $.each(jsonData.rows, function(idx, data) {
//                            categories.push(data.xAxisLabel);
//                        //seriesData.push(parseInt(this.count));
//                        });
//                        chart1.xAxis[0].setCategories(categories);
//                        //chart1.series[0].setData(seriesData);
//
//
//                        // Construct series data and add the series
//                        var seriesData = [];
//                        $.each(jsonData.rows, function(idx, data) {
//                            //seriesData.push([ data.date, data.price ]);
//                            seriesData.push([ data.xAxisLabel, data.price ]);
//			                	
//                        });
//
//
//                        var seriesOpts = {
//                            name: jsonData.name ,
//                            data: seriesData,
//                            // This is to stop Highcharts rotating the color
//                            // for the series
//                            color: chart1.options.colors[0],
//                            marker: {
//                                symbol: chart1.options.symbols[0]
//                            }
//                        }
//
//                        console.log(seriesOpts);
//
//                        chart1.hideLoading();
//                        chart1.addSeries(seriesOpts, false);
//                        chart1.redraw();
//                        
//                        iui.showPageById('chart_show_plotArea');
//
//
//                    });
                        
                        
                        
                        
                        
                    $.getJSON('./REST/error_data_series.php',{
                        paramChart_year:chart_year, 
                        paramMachineID:myMachineID
                    },function(jsonData) {
                        // parse JSON response here
                        //console.log(jsonData);

                        var categories = [];
                        //var seriesData = [];
                        $.each(jsonData.rows, function(idx, data) {
                            categories.push(data.myDate);
                        //seriesData.push(parseInt(this.count));
                        });
                        chart1.xAxis[0].setCategories(categories);
                        //chart1.series[0].setData(seriesData);


                        // Construct series data and add the series
                        var seriesData = [];
                        $.each(jsonData.rows, function(idx, data) {
                            //seriesData.push([ data.date, data.price ]);
                            seriesData.push([ data.myDate, parseFloat(data.error_value) ]);
			                	
                        });


                        var seriesOpts = {
                            name: jsonData.name ,
                            data: seriesData,
                            // This is to stop Highcharts rotating the color
                            // for the series
                            color: chart1.options.colors[0],
                            marker: {
                                symbol: chart1.options.symbols[0]
                            }
                        }

                        console.log(seriesOpts);

                        chart1.hideLoading();
                        chart1.addSeries(seriesOpts, false);
                        chart1.redraw();
                        
                        iui.showPageById('chart_show_plotArea');


                    });
                    
                    
                    
                    
                    
                    
                    
                    
                    
//                    $.getJSON('./REST/error_data_series.json',{
//                        paramChart_year:chart_year, 
//                        paramMachineID:myMachineID
//                    },
//                    function(jsonData) {
//                        
//                        console.log(jsonData);
//                        
//                        chart1.showLoading("ระบบกำลังโหลดข้อมูล stock data ....");
//
////                        var categories = [];
////                        $.each(jsonData.rows, function(idx, data) {
////                            categories.push(data.myDate);
////                        });
////                        chart1.xAxis[0].setCategories(categories);
//            
//                        // Construct series data and add the series
//                        var seriesData = [];
//                        $.each(jsonData.rows, function(idx, data) {
//                            seriesData.push([data.myDate, data.error_value ]);
//                            //seriesData.push(data.error_value);
//                            //seriesData.splice(seriesData.length,0,data.error_value);
//                        });
//                            
//                            //alert(seriesData);
//                            
//                        var seriesOpts = {
//                            name: jsonData.name ,
//                            data: seriesData
//                            //data: [1, 3, 6, 8, 4]
//                        }
//                        
//                        //alert(seriesOpts);
//
//                        chart1.hideLoading();
//                        chart1.addSeries(seriesOpts, false);
//                        chart1.redraw();
//                        
//                        iui.showPageById('chart_show_plotArea');
//
//                    });
                }
            }
        },
        title:{
            //text: 'My First Highcharts'
        },
        subtitle:{
            //text: 'ทดสอบการใช้งาน Highcharts'
        },
        xAxis: {
            //categories: ['01', '02', '03', '04', '05']
        },
        yAxis: {
            min:0,
            plotLines: [{ 
						label: {
							text: 'เกณฑ์ขั้นต่ำ',
							align: 'right',
							x: -130
						}, 
						color: 'blue',
						width: 2,
						value: 10,
						dashStyle: 'longdashdot',
						events: {
							click: function(e) {
								//alert('click');
							},
							mouseover: function(e) {
								//alert('mouseover');
							},
							mouseout: function(e) {
								//alert('mouseout');
							}
						}
					},{ 
						label: {
							text: 'เกณฑ์ขั้นสูง',
							align: 'right',
							x: -130
						},
						color: 'red',
						width: 2,
						value: 40,
						dashStyle: 'longdashdot'
					}],
        }
//        series: [{
//            name: 'First-series',
//            data:[1, 3, 6, 8, 4]
//        }]
    });
    
    
//    
//    
//    
//    
//    
//    $.getJSON('./REST/error_data_series.php',{paramChart_year:chart_year, paramMachineID:myMachineID},
//              function(jsonData) {
//        // parse JSON response here
//        //console.log(jsonData);
//
////            chart1.showLoading("ระบบกำลังโหลดข้อมูล stock data ....");
////            
////            //console.log(chart1.series.length);
////            
////            // Remove all the chart existing series
////            while (chart1.series.length) {
////                chart1.series[0].remove();
////            }
////
////            //console.log(jsonData.rows);
////            
////            // Construct series data and add the series
////            var seriesData = [];
////            $.each(jsonData.rows, function(idx, data) {
////                //console.log(idx);
////                seriesData.push([ data.myDate, data.error_value ]);
////            });
////
////            //console.log(seriesData);
////            
////            var seriesOpts = {
////                name: jsonData.name ,
////                data: seriesData
////            }
////            
////            
////            
////            chart1.hideLoading();
////            chart1.addSeries(seriesOpts, false);
////            chart1.redraw();
//
//
//            chart1.showLoading("ระบบกำลังโหลดข้อมูล stock data ....");
//
//            var categories = [];
//            $.each(jsonData.rows, function(idx, data) {
//                categories.push(data.myDate);
//            });
//            chart1.xAxis[0].setCategories(categories);
//            
//            // Construct series data and add the series
//            var seriesData = [];
//            $.each(jsonData.rows, function(idx, data) {
//                seriesData.push([ data.myDate, data.error_value ]);
//
//            });
//            
//            var seriesOpts = {
//                name: jsonData.name ,
//                data: seriesData
//            }
//
//            chart1.hideLoading();
//            chart1.addSeries(seriesOpts, false);
//            chart1.redraw();
//
//
////
////        var categories = [];
////        //var seriesData = [];
////        $.each(jsonData.rows, function(idx, data) {
////            categories.push(data.myDate);
////        //seriesData.push(parseInt(this.count));
////        });
////        chart1.xAxis[0].setCategories(categories);
////        //chart1.series[0].setData(seriesData);
////
////
////        // Construct series data and add the series
////        var seriesData = [];
////        $.each(jsonData.rows, function(idx, data) {
////            //seriesData.push([ data.date, data.price ]);
////            seriesData.push([ data.myDate, data.error_value ]);
////			                	
////        });
////
////
////        var seriesOpts = {
////            name: jsonData.name ,
////            data: seriesData,
////            // This is to stop Highcharts rotating the color
////            // for the series
////            color: chart1.options.colors[0],
////            marker: {
////                symbol: chart1.options.symbols[0]
////            }
////        }
////
////        console.log(seriesOpts);
////
////        chart1.hideLoading();
////        chart1.addSeries(seriesOpts, false);
////        chart1.redraw();
//
//
//    });
    
    
    
    
    
    
////    console.log(myMachineID);
//    $.ajax({
//        url:'./REST/error_data_series.php',
//        data:{paramChart_year:chart_year, paramMachineID:myMachineID},
////        async:true,
//        datatype: "json",
//        success:function(jsonData){
//                alert(jsonData.rows);
////            $('.MachineName_id').html(data);
////            //iui.showPageById('manuals_id');
//
//            chart1.showLoading("ระบบกำลังโหลดข้อมูล stock data ....");
//            
//            //console.log(chart1.series.length);
//            
//            // Remove all the chart existing series
//            while (chart1.series.length) {
//                chart1.series[0].remove();
//            }
//            
//            //console.log(jsonData.rows);
//            
//            // Construct series data and add the series
//            var seriesData = [];
//            $.each(jsonData.rows, function(idx, data) {
//                console.log(idx);
//                //seriesData.push([ data.date, data.error_value ]);
//            });
//
//
////            var seriesOpts = {
////                name: jsonData.name ,
////                data: seriesData
////            }
////            
////            
////            
////            chart1.hideLoading();
////            chart1.addSeries(seriesOpts, false);
////            chart1.redraw();
//            
//            
//            
//        }
//    });




    
    
    
}