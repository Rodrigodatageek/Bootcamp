import React, {useState, useRef, useEffect} from "react";
import TodoList from "./TodoList";
import { v4 as uuidv4 } from 'uuid'
import Todo from './Todo'

const LOCAL_STORAGE_KEY = 'todoApp.todos'


function App() {
  const [todos, setTodos] = useState([])
  const todoNameRef = useRef();

//
  useEffect(() => {
    const storedTodos = JSON.parse(localStorage.getItem(LOCAL_STORAGE_KEY))
    if (storedTodos) setTodos(storedTodos)

  }, [])

  useEffect(() => {
    localStorage.setItem(LOCAL_STORAGE_KEY, JSON.stringify(todos))
  }, [todos])


  function toggleTodo(id) {
    const newTodos = [...todos]
    const todo = newTodos.find(todo => todo.id === id)
    todo.completed = !todo.completed
    setTodos(newTodos)
  }

  function handleAddTodo(e) {
    const name = todoNameRef.current.value
    if(name === '') return
    setTodos(prevTodos => {
      //uuid function to generate random Keys.
      return [...prevTodos, { id: uuidv4(), name: name, complete: false}]
    })
    //clear imput field evertime the add button is clicked
    todoNameRef.current.value = null

  }



  return (
  <>
    <TodoList todos={todos} toggleTodo={toggleTodo}/>
    <input ref={todoNameRef} type='text'/>
    <button onClick={handleAddTodo}>Add Todo</button>
    <button>Clear Completed</button>
    <div>0 left to do</div>
  </>
  )
}

export default App;
