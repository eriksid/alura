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
    private String nome;
    private String departamento ;
    private double salario ;
    public Data dataDeEntrada;
    private String rg;

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
        System.out.println("Data de entrada: " + this.dataDeEntrada.getFormatada());
        System.out.println("RG: " + this.rg);
        System.out.println("Ganho anual: R$" + this.calculaGanhoAnual());

    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getDepartamento() {
        return departamento;
    }

    public void setDepartamento(String departamento) {
        this.departamento = departamento;
    }

    public double getSalario() {
        return salario;
    }

    public void setSalario(double salario) {
        this.salario = salario;
    }

    public String getRg() {
        return rg;
    }

    public void setRg(String rg) {
        this.rg = rg;
    }
    
    
}
