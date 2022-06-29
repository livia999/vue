const app = Vue.createApp({
    data(){
        return{
            alunos: [{mat: false, nome: "Abigail"},
                     {mat: true, nome: "Alexandre"},
                    ],
        }
    }
}).mount('#app')