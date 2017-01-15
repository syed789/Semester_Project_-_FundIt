<?php

/**

*================================================================

*framework/database/Mysql.class.php

*Database operation class

*================================================================

*/

class Mysql{

    protected $conn = false;  //DB connection resources

    protected $sql;           //sql statement

   

    /**

     * Constructor, to connect to database, select database and set charset

     * @param $config string configuration array

     */

    public function __construct($config = array()){

        $host = isset($config['host'])? $config['host'] : 'localhost';

        $user = isset($config['user'])? $config['user'] : 'root';

        $password = isset($config['password'])? $config['password'] : 'root';

        $dbname = isset($config['dbname'])? $config['dbname'] : 'LORA';

        $port = isset($config['port'])? $config['port'] : '3306';

        $charset = isset($config['charset'])? $config['charset'] : 'utf-8';

       

        //$this->conn = mysql_connect("$host:$port",$user,$password) or die('Database connection error');
        $this->conn =new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        // mysql_select_db($dbname) or die('Database selection error');

       // $this->setChar($charset);

    }

    /**

     * Set charset

     * @access private

     * @param $charset string charset

     */

    private function setChar($charest){

        $sql = 'set names '.$charest;

        $this->query($sql);

    }

    /**

     * Execute SQL statement

     * @access public

     * @param $sql string SQL query statement

     * @return $result，if succeed, return resrouces; if fail return error message and exit

     */

    public function query($sql){        

        $this->sql = $sql;

        // Write SQL statement into log

        $str = $sql . "  [". date("Y-m-d H:i:s") ."]" . PHP_EOL;

        file_put_contents("log.txt", $str,FILE_APPEND);

        $result = $this->conn->exec($this->sql);

       

        if (! $result) {

            die($this->error().'<br />Error SQL statement is '.$this->sql.'<br />');

        }

        return $result;

    }

    /**

     * Get the first column of the first record

     * @access public

     * @param $sql string SQL query statement

     * @return return the value of this column

     */

    public function getOne($sql){

        $result = $this->conn->query($sql);

        $row = $result->fetch();

        if ($row) {

            return $row[0];

        } else {

            return false;

        }

    }

    /**

     * Get one record

     * @access public

     * @param $sql SQL query statement

     * @return array associative array

     */

    public function getRow($sql){

        if ($result = $this->conn->query($sql)) {

            $row = $result->fetch();

            return $row;

        } else {

            return false;

        }

    }

    /**

     * Get all records

     * @access public

     * @param $sql SQL query statement

     * @return $list an 2D array containing all result records

     */

    public function getAll($sql){

        $result = $this->conn->query($sql);

        $list = array();

        while ($row = $result->fetch()){

            $list[] = $row;

        }

        return $list;

    }

    /**

     * Get the value of a column

     * @access public

     * @param $sql string SQL query statement

     * @return $list array an array of the value of this column

     */

    public function getCol($sql){

        $result = $this->conn->query($sql);

        $list = array();

        while ($row = $result->fetch()) {

            $list[] = $row[0];

        }

        return $list;

    }


   

    /**

     * Get last insert id

     */

    public function getInsertId(){

        return  $this->conn->lastInsertId();

    }

    /**

     * Get error number

     * @access private

     * @return error number

     */

    public function errno(){

        return $this->conn->errorInfo();

    }

    /**

     * Get error message

     * @access private

     * @return error message

     */

    public function error(){

        return $this->conn->errorInfo();

    }

}