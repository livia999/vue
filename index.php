<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <script src="https://unpkg.com/vue@3"></script>
   
</head>
<body>
   <div id="app">

<!-- <div v-if="mostra"> Teste (❁´◡`❁) </div>
<div v-else> Teste falso </div> -->

<!--<div v-if="qnt > 30"> ingressos disponíveis </div>
<div v-else-if="qnt > 0"> ingressos quase acabando </div>
<div v-else> ingressos acabaram </div> -->

<!-- <div v-if="mostra">Teste if</div> -->
                                <!-- ambos são iguais visualmente, mas o v-if é na renderização do elemento
                                ( real ), e o false não renderiza. O v-show alterna o estilo ( mexe com css )
                                v-show se precisa alternar com muita frequência
                                v-if se for para um formulário por exemplo. -->
<!-- <div v-show="mostra">Teste</div> -->

<!-- <ul>
    <li v-for="nome in nomes">{{nome}}</li> nomes no arquivo js ( esse é um foreach ) 
                                            ex.: nomes: ["Ashe", "Jão",
                                                        "Cristhian", "Pedro", 
                                                        "Mateus", "Marco"],
</ul> -->

<!-- <ol>
    <li v-for="aluno in alunos">
        {{aluno.id}} - {{aluno.nome}}  aluno.id mostra o id ( que está no js ) 
                                       aluno.nome mostra o nome ( que está no js )
                                    ex.: alunos: [{id: 1, nome: "Abigail"},
                                         {id: 2, nome: "Alexandre"},
                                         ], 
    </li>
</ol> -->

<!-- exercício mostrando somente alunos que já tem matrícula paga
não da de usar v-for e v-if na mesma tag, porque o v-if tem prioridade, sendo executado antes
se criar uma lista, ele cria o elemento, mas não mostra, logo é melhor criar divs e um template 
<div>
    <template v-for="aluno in alunos">
        <div v-if="aluno.mat">{{aluno.nome}}</div>
    </template>
</div> -->

<!-- key organiza elementos impressos pelo v-for ou outras diretivas. ( :key="" ) 
     assim o vue reordena os elementos -->

    </div>
</body>
</html> 
<script src="index.js"></script>