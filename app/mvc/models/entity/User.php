<!-- SQL

CREATE TABLE IF NOT EXISTS users (
	id integer(10) PRIMARY KEY AUTO_INCREMENT,
	name varchar(32) NULL,
	password varchar(32) NOT NULL,
	email varchar(32) NOT NULL,
	number varchar(32) NOT NULL,
	device_count integer(10) NOT NULL,
	registration_on Datetime,
	last_ip varchar(48) NOT NULL,
	devices text NOT NULL,
	is_beta boolean NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
-->

<?php

public class User extends BaseEntity {

	private String $name;

	private String $email;

	private String $number;

	private int $deviceCount;

	private String $registeredOn;

	private String $lastIp;

	private String $lastSeen;

	private $devices;

	private boolean $isBeta;

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		return $this->name = $name;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		return $this->email = $email;
	}

	public function getNumber(){
		return $this->number;
	}

	public function setNumber($number){
		return $this->number = $number;
	}

	public function getDeviceCount(){
		return $this->deviceCount;
	}

	public function setDeviceCount($deviceCount){
		return $this->deviceCount = $deviceCount;
	}

	public function getRegisteredOn(){
		return $this->registrationOn;
	}

	public function setRegisteredOn($registeredOn){
		return $this->registeredOn = $registeredOn;
	}

	public function getLastIp(){
		return $this->lastIp;
	}

	public function setLastIp($lastIp){
		return $this->lastIp = $lastIp;
	}

	public function getLastSeen(){
		return $this->lastSeen;
	}

	public function setLastSeen($lastSeen){
		return $this->lastSeen = $lastSeen;
	}

	public function getDevices(){
		return $this->devices;
	}

	public function setDevices($devices){
		return $this->devices = $devices;
	}

	public function getIsBeta(){
		return $this->isBeta;
	}

	public function setIsBeta($isBeta){
		return $this->isBeta = $isBeta;
	}

	public function serialize(){
		return array_merge( array(
			'name' 			=> $this->getName(),
			'email' 		=> $this->getEmail(),
			'number' 		=> $this->getNumber(),
			'device_count' 	=> $this->getDeviceCount(),
			'registered_on'	=> $this->getRegisteredOn(),
			'last_ip' 		=> $this->getLastIp(),
			'last_seen'		=> $this->getLastSeen(),
			'is_beta'		=> $this->getIsBeta()
			),
			$parent::serialize()
		);
	}
}