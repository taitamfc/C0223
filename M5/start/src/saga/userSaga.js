import axios from "axios";
import { put, takeLatest } from "redux-saga/effects";
import { FETCH_USERS, SET_USERS } from "../redux/action";

function* getUsers(){
    const res = yield axios.get('https://jsonplaceholder.typicode.com/users');
    yield put({ type: SET_USERS, payload: res.data });
}

export default function* rootSaga() {
    yield takeLatest(FETCH_USERS, getUsers);
}

