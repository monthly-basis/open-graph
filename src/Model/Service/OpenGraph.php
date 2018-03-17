<?php
namespace LeoGalleguillos\OpenGraph\Model\Service;

class OpenGraph
{
    protected $array = [];

    public function getArray()
    {
        return $this->array;
    }

    public function set(
        string $property,
        string $content
    ) {
        $array[$property] = $content;
    }
}
