import React from 'react';

function Form(props) {
    return (
        <div className='container'>
            <form>
                <div className="mb-3">
                    <label className="form-label">
                        Email address
                    </label>
                    <input
                        type="email"
                        className="form-control is-invalid"
                    />
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
                <div className="mb-3">
                    <label className="form-label">
                        Password
                    </label>
                    <input
                        type="password"
                        className="form-control"
                        id="exampleInputPassword1"
                    />
                </div>
                <div className="mb-3 form-check">
                    <input type="checkbox" className="form-check-input" id="exampleCheck1" />
                    <label className="form-check-label" htmlFor="exampleCheck1">
                        Check me out
                    </label>
                </div>
                <button type="submit" className="btn btn-primary">
                    Submit
                </button>
            </form>

        </div>
    );
}

export default Form;