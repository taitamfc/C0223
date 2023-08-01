import { createStore } from "redux";
import {SET_CART,GET_CART} from './action'
import rootReducer from './reducer';
import createSagaMiddleware from "redux-saga";
import { applyMiddleware } from "redux";
import rootSaga from "../saga/userSaga";

const sagaMiddleware = createSagaMiddleware();

// Tạo middleware myMiddleware
const myMiddleware = (store) => (next) => (action) => {
    if(action.type == SET_CART){
        action.payload = 'Ngoc';
    }else{
        next(action);
    }
};

const store = createStore(rootReducer,applyMiddleware(sagaMiddleware));

sagaMiddleware.run(rootSaga);
// theo dõi trạng thái
store.subscribe(() => {
    console.log(store.getState())
});

// Export ra để dùng ở các component
export default store;