/**
 * Created by correa on 15/11/2016.
 */
for (var posicaoAtual = 0; posicaoAtual<=trsPacientes.length -1;posicaoAtual ++) {
    var pacienteTr = trsPacientes[posicaoAtual];

    var tdNome = pacienteTr.getElementsByClassName("info-nome")[0];
    var tdPeso = pacienteTr.getElementsByClassName("info-peso")[0];
    var tdaltura = pacienteTr.getElementsByClassName("info-altura")[0];

    var pacienteAtual = {
        nome: tdNome.textContent,
        peso: tdPeso.textContent,
        altura: tdaltura.textContent,
        pegaImc: function () {
            if (this.altura!= 0){
                var imc = this.peso / (this.altura * this.altura);
                return imc;
            }else{
                console.log ("Não executei porque é igual a zero");
            }

        }
    };
    console.log(pacienteAtual.nome);
}
