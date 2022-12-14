<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Concurso</title>
        @stack('css')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .form-input{
                height: 40px;
                width: 100%;
                border-radius: 7px;
                padding: 10px;
                font-size: 15px;
            }
            .row{
                display: flex;
                padding: 10px;
                width: 100%;
                float: left;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: flex-start;
            }
            .col-12, .container , .container-header, .container-body
            {
                width: 100% !important;
                padding: 5px;
            }
            .col-2
            {
                width:16.5% !important;
                padding: 5px;
            }
            .col-3{
                width: 20% !important;
                padding: 5px;
            }
            .col-4{
                width: 25% !important;
                padding: 5px;
            }
            .col-5{
                width:33.3% !important;
                padding: 5px;
            }
            .col-sm{
                width:35% !important;
                padding: 5px;
            }
            .col-6{
                width: 50% !important;
                padding: 5px;
            }
            .col-8{
                width: 65% !important;
                padding: 5px;
            }

            hr {
                height: 1px;
                background: #afb4b7;
                width: 100%;
            }
            .right{
                text-align: end;
            }

            button, a{
                width: 150px;
                border-radius: 10px;
                height: 35px;
                padding: 10px;
            }
            .primary{
                background-color: #00b73e;
                color: #fff;
                font-weight:500;
            }
            .secondary{
                background-color: #00be;
                color: #fff;
                font-weight:500;
            }
            button,a:hover{
                background-color: #004700;
            }

            .container-body {
                display: flex;
                flex-wrap: wrap;
                text-align: center;
                margin: 5px;
            }
            .card-header {
                padding: 10px;
                font-weight: bold;
                font-size: 16pt;
            }
            .card-body {
                padding: 10px;
                color: #fff;
            }
            .card {
                width: 32%;
                border-radius: 25px;
                margin: 5px;
            }

            .card:hover{
                background-color: #989ca1
            }
            .initial{
                    text-align: initial;
                }

            .hide{
                display: none;
            }
            @media screen and (max-width: 600px){
                .col-2,.col-3,.col-4,.col-5,.col-6,.col-12, .col-8,.card, .col-sm{
                    width:100% !important;
                }

                .itens a.primary.noprint {
                    margin: 6px;
                }
                .itens a.secondary.noprint {
                    margin: 6px;
                }
                .itens {
                    display: flex;
                    flex-wrap: wrap;
                    text-align: center;
                    justify-content: center;
                }
            }

            @media print {
            .noprint { display:none; }
            body { background: #fff; }
            }

        </style>

    </head>
    <body class="antialiased">

@auth()


    @include('layouts.componentes.topo')
    @include('layouts.componentes.menu')

        <div class="content">
            @yield('content')
        </div>
    @include('layouts.componentes.rodape')

@else

    @include('layouts.componentes.topo')
    @include('layouts.componentes.menu')

        <div class="container">
            @yield('content')
        </div>
    @include('layouts.componentes.rodape')

@endauth

</body>
</html>
<script>
    var estados = document.getElementById('estado');
    var cidades = document.getElementById('cidade');

    var cpf = document.getElementById('cpf');

    var nome = document.getElementById('nome');

    var cargos = document.getElementById('cargo');

    estados.addEventListener( 'change',function(){
        buscaCidades((this).value);
    });

    cpf.addEventListener('input', function(){
            this.value = this.value.replace(/\D/g, '');
            this.value = this.value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})$/, '$1.$2.$3-$4');

    });

    nome.addEventListener('input', function(){
        var nome = document.getElementById("nome").value;

        var padrao = /[^a-z??-?? ]/gi;

        var valida_nome = nome.match(padrao);

            if( valida_nome || !nome ){
                alert("Aten????o: Nome possui caracteres inv??lidos ou ?? vazio");
            }
    });


    cidades.addEventListener( 'change',function(){
        buscaCargos((this).value);
    });

    function buscaCidades(id)
    {
    fetch("http://localhost:8080/api/v1/public/" + id,{
        method: "GET",
        headers:{ 'Content-type': "aplication/json"},
        // body: JSON.stringify(data),
    }).then((response) => response.json())
    .then((data) => {
        // console.log('success:', data);
        preencheCidades(data);
    })
    .catch((error) =>{
        // alert("Aten????o:", error);
    });

    }

    function buscaCargos(id)
    {
    fetch("http://localhost:8080/api/v1/cargos/" + id,{
        method: "GET",
        headers:{ 'Content-type': "aplication/json"},
        // body: JSON.stringify(data),
    }).then((response) => response.json())
    .then((data) => {
        // console.log('success:', data);
        preencheCargos(data);
    })
    .catch((error) =>{
        // alert("Aten????o:", error);
    });

    }

    function preencheCidades(data)
    {
      limpaSelect(cidades);
        data.forEach((element) => {
            option = new Option(element.nome,element.cidade_id);
            cidades.options[cidades.options.length] = option;
        });

    }

    function preencheCargos(data)
    {
    console.log(data);
      limpaSelect(cargos);
        data.forEach((element) => {
            option = new Option(element.cargo,element.cargo);
            cargos.options[cargos.options.length] = option;
        });

    }

    function limpaSelect(select)
    {
        select.options.length = 0;
        option = new Option("Selecione ...","");
            select.options[select.options.length] = option;
    }



var validacpf = document.getElementById('cpf');

validacpf.addEventListener('input', function(){
    if((this).value.length >=11)
        if(!TestaCPF((this).value))
            alert('cpf invalido');
            // (this).value = '';
});

function TestaCPF(cpf) {
    cpf = cpf.replace(/[^\d]+/g,'');
	if(cpf == '') return false;

	// Elimina CPFs invalidos conhecidos
	if (cpf.length != 11 ||
		cpf == "00000000000" ||
		cpf == "11111111111" ||
		cpf == "22222222222" ||
		cpf == "33333333333" ||
		cpf == "44444444444" ||
		cpf == "55555555555" ||
		cpf == "66666666666" ||
		cpf == "77777777777" ||
		cpf == "88888888888" ||
		cpf == "99999999999")
			return false;
	// Valida 1o digito
	add = 0;

	for (i=0; i < 9; i ++)
		add += parseInt(cpf.charAt(i)) * (10 - i);
		rev = 11 - (add % 11);
		if (rev == 10 || rev == 11)
			rev = 0;
		if (rev != parseInt(cpf.charAt(9)))
			return false;
	// Valida 2o digito

	add = 0;
	for (i = 0; i < 10; i ++)
		add += parseInt(cpf.charAt(i)) * (11 - i);
	rev = 11 - (add % 11);
	if (rev == 10 || rev == 11)
		rev = 0;
	if (rev != parseInt(cpf.charAt(10)))
		return false;
	return true;
}


</script>
