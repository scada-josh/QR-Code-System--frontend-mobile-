function check_Manual_files(){
    //alert('555');
    $.ajax({
        url:'./REST/list_manual_files.php',
        //data:{myUser:$('#username').val(), myPass:$('#password').val()},
        async:true,
        success:function(data){
           // alert(data);
            $('#manuals_id').html(data);

            iui.showPageById('manuals_id');

        }
    });
}