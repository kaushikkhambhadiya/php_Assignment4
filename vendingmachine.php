<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vending Machine</title>
</head>
    
<body>
    
    <h1>Vending Machine</h1>    
    
    <form action="vendingmachine.php" method="post">
    
        <label>Choose snack from the list :</label><br><br>
        <input type="radio" id="chocolate" name="snack" value="chocolate">
        <label for="chocolate">Chocolate Bars $1.25</label><br>
        <input type="radio" id="pop" name="snack" value="pop">
        <label for="pop">Pop $1.50</label><br>
        <input type="radio" id="chips" name="snack" value="chips">
        <label for="chips">Chips $1.75</label><br><br>
        
        Total coin entered Amount : $ <input id="totalPaid" name="totalPaid" value="0"><br><br>
        
        <lable>Enter below Coins:</lable><br><br>
        
        <input type="button" id="dollar" name="dollar" value="$ 1" onclick="addDollar()">
        <input type="button" id="5cents" name="5cents" value="$ 0.05" onclick="add5cents()">
        <input type="button" id="10cents" name="10cents" value="$ 0.10" onclick="add10cents()">
        <input type="button" id="25cents" name="25cents" value="$ 0.25" onclick="add25cents()">
        <br><br>
        
        <input type="submit" name="submit" id="submit" value="Pay Now">

        
    </form>
    
</body>
    
</html>