<?php

namespace model;

class Questions
{
    private $id;
    private $first_question;
    private $first_answer;
    private $second_answer;
    private $third_answer;
    private $is_enabled;

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }

}