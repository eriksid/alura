var titulo = document.querySelector(".titulo");
titulo.textContent = "Aparecida nutricionista";

var pacientes = document.querySelectorAll(".paciente");

for (var i = 0 ; i <pacientes.length; i++) {
	var paciente = pacientes[i];
	
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
		paciente.classList.add("paciente-invalido");

	}

	if (altura <=0 || altura >=3.0) {
		alturaEhvalido = false;
		tdImc.textContent = "Altura invalida!";
		paciente.classList.add("paciente-invalido");
	}
	if (pesoEhValido && alturaEhvalido){
		imc = peso / (altura * altura);
		

		tdImc.textContent = imc.toFixed(2);

	}
}

titulo.addEventListener("click",function() {
	console.log("Olá eu fui Cliclado")
});

var botaoAdicionar = document.querySelector("#adicionar-paciente");
botaoAdicionar.addEventListener("click",function(envent){
	event.preventDefault();
	
	var form = document.querySelector("#form-adiciona");
	nome = form.nome.value;
	peso = form.peso.value;
	altura = form.altura.value;
	gordura = form.gordura.value;

	var pacienteTr = document.createElement("tr");
	

});
	




