<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="contact.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        
        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="message">Message</label>
        <textarea name="message" id="message" placeholder="Enter Your Message"></textarea>

        <input type="submit" name="submit" value="Send">
    </form>
</body>
</html>