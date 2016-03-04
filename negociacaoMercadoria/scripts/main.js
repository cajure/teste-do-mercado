function formValidate(){
	var codMercadoria = document.getElementById("codMercadoria").value;
	var nome = document.getElementById("nome").value;
	var preco = document.getElementById("preco").value;
	var quantidade = document.getElementById("quantidade").value;
	var tipoMerc = document.getElementById("tipoMerc").value;
	var tipoNeg = document.getElementById("tipoNeg").value;	
	
	var formValidated = true;
	//Código da Mercadoria
	if (codMercadoria == ""){
		formValidated = false;
		setStatus("codMercadoria",false,"Campo vazio!");		
	}else
		setStatus("codMercadoria",true,"");
		
	//Nome
	if (nome == ""){
		formValidated = false;
		setStatus("nome",false,"Campo vazio!");		
	}
	else if (!caracterOnly(nome)){
		formValidated = false;
		setStatus("nome",false,"Digite somente caracteres!");
	}
	else
		setStatus("nome",true,"");
		
	//Preço
	if (preco == ""){
		formValidated = false;
		setStatus("preco",false,"Campo vazio!");
	}else if(isNaN(preco)){
		formValidated = false;
		setStatus("preco",false,"Somente números!");
	}else
		setStatus("preco",true,"");
		
	//Quantidade
	if (quantidade == ""){
		formValidated = false;
		setStatus("quantidade",false,"Campo vazio!");		
	}else if(isNaN(quantidade)){
		formValidated = false;
		setStatus("quantidade",false,"Somente números!");
	}else
		setStatus("quantidade",true,"");
		
	//Tipo de Mercadoria
	if (tipoMerc == ""){
		formValidated = false;
		setStatus("tipoMerc",false,"Campo vazio!");		
	}
	else if (!caracterOnly(tipoMerc)){
		formValidated = false;
		setStatus("tipoMerc",false,"Digite somente caracteres!");
	}
	else
		setStatus("tipoMerc",true,"");
	
	if(formValidated)
	{
		document.forms["form1"].submit();
	}
}


///Método:Define um feedback de acordo com o valor informado
///Parâmetros:
///		control: Nome do campo validado
///     isValidate: Se o campo foi validado
///     msg: Uma mensagem, caso não esteja validado
function setStatus(control, isValidate,msg){
	if(isValidate)
		setSuccess(control);
	else
		setError(control,msg);
}

function setSuccess(control){
	 document.getElementById(control.concat("Status")).innerHTML = "";
	 document.getElementById(control.concat("Status")).className = "sr-only";
	 document.getElementById(control.concat("Group")).className = "form-group has-success has-feedback";
	 document.getElementById(control.concat("IconStatus")).className ="glyphicon glyphicon-ok form-control-feedback";
	
}
function setError(control,msg){
	 document.getElementById(control.concat("Status")).innerHTML = msg;
	 document.getElementById(control.concat("Status")).className = "";
	 document.getElementById(control.concat("Group")).className = "form-group has-error has-feedback";
	 document.getElementById(control.concat("IconStatus")).className ="glyphicon glyphicon-remove form-control-feedback";
}

//Validação caracteres
function caracterOnly(nome){
	var alphaExp = /^[a-zA-Z]+$/; 
	return alphaExp.test(nome);  
}
	
//Vincula os eventos aos controles no load do form
function initialComponent(){
	var btn = document.getElementById("salvarBtn");
	btn.addEventListener("click", formValidate,false);
}

