document.getElementById('WHYYY').click();

function abrirTab(event, idTab) {
    var conteudos =  document.getElementsByName('conteudo');

    for (var i = 0; i < conteudos.length; i++) {
        conteudos[i].style.display = 'none';
    }

    var tabs = document.getElementsByName('tab-buttons');
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].className = 'tab-button';
    }

    document.getElementById(idTab).style.display='block';
    event.currentTarget.className = 'tab-button-active'
}