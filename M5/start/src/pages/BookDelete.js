import React from 'react';
import { Link, useNavigate, useParams } from 'react-router-dom';

function BookDelete(props) {
    const navigate = useNavigate()
    const {id} = useParams();

    const handleDelete = () => {
        let books = JSON.parse(localStorage.getItem('books'));
        books.splice(id,1);

        // Luu vao localStorage
        books = JSON.stringify(books);
        localStorage.setItem('books', books );

        // Chuyen huong /books
        navigate('/books')
    }

    return (
        <div>
            <h1>BookDelete</h1>
            <button onClick={handleDelete}> Yes </button>
            <Link to="/books">Back</Link>
        </div>
    );
}

export default BookDelete;