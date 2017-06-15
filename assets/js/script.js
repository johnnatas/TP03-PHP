function busca(txt){
	if(window.XMLHttpRequest){
	    req = new XMLHttpRequest();
    }else if(window.ActiveXObject){
	    req = new ActiveXObject();
    }

    var url = "select.php?res="+txt;

    req.open("GET", url, true);

    req.onreadystatechange = function(){

        //Exibe Mensagem enquanto busca
        if(req.readyState == 1){
            document.getElementById('exibe-dados').innerHTML('Buscando...');
        }

        if(req.readyState == 4 && req.status == 200){
            var resposta = req.responseText;

            document.getElementById('exibe-dados').innerHTML = resposta;
        }

        req.send(null);

    }
}