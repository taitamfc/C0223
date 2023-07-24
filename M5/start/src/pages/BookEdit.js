import { Field, Form, Formik } from 'formik';
import React, { useEffect, useState } from 'react';
import * as Yup from "yup";
import { useNavigate, useParams } from "react-router-dom";

const SignupSchema = Yup.object().shape({
    name: Yup.string()
        .required("Required"),
    price: Yup.string()
        .required("Required")
});

function BookEdit(props) {
    const navigate = useNavigate()
    const [form, setForm] = useState({
        name: '',
        price: ''
    });
    const {id} = useParams();

    useEffect( () => {
        const books = JSON.parse(localStorage.getItem('books'));
        console.log(books[id]);
        setForm( books[id] );
    },[id])


    const handleSubmit = (data) => {
        let books = JSON.parse(localStorage.getItem('books'));
        if(!books){
            books = [];
        }
        // Cap nhat phan tu dua vao chi so
        books[id] = data;

        // Luu vao localStorage
        books = JSON.stringify(books);
        localStorage.setItem('books', books );

        // Chuyen huong /books
        navigate('/books')
    }

    return (
        <div>
            <h1>BookEdit</h1>
            <Formik
                initialValues={form}
                validationSchema={SignupSchema}
                onSubmit={(values) => handleSubmit(values)}
                enableReinitialize={true}
            >
                {({ errors, touched }) => (
                    <Form>
                        <div>
                            <label htmlFor="name">Name</label>
                            <Field name="name" />
                            {errors.name && touched.name ? (
                                <div>{errors.name}</div>
                            ) : null}
                        </div>
                        <div>
                            <label htmlFor="price">Price</label>
                            <Field name="price" />
                            {errors.price && touched.price ? (
                                <div>{errors.price}</div>
                            ) : null}
                        </div>

                        <button type="submit">Submit</button>
                    </Form>
                )}
            </Formik>
        </div>
    );
}

export default BookEdit;