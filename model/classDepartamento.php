<?php

require_once 'classConexao.php';

class Departamento
{
    public static function create(array $values): bool 
    {
        return (new Conection('departamento'))->insert([
            'nomeDepartamento' => $values['nome']
        ]);
    }

    public static function read(string $where = null, string $order = null,  string $limit = null, string $fields = '*'): array
    {
        return (new Conection('departamento'))->select($where, $order, $limit, $fields)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function update(string $where, array $values): bool
    {
        return (new Conection('departamento'))->update($where, [
            'nomeDepartamento' => $values['nome']
        ]);
    }

    public static function delete(string $where): bool
    {
        return (new Conection('departamento'))->delete($where);
    }
}