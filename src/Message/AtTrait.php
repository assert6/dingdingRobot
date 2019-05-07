<?php


namespace DingRobot\Message;


trait AtTrait
{

    /**
     * @var array
     */
    protected $atMobiles;

    /**
     * @var bool
     */
    protected $isAtAll;

    public function at(string $mobile)
    {
        $this->atMobiles[] = $mobile;
        return $this;
    }

    public function ats(array $mobiles)
    {
        $this->atMobiles[] = array_merge($this->atMobiles, $mobiles);
        return $this;
    }

    public function atAll()
    {
        $this->isAtAll = true;
        return $this;
    }
}