<?php
header("Content-Type: application/json");
session_start();

$conn = new mysqli("127.0.0.1", "root", "", "ironveil_forge");
if ($conn->connect_error) {
    echo json_encode(["error" => "DB connection failed"]);
    exit;
}

// POST check
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["error" => "Invalid request method"]);
    exit;
}

try {
    $conn->begin_transaction();

    $shipping = $_SESSION['shipping']?? null;
    
    if (!$shipping) {
        echo "No shipping info found!";
        exit;
    }
    
    $shippingCountry = $shipping['country'];
    $shippingName = $shipping['name'];
    $shippingStreetAddress = $shipping['streetAddress'];
    $shippingAptAddress = $shipping['aptAddress'];
    $shippingCity = $shipping['city'];
    $shippingState = $shipping['state'];
    $shippingZipCode = $shipping['zip'];
    $shippingPhoneNum = $shipping['phoneNum'];
    
    $userID = isset($_POST['userID']) ? intval($_POST['userID']) : 0;
    $checkboxChecked = $_POST['isChecked'];
    $cartTotal = $_POST['cartTotal'];
    
    if ($checkboxChecked == true) {
        $paymentMethod = $_POST['Method'];
        $name = $_POST['CardName'];
        $cardNumber = $_POST['CardNum'];
        $expiry = $_POST['Expiry'];
        $cvv = $_POST['CVV'];
        $zipCode = $_POST['ZIP'];
    
        $paymentStmt = $conn->prepare("
            INSERT INTO paymentmethods (UserID, Method, CardName, CardNum, Expiry, CVV, ZIP)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ");
    
        $paymentStmt->bind_param(
            "issssss",
            $userID,
            $paymentMethod,
            $name,
            $cardNumber,
            $expiry,
            $cvv,
            $zipCode
        );

        if (!$paymentStmt->execute()) {
            throw new Exception($ordersStmt->error);
        }

        $paymentStmt->close();
    }
    

    //add to orders
    $ordersStmt = $conn->prepare("
            INSERT INTO orders (
            UserID, TotalPrice, ShippingName, ShippingStreetAddress, 
            ShippingAptAddress, ShippingCity, ShippingState, ShippingCountry, ShippingZIP, ShippingPhoneNum)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");
    
    $ordersStmt->bind_param(
        "idssssssss",
        $userID,
        $cartTotal,
        $shippingName,
        $shippingStreetAddress,
        $shippingAptAddress,
        $shippingCity,
        $shippingState,
        $shippingCountry,
        $shippingZipCode,
        $shippingPhoneNum
    );

    if (!$ordersStmt->execute()) {
        throw new Exception($ordersStmt->error);
    }

    $orderID = $conn->insert_id;
    $ordersStmt->close();
    

    //get cart items
    $cart = [];
    $cartStmt = $conn->prepare(
        "SELECT ProductID, Quantity, PriceAtAdd
        FROM cart
        WHERE UserID = ?"
    );
    $cartStmt->bind_param("i", $userID);

    if (!$cartStmt->execute()) {
        throw new Exception($cartStmt->error);
    }

    $result = $cartStmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $cart[] = $row;
    }

    $cartStmt->close();


    //add cart items into orderitems
    $itemStmt = $conn->prepare(
        "INSERT INTO orderitems (OrderID, ProductID, Quantity, PriceAtPurchase)
        VALUES (?, ?, ?, ?)"
    );
    foreach ($cart as $item) {
        $itemStmt->bind_param(
            "iiid",
            $orderID,
            $item['ProductID'],
            $item['Quantity'],
            $item['PriceAtAdd']
        );

        if (!$itemStmt->execute()) {
            throw new Exception($itemStmt->error);
        }
    }
    $itemStmt->close();

    //clear from cart
    $cartDelStmt = $conn->prepare(
        "DELETE FROM cart WHERE UserID = ?"
    );
    $cartDelStmt->bind_param("i", $userID);

    $cartDelStmt->execute();
    $cartDelStmt->close();

    $conn->commit();
    echo json_encode(["success" => true, "orderID" => $orderID]);
}
catch (Exception $e) {
    $conn->rollback();
    echo json_encode(["success" => false, "error" => $e->getMessage()]);
}



$conn->close();
?>