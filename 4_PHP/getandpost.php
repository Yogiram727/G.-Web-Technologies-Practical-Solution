In PHP, $_GET and $_POST are superglobals used to collect data from HTML forms. They handle data sent to the server via HTTP GET and POST methods, respectively. Here’s a detailed explanation with examples:

1. $_GET Function
Purpose: Collects data sent via the URL query string (i.e., data appended to the URL).
Method: Data is visible in the URL and is limited in size (generally up to 2000 characters).
Example

HTML Form

html
Copy code
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GET Example</title>
</head>
<body>
  <form action="get_example.php" method="get">
    Name: <input type="text" name="name"><br>
    Age: <input type="text" name="age"><br>
    <input type="submit">
  </form>
</body>
</html>


PHP Script (get_example.php)

<?php
  $name = $_GET['name']; // Collects 'name' value from URL
  $age = $_GET['age'];   // Collects 'age' value from URL

  echo "Name: " . htmlspecialchars($name) . "<br>";
  echo "Age: " . htmlspecialchars($age);
?>
Explanation:

$_GET['name']: Retrieves the value of the name parameter from the URL.
$_GET['age']: Retrieves the value of the age parameter from the URL.
htmlspecialchars(): Converts special characters to HTML entities to prevent XSS attacks.
URL After Submission: get_example.php?name=John&age=30

2. $_POST Function
Purpose: Collects data sent via the HTTP POST method.
Method: Data is sent in the request body, not visible in the URL, and can handle larger amounts of data.
Example

HTML Form

Copy code
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>POST Example</title>
</head>
<body>
  <form action="post_example.php" method="post">
    Name: <input type="text" name="name"><br>
    Age: <input type="text" name="age"><br>
    <input type="submit">
  </form>
</body>
</html>



PHP Script (post_example.php)

<?php
  $name = $_POST['name']; // Collects 'name' value from the form
  $age = $_POST['age'];   // Collects 'age' value from the form

  echo "Name: " . htmlspecialchars($name) . "<br>";
  echo "Age: " . htmlspecialchars($age);
?>
Explanation:

$_POST['name']: Retrieves the value of the name parameter from the form.
$_POST['age']: Retrieves the value of the age parameter from the form.
htmlspecialchars(): Converts special characters to HTML entities to prevent XSS attacks.
Summary
$_GET: Used to retrieve data sent via URL query strings; data is visible and limited in size.
$_POST: Used to retrieve data sent via the HTTP POST method; data is not visible in the URL and can handle larger amounts of data.
Both methods are essential for handling form data in PHP, and the choice between them depends on the use case, data sensitivity, and size constraints.