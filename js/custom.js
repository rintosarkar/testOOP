$(document).ready(function(){
    if($('#login').click(function(){

            var name = $('#name').val();
            var email = $('#email').val();
            var pass = $('#password').val();
            var sub =$('#login').val();
            alert(sub);
            // exit();
            /*$.post('classes/getValues.php',{
                    name:uname,
                    email:uemail,
                    pass:upass,
                    sub:submit
                },
                function(result){
                    alert(result);

                });*/ 

                $.post('classes/getValues.php',{
                name:name,
                email:email,
                pass:pass,
                sub:sub
            },
            function(result){
                // alert(name);
                // exit();
                alert(result);
                /*$('#mmName').val('');
                $('#meDate').val('');
                $('#mepName').val('');
                $('#mepPrice').val('');*/


            })//ajax end
        }));
});