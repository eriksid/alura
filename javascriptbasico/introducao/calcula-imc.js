// peso / altura * altura
var tdpeso = document.getElementById("peso-2");
var tdaltua = document.getElementById("altura-2")
var peso =tdpeso.content ;
var altura = tdpeso.content;

var ehDiferenteDeZero = (altura!= 0);

if (ehDiferenteDeZero){
	var imc = peso / (altura * altura);
	console.log(imc)
}else{
	console.log ("Não executei porque é igual a zero");
}
