<?php
/**
 * Created by PhpStorm.
 * User: danny
 * Date: 10/20/17
 * Time: 10:18 PM
 */

/**
 * Class QueryResult Represents a result from querying the user cards database
 * jellyfish.
 */
class QueryResult{
    private $id = '';
    private $username = '';
    private $card = '';

    function __construct($id, $username, $card) {
        $this->id = $id;
        $this->username = $username;
        $this->card = $card;
    }

    public function getID(){
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getCard() {
        return $this->card;
    }

    public function getJSON(){
        $json = json_encode(array('id'=>$this->id,
            'username'=>$this->username,
            'card'=>$this -> card));
        return $json;
    }
}

    include("header.php");
// Echo all cards matching username.
    if (isset($_GET["u"])) {
               $username = $_GET["u"];
        $sql = "SELECT * FROM user_cards1 WHERE username = '$username'";

        $result = mysqli_query($db_conx, $sql);
        $allQueryArray = array();
        while($row = $result->fetch_assoc()){
            $id = $row["id"];
            $username = $row["username"];
            $card = $row["card"];
            array_push($allQueryArray, new QueryResult($id, $username, $card));
        }

        $jsonQueryArray = array();

        for($i=0;$i<count($allQueryArray);$i++){
            array_push($jsonQueryArray, array('card'=> $allQueryArray[$i]->getJSON()));
        }

        echo(json_encode($jsonQueryArray));
    }



    exit();


?>