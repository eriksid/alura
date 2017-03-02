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
    f1.dataDeEntrada= new Data();
    f1.dataDeEntrada.preencheData(1, 1, 2016);
    empresa1.adiciona(f1);
    
    Funcionario f2 = new Funcionario();
    f2.nome = "Maria";
    f2.salario = 1500.0;
    f2.dataDeEntrada= new Data();
    f2.dataDeEntrada.preencheData(1, 1, 2016);
    empresa1.adiciona(f2);
    
    Funcionario f3 = new Funcionario();
    f3.nome = "Maria Eduarda";
    f3.salario = 1600.0;
    f3.dataDeEntrada= new Data();
    f3.dataDeEntrada.preencheData(5, 5, 2016);
    
    empresa1.mostraTodasAsInformacoes();
    empresa1.mostraEmpregados();
        System.out.println(empresa1.contem(f3));
    
    }
}
