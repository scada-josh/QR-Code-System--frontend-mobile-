function checkLogin(){
    //alert($('#username').val());
    $.ajax({
        url:'./REST/check_login.php',
        data:{
            myUser:$('#username').val(), 
            myPass:$('#password').val(), 
            myMachineID:$('#myMachineID').val()
        },
        //async:true,
        success:function(data){
            //alert(data);
            //alert(data.substr(0, 7));
            if(data.substr(0, 7)=='success'){
                //alert(data);
                $.ajax({
                    url:'./REST/check_session.php',
                    success:function(data){
                        //alert(data);
                        if(data){
                            iui.showPageById('menu');
                        }            
                    }
                    
                });
            }else{
                alert('รหัสผ่านไม่ถูกต้อง');
            }

        }
    });
}
