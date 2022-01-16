function todos() {
    return {
        todos: [],
        todoTitle: '',
        todoId: '',

        get completed() {
            return this.todos.filter(todo => todo.isComplete);
        },

        get allComplete() {
            return this.todos.length === this.completed.length;
        },

        addTodo() {
            if (this.todoTitle.trim() === '') {
                return;
            }

            this.todos.push({
                id: Date.now(),
                title: this.todoTitle,
                isComplete: false,
            })

            this.todoTitle = '';
        },

        deleteTodo(id) {
            this.todos = this.todos.filter(todo => id !== todo.id);
        },

        clearCompleted() {
            this.todos = this.todos.filter(todo => ! todo.isComplete);
        },

        selectAll() {
            let allComplete = this.allComplete;

            this.todos.forEach(todo => todo.isComplete = ! allComplete);
        }

    }
}