$(document).ready(function(){
    
    var page='retable.html';
//On test si c est une ancienne version de IE qui tente d acceder a l appli
    if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){ //test for MSIE x.x;
        var ieversion=new Number(RegExp.$1) // capture x.x portion and store as a number
        if (ieversion<9){
            $('a').detach();
            $('#fail').html(" Malheureusement votre navigateur n'est pas assez récent pour vous permettre d'accéder correctement à l'application.</br> Pour accéder à l'application télécharger la dernière version d'Internet Explorer <a href='http://www.microsoft.com/france/windows/internet-explorer/telecharger-ie9.aspx'>ici.</a> Vous pouvez également télécharger d'autres navigateurs comme <a href='http://www.mozilla-europe.org/fr/'>Firefox</a>&nbsp;<a href='http://www.google.com/chrome?hl=fr'>Chrome</a> ou <a href='http://www.opera.com/'>Opera</a>.")
        }else{
            $('a').attr('href', page)
        }
    }
    else
        $('a').attr('href', page)

})





