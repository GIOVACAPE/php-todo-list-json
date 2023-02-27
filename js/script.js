const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server/server.php',
            todoList: [],
            language: '',
        }
    },

    // funzione per AGGIUNGERE elementi nella lista

    methods: {
        addTodoList() {
            const data = {
                todoItem: this.language
            }

            axios.post(this.apiUrl, data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }).then((response) => {
                    this.language = '';
                    this.todoList = response.data;
                });
        }
    },

    // chiamo axios.get

    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.todoList = response.data;
        });
    },
}).mount('#app');