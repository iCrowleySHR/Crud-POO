
<?php 
require_once 'classConexao.php';
require_once 'classUsuario.php';

class Funcionario
{
    public static function create(array $values): bool
    { 
        $funcionario = new Conection('funcionario');

        $funcionario->insert([
            'cpf'             => $values['cpf'],
            'nome'            => $values['nome'],
            'image_url'       => $values['image_url'],
            'telefone'        => $values['telefone'],
            'endereco'        => $values['endereco'],
            'codDepartamento' => $values['codDepartamento'],
            'codCargo'        => $values['codCargo'],
            'created_at'      => $values['created_at']
        ]);

        $funcionario = ($funcionario->select(null, 'funcional DESC', 1)->fetch(PDO::FETCH_ASSOC));
        $values['funcional'] = $funcionario['funcional'];

        return Usuario::create($values);
    }

    public static function read(string $where = null, string $order = null,  string $limit = null, string $fields = '*'): array
    {
        $consult = new Conection('funcionario');

        $consult->join('cargo','cargo.codCargo = funcionario.codCargo');
        $consult->join('departamento','departamento.codDepartamento = funcionario.codDepartamento');
        
        return $consult->select($where, $order, $limit, $fields)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function update(string $where, array $values): bool
    {
        return (new Conection('funcionario'))->update($where, [
            'cpf'             => $values['cpf'],
            'nome'            => $values['nome'],
            'image_url'       => $values['image_url'],
            'telefone'        => $values['telefone'],
            'endereco'        => $values['endereco'],
            'codDepartamento' => $values['codDepartamento'],
            'codCargo'        => $values['codCargo'],
            'updated_at'      => $values['updated_at']  
        ]);
    }

    public static function delete(string $where): bool
    {
        return (new Conection('funcionario'))->delete($where);
    }
}

