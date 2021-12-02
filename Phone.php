<?php

require_once "config.php";

class Phone
{
    private $number;
    private $valid;
    private $local_format;
    private $international_format;
    private $country_prefix;
    private $country_code;
    private $country_name;
    private $location;
    private $carrier;
    private $line_type;


    /**
     * Phone constructor.
     * @param $number
     * @param $valid
     * @param $local_format
     * @param $international_format
     * @param $country_prefix
     * @param $country_code
     * @param $country_name
     * @param $location
     * @param $carrier
     * @param $line_type
     */
    public function __construct($valid, $number, $local_format, $international_format, $country_prefix, $country_code, $country_name, $location, $carrier, $line_type)
    {
        $this->number = $number;
        $this->valid = $valid;
        $this->local_format = $local_format;
        $this->international_format = $international_format;
        $this->country_prefix = $country_prefix;
        $this->country_code = $country_code;
        $this->country_name = $country_name;
        $this->location = $location;
        $this->carrier = $carrier;
        $this->line_type = $line_type;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * @param mixed $valid
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
    }

    /**
     * @return mixed
     */
    public function getLocalFormat()
    {
        return $this->local_format;
    }

    /**
     * @param mixed $local_format
     */
    public function setLocalFormat($local_format)
    {
        $this->local_format = $local_format;
    }

    /**
     * @return mixed
     */
    public function getInternationalFormat()
    {
        return $this->international_format;
    }

    /**
     * @param mixed $international_format
     */
    public function setInternationalFormat($international_format)
    {
        $this->international_format = $international_format;
    }

    /**
     * @return mixed
     */
    public function getCountryPrefix()
    {
        return $this->country_prefix;
    }

    /**
     * @param mixed $country_prefix
     */
    public function setCountryPrefix($country_prefix)
    {
        $this->country_prefix = $country_prefix;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param mixed $country_code
     */
    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;
    }

    /**
     * @return mixed
     */
    public function getCountryName()
    {
        return $this->country_name;
    }

    /**
     * @param mixed $country_name
     */
    public function setCountryName($country_name)
    {
        $this->country_name = $country_name;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param mixed $carrier
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
    }

    /**
     * @return mixed
     */
    public function getLineType()
    {
        return $this->line_type;
    }

    /**
     * @param mixed $line_type
     */
    public function setLineType($line_type)
    {
        $this->line_type = $line_type;
    }

    public function save()
    {
        $conn = (new Connection())->getConnection();
        $stmt = $conn->prepare("INSERT INTO phone_numbers (valid, number, local_format, international_format, country_prefix, country_code, country_name, location, carrier, line_type)
  VALUES (:valid, :number, :local_format, :international_format, :country_prefix, :country_code, :country_name, :location, :carrier, :line_type)");
        $stmt->bindParam(':valid', $this->valid);
        $stmt->bindParam(':number', $this->number);
        $stmt->bindParam(':local_format', $this->local_format);
        $stmt->bindParam(':international_format', $this->international_format);
        $stmt->bindParam(':country_prefix', $this->country_prefix);
        $stmt->bindParam(':country_code', $this->country_code);
        $stmt->bindParam(':country_name', $this->country_name);
        $stmt->bindParam(':location', $this->location);
        $stmt->bindParam(':carrier', $this->carrier);
        $stmt->bindParam(':line_type', $this->line_type);
        $stmt->execute();
    }

}