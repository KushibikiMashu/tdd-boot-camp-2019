<?php

Class Scheduler
{
    private $hour;
    private $minute;
    private $second;

    /**
     * Scheduler constructor.
     * @param int|string $hour
     * @param int|string $minute
     * @param int|string $second
     */
    public function __construct($hour, $minute, $second)
    {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    /**
     * @return string
     */
    public function getString(): string
    {
        return "{$this->second} {$this->minute} {$this->hour}";
    }

    /**
     * @param DateTime $dateTime
     * @return bool
     * @throws Exception
     */
    public function isEqual(DateTime $dateTime): bool
    {
        return (new DateTime())->setTime($this->hour, $this->minute, $this->second) == $dateTime;
    }
}
