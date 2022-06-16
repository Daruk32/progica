<?php

namespace App\Entity;

class Contact
{

    private string $nom;
    private string $email;
    private string $telephone;
    private string $message;









    /**
     * Get the value of nom
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telephone
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     */
    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of message
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Set the value of message
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
