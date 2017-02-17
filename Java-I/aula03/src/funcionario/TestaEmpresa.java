/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package funcionario;

/**
 *
 * @author correa
 */
public class TestaEmpresa {
    public static void main (String [] args){
    Empresa empresa1= new Empresa();
    empresa1.funcionarios = new Funcionario[10];
    
    Funcionario f1 = new Funcionario();
    f1.nome = "joao";
    f1.salario = 1000.0;
    empresa1.adiciona(f1);
    empresa1.funcionarios[0].mostra();
    }
}
