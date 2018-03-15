<html>
<head>

</head>
<body>
<?php
    echo "Hi";
    echo htmlspecialchars($_POST['name']) <br />;
    echo "Thanks for taking your time to look through Music Box, and for sending us a message!" <br />;
    echo "We will get to your message soon and send you a reply at ";
    echo htmlspecialchars ($_POST['email']);
    echo " once we can!" <br />;
?>

</body>
</html>


