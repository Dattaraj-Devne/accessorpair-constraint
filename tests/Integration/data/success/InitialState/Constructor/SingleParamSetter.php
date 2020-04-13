<?php
declare(strict_types=1);

namespace DigitalRevolution\AccessorPairConstraint\Tests\Integration\data\success\InitialState\Constructor;

class SingleParamSetter
{
    /** @var string */
    private $param;

    public function __construct(string $param)
    {
        $this->param = $param;
    }

    public function getParam(): string
    {
        return $this->param;
    }

    public function setParam(string $param)
    {
        $this->param = $param;
    }
}
