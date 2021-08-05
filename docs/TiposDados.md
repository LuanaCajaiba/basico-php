# Linguagem não tipada

No PHP não é necessário a declaração de uma variável. Em PHP se atribuído o valor diretamente, pois é decido em tempo de execução pelo PHP, dependendo do contexto a qual variável é usada. 

# Diferentes tipos de dados suportados pelo PHP

Dados Básicos | Exemplo
--------------|--------
Interger      | $ano_nascimento = 1997;
Float         | $pi =3.14159265;
String        | $texto = 'O PHP é uma linguagem Server-side'
Boolean       | $sim = true;  $nao = false


Dados Compostos | Exemplo
----------------|-------
Array           | array(chave => valor,chave1 => valor1,  chave2 => valor2, ...);
Object          | $obj = (object) array('1' => 'foo');

Dados Especiais | Exemplo
----------------|-------------------
Resource        |  A função is_resource() pode ser usada para identificar se a variável é um recurso enquanto get_resource_type() pode ser utilizada para retornar o tipo de recurso. 
NULL            |  $nulo = NULL;
