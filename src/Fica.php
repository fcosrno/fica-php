<?php 

namespace Fcosrno;

class Fica
{
	protected $amount;
	const SOCIAL_SECURITY_RATE = 6.2; // percentage
	const MEDICARE_RATE	= 1.45; // percentage

	function __construct($amount_in_cents){

		$this->validateAmountInteger($amount_in_cents);

		$this->amount = $amount_in_cents;
	}

	public function validateAmountInteger($amount_in_cents)
	{
		if(!is_integer($amount_in_cents)){
			throw new \InvalidArgumentException;
		}
	}

    public function getFica()
    {
        return $this->getSocialSecurity() + $this->getMedicare();
    }
    public function getSocialSecurity()
    {
    	return (int) round(($this->getAmount() * $this->getSocialSecurityRate()));
    }
    public function getMedicare()
    {
    	return (int) round(($this->getAmount() * $this->getMedicareRate()));
    }
    public function getSocialSecurityRate()
    {
    	return self::SOCIAL_SECURITY_RATE / 100;
    }
    public function getMedicareRate()
    {
    	// return self::MEDICARE_RATE / 100; <--- this fails in phpspec?
    	return 0.0145;
    }
    public function getAmount()
    {
    	return $this->amount;
    }
}
