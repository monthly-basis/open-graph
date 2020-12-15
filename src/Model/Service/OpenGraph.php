<?php
namespace MonthlyBasis\OpenGraph\Model\Service;

class OpenGraph
{
    protected $properties = [];

    public function getProperties()
    {
        return $this->properties;
    }

    public function setProperty(
        string $property,
        string $content
    ) {
        $this->properties[$property] = $content;
    }

    public function setProperties(
        array $array
    ) {
        foreach ($array as $property => $content) {
            $this->setProperty($property, $content);
        }
    }
}
