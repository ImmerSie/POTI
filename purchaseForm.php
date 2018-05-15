<html>
    <head>
        <title>Purchase Form</title>
        <link rel="stylesheet" href="shop.css">
        <script>
            function validateForm() {
                var name = document.forms["purchaseForm"]["name"].value;
                var address = document.forms["purchaseForm"]["address"].value;
                var state = document.forms["purchaseForm"]["state"].value;
                var country = document.forms["purchaseForm"]["country"].value;
                var email = document.forms["purchaseForm"]["email"].value;
                if (name === "" || address === "" || state === "" || country === "" || email === "") {
                    alert("All fields must be filled out");
                    return false;
                }
                else {
                    return checkEmail();
                }
            }
            
            function checkEmail() {
                var email = document.getElementById('submittedEmail');
                var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (!filter.test(email.value)) {
                    alert('Please provide a valid email address');
                    email.focus;
                    return false;
                }
                else {
                    return true;
                }
            }
        </script>
    </head>
    <body>
        <form name="purchaseForm" action="purchaseForm_submitted.php" onsubmit="return validateForm()" method="post">
            <table>
                <tr>
                    <td>Name:<span class="requiredInput">*</span></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Address:<span class="requiredInput">*</span></td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>State:<span class="requiredInput">*</span></td>
                    <td><input type="text" name="state"></td>
                </tr>
                <tr>
                    <td>Country:<span class="requiredInput">*</span></td>
                    <td><input type="text" name="country"></td>
                </tr>
                <tr>
                    <td>Email Address:<span class="requiredInput">*</span></td>
                    <td><input type="text" id="submittedEmail" name="email"></td>
                </tr>
                <tr>
                    <td><button type="submit" value="Submit">Purchase</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>

