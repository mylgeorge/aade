<?php

namespace Sofar\Aade;

/**
 * Class representing ECRTokenType
 *
 *
 * XSD Type: ECRTokenType
 */
class ECRTokenType
{
    /**
     * ECR id: Αριθμός μητρώου του φορολογικού μηχανισμού
     *
     * @var string $signingAuthor
     */
    private $signingAuthor = null;

    /**
     * Μοναδικός 6-ψήφιος κωδικός που χαρακτηρίζει την κάθε συναλλαγή
     *
     * @var string $sessionNumber
     */
    private $sessionNumber = null;

    /**
     * Gets as signingAuthor
     *
     * ECR id: Αριθμός μητρώου του φορολογικού μηχανισμού
     *
     * @return string
     */
    public function getSigningAuthor()
    {
        return $this->signingAuthor;
    }

    /**
     * Sets a new signingAuthor
     *
     * ECR id: Αριθμός μητρώου του φορολογικού μηχανισμού
     *
     * @param string $signingAuthor
     * @return self
     */
    public function setSigningAuthor($signingAuthor)
    {
        $this->signingAuthor = $signingAuthor;
        return $this;
    }

    /**
     * Gets as sessionNumber
     *
     * Μοναδικός 6-ψήφιος κωδικός που χαρακτηρίζει την κάθε συναλλαγή
     *
     * @return string
     */
    public function getSessionNumber()
    {
        return $this->sessionNumber;
    }

    /**
     * Sets a new sessionNumber
     *
     * Μοναδικός 6-ψήφιος κωδικός που χαρακτηρίζει την κάθε συναλλαγή
     *
     * @param string $sessionNumber
     * @return self
     */
    public function setSessionNumber($sessionNumber)
    {
        $this->sessionNumber = $sessionNumber;
        return $this;
    }
}

