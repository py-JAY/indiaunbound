<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/India-Unbound-logo.png">
    <link href="https://fonts.cdnfonts.com/css/samsung-sans-4" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_currency.css">
    <title>Currency Converter</title>
</head>
<body>
    <header>
        <?php
            require_once('../index header.php');
        ?>
    </header>
<main>
    <h1>Currency Converter</h1>
        <form action="" method="post"> 
            <label for="amount">Amount in INR:</label>
            <input type="text" id="amount" name="amount" placeholder="Enter Amount Here" required><br><br>
            <div class="button_div">
                <input type="submit" value="Convert to USD" class="convert_button us_button">
                <input type="submit" value="Convert to EUR" name="convertToEur" class="convert_button euro_button">
            </div>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['amount']) && is_numeric($_POST['amount'])) {
                $exchangeRateUSD = 0.012;
                $exchangeRateEUR = 0.011;
                $amountINR = $_POST['amount'];

                if (isset($_POST['convertToEur'])) {
                    $amountEUR = $amountINR * $exchangeRateEUR;
                    echo "<p>Amount in INR: <b>₹" .number_format($amountINR, 2)."</b>" . "</p>";
                    echo "<p>Amount in EUR: <b>€" .number_format($amountEUR, 2)."</b>" . "</p>";
                } else {
                    $amountUSD = $amountINR * $exchangeRateUSD;
                    echo "<p>Amount in INR: <b>₹" .number_format($amountINR, 2)."</b>" . "</p>";
                    echo "<p>Amount in USD: <b>$" .number_format($amountUSD, 2)."</b>" . "</p>";
                }
            } else {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo "<p>Please enter a valid amount in INR.</p>";
                }
            }
        ?>
</main>
    <footer>
        <?php
             require_once('../index footer.php');
         ?>
    </footer>

</body>
</html>
