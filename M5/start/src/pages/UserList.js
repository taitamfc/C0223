import React, { useEffect } from 'react';
import { useDispatch, useSelector } from "react-redux";
import { FETCH_USERS } from '../redux/action';


function UserList(props) {
    const dispatch = useDispatch();

    const users = useSelector( state => state.users )
    console.log('users',users);

    useEffect( () => {
        dispatch({
            type: FETCH_USERS,
            payload: null
        })
    },[] )
    return (
        <div>
            
        </div>
    );
}

export default UserList;