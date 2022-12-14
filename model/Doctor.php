<?php
class Doctor
{
    private $id;
    private $name;
    private $nic;
    private $email;
    private $password;
    private $telNo;
    private $gender;
    private $specializedField = array(SpecializedField::class);
    private $qualifications;
    private $address;
    private $ratePerSession;
    private $noOfPatientsPerDay;
    private $availableDays;
    private $deleteState;

    public function __construct(){}

    /**
     * Doctor constructor.
     * @param $id
     * @param $name
     * @param $nic
     * @param $email
     * @param $password
     * @param $telNo
     * @param $gender
     * @param string[] $specializedField
     * @param $qualifications
     * @param $address
     * @param $ratePerSession
     * @param $noOfPatientsPerDay
     * @param $availableDays
     * @param $deleteState
     */
    public function __construct_1($id, $name, $nic, $email, $password, $telNo, $gender, array $specializedField, $qualifications, $address, $ratePerSession, $noOfPatientsPerDay, $availableDays, $deleteState)
    {
        $this->id = $id;
        $this->name = $name;
        $this->nic = $nic;
        $this->email = $email;
        $this->password = $password;
        $this->telNo = $telNo;
        $this->gender = $gender;
        $this->specializedField = $specializedField;
        $this->qualifications = $qualifications;
        $this->address = $address;
        $this->ratePerSession = $ratePerSession;
        $this->noOfPatientsPerDay = $noOfPatientsPerDay;
        $this->availableDays = $availableDays;
        $this->deleteState = $deleteState;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getNic()
    {
        return $this->nic;
    }

    /**
     * @param mixed $nic
     */
    public function setNic($nic)
    {
        $this->nic = $nic;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getTelNo()
    {
        return $this->telNo;
    }

    /**
     * @param mixed $telNo
     */
    public function setTelNo($telNo)
    {
        $this->telNo = $telNo;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string[]
     */
    public function getSpecializedField(): array
    {
        return $this->specializedField;
    }

    /**
     * @param string[] $specializedField
     */
    public function setSpecializedField(array $specializedField)
    {
        $this->specializedField = $specializedField;
    }

    /**
     * @return mixed
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }

    /**
     * @param mixed $qualifications
     */
    public function setQualifications($qualifications)
    {
        $this->qualifications = $qualifications;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getRatePerSession()
    {
        return $this->ratePerSession;
    }

    /**
     * @param mixed $ratePerSession
     */
    public function setRatePerSession($ratePerSession)
    {
        $this->ratePerSession = $ratePerSession;
    }

    /**
     * @return mixed
     */
    public function getNoOfPatientsPerDay()
    {
        return $this->noOfPatientsPerDay;
    }

    /**
     * @param mixed $noOfPatientsPerDay
     */
    public function setNoOfPatientsPerDay($noOfPatientsPerDay)
    {
        $this->noOfPatientsPerDay = $noOfPatientsPerDay;
    }

    /**
     * @return mixed
     */
    public function getAvailableDays()
    {
        return $this->availableDays;
    }

    /**
     * @param mixed $availableDays
     */
    public function setAvailableDays($availableDays)
    {
        $this->availableDays = $availableDays;
    }

    /**
     * @return mixed
     */
    public function getDeleteState()
    {
        return $this->deleteState;
    }

    /**
     * @param mixed $deleteState
     */
    public function setDeleteState($deleteState)
    {
        $this->deleteState = $deleteState;
    }


}

