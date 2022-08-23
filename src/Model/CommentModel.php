<?php

namespace App\Model;

use PDO;
use App\database\Database;

class CommentModel
{
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $message;
    protected $date;
    protected $productId;

    const TABLE_NAME = 'Comments';

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }

    public function findAll()
    {
        $sql = 'SELECT
            `id`
            ,`firstName`
            ,`lastName`
            ,`email`
            ,`message`
            ,`date`
            ,`productId`
            FROM ' . self::TABLE_NAME . '
                ORDER BY `id` DESC;
        ';
        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $result;
    }

    public function findById($id)
    {
        $sql = 'SELECT
            `id`
            ,`firstName`
            ,`lastName`
            ,`email`
            ,`message`
            ,`date`
            ,`productId`
            FROM ' . self::TABLE_NAME . '
            WHERE `id` = :id
            ORDER BY `id` ASC;
        ';
        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);
        $result = $pdoStatement->execute();
        $result = $pdoStatement->fetchObject(self::class);
        return $result;
    }

    public function create($firstName, $lastName, $email, $message, $productId)
    {
        $sql = "INSERT INTO " . self::TABLE_NAME . "
                (`firstName`, `lastName`, `email`, `message` ,`productId`)
                VALUES ('$firstName', '$lastName', '$email','$message','$productId')";

        $pdoStatement = $this->pdo->prepare($sql);
        $result = $pdoStatement->execute();

        if (!$result) {
            return false;
        }
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of productId
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set the value of productId
     *
     * @return  self
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }
}
