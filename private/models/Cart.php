<?php

class Cart {
    private $rawData;
    private $items;

    public function __construct() {
        if (empty($_SESSION['cart'])) $_SESSION['cart'] = [];
        $rawData = file_get_contents(__DIR__ . '/../data/items.json');
        $items = json_decode($rawData);
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
        if ($size === 'null') $size = null;
        
        //if (!$this->items[$itemID]) return 2;
        
        $amount = intval($amount);

        for ($i = 0; $i < $amount; $i++) {
            array_push($_SESSION['cart'], ['id' => $itemID, 'size' => $size]);
        }
        return 4;
    }

    /**
     * Remove an item from the shoppping cart.
     * 
     * @param int item id
     * 
     * @return int 1 = is niet een string | 2 = zit niet in shopping cart | 3 = success
     */
    public function removeItem($itemID) {
        if (!is_string($itemID)) return 1;
        $found = false;

        for($i = 0; $i < count($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i]['id'] == $itemID) {
                echo "eh";
                $found = true;
                unset($_SESSION['cart'][$i]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                return 3;
            }
        }
        if (!$found) return 2;
    }

    public function clearCart() {
        $_SESSION['cart'] = [];
    }
}