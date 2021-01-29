<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Type Social Media Clone</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="header"></div>
    <div class="main">
        <div class="left-side">
            <img src="assets/img/facebookSign.png" alt="">
        </div>
        <div class="right-side">
            <div class="error"></div>
            <h1 style="color: #212121;">Create an account</h1>
            <div style="color: #212121; font-size:20px;">It's free and always will be</div>
            <form action="register.php" method="POST" name="user-sign-up">
                <div class="sign-up-form">
                    <div class="sign-up-name">
                        <input type="text" name="first-name" id="first-name" class="text-field" placeholder="First Name">
                        <input type="text" name="last-name" id="last-name" class="text-field" placeholder="Last Name">
                    </div>
                    <br>
                    <div class="sign-up-email-user">
                        <input type="email" name="email" id="email" class="text-field" placeholder="Email">
                        <input type="text" name="username" id="username" class="text-field" placeholder="Username">
                    </div>
                    <div class="sign-wrap-mobile">
                        <input type="text" name="mobile" id="mobile" class="text-input" placeholder="Mobile number">
                    </div>
                    <br>
                    <div class="sign-up-password">
                        <input type="password" name="password" id="password" class="text-field" placeholder="Password">
                        <input type="password" name="confirm-password" id="confirm-password" class="text-field" placeholder="Confirm Password">
                    </div>
                    <div class="sign-up-birthday">
                        <div class="bday">Birthday</div>
                        <div class="form-birthday">
                            <select name="birth-month" id="months" class="select-body"></select>
                            <select name="birth-day" id="days" class="select-body"></select>
                            <select name="birth-year" id="years" class="select-body"></select>
                        </div>
                    </div>
                    <div class="gender-wrap">
                        <input type="radio" name="gen" id="male" value="male" class="m0">
                        <label for="male" class="gender">Male</label>
                        <input type="radio" name="gen" id="fem" value="female" class="m0">
                        <label for="fem" class="gender">Female</label>
                        <input type="radio" name="gen" id="irns" value="irns" class="m0">
                        <label for="irns" class="gender">I'd rather not say</label>
                    </div>
                    <div class="term">
                        By clicking Register, you agree to our terms and conditions, Data, Cookie, and Privacy policies. You may receive SMS notifications from us and can opt out at any time.
                    </div>
                    <input type="submit" value="Register" class="sign-up">
                </div>
            </form>
        </div>
    </div>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script>
    for (i = new Date().getFullYear(); i > 1900; i--) {
    //    2019,2018, 2017,2016.....1901
    $("#years").append($('<option/>').val(i).html(i));
    }
    for (i = 1; i < 13; i++) {
        $('#months').append($('<option/>').val(i).html(i));
    }

    updateNumberOfDays();

    function updateNumberOfDays() {
        $('#days').html('');
        month = $('#months').val();
        year = $('#years').val();
        days = daysInMonth(month, year);
        for (i = 1; i < days + 1; i++) {
            $('#days').append($('<option/>').val(i).html(i));
        }
    }

    $('#years, #months').on('change', function() {
        updateNumberOfDays();
    })

    function daysInMonth(month, year) {
        return new Date(year, month, 0).getDate();
    }
</script>
</body>
</html>