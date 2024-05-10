<?php

require_once 'classConexao.php';

class Cargo
{
    public static function create(array $values): bool 
    {
        return (new Conection('cargo'))->insert([
            'nomeCargo' => $values['nome']
        ]);
    }

    public static function read(string $where = null, string $order = null,  string $limit = null, string $fields = '*'): array
    {
        return (new Conection('cargo'))->select($where, $order, $limit, $fields)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function update(string $where, array $values): bool
    {
        return (new Conection('cargo'))->update($where, [
            'nomeCargo' => $values['nome']
        ]);
    }

    public static function delete(string $where): bool
    {
        return (new Conection('cargo'))->delete($where);
    }
}