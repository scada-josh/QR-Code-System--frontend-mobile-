function check_forms_year_excel_files(){
    //alert('555');
    $.ajax({
        url:'./REST/list_forms_year_excel_files.php',
        //data:{myUser:$('#username').val(), myPass:$('#password').val()},
        async:true,
        success:function(data){
            //alert(data);
            $('#forms_year').html(data);

            iui.showPageById('forms_year');

        }
    });
}