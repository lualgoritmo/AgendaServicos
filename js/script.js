

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
        const $personalData = document.querySelector('#personalData');
        const $selectPhone = document.querySelector('#selectPhone');
        let newInputPhone;
        let createInputPhone = document.createElement('input');
        createInputPhone.placeholder = "Número de Contato";
        createInputPhone.className = `numberContact inputPhone inputFormat`;
        createInputPhone.name = `phone`;
        return newInputPhone = $personalData.insertBefore(createInputPhone,$selectPhone.nextSibling);
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
        //cloneInputPhone();
        createInputPhone();
    });

    $btnMinus.addEventListener('click', event =>
    {
        event.preventDefault();
        removeBtn();
    });