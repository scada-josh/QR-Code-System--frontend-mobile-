$(document).ready(function() { 
		
    $('#file1').live('change', function(){ 
        //alert('555 change');
        $("#preview").html('');
        $("#preview").html('<img style="width:100%" src="./images/loader.gif" alt="Uploading...."/>');
        $("#imageform").ajaxForm({
            target: '#preview'
        }).submit();
	
        
    });
            
            
    $("#upfile1").click(function () {
        //alert('555 upfile1');
        $("#file1").trigger('click');
        $("#file1").val('');
    });
                
}); 
            
function ShowOld(a, b){
    iui.showPageById('menu');
}

function showUploadPage(){
    $("#preview").html('');
    iui.showPageById('upload');
}