import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import BookModel from '../models/BookModel';

function BookList(props) {
    const [books,setBooks] = useState([]);
    useEffect(() => {
        BookModel.all().then( (res) => {
            setBooks(res);
        }).catch(err => {
            throw err;
        });
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
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        books.map( (book, index) => (
                            <tr key={index}>
                                <th>{ index + 1 }</th>
                                <th>{ book.name }</th>
                                <th>{ book.phone }</th>
                                <th>
                                    <Link to={'/books/' + book.id + '/edit'}> Edit </Link>
                                    <Link to={'/books/' + book.id}> Show </Link>
                                    <Link to={'/books/delete/' + book.id}> Delete </Link>
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