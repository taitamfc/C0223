import { useEffect, useState } from "react";
import Form from "./Form";
import BookList from "./pages/BookList";
import BookCreate from "./pages/BookCreate";
import BookEdit from "./pages/BookEdit";
import BookShow from "./pages/BookShow";
import BookDelete from "./pages/BookDelete";
import { Route, Routes } from "react-router-dom";

function App() {
  const [books,setBooks] = useState([{
    name: 'Iphone',
    price: 2000
  }]);


  return (
    <div className="App">
      <h1>Header</h1>
      <div className="content">
        <Routes>
          <Route path="books" element={<BookList books={books} />} />
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
