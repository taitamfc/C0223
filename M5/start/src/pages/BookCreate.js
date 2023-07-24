import { Field, Form, Formik } from 'formik';
import React, { useState } from 'react';
import * as Yup from "yup";

const SignupSchema = Yup.object().shape({
    name: Yup.string()
      .required("Required"),
    price: Yup.string()
      .required("Required")
  });

function BookCreate(props) {
    const [form,setForm] = useState({
        name: '',
        price: 0
    });

    const handleSubmit = (data) => {

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
                        <label htmlFor="name">First Name</label>
                        <Field name="name" />
                        {errors.name && touched.name ? (
                            <div>{errors.name}</div>
                        ) : null}
                        <label htmlFor="price">Price</label>

                        <Field name="price" />
                        {errors.price && touched.price ? (
                            <div>{errors.price}</div>
                        ) : null}
                        <button type="submit">Submit</button>
                    </Form>
                )}
            </Formik>
        </div>
    );
}

export default BookCreate;