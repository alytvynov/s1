<?php

namespace App\DTO;

use Common\Traits\RawLoader;

class User
{
    use RawLoader;

    private string $name;
    private string $lastName;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFullName(): string
    {
        return sprintf('%s %s', $this->name, $this->lastName);
    }
}
