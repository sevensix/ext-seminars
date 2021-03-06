<?php

/**
 * Test case.
 *
 * @author Niels Pardon <mail@niels-pardon.de>
 */
class Tx_Seminars_Tests_Unit_Model_AbstractTimeSpanTest extends \Tx_Phpunit_TestCase
{
    /**
     * @var \Tx_Seminars_Model_AbstractTimeSpan
     */
    private $subject;

    protected function setUp()
    {
        $this->subject = $this->getMockForAbstractClass(\Tx_Seminars_Model_AbstractTimeSpan::class);
    }

    /**
     * @test
     */
    public function setTitleWithEmptyTitleThrowsException()
    {
        $this->setExpectedException(
            \InvalidArgumentException::class,
            'The parameter $title must not be empty.'
        );

        $this->subject->setTitle('');
    }

    /**
     * @test
     */
    public function setTitleSetsTitle()
    {
        $this->subject->setTitle('Superhero');

        self::assertEquals(
            'Superhero',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function getTitleWithNonEmptyTitleReturnsTitle()
    {
        $this->subject->setData(['title' => 'Superhero']);

        self::assertEquals(
            'Superhero',
            $this->subject->getTitle()
        );
    }

    ////////////////////////////////////
    // Tests regarding the begin date.
    ////////////////////////////////////

    /**
     * @test
     */
    public function getBeginDateAsUnixTimeStampWithoutBeginDateReturnsZero()
    {
        $this->subject->setData([]);

        self::assertEquals(
            0,
            $this->subject->getBeginDateAsUnixTimeStamp()
        );
    }

    /**
     * @test
     */
    public function getBeginDateAsUnixTimeStampWithBeginDateReturnsBeginDate()
    {
        $this->subject->setData(['begin_date' => 42]);

        self::assertEquals(
            42,
            $this->subject->getBeginDateAsUnixTimeStamp()
        );
    }

    /**
     * @test
     */
    public function setBeginDateAsUnixTimeStampWithNegativeTimeStampThrowsException()
    {
        $this->setExpectedException(
            \InvalidArgumentException::class,
            'The parameter $beginDate must be >= 0.'
        );

        $this->subject->setBeginDateAsUnixTimeStamp(-1);
    }

    /**
     * @test
     */
    public function setBeginDateAsUnixTimeStampWithZeroTimeStampSetsBeginDate()
    {
        $this->subject->setBeginDateAsUnixTimeStamp(0);

        self::assertEquals(
            0,
            $this->subject->getBeginDateAsUnixTimeStamp()
        );
    }

    /**
     * @test
     */
    public function setBeginDateAsUnixTimeStampWithPositiveTimeStampSetsBeginDate()
    {
        $this->subject->setBeginDateAsUnixTimeStamp(42);

        self::assertEquals(
            42,
            $this->subject->getBeginDateAsUnixTimeStamp()
        );
    }

    /**
     * @test
     */
    public function hasBeginDateWithoutBeginDateReturnsFalse()
    {
        $this->subject->setData([]);

        self::assertFalse(
            $this->subject->hasBeginDate()
        );
    }

    /**
     * @test
     */
    public function hasBeginDateWithBeginDateReturnsTrue()
    {
        $this->subject->setBeginDateAsUnixTimeStamp(42);

        self::assertTrue(
            $this->subject->hasBeginDate()
        );
    }

    //////////////////////////////////
    // Tests regarding the end date.
    //////////////////////////////////

    /**
     * @test
     */
    public function getEndDateAsUnixTimeStampWithoutEndDateReturnsZero()
    {
        $this->subject->setData([]);

        self::assertEquals(
            0,
            $this->subject->getEndDateAsUnixTimeStamp()
        );
    }

    /**
     * @test
     */
    public function getEndDateAsUnixTimeStampWithEndDateReturnsEndDate()
    {
        $this->subject->setData(['end_date' => 42]);

        self::assertEquals(
            42,
            $this->subject->getEndDateAsUnixTimeStamp()
        );
    }

    /**
     * @test
     */
    public function setEndDateAsUnixTimeStampWithNegativeTimeStampThrowsException()
    {
        $this->setExpectedException(
            \InvalidArgumentException::class,
            'The parameter $endDate must be >= 0.'
        );

        $this->subject->setEndDateAsUnixTimeStamp(-1);
    }

    /**
     * @test
     */
    public function setEndDateAsUnixTimeStampWithZeroTimeStampSetsEndDate()
    {
        $this->subject->setEndDateAsUnixTimeStamp(0);

        self::assertEquals(
            0,
            $this->subject->getEndDateAsUnixTimeStamp()
        );
    }

    /**
     * @test
     */
    public function setEndDateAsUnixTimeStampWithPositiveTimeStampSetsEndDate()
    {
        $this->subject->setEndDateAsUnixTimeStamp(42);

        self::assertEquals(
            42,
            $this->subject->getEndDateAsUnixTimeStamp()
        );
    }

    /**
     * @test
     */
    public function hasEndDateWithoutEndDateReturnsFalse()
    {
        $this->subject->setData([]);

        self::assertFalse(
            $this->subject->hasEndDate()
        );
    }

    /**
     * @test
     */
    public function hasEndDateWithEndDateReturnsTrue()
    {
        $this->subject->setEndDateAsUnixTimeStamp(42);

        self::assertTrue(
            $this->subject->hasEndDate()
        );
    }

    //////////////////////////////
    // Tests regarding the room.
    //////////////////////////////

    /**
     * @test
     */
    public function getRoomWithoutRoomReturnsAnEmptyString()
    {
        $this->subject->setData([]);

        self::assertEquals(
            '',
            $this->subject->getRoom()
        );
    }

    /**
     * @test
     */
    public function getRoomWithRoomReturnsRoom()
    {
        $this->subject->setData(['room' => 'cuby']);

        self::assertEquals(
            'cuby',
            $this->subject->getRoom()
        );
    }

    /**
     * @test
     */
    public function setRoomSetsRoom()
    {
        $this->subject->setRoom('cuby');

        self::assertEquals(
            'cuby',
            $this->subject->getRoom()
        );
    }

    /**
     * @test
     */
    public function hasRoomWithoutRoomReturnsFalse()
    {
        $this->subject->setData([]);

        self::assertFalse(
            $this->subject->hasRoom()
        );
    }

    /**
     * @test
     */
    public function hasRoomWithRoomReturnsTrue()
    {
        $this->subject->setRoom('cuby');

        self::assertTrue(
            $this->subject->hasRoom()
        );
    }
}
