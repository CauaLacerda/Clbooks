var btn = document.querySelector('.botao-fechar-cookies');
var div = document.querySelector('.aviso-cookies');

btn.addEventListener('click', function(){
    div.style.display = 'none';
});




// mostra a seta quando rolagem for maior que x
const rolagem = ()=>{
    const tela = document.querySelector('html')
    const seta = document.querySelector('.seta-sobe')
    //console.log(tela.scrollTop)
    if(tela.scrollTop > 200){
        seta.style.display = 'block'

    }else{
        seta.style.display = 'none'
    }
}
//window.addWventListener('scroll', rolagem)
window.onscroll = ()=> rolagem()


