<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Button</title>
</head>
<body>

<?php
// Product URL
$productURL = 'https://example.com/product-page';

// WhatsApp API link with pre-defined message and product URL
$whatsappLink = 'https://api.whatsapp.com/send?phone=0201002560708&text=' . urlencode('Check out this product: ' . $productURL);

// Display the WhatsApp button
echo '<a href="' . $whatsappLink . '" target="_blank"><button>Contact via WhatsApp</button></a>';
?>

</body>
</html>