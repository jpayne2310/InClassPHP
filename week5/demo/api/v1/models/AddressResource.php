c<?php

class AddressResource extends DBSpring implements IRestModel {

    public function getAll() {
        $stmt = $this->getDb()->prepare("SELECT * FROM address");
        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $results;
    }
    public function get($id) {

        $stmt = $this->getDb()->prepare("SELECT * FROM address "
                . "where address_id = :address_id");
        $binds = array(":address_id" => $id);

        $results = array();
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return $results;
    }
    public function post($serverData) {
        /* note you should validate before adding to the data base */
        $stmt = $this->getDb()->prepare("INSERT INTO address SET "
                . "fullname = :fullname, email = :email, "
                . "addressline1 = :addressline1, city = :city, "
                . "state = :state, zip = :zip, birthday = :birthday");
        $binds = array(
            ":fullname" => $serverData['fullname'],
            ":email" => $serverData['email'],
            ":addressline1" => $serverData['addressline1'],
            ":city" => $serverData['city'],
            ":state" => $serverData['state'],
            ":zip" => $serverData['zip'],
            ":birthday" => $serverData['birthday']
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }
    public function put($serverData, $id) {
        /* note you should validate before adding to the data base */
        $stmt = $this->getDb()->prepare("UPDATE address SET "
                . "fullname = :fullname, email = :email, "
                . "addressline1 = :addressline1, city = :city, "
                . "state = :state, zip = :zip, birthday = :birthday "
                . "where address_id = :address_id");
        $binds = array(
            ":address_id" => $id,
            ":fullname" => $serverData['fullname'],
            ":email" => $serverData['email'],
            ":addressline1" => $serverData['addressline1'],
            ":city" => $serverData['city'],
            ":state" => $serverData['state'],
            ":zip" => $serverData['zip'],
            ":birthday" => $serverData['birthday']
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }
    public function delete($id) {
        $stmt = $this->getDb()->prepare("DELETE FROM address "
                . "where address_id = :address_id");
        $binds = [":address_id" => $id];
        error_reporting(E_ERROR);
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = true;
        } else {
            $results = false;
        }
        return $results;
    }
}
