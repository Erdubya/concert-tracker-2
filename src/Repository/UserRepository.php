<?php


namespace App\Repository;


use App\Entity\User;

class UserRepository
{
    /**
     * @var \PDO
     */
    private $dbc;

    /**
     * UserRepository constructor.
     *
     * @param \PDO $dbc
     */
    public function __construct(\PDO $dbc)
    {
        $this->dbc = $dbc;
    }


    public function findAll() : array
    {
        $result = $this->dbc->query("SELECT * FROM users;")->fetchAll(\PDO::FETCH_ASSOC);
        $users  = [];
        foreach ($result as $row) {
            $user = new User();
            $user->setId($row['id']);
            $user->setEmail($row['email']);
            $user->setPassword($row['password']);
            $user->setFirstName($row['firstname']);
            $user->setLastName($row['lastname']);
            $users[] = $user;
        }

        return $users;
    }

    public function findById(int $id) : ?User
    {
        $query = $this->dbc->prepare("SELECT * FROM users WHERE id=?");
        if ($query->execute([$id])) {
            $result = $query->fetch(\PDO::FETCH_ASSOC);
            if ( ! empty($result)) {
                $user = new User();
                $user->setId($result['id']);
                $user->setEmail($result['email']);
                $user->setPassword($result['password']);
                $user->setFirstName($result['firstname']);
                $user->setLastName($result['lastname']);

                return $user;
            }
        }

        return null;
    }

    public function findByEmail(string $email) : ?User
    {
        $query = $this->dbc->prepare("SELECT * FROM users WHERE email=?");
        if ($query->execute([$email])) {
            $result = $query->fetch(\PDO::FETCH_ASSOC);
            if ( ! empty($result)) {
                $user = new User();
                $user->setId($result['id']);
                $user->setEmail($result['email']);
                $user->setPassword($result['password']);
                $user->setFirstName($result['firstname']);
                $user->setLastName($result['lastname']);

                return $user;
            }
        }

        return null;
    }
}
