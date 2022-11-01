<?php
class Car {
	/**
	 * @var int
	 */
	private $nbWheels = 4;
	/**
	 * @var int
	 */
	private  $currentSpeed;
	/**
	 * @var string
	 */
	private $color;
	/**
	 * @var int
	 */
	private $nbSeats;
	/**
	 * @var string
	 */
	private $energy;
	/**
	 * @var int
	 */
	private $energyLevel;

	public function __construct($color, $nbSeats, $energy)
	{
		$this->color = $color;
		$this->nbSeats = $nbSeats;
		$this->energy = $energy;
	}

	public function forward(){
		$this->currentSpeed = 30;
		return "You drive at 30km/h";
	}

	public function brake(){
		$sentence = "";
		while ($this->currentSpeed > 0){
			$this->currentSpeed--;
			$sentence .= "BRAKE !!! <br>". PHP_EOL;
		}
		$sentence .= " I'm at a standstill ! ";
		return $sentence;
	}

	public function start(){
		return "Vroom !!!";
	}

	/**
	 * @return int
	 */
	public function getNbWheels()
	{
		return $this->nbWheels;
	}

	/**
	 * @return int
	 */
	public function getCurrentSpeed()
	{
		return $this->currentSpeed = 30;

	}

	/**
	 * @return mixed
	 */
	public function getColor()
	{
		return $this->color;
	}

	/**
	 * @return int
	 */
	public function getNbSeats()
	{
		return $this->nbSeats;
	}

	/**
	 * @return string
	 */
	public function getEnergy()
	{
		return $this->energy;
	}

	/**
	 * @param int $energyLevel
	 */
	public function getEnergyLevel($energyLevel)
	{
		$this->energyLevel = $energyLevel;
	}

	public function dump()
	{
		var_dump($this);

	}
}
