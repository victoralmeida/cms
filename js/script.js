
function show(id){

        var botao = document.getElementsByClassName('botao');
       	var contentId = document.getElementById(id);
        var divs = document.getElementsByClassName('content');


        for(i = 0; i<divs.length; i++)
            divs[i].style.display = 'none';

       	contentId.style.display = 'block';


}
