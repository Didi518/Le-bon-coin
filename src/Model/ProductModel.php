<?php

namespace App\Model;

use PDO;
use App\database\Database;

class ProductModel
{
    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $date;
    protected $type;
    protected $img;
    protected $dpt;
    protected $pdo;

    const TABLE_NAME = 'products';

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }

    public function findAll()
    {
        $sql = 'SELECT
                `id`
                ,`name`
                ,`description`
                ,`price`
                ,`date`
                ,`type`
                ,`img`
                ,`dpt`
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
                ,`name`
                ,`description`
                ,`price`
                ,`date`
                ,`type`
                ,`img`
                ,`dpt`
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

    public function create($name, $description, $price, $date, $type, $img, $dpt)
    {
        $sql = 'INSERT INTO ' . self::TABLE_NAME . '
            (`name`, `description`, `price`, `date`, `type`, `img`, `dpt`) VALUES
            (:name, :description, :price, :date, :type, :img, :dpt)
        ';
        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->bindValue(':name', $name, PDO::PARAM_STR);
        $pdoStatement->bindValue(':description', $description, PDO::PARAM_STR);
        $pdoStatement->bindValue(':price', $price, PDO::PARAM_STR);
        $pdoStatement->bindValue(':date', $date->format('d-m-Y H:i:s'));
        $pdoStatement->bindValue(':type', $type, PDO::PARAM_STR);
        $pdoStatement->bindValue(':img', $img, PDO::PARAM_STR);
        $pdoStatement->bindValue(':dpt', $dpt, PDO::PARAM_STR);
        $result = $pdoStatement->execute();
        if (!$result) {
            return false;
        }
        return $this->pdo->lastInsertId();
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
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

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
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of dpt
     */
    public function getDpt()
    {
        return $this->dpt;
    }

    /**
     * Set the value of dpt
     *
     * @return  self
     */
    public function setDpt($dpt)
    {
        $this->dpt = $dpt;

        return $this;
    }
}
