import { useEffect, useState } from "react";
import Form from "./Form";
import BookList from "./pages/BookList";
import BookCreate from "./pages/BookCreate";
import BookEdit from "./pages/BookEdit";
import BookShow from "./pages/BookShow";
import BookDelete from "./pages/BookDelete";
import { Route, Routes } from "react-router-dom";
import UserList from "./pages/UserList";

function App() {
 
  return (
    <div className="App">
      <h1>Header</h1>
      <div className="content">
        <Routes>
          <Route path="/" element={<UserList/>} />
          <Route path="books" element={<BookList/>} />
          <Route path="books/create" element={<BookCreate />} />
          <Route path="books/delete/:id" element={<BookDelete />} />
          <Route path="books/:id/edit" element={<BookEdit />} />
          <Route path="books/:id" element={<BookShow />} />
        </Routes>
      </div>
      <h1>Footer</h1>
      
    </div>
  );
}

export default App;
