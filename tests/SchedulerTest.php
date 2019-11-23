<?php

use PHPUnit\Framework\TestCase;

/**
 * Class SampleTest
 */
Class SchedulerTest extends TestCase
{
    /**
     * @test
     */
    public function 時、分、秒_にそれぞれ_18_9_32を与えると、その文字列表現は文字列_32_9_18()
    {
        $scheduler = new Scheduler(18, 9, 32);
        $actual = $scheduler->getString();
        $this->assertSame("32 9 18", $actual);
    }

    /**
     * @test
     */
    public function 時、分、秒_にそれぞれ_19_9_32を与えると、その文字列表現は文字列_32_9_19()
    {
        $scheduler = new Scheduler(19, 9, 32);
        $actual = $scheduler->getString();
        $this->assertSame("32 9 19", $actual);
    }

    /**
     * @test
     */
    public function 時、分、秒_にそれぞれ_19_10_32を与えると、その文字列表現は文字列_32_10_19()
    {
        $scheduler = new Scheduler(19, 10, 32);
        $actual = $scheduler->getString();
        $this->assertSame("32 10 19", $actual);
    }

    /**
     * @test
     */
    public function 時、分、秒_にそれぞれ_19_10_33を与えると、その文字列表現は文字列_33_10_19()
    {
        $scheduler = new Scheduler(19, 10, 33);
        $actual = $scheduler->getString();
        $this->assertSame("33 10 19", $actual);
    }

    /**
     * @test
     */
    public function スケジューラー設定_32_9_18_をして、実行時刻は「18時9分32秒」と一致していたらtrueを返す()
    {
        $scheduler = new Scheduler(18, 9, 32);
        $dateTime = (new DateTime())->setTime(18, 9, 32);
        $this->assertTrue($scheduler->isEqual($dateTime));
    }

    /**
     * @test
     */
    public function スケジューラー設定_32_9_18_をして、実行時刻は「8時7分15秒」と一致しなかったらfalseを返す()
    {
        $scheduler = new Scheduler(18, 9, 32);
        $dateTime = (new DateTime())->setTime(8, 7, 15);
        $this->assertFalse($scheduler->isEqual($dateTime));
    }

    /**
     * @test
     */
    public function スケジューラー設定_59_9_18_をして、実行時刻は「18時9分59秒」と一致していたらtrueを返す()
    {
        $scheduler = new Scheduler(18, 9, 59);
        $dateTime = (new DateTime())->setTime(18, 9, 59);
        $this->assertTrue($scheduler->isEqual($dateTime));
    }
}
