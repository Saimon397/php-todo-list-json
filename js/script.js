const { createApp } = Vue;

const app = createApp({
    data() {
        return {
            newToDoText: '',
            todoList: [],
        }
    },

    methods: {
        getTodo() {
            axios.get('server.php').then((response) => {
                this.todoList = response.data;
            });
        },

        addTodo() {
            const data = {
                newToDoText: this.newToDoText,
            }

            axios.post(
                'server.php',
                data,
                { headers: { 'Content-Type': 'multipart/form-data' } }
            ).then((response) => {
                console.log(response.data);
                this.newToDoText = '';
                this.getTodo();
            });
        },

        todoDone(i) {
            const data = {
                index: i
            };
            axios.post(
                'server.php',
                data,
                { headers: { 'Content-Type': 'multipart/form-data' } }
            ).then((response) => {
                // console.log(response.data);
                this.getTodo();
            });
        },

        deleteTodo(i) {
            const data = {
                indexDelete: i
            };
            axios.post(
                'server.php',
                data,
                { headers: { 'Content-Type': 'multipart/form-data' } }
            ).then((response) => {
                // console.log(response.data);
                this.getTodo();
            });
        }
    },

    mounted() {
        this.getTodo();
    },

}).mount('#app');