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
        
        Total coin entered Amount : $ <input id="totalPaid" name="totalPaid" value="0" readonly><br><br>
        
        <lable>Enter below Coins:</lable><br><br>
        
        <input type="button" id="dollar" name="dollar" value="$ 1" onclick="addDollar()">
        <input type="button" id="5cents" name="5cents" value="$ 0.05" onclick="add5cents()">
        <input type="button" id="10cents" name="10cents" value="$ 0.10" onclick="add10cents()">
        <input type="button" id="25cents" name="25cents" value="$ 0.25" onclick="add25cents()">
        <br><br>
        
        <input type="submit" name="submit" id="submit" value="Pay Now">

        <input type="reset" name="cancel" id="cancel" value="Cancel">

    </form>
    
    <script>
        
    function addDollar() {
        let totalPaid = parseFloat(document.getElementById("totalPaid").value);
        totalPaid += 1;
        document.getElementById("totalPaid").value = totalPaid.toFixed(2);
    }

    function add5cents() {
        let totalPaid = parseFloat(document.getElementById("totalPaid").value);
        totalPaid += 0.05;
        document.getElementById("totalPaid").value = totalPaid.toFixed(2);
    }

    function add10cents() {
        let totalPaid = parseFloat(document.getElementById("totalPaid").value);
        totalPaid += 0.10;
        document.getElementById("totalPaid").value = totalPaid.toFixed(2);
    }

    function add25cents() {
        let totalPaid = parseFloat(document.getElementById("totalPaid").value);
        totalPaid += 0.25;
        document.getElementById("totalPaid").value = totalPaid.toFixed(2);
    }
    
</script>

</body>
    
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!isset($_POST['snack'])) {
        echo "<p style='color: red'>Please choose a snack</p>";
    } else {
        $totalPaid = $_POST['totalPaid'];
        $snackName = $_POST['snack'];
        switch ($snackName) {
            case "chocolate":
                if ($totalPaid < 1.25) {
                    ShortOfMoney(1.25 - $totalPaid);
                } else {
                    checkout($snackName, $totalPaid, 1.25);
                }
                break;
            case "pop":
                if ($totalPaid < 1.50) {
                    ShortOfMoney(1.50 - $totalPaid);
                } else {
                    checkout($snackName, $totalPaid, 1.50);
                }
                break;
            case "chips":
                if ($totalPaid < 1.75) {
                    ShortOfMoney(1.75 - $totalPaid);
                } else {
                    checkout($snackName, $totalPaid, 1.75);
                }
                break;
        }
    }
}

function checkout($snackName,$totalPaid,$snackPrice)
    {
     $remainingBalance = $totalPaid - $snackPrice;;

        if ($remainingBalance > 0) {
            echo "<p style='color: green'>Enjoy your $snackName and here is your change :$ $remainingBalance</p>";
        } else {
            echo "<p style='color: green'>Enjoy your $snackName</p>";
        }

    }

function ShortOfMoney($shortAmount){
    echo "<p style='color: red'>Sorry , You are short of $ $shortAmount . Please insert more coins.</p>";
}

?>