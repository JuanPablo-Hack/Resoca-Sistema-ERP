<?php
class DB
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host     = 'sql199.main-hosting.eu';
        $this->db       = 'u298097659_resoca';
        $this->user     = 'u298097659_resoca';
        $this->password = '4so|8PVj>zR';
        $this->charset  = 'utf8mb4';
    }

    function connect()
    {

        try {

            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);

            return $pdo;
        } catch (PDOException $e) {
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}

$conexion = new DB();

$query = $conexion->connect()->query("SELECT * FROM evidencias");
$query->execute();
$json = $query->fetchAll();

$array = array();
$temparray = array();

foreach ($json as $j) {

    $temparray = array("title" => $j['folio'], "start" => strftime('%Y-%m-%d', strtotime($j['creado'])), "cliente" => $j['ticket'], "estado" => $j['num_conceptos'], "cantidad" => $j['arreglo']);
    array_push($array, $temparray);
}

echo json_encode($array);
