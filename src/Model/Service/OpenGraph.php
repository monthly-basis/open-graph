<?php
namespace MonthlyBasis\OpenGraph\Model\Service;

class OpenGraph
{
    protected array $properties = [];

    public function getProperties()
    {
        return $this->properties;
    }

    public function setProperty(
        string $property,
        string $content
    ): self {
        $this->properties[$property] = $content;
        return $this;
    }

    public function setProperties(
        array $array
    ): self {
        foreach ($array as $property => $content) {
            $this->setProperty($property, $content);
        }
        return $this;
    }
}
