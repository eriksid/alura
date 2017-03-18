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
public class Data {
    private int dia;
    private int mes;
    private int ano;
    public void preencheData (int dia, int mes, int ano) {
        this.dia = dia;
        this.mes = mes;
        this.ano = ano;
    }
    public String getFormatada(){
        return this.dia + "/" + this.mes + "/" + this.ano;
    }
    
}
