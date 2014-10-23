<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Forum Posting</title>
</head>
<body>
<?php // Script 5.3 - handle_post.php #2
/* This script receives five values from posting.html:
first_name, last_name, email, posting, submit */

// nl2br converts new lines in textarea to <br /> in html, preserving appearance of posted info.

//newlines can be inserted into strings by placing the newline character-- \n -- between double quotation marks

// Get the values from the $_POST array:
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = nl2br($_POST['posting']);

// Create a full name variable:
$name = $first_name . ' ' . $last_name;

//convert html tags to html entities (htmlentities) and strip tags (strip_tags)
$html_post = htmlentities($_POST['posting']);
$strip_post = strip_tags($_POST['posting']);

// Print a message:
print "<div>Thank you, $name, for your posting:
<p>Original: $posting</p>
<p>Entity: $html_post</p>
<p>Stripped: $strip_post</p></div>";

/* To turn newlines into breaks while still removing any html or php tags, apply nl2br() after strip_tags:
$posting = nl2br(strip_tags($_POST['posting'])); */

/* wordwrap() wraps a string to a certain number of characters */


?>
</body>
</html>