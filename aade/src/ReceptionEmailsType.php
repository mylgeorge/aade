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
     * @var string $email
     */
    private $email = null;

    /**
     * Gets as email
     *
     * Email
     *
     * @return string
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
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}

