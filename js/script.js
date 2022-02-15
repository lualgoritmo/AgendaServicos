

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
    function createPhone()
    {
        const $phoneNumber = document.querySelector('.phoneNumber');
        $phoneClone = $phoneNumber.cloneNode(true);
        $phoneNumber.append($phoneClone);
    }
    
    $btnMais.addEventListener('click', event =>
    {
        event.preventDefault();
        createPhone();
    });

