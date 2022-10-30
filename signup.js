$(document).ready(function() {
    $('#signupform').submit(function(e) {
        e.preventDefault();
        console.log("form submitted");
        $.ajax({
            type: "POST",
            url: 'signup_ajax.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
                if (jsonData.success == "1")
                {
                    // alert('form ok')
                    location.href = 'login.html';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           }
       }); 
     });
});