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
     * Dinner function
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
     * Dessert function
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
     * ColdDrink function
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
}

$bill = new Bill();
echo $bill->dinner(2)->dessert(2)->coldDrink(1)->bill; // 53
