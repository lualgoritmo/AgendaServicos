

    var $cep = document.querySelector('#cep');
    const $btnMais = document.querySelector('.btnMais');

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
        createInput.classList.add('numberContact');
        createInput.name = `phoneCell`;
        //var elementoInserido = elementoPai.insertBefore(novoElemento, elementoDeReferencia);
        newInput = $form.insertBefore(createInput, $inputOrigin.nextSibling);
        let t = document.querySelector('.numberPho');
        console.log(t);
    }

    $btnMais.addEventListener('click', event =>
    {
        event.preventDefault();
        cloneInputPhone();
    });

