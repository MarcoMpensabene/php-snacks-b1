<?php
require_once __DIR__ . "classes/User";

class PremiumUser extends User
{
    private $planPrice;
    private $planDuration;

    public function __construct($id, $password, $planPrice, $planDuration)
    {
        User::__construct($id, $password);
        $this->planPrice = $planPrice;
        $this->planDuration = $planDuration;
    }

    public function getPlanPrice()
    {
        return $this->planPrice;
    }

    public function setPlanPrice($price)
    {
        return $this->planPrice = $price;
    }

    public function getPlanDuration()
    {
        return $this->planDuration;
    }

    public function setPlanDuration($durationTime)
    {
        return $this->planDuration = $durationTime;
    }
}
