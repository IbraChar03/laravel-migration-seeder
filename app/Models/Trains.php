<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trains extends Model
{
    public $timestamps = false;
    private $id;
    private $agency;
    private $carriages_number;
    private $code;
    private $in_time;
    private $cancelled;
    private $departure_time;
    private $arrival_time;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of agency
     */
    public function getAgency()
    {
        return $this->agency;
    }

    /**
     * Set the value of agency
     *
     * @return  self
     */
    public function setAgency($agency)
    {
        $this->agency = $agency;

        return $this;
    }

    /**
     * Get the value of carriages_number
     */
    public function getCarriages_number()
    {
        return $this->carriages_number;
    }

    /**
     * Set the value of carriages_number
     *
     * @return  self
     */
    public function setCarriages_number($carriages_number)
    {
        $this->carriages_number = $carriages_number;

        return $this;
    }

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of in_time
     */
    public function getIn_time()
    {
        return $this->in_time;
    }

    /**
     * Set the value of in_time
     *
     * @return  self
     */
    public function setIn_time($in_time)
    {
        $this->in_time = $in_time;

        return $this;
    }

    /**
     * Get the value of cancelled
     */
    public function getCancelled()
    {
        return $this->cancelled;
    }

    /**
     * Set the value of cancelled
     *
     * @return  self
     */
    public function setCancelled($cancelled)
    {
        $this->cancelled = $cancelled;

        return $this;
    }

    /**
     * Get the value of departure_time
     */
    public function getDeparture_time()
    {
        return $this->departure_time;
    }

    /**
     * Set the value of departure_time
     *
     * @return  self
     */
    public function setDeparture_time($departure_time)
    {
        $this->departure_time = $departure_time;

        return $this;
    }

    /**
     * Get the value of arrival_time
     */
    public function getArrival_time()
    {
        return $this->arrival_time;
    }

    /**
     * Set the value of arrival_time
     *
     * @return  self
     */
    public function setArrival_time($arrival_time)
    {
        $this->arrival_time = $arrival_time;

        return $this;
    }
}