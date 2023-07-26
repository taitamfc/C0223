import React, { useEffect, useState } from 'react';
import BookModel from '../models/BookModel';
import { useParams } from 'react-router-dom';

function BookShow(props) {
    const {id} = useParams();
    const [book,setBook] = useState({})
    useEffect( () => {
        BookModel.find(id).then( (res) => {
            setBook(res);
        }).catch(err => {
            throw err;
        });
    },[id] );
    return (
        <div>
            <h1>BookShow</h1>
            <p> {book.id} </p>
            <p> {book.name} </p>
        </div>
    );
}

export default BookShow;