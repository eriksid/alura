var titulo = document.querySelector(".titulo");
titulo.textContent = "Aparecida nutricionista";

var paciente = document.querySelector("#primeiro-paciente");
var tdPeso = paciente.querySelector(".info-peso");
var peso = tdPeso.textContent;
var tdAltura = paciente.querySelector(".info-altura");
var altura = tdAltura.textContent;
var tdImc = paciente.querySelector(".info-imc");

var pesoEhValido = true;
var alturaEhvalido = true;

if (peso <= 0 || peso >=1000){

	pesoEhValido = false;
	tdImc.textContent = "Peso invalido!";

}

if (altura <=0 || altura >=3.0) {
	alturaEhvalido = false;
	tdImc.textContent = "Altura invalida!";
}
if (pesoEhValido && alturaEhvalido){
	imc = peso / (altura * altura);
	

	tdImc.textContent = imc;

}
