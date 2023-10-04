<?php
namespace MonthlyBasis\OpenGraph\Model\Service;

class OpenGraph
{
    protected array $properties = [];

    public function getProperty(string $property): string|null
    {
        return $this->properties[$property] ?? null;
    }

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
