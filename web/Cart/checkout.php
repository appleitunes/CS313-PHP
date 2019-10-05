<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Check Out</title>
        <link rel="stylesheet" href="Css/checkout.css">
        <link rel="icon" type="image/png" href="Images/pokeball.jpg">
    </head>
    <body> 
        <h1 style="text-align:center;">Pokémon Center</h1>
        <hr><br>
        <div class="container">
            <a href="cart.php" id="check-out">
                <button>Back</button>
            </a>
            <form action="confirm.php" method="post">
                Full Name <input type="text" name="name"><br>
                Email <input type="text" name="email"><br>
                Address <input type="text" name="address"><br>
                City <input type="text" name="city"><br>
                State <input type="text" name="state"><br>
                Zip <input type="text" name="zip"><br>
                <hr><button type="submit" id="complete">Submit</button>
            </form>
        </div>
    </body>
</html>