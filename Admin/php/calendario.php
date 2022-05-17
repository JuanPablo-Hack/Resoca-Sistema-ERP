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
        $this->host     = '213.190.6.1';
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

$query = $conexion->connect()->query("SELECT * FROM ordenes INNER JOIN clientes ON ordenes.cliente = clientes.id");
$query->execute();
$json = $query->fetchAll();

$array = array();
$temparray = array();

foreach ($json as $j) {

    $temparray = array("title" => $j['concepto'], "start" => strftime('%Y-%m-%d', strtotime($j['fecha'])), "cliente" => $j['nombre'], "estado" => $j['estado'], "cantidad" => $j['cantidad']);
    array_push($array, $temparray);
}

echo json_encode($array);
