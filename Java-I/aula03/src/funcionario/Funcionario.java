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
public class Funcionario {
    String nome;
    String departamento ;
    double salario ;
    Data dataDeEntrada;
    String rg;

    public void recebeAumento (double valor){
        
        this.salario += valor; 
    }
    public double calculaGanhoAnual(){
        return this.salario *12;
    }
    public void mostra(){
        System.out.println("Nome: "+ this.nome);
        System.out.println("Departamento: " + this.departamento);
        System.out.println("Salario: " + this.salario);
        System.out.println("Data de entrada: " + this.dataDeEntrada.dia + "/"+ this.dataDeEntrada.mes+ "/" + this.dataDeEntrada.ano);
        System.out.println("RG: " + this.rg);
        System.out.println("Ganho anual: R$" + this.calculaGanhoAnual());
    }
    
    
}
