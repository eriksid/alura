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
class TestaFuncionario {

    public static void main(String[] args) {
        Funcionario f1 = new Funcionario();

        f1.setNome("Hugo");
        f1.setSalario(100.0);
        f1.dataDeEntrada = new Data();
        f1.dataDeEntrada.preencheData(10, 1, 2016);
        f1.recebeAumento(50);
        f1.mostra();

      Funcionario f3 = new Funcionario();        
        f3.setNome("Danilo");
        f3.setSalario(100.0);
      

       Funcionario f4 = new Funcionario();        
        f4.setNome("Danilo");
        f4.setSalario(100.0);

        if (f3 == f4) {
            System.out.println("iguais");
        } else {
            System.out.println("diferentes");        
        }
        Funcionario f2 = f1;
        if (f1 == f2) {
            System.out.println("iguais");
        } else {
            System.out.println("diferentes");        
        }
        
        
    }
}