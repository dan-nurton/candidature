<?php

namespace Candidature\DAO;


class UserDAO {
    private $database;
    private $user;

    /**
     * @return mixed
     */
    public function getUser() {
        return $this->user;
    }


}