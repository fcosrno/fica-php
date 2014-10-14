<?php

namespace spec\Fcosrno;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FicaSpec extends ObjectBehavior
{
    function Let()
    {
        $this->beConstructedWith(2000);
        $this->shouldBeAnInstanceOf('Fcosrno\Fica');
    }
    function it_stores_an_amount()
    {
        $this->getAmount()->shouldReturn(2000);
    }
    function it_should_have_amount_as_integer(){
        $this->getAmount()->shouldBeInteger();
    }
    function it_returns_social_security_rate(){
        $this->getSocialSecurityRate()->shouldReturn(0.062);
    }
    function it_returns_social_security_amount(){
        $this->getSocialSecurity()->shouldReturn(124);
    }
    function it_returns_medicare_rate(){
        $this->getMedicareRate()->shouldReturn(0.0145);
    }
    function it_returns_medicare_amount(){
        $this->getMedicare()->shouldReturn(29);
    }
    function it_should_not_allow_non_integers()
    {
        $this->shouldThrow('\InvalidArgumentException')->duringValidateAmountInteger("1234");
    }
    function it_returns_fica(){
        $this->getFica()->shouldReturn(153);
    }
}
