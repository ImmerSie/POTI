<html>
    <head>
        <title>Submitted Form</title>
        <link rel="stylesheet" href="shop.css">
        <script>
        </script>
    </head>
    <body>
        <p>
            <?php
                echo "Name: ".$_REQUEST['name']."<br>";
                echo "Address: ".$_REQUEST['address']."<br>";
                echo "State: ".$_REQUEST['state']."<br>";
                echo "Country: ".$_REQUEST['country']."<br>";
                echo "Email Address: ".$_REQUEST['email']."<br>";
                echo "A confirmation email has been sent to ".$_REQUEST['email']."<br>";
                
                $to = $_REQUEST['email'];
                $subject = "Order Placed";
                $message = "Hello ".$_REQUEST['name'].", your order has been placed and will be delivered to ".$_REQUEST['address']." ".$_REQUEST['state']." ".$_REQUEST['country'];
                $headers = "From: admin@onlinegrocerystore.com";
                mail($to, $subject, $message, $headers);
            ?>
        </p>
    </body>
</html>