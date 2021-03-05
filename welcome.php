<!-- <!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <title>B3W2L2</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
        <body>
            <div id="container">
                <h1>B3W2L1</h1><br>
                <form action="welcome.php" method="GET">
                    <label for="textInput">Name: </label><br>
                    <input type="text" id="textInput" name="txtInput"><br>
                    <br>
                    <label for="emailInput">Email: </label><br>
                    <input type="email" id="emailInput" name="mailInput"><br>
                    <br>
                    <input type="submit" value="submit" id="button" name="submit">  
                </form>
                <h1>De ingevulde gegevens zijn:</h1>
                <?php 
                    echo nl2br ("Naam: " . $_GET['txtInput'] . "\n" . "Emailadres: " . $_GET['mailInput']);
                ?>
            </div>
        </body>
</html> -->


<!-- <!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <title>B3W2L2</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
        <body>
            <div id="container">
                <h1>B3W2L1</h1><br>
                <form action="welcome.php" method="POST">
                    <label for="textInput">Name: </label><br>
                    <input type="text" id="textInput" name="txtInput"><br>
                    <br>
                    <label for="emailInput">Email: </label><br>
                    <input type="email" id="emailInput" name="mailInput"><br>
                    <br>
                    <input type="submit" value="submit" id="button" name="submit">  
                </form>
                <h1>De ingevulde gegevens zijn:</h1>
                <?php 

                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    echo nl2br ("Naam: " . $_POST['txtInput'] . "\n" . "Emailadres: " . $_POST['mailInput']);
                }else{}
                ?>
            </div>
        </body>
</html> -->