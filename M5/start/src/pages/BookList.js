import React, { useEffect, useState } from 'react';

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