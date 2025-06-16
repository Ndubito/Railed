<!DOCTYPE html>
<html lang="en">
<head><script type="text/javascript" src="/___vscode_livepreview_injected_script"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body>
        <div class="container">
            <img src="/images/logo.png" alt="" class="logo">

            <form class="form">
                <h1>Create your account</h1>
                <p>Fill the form below to create an account</p>
                <div class="details">


                    <div class="name">
                        <div class="form-row">
                            <label for="name">First Name:</label> <br>
                            <input type="text" id="fname", name="fname" class="custom-input">
                        </div>
                        <div class="form-row">
                            <label for="name">Last Name:</label><br>
                            <input type="text" id="lname" name="lname" class="custom-input"><br>
                        </div>
                    </div>
                

                    <div class="email">
                        <div class="form-row">
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" class="custom-input"><br>
                        </div>
                    </div>
                        

                    <div class="password">
                        <div class="form-row">
                            <label for="password">Password:</label><br>
                            <input type="password" name="password" id="password" class="custom-input"><br>
                        </div>
                        <div class="form-row">
                            <label for="password">Password Confirmation:</label><br>
                            <input type="password" name="password-confirmation" id="password-confirmation" class="custom-input"><br>
                        </div>
                        

                    </div>
                </div>
                <p>We want you to know exactly how our sevice works and why we need your details.<br>
                Please confirm that you have read, understood and confirm the terms and conditions.</p><br>
                <label class="custom-checkbox">
                    <input type="checkbox" name="checkbox" id="checkbox">
                    <span class="checkmark"></span>
                    I have read, understood and accept the terms and conditions.
                </label>
                <br><br>

                <button class="custom-btn">Next</button>
            </form>

            <img src="/images/image3.png" alt="" class="form-image">
        </div>
</body>
</html>