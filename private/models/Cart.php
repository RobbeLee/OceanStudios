<?php

$rawData = file_get_contents(__DIR__ . '/../data/items.json');
$items = json_decode($rawData);

class Cart {
    private $items = [];

    /**
     * @return array
     */
    public function getItems() {
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

    }

    public function clearCart() {
        
    }
}