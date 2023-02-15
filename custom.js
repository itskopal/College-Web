// color change of nav header on scrolling
$(document).scroll(function (){
    $(".navbar").toggleClass("scroll", $(this).scrollTop() > $(".navbar").height());
})

// Create Account
function create_account() {
    $("#create_button").click(function (e) {
        e.preventDefault();
        console.log("Create Account Button Clicked");

        // Values
        var name = $("#create_name").val();
        var email = $("#create_email").val();
        var password = $("#create_password").val();
        var address = $("#create_address").val();
        var p_number = $("#create_p_number").val();

        //check
        // console.log(name);
        // console.log(email);
        // console.log(password);
        // console.log(address);
        // console.log(p_number);

        // Validation

        if (name == "") {
            $("#create_name_mess").html("<span class='text-danger font-weight-bold ml-2' style='font-size:15px;'>Enter Your Name</span>");
            $("#create_name").focus();
        } else if (email == "") {
            $("#create_email_mess").html("<span class='text-danger font-weight-bold ml-2' style='font-size:15px;'>Enter Your Email</span>");
            $("#create_email").focus();
        } else if (password == "") {
            $("#create_pass_mess").html("<span class='text-danger font-weight-bold ml-2' style='font-size:15px;'>Enter Your Password</span>");
            $(".create_password").focus();
        } else if (address == "") {
            $("#create_address_mess").html("<span class='text-danger font-weight-bold ml-2' style='font-size:15px;'>Enter Your Address</span>");
            $("#create_address").focus();
        } else if (p_number == "") {
            $("#create_p_number_mess").html("<span class='text-danger font-weight-bold ml-2' style='font-size:15px;'>Enter Your Phone Number</span>");
            $("#create_p_number").focus();
        } else {
            console.log("all set");

            //js object
            var custom_data = {
                name: name, email: email, password: password, address: address, p_number: p_number
            };  

            // Ajax Call
            $.ajax({
                url: "database/insert.php",
                method: "POST",
                dataType: "json",
                data: JSON.stringify(custom_data),
                success: function (data) {
                    // console.log(data);

                    // Small Validation
                    if (data == "yes") {
                        $("#create_main_message").html("<div class='alert alert-success mt-4  font-weight-bold text-center'>SuccessFully  Account Created ! Go And <a data-toggle='modal' class='text-primary' style='cursor:pointer;' data-target='#loginpopup' > login</a></div>");
                    } else if (data == "no") {
                        $("#create_main_message").html("<div class='alert alert-danger mt-4 font-weight-bold text-center'>Sorry SomeThing Went Wrong</div>");
                    }

                    // //Reset Form
                    // $("#create_form_id")[0].reset();

                }
            })
        }
    })
}
create_account();

// For Login Account
function login() {
    $("#login_button").click(function (e) {
        e.preventDefault();
        console.log("Login Button Clicked");

        var email = $("#login_email").val();
        var password = $("#login_password").val();

    

        if (email == "") {
            $("#login_email_mess").html("<small class='text-danger font-weight-bold ml-2' style='font-size:15px;'>Please Enter Your Email</small>");
            $("#login_email").focus();
        } else if (password == "") {
            $("#login_password_mess").html("<small class='text-danger font-weight-bold ml-2' style='font-size:15px;'>Please Enter Your Password</small>");
            $("#login_password").focus();
        } else {
            // console.log("All Done");
            var custom_data = {email:email, password:password};

            // Ajax Call
            $.ajax({
                url: "database/login.php",
                method: "POST",
                dataType: "json",
                data: JSON.stringify(custom_data),
                success: function (data) {
                    // console.log(data);
                    if(data == "yes"){
                        
                        $("#spinner").html("<div class='spinner-border text-success' role='status'></div>");

                        setTimeout(() => {
                            window.location.href = "index.php";
                        }, 2500);

                    
                    }else if(data == "no"){
                        $("#login_main").html("<div class='alert alert-danger font-weight-bold m-2 text-center'>Please Enter Valid Username or Password</div>");
                    }
                }
            })

        }

    })
}
login();