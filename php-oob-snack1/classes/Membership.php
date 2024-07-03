<?php
require_once __DIR__ . "classes/User";

class Membership extends PremiumUser
{
    private $privilage;

    public function __construct($id, $password, $planPrice, $planDuration, $privilage)
    {
        PremiumUser::__construct($id, $password, $planPrice, $planDuration);
        $this->privilage = $privilage;
    }

    public function getPrivilage()
    {
        return $this->privilage;
    }

    public function setPrivilage($privilage)
    {
        return $this->privilage = $privilage;
    }
}
