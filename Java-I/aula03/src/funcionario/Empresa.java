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
public class Empresa {
    String nome;
    String cnpj;
    Funcionario [] funcionarios;
    int livre = 0;
    public void adiciona(Funcionario f){
        this.funcionarios[this.livre] = f;
        this.livre ++;
    }
    public void mostraEmpregados(){
         for (Funcionario fucionarioAtual:this.funcionarios){
             if (fucionarioAtual == null){
                 continue;
             }
             System.out.println("Funcionairo: "+ fucionarioAtual.nome);
             System.out.println("Salario:"+ fucionarioAtual.salario);
             
        }
    }
    public void mostraTodasAsInformacoes(){
        for (Funcionario fucionarioAtual : this.funcionarios){
            if (fucionarioAtual == null){
                continue;
            }
            fucionarioAtual.mostra();
        }
    }
    boolean contem(Funcionario f) {
        boolean tem = false;
          for (Funcionario fucionarioAtual: this.funcionarios){
             if (fucionarioAtual == f) {
                tem =true;
                      }
            
                
        }
        return tem;
    } 
}
