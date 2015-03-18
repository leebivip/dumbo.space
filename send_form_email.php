<?php
/* Set e-mail recipient */
$myemail = "rent@dumbo.space";

/* Check all form inputs using check_input function */
$full_name = check_input($_POST['full_name'], "Please enter your full name (first and last)");
$email = check_input($_POST['email']);
$telephone = check_input($_POST['telephone'], "Please enter your telephone number");
$comments = check_input($_POST['comments'], "Please write your message");
$subject = "Dumbo Roof Deck rental inquiry";

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("E-mail address not valid");
}
/* Let's prepare the message for the e-mail */
$comments = "

Name: $full_name
E-mail: $email
Telephone: $telephone
Comments: $comments

";

/* Send the message using mail() function */
mail($myemail, $subject, $telephone, $comments);

/* Redirect visitor to the thank you page */
header('Location: thanks.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<body>

<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>

</body>
</html>
<?php
exit();
}
?>