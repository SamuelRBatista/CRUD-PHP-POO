function fn_principal(){
	$('.form_principal') .submit(function(){
	return confirm("Click OK para confirmar?");

	});


}
function load_modal(nome,descricao,quantidade,preco,data){
	$('#text_nome').val(nome);
	$('#test_descricao').val(descricao);
}