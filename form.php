<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<a href="helloWorld.php">Form part</a>

<form  method="post" action="">
        <input type="text" name="name" class="input" placeholder="name">
        <br>
        <input type="tel" name="phone" class="input"  placeholder="Number">
        <input type="submit"  value="send">

    </form>
    <?php 
    $name= $_POST["name"];
    $tel=$_POST["phone"];

    echo <<<"hello"
    <h1>Hello Mr $name</h1>
    hello;

    ?>

</body>
</html>