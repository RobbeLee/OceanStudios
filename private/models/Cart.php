<?php

$rawData = file_get_contents(__DIR__ . '/../data/items.json');
$items = json_decode($rawData);

class Cart {
    /**
     * @return array
     */
    public function getItems() {
        if (!$_SESSION['cart']) $_SESSION['cart'] = [];
        return $items;
    }

    /**
     * @param string item ID
     * @param string amount
     * @param size size of item
     * 
     * @return int 1 = slecht formaat | 2 = item bestaat niet | 3 = out of stock | 4 = success
     */
    public function addItem($itemID, $amount, $size) {
        if (!is_string($itemID)) return 1;
        if (!is_string($amount)) return 1;
        if (!is_string($size)) return 1;
        if (!$_SESSION['cart']) $_SESSION['cart'] = [];
        
        if (!$items[$itemID]) return 2;
        if ($items[$itemID]["amount"] <= 0) return 3;
        
        $amount = intval($amount);

        for ($i = 0; $i < $amount; $i++) {
            array_push($_SESSION['cart'], $itemID);
        }
        return 4;
    }

    /**
     * Remove an item from the shoppping cart.
     * 
     * @param int item id
     * 
     * @return boolean
     */
    public function removeItem($itemID) {
        if (!is_string($itemID)) return 1;
        if (!$_SESSION['cart']) $_SESSION['cart'] = [];

        if (!in_array($itemID, $_SESSION['cart'])) return 2;

        $index = array_search($itemID, $_SESSION['cart']);

        array_slice($_SESSION['cart'], $index, 1);
        return 3;
    }

    public function clearCart() {
        $_SESSION['cart'] = [];
    }
}