<?php
/**
 * Bill class
 */

class Bill
{
    public $dinner = 20;
    public $dessert = 5;
    public $coldDrink = 3;
    public $bill = 0;

    /**
     * __construct method adds 3 to the bill (entry fee)
     */
    public function __construct()
    {
        $this->bill = 3;
    }
    /**
     * Dinner method
     *
     * @param int $person Number attending the dinner
     *
     * @return int
     */
    public function dinner($person)
    {
        $this->bill += $this->dinner * $person;
        return $this;
    }

    /**
     * Dessert method
     *
     * @param int $person Number attending the dinner
     *
     * @return int
     */
    public function dessert($person)
    {
        $this->bill += $this->dessert * $person;
        return $this;
    }

    /**
     * ColdDrink method
     *
     * @param int $person Number attending the dinner
     *
     * @return int
     */
    public function coldDrink($person)
    {
        $this->bill += $this->coldDrink * $person;
        return $this;
    }

    /**
     * __destruct method (resets the bill)
     */
    public function __destruct()
    {
        echo $this->bill = 0;
    }

}

$bill = new Bill();
echo $bill->dinner(2)->dessert(2)->coldDrink(1)->bill; // 53
echo "\n";
// 0 (from the __destruct method)
