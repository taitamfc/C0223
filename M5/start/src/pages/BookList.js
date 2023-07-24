import React, { useState } from 'react';

function BookList(props) {
    const [books,setBooks] = useState([]);

    return (
        <div>
            <h1>BookList</h1>
            <table border={1}>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>

                {
                    books.map( (book, index) => (
                        <tr>
                            <th>{ index }</th>
                            <th>{ index.name }</th>
                            <th>{ index.price }</th>
                            <th>
                                
                            </th>
                        </tr>
                    ))
                }
            </table>
        </div>
    );
}

export default BookList;