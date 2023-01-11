<?php

namespace Sofar\Aade;

/**
 * Class representing ReceptionEmailsType
 *
 *
 * XSD Type: receptionEmailsType
 */
class ReceptionEmailsType
{
    /**
     * Email
     *
     * @var string[] $email
     */
    private $email = [
        
    ];

    /**
     * Adds as email
     *
     * Email
     *
     * @return self
     * @param string $email
     */
    public function addToEmail($email)
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * isset email
     *
     * Email
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmail($index)
    {
        return isset($this->email[$index]);
    }

    /**
     * unset email
     *
     * Email
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmail($index)
    {
        unset($this->email[$index]);
    }

    /**
     * Gets as email
     *
     * Email
     *
     * @return string[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Email
     *
     * @param string[] $email
     * @return self
     */
    public function setEmail(array $email = null)
    {
        $this->email = $email;
        return $this;
    }
}

