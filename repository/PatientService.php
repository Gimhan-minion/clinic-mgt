<?php
include 'config.php';

class PatientService implements IPatient
{

    public function addPatient(Patient $patient)
    {
        // TODO: Implement addPatient() method.
    }

    public function getPatient($patientId)
    {
        $conn = $_POST['conn'];
        $query = "SELECT * FROM `Patient` WHERE `id` =$patientId ";
        return $conn->query($query);
    }

    public function updatePatient(Patient $patient)
    {
        // TODO: Implement updatePatient() method.
    }

    public function deletePatient($patientId)
    {
        // TODO: Implement deletePatient() method.
    }

    public function getAllPatients()
    {
        // TODO: Implement getAllPatients() method.
    }
}
