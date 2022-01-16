<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>
<body class="bg-indigo-300">
    <div class="container mx-auto max-w-sm px-4 my-6" x-data="todos()">
        <div class="bg-white shadow-lg rounded px-6 py-4">
            <h2 class="font-bold text-2xl">Todo List</h2>
            <div class="mt-4 mb-6 flex">
                <input 
                    type="text"
                    class="shadow-lg w-full border p-2"
                    x-model="todoTitle"
                    @keydown.enter="addTodo()"
                >
                <button 
                    class="bg-indigo-500 text-white rounded m-2 p-2 hover:bg-indigo-600"
                    @click="addTodo()"
                >
                    Add
                </button>
            </div>

            <ul class="mb-6">
                <template x-for="todo in todos" :key="todo.id">
                    <li class="flex items-center mt-3 justify-between border rounded bg-gray-100 shadow p-2" :class="{ 'bg-green-200' : todo.isComplete }" >
                        <div class="flex items-center" :class="{ 'line-through text-gray-500' : todo.isComplete }">
                            <input type="checkbox" x-model="todo.isComplete">
                            <div class="ml-3" x-text="todo.title"></div>
                        </div>
                        <button class="text-xl ml-2" @click="deleteTodo(todo.id)">&times;</button>
                    </li>

                </template>
            </ul>
            <button 
                    class="bg-indigo-500 text-white rounded m-2 p-2 hover:bg-indigo-600"
                    @click="selectAll()"
                    x-show="todos.length"
                >
                    Select all
                </button>
                <button 
                    class="bg-indigo-500 text-white rounded m-2 p-2 hover:bg-indigo-600"
                    @click="clearCompleted()"
                    x-show="todos.length"
                >
                    Clear all completed
                </button>
        </div>
    </div>
</body>
<script type="text/javascript" src="todo.js"></script>
</html>