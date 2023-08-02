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
      <div className="default-value">0</div>
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
    </div>
  );
}

export default App;
