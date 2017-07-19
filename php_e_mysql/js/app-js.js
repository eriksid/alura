/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 var itens = '';

$(document).ready(function () { 
        
        $('#btn1').click(function(){
        	
        	$.ajax({
        		url: 'testeAjax.php',
        		dataType: 'json'  ,
                beforeSend: function(){
                    $("h2").html("Carregando..."); 
                },

        		success: function(response){
        		$.each(response, function(i, item) {
                itens += '<tr>';
                itens += '<td>'+ item.id +'</td>';
                itens += '<td>'+ item.nome +'</td>';
                itens += '<td>'+ item.preco +'</td>';
                itens += '<td>'+ item.descricao +'</td>';
                itens += '<td>'+ item.categoria_nome +'</td>';
                itens += '</tr>';
                });
                $('#tabela').html(itens);
                $("h2").html("Carregado"); 
        		}
        	});
    });
});


