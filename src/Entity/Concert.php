<?php


namespace App\Entity;


class Concert
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $venue;

    /**
     * @var bool
     */
    private $attending;

    /**
     * @var string
     */
    private $notes;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date) : void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city) : void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getVenue() : string
    {
        return $this->venue;
    }

    /**
     * @param string $venue
     */
    public function setVenue(string $venue) : void
    {
        $this->venue = $venue;
    }

    /**
     * @return bool
     */
    public function isAttending() : bool
    {
        return $this->attending;
    }

    /**
     * @param bool $attending
     */
    public function setAttending(bool $attending) : void
    {
        $this->attending = $attending;
    }

    /**
     * @return string
     */
    public function getNotes() : string
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes) : void
    {
        $this->notes = $notes;
    }
}
