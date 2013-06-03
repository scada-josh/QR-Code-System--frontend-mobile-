function check_forms_excel_files(iYear){
    //alert(iYear);
    $.ajax({
        url:'./REST/list_forms_excel_files.php',
        //data:{myUser:$('#username').val(), myPass:$('#password').val()},
        data:{myYear:iYear},
        async:true,
        success:function(data){
            //alert(data);
            $('#forms').html(data);

            iui.showPageById('forms');

        }
    });
}