<?php
interface IPatient
{
    public function addPatient(Patient $patient);
    public function getPatient($patientId);
    public function updatePatient(Patient $patient);
    public function deletePatient($patientId);
    public function getAllPatients();
}
