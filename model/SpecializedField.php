<?php
class SpecializedField
{
    private $id;
    private $field;

    public function __construct(){}

    /**
     * SpecializedField constructor.
     * @param $id
     * @param $field
     */
    public function __construct_1($id, $field)
    {
        $this->id = $id;
        $this->field = $field;
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
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param mixed $field
     */
    public function setField($field)
    {
        $this->field = $field;
    }



}
