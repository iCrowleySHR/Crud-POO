
<?php

require_once 'classConexao.php';

class Usuario
{
    public static function create(array $values): bool 
    {
        return (new Conection('usuario'))->insert([
            'email'     => $values['email'],
            'senha'     => password_hash($values['senha'], PASSWORD_BCRYPT),
            'funcional' => $values['funcional']
        ]);
    }

    public static function read(
        string $where = null, 
        string $order = null,  
        string $limit = null, 
        string $fields = '*'): array|false
    {
        $result = (new Conection('usuario'))->select($where, $order, $limit, $fields);

        return gettype($result) === "object" ? $result->fetch(PDO::FETCH_ASSOC) : false;
    }

    public static function update(string $where, array $values): bool
    {
        return (new Conection('usuario'))->update($where, [
            'email'      => $values['email'],
            'senha'      => $values['senha'],
            'funcional'  => $values['funcional']
        ]);
    }
}