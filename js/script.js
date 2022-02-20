

    var $cep = document.querySelector('#cep');
    const $btnMost = document.querySelector('.btnMost');
    const $btnMinus = document.querySelector('.btnMinus');

    function getFields(fieldFound)
    {
        for(const field in fieldFound)
        {
            if(document.querySelector('#' + field))
            {
                document.querySelector('#' + field).value = fieldFound[field];
            }
        }
    }

    $cep.addEventListener('blur', event =>
    {
        event.preventDefault();
        
        const getCep = async () =>
        {
            let numberCEP = $cep.value;
            const response = await fetch(`https://viacep.com.br/ws/${numberCEP}/json/`);
            return await response.json();
        }

        const cepIdentify = async result =>
        {
            result = await getCep();
            getFields(result);
        }

        cepIdentify();
    });
    function createInputPhone()
    {
        let $personalData = document.querySelector('#personalData');
        const $inputPhone = document.querySelector('.inputPhone');
        let createInputPhone = document.createElement('input');
        createInputPhone.type = `text`;
        createInputPhone.id = `phone`;
        createInputPhone.className = `numberContact inputPhone inputFormat widthInputPhone`;
        createInputPhone.name = `phone`;
        createInputPhone.placeholder = "Outro Telefone com DDD";
        createInputPhone.maxLength = `15`;
        return $personalData.insertBefore(createInputPhone,$inputPhone.nextSibling);
    }

    function removeBtn()
    {
        let $btnRemove = document.querySelector('.btnMinus');
        let btn = document.querySelector('.numberContact');
        $btnRemove ? btn.remove() : btn;
    }
    
    $btnMost.addEventListener('click', event =>
    {
        event.preventDefault();
        createInputPhone();
    });

    $btnMinus.addEventListener('click', event =>
    {
        event.preventDefault();
        removeBtn();
    });

    //FUNÇÃO DE FORMATAÇÃO DE TELEFONE
    /* Máscaras ER */
/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id(el){
	return document.getElementById(el);
}
window.onload = function(){
	id('phone').onkeyup = function(){
		mascara(this, mtel);
	}
}