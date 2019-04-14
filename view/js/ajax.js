/**
  * Função para criar um objeto XMLHTTPRequest
  */
 function CriaRequest() {
     try{
         request = new XMLHttpRequest();        
     }catch (IEAtual){
          
         try{
             request = new ActiveXObject("Msxml2.XMLHTTP");       
         }catch(IEAntigo){
          
             try{
                 request = new ActiveXObject("Microsoft.XMLHTTP");          
             }catch(falha){
                 request = false;
             }
         }
     }
      
     if (!request) 
         alert("Seu Navegador não suporta Ajax!");
     else
         return request;
 }
  
 /**
  * Função para enviar os dados
  */

function getIP(){
    const html = (await (await fetch("https://api.ipify.org/?")).text()); // html as text
    const doc = new DOMParser().parseFromString(html, 'text/html');
    return getElementsByTagName("pre").textContent
  

}



 function PostRequests(objetct, token){
      
    // Declaração de Variáveis
    var request = arguments[0]//Objeto/Dicionario do que deve ser mandado
    var result = document.getElementById("Resultado");//Onde deve aparecer a resposta
    var xmlreq = creatRequqestRequest();
    if(xmlreq != false){
        // Exibi a imagem de progresso
        result.innerHTML = '<img src="Progresso1.gif"/>';

        xmlrq.open('POST', service+"?token="+token+"&ip="+getIP());//pegando o ip e criando a requisição
        xmlrq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlrq.onload = function() {
            if (xmlreq.status == 200) {
                result.innerHTML = xmlreq.responseText;//A resposta
            }else{
                result.innerHTML = "Erro: " + xmlreq.statusText;//Caso de erro
            }
        };  
        var data = JSON.stringify(request);
        xhr.send(data);
    };

 }
