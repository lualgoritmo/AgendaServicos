

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
    
    function cloneInputPhone()
    {
        const $form = document.querySelector('form');
        const $inputOrigin = document.querySelector('.phoneNumber');
        let newInput;
        const createInput = document.createElement('input');
        createInput.placeholder = "Número de Contato";
        createInput.className = `numberContact inputPhone`;
        createInput.name = `phoneCell`;
        //var elementoInserido = elementoPai.insertBefore(novoElemento, elementoDeReferencia);
        newInput = $form.insertBefore(createInput, $inputOrigin.nextSibling);
    }
    
    function removeBtn()
    {
        $btnRemove = document.querySelector('.btnMinus');
        let btn = document.querySelector('.numberContact');
        $btnRemove ? btn.remove() : btn;
    }
    $btnMost.addEventListener('click', event =>
    {
        event.preventDefault();
        cloneInputPhone();
    });

    $btnMinus.addEventListener('click', event =>
    {
        event.preventDefault();
        removeBtn();
    });