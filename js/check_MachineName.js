function check_MachineName(myMachineID){
//    alert(myMachineID);
//    console.log(myMachineID);
    $.ajax({
        url:'./REST/checkMachineName.php',
        //data:{myUser:$('#username').val(), myPass:$('#password').val()},
        data:{paramMachineID:myMachineID},
        async:true,
        success:function(data){
            //alert(data);
            $('.MachineName_id').html(data);
            //iui.showPageById('manuals_id');

        }
    });
}