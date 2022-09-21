<?php
session_start();
interface IDoctor
{
    public function addDoctor(Doctor $doctor);

    public function getDoctor($doctorId);

    public function updateDoctor(Doctor $doctor);

    public function deleteDoctor($doctorId);

    public function getAllDoctors();
}

class DoctorService implements IDoctor
{
    public function addDoctor(Doctor $doctor)
    {
        try{
            $conn = $_SESSION['conn'];
            $id = $doctor->getId();
            $name = $doctor->getName();
            $nic = $doctor->getNic();
            $email = $doctor->getEmail();
            $password = $doctor->getPassword();
            $telNo = $doctor->getTelNo();
            $gender = $doctor->getGender();
            $specializedField = $doctor->getSpecializedField();
            $qualifications = $doctor->getQualifications();
            $address = $doctor->getAddress();
            $ratePerSession = $doctor->getRatePerSession();
            $noOfPatientsPerDay = $doctor->getNoOfPatientsPerDay();
            $availableDays = $doctor->getAvailableDays();
            $deleteState = false;

            $query = "INSERT INTO `Doctor` (`id`,`name`,`nic`,`email`,`password`,`telNo`,`gender`,`specializedField`,`qualifications`, `address`,`ratePerSession`,`noOfPatientsPerDay`,`availableDays`)
                    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $st = $conn->prepare($query);
            $st->bindValue(1, $id, PDO::PARAM_STR);
            $st->bindValue(2, $name, PDO::PARAM_STR);
            $st->bindValue(3, $nic, PDO::PARAM_STR);
            $st->bindValue(4, $email, PDO::PARAM_STR);
            $st->bindValue(5, $password, PDO::PARAM_STR);
            $st->bindValue(6, $telNo, PDO::PARAM_STR);
            $st->bindValue(7, $gender, PDO::PARAM_STR);
            $st->bindValue(8, $specializedField, PDO::PARAM_STR);
            $st->bindValue(9, $qualifications, PDO::PARAM_STR);
            $st->bindValue(10, $address, PDO::PARAM_STR);
            $st->bindValue(11, $ratePerSession, PDO::PARAM_STR);
            $st->bindValue(12, $noOfPatientsPerDay, PDO::PARAM_STR);
            $st->bindValue(13, $availableDays, PDO::PARAM_STR);
            $st->bindValue(14, $deleteState, PDO::PARAM_STR);

            return 1;
        }catch (SQLiteException $ex){
            return 0;
        }
    }

    public function getDoctor($doctorId)
    {
        $conn = $_SESSION['conn'];
        $query = "SELECT * FROM `Doctor` WHERE `id` =$doctorId ";
        return $conn->query($query);
    }

    public function updateDoctor(Doctor $doctor)
    {
        try {
            $conn = $_SESSION['conn'];
            $id = $doctor->getId();
            $name = $doctor->getName();
            $nic = $doctor->getNic();
            $email = $doctor->getEmail();
            $password = $doctor->getPassword();
            $telNo = $doctor->getTelNo();
            $gender = $doctor->getGender();
            $specializedField = $doctor->getSpecializedField();
            $qualifications = $doctor->getQualifications();
            $address = $doctor->getAddress();
            $ratePerSession = $doctor->getRatePerSession();
            $noOfPatientsPerDay = $doctor->getNoOfPatientsPerDay();
            $availableDays = $doctor->getAvailableDays();

            $query = "UPDATE `Doctor` SET `id`=?,`name`=?,`nic`=?,`email`=?,`password`=?,`telNo`=?,`gender`=?,`specializedField`=?,`qualifications`=?, `address`=?,`ratePerSession`=?,`noOfPatientsPerDay`=?,`availableDays`=?  WHERE `id` =$id";
            $st = $conn->prepare($query);
            $st->bindValue(1, $id, PDO::PARAM_STR);
            $st->bindValue(2, $name, PDO::PARAM_STR);
            $st->bindValue(3, $nic, PDO::PARAM_STR);
            $st->bindValue(4, $email, PDO::PARAM_STR);
            $st->bindValue(5, $password, PDO::PARAM_STR);
            $st->bindValue(6, $telNo, PDO::PARAM_STR);
            $st->bindValue(7, $gender, PDO::PARAM_STR);
            $st->bindValue(8, $specializedField, PDO::PARAM_STR);
            $st->bindValue(9, $qualifications, PDO::PARAM_STR);
            $st->bindValue(10, $address, PDO::PARAM_STR);
            $st->bindValue(11, $ratePerSession, PDO::PARAM_STR);
            $st->bindValue(12, $noOfPatientsPerDay, PDO::PARAM_STR);
            $st->bindValue(13, $availableDays, PDO::PARAM_STR);

            $st->execute();
            return 1;
        } catch (SQLiteException $ex) {
            return 0;
        }
    }

    public function deleteDoctor($doctorId)
    {
        $conn = $_SESSION['conn'];
        $query = "SELECT * FROM `Doctor` WHERE `id` =$doctorId ";
        return $conn->query($query);
    }

    public function getAllDoctors()
    {
        $conn = $_SESSION['conn'];
        $query = "SELECT * FROM `Doctor`";
        return $conn->query($query);
    }
}
