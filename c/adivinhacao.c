#include <stdio.h>
//imprime cabeçalho do nosso jogo
int main() {
	printf("****************************************\n");
	printf("*Bem vindo ao nosso jogo de adivinhação*\n");
	printf("****************************************\n");

	int numeroSecreto = 42;

	int chute;

	printf("Qual é seu chute? \n");
	scanf("%d",&chute);
	printf("Seu chute foi %d", chute );


}