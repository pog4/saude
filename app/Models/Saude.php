<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saude extends Model
{
    use HasFactory;

    function calcula_idade($nascimento) {
        $nascimento=explode('-',$nascimento); //Cria um array com os campos da data de nascimento
        $data=date('d/m/Y'); $data=explode('/',$data); //Cria um array com os campos da data atual
        $anos=$data[2]-$nascimento[0]; //ano atual - ano de nascimento
        if($nascimento[1] > $data[1]) return $anos-1; //Se o mês de nascimento for maior que o mês atual, diminui um ano
        if($nascimento[1] == $data[1])
        { //se o mês de nascimento for igual ao mês atual, precisamos ver os dias
           if($nascimento[3] <= $data[0]) {
              return $anos;
           }
           else {
               return $anos-1;
            }
        }
      return $anos;
    }

    function calcula_imc($peso, $altura) {
        return round($peso / ($altura * $altura));
    }

    function classificacao_imc($imc) {
        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc < 25) {
            return "Peso normal";
        } elseif ($imc < 30) {
            return "Acima do peso (sobrepeso)";
        } elseif ($imc < 35) {
            return "Obesidade I";
        } elseif ($imc < 40) {
            return "Obesidade II";
        } else {
            return "Obsidade III";
        }
    }
    public function sono($sonomedia){
        $idade = $_GET["datanascimento"];
        
            if ($idade < 3) {
                if ($sonomedia >= 11 && $sonomedia <= 14){
                    return "está dormindo corretamente";
                }
                return "O adequado a se dormir para você é entre 11 a 14 horas";

            }elseif ($idade <= 5) {
                if ($sonomedia >= 10 && $sonomedia <= 13){
                    return "está dormindo corretamente";
                }
                return "O adequado a se dormir para você é entre 10 a 13 horas";

            }elseif ($idade <= 13) {
                if ($sonomedia >= 9 && $sonomedia <= 11){
                    return "está dormindo corretamente";
                }
                 return "O adequado a se dormir para você é entre 9 a 11 horas";

            }elseif ($idade <= 17) {
                if ($sonomedia >= 8 && $sonomedia <= 10){
                    return "está dormindo corretamente";
                }
                 return "O adequado a se dormir para você é entre 8 a 10 horas";

            }elseif ($idade <= 64) {
                if ($sonomedia >= 7 && $sonomedia <= 9){
                    return "está dormindo corretamente";
                }
                 return "O adequado a se dormir para você é entre 9 a 11 horas";

            }elseif ($idade >= 65) {
                if ($sonomedia >= 7 && $sonomedia <= 8){
                    return "está dormindo corretamente";
                }
                 return "O adequado a se dormir para você é entre 9 a 11 horas";

            }
           
        



    }
    public function imc() {
        $valores["nome"] = $_GET["nome"];
        $valores["idade"] = $this->calcula_idade($_GET["datanascimento"]);
        $valores["peso"] = $_GET["peso"];
        $valores["altura"] = $_GET["altura"];
        $valores["imc"] = $this->calcula_imc($valores["peso"],$valores["altura"]);
        $valores["classificacaoimc"] = $this->classificacao_imc($valores["imc"]);
        $valores["sonao"] = $this->sono($valores["idade"]);
        return $valores;
    }


}
