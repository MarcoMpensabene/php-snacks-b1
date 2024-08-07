<?php
require_once __DIR__ . "/User.php";
require_once __DIR__ . "/PremiumUser.php";

class Membership extends PremiumUser
{
    private $privilage;

    public function __construct($id, $password, $planPrice, $planDuration, $privilage)
    {
        parent::__construct($id, $password, $planPrice, $planDuration);
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
