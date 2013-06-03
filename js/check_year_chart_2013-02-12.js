function check_year_chart(){
    //alert('555');
    $.ajax({
        url:'./REST/list_year_chart.php',
        //data:{myUser:$('#username').val(), myPass:$('#password').val()},
        async:true,
        success:function(data){
            //alert(data);
            $('#chart_year').html(data);

            iui.showPageById('chart_year');

        }
    });
}