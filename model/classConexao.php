<?php

class Conection 
{
    private static string $table;
    private static string $join = '';

    private PDO $conection;
    private static string $dbname;
    private static string $dbhost;
    private static string $dbuser;
    private static string $dbpassword;

    public function __construct(string $table) 
    {
        self::$table = $table;
        self::setConection();
    }

    public static function config(string $dbname, string $dbhost, string $dbuser, string $dbpassword): void
    {
        self::$dbname     = $dbname;
        self::$dbhost     = $dbhost;
        self::$dbuser     = $dbuser;
        self::$dbpassword = $dbpassword;
    }

    public static function setConection(): void
    {
        try {
            self::$conection = new PDO("mysql:dbname=".self::$dbname.";host=".self::$dbhost, self::$dbuser, self::$dbpassword);
        } catch (\PDOException $th) {
            echo('<script>console.error("ERROR CONECTION")</script>');
        }
    }

    public static function execute(string $query, array $values = []): PDOStatement|false
    {
        try {
            $statement = self::$conection->prepare($query);
            $statement->execute($values);
            return $statement;
        } catch (\Throwable $th) {
            echo('<script>console.error("ERROR EXECUTE")</script>');
            return false;
        }
    }

    public static function join(string $foreignTable, string $match, string $joinType = "INNER JOIN"): void
    {
        self::$join .= " {$joinType} {$foreignTable} ON {$match} ";
        
    }

    public static function insert(array $values): bool
    {
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');

        $query = "INSERT INTO ".self::$table."(".implode(",", $fields).") VALUES (".implode(",", $binds).")";
        $result = self::execute($query, array_values($values));

        return gettype($result) === "object" ? true : false;
    }

    public static function select(
        string $where = null, 
        string $order = null,  
        string $limit = null, 
        string $fields = '*'
        ): PDOStatement|false
    {
        isset($where) ? $where = ' WHERE ' . $where . ' ' : $where = '';
        isset($order) ? $order = ' ORDER BY ' . $order . ' ' : $order = '';
        isset($limit) ? $limit = ' LIMIT ' . $limit . ' ' : $limit = '';
        isset(self::$join) ? $join = self::$join : $join = '';

        $query = "SELECT {$fields} FROM " . self::$table . $join . $where . $order . $limit;

        return self::execute($query);
    }

    public static function update(string $where, array $values): bool
    {
        isset($where) ? $where = ' WHERE ' . $where . ' ' : $where = '';

        $fields = array_keys($values);
        $query = "UPDATE ".self::$table." SET ".implode("=?,", $fields)."=? ". $where;
        $result = self::execute($query, array_values($values));

        return gettype($result) === "object" ? true : false;
    }

    public static function delete(string $where): bool
    {
        isset($where) ? $where = ' WHERE ' . $where . ' ' : $where = '';

        $query = "DELETE FROM ".self::$table.$where;
        $result = self::execute($query);

        return gettype($result) === "object" ? true : false;
    }
}

Conection::config('empresateste', 'localhost', 'root', '');