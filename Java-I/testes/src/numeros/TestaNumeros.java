/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package numeros;

/**
 *
 * @author correa
 */
public class TestaNumeros {
    public static void main (String [] args){
    Numeros n1 = new Numeros();
    n1.n = new int [5];
    n1.n[0] =1;
    n1.n[1] =2;
    n1.n[2] =3;
    n1.n[3] =4;
    n1.n[4] =5;
    n1.imprimiN(n1.n);
    
    }
}
