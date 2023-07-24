import { Field, Form, Formik } from 'formik';
import React, { useState } from 'react';
import * as Yup from "yup";
import { useNavigate } from "react-router-dom";

const SignupSchema = Yup.object().shape({
    name: Yup.string()
        .required("Required"),
    price: Yup.string()
        .required("Required")
});

function BookCreate(props) {
    const navigate = useNavigate()
    const [form, setForm] = useState({
        name: '',
        price: ''
    });

    const handleSubmit = (data) => {
        let books = JSON.parse(localStorage.getItem('books'));
        if(!books){
            books = [];
        }
        // Dua them phan tu vao mang
        books.push(data);

        // Luu vao localStorage
        books = JSON.stringify(books);
        localStorage.setItem('books', books );

        // Chuyen huong /books
        navigate('/books')
    }

    return (
        <div>
            <h1>BookCreate</h1>
            <Formik
                initialValues={form}
                validationSchema={SignupSchema}
                onSubmit={(values) => handleSubmit(values)}
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

export default BookCreate;