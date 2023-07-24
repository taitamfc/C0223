import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';

function BookList(props) {
    const [books,setBooks] = useState([]);
    useEffect(() => {
        const books = JSON.parse(localStorage.getItem('books'));
        console.log(books);
        if (books) {
            setBooks(books);
        }
    }, []);

    return (
        <div>
            <h1>BookList</h1>
            <Link to="/books/create">Create</Link>
            <table border={1} width={600}>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        books.map( (book, index) => (
                            <tr key={index}>
                                <th>{ index + 1 }</th>
                                <th>{ book.name }</th>
                                <th>{ book.price }</th>
                                <th>
                                    <Link to={'/books/' + index + '/edit'}> Edit </Link>
                                    <Link to={'/books/delete/' + index}> Delete </Link>
                                </th>
                            </tr>
                        ))
                    }
                </tbody>

            </table>
        </div>
    );
}

export default BookList;