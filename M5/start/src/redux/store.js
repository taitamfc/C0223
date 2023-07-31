import { createStore } from "redux";
// import { configureStore } from '@reduxjs/toolkit'
// import {SET_CART,GET_CART} from './action'
import rootReducer from './reducer';
const store = createStore(rootReducer);

// theo dõi trạng thái
store.subscribe(() => {
    console.log(store.getState())
});

// Export ra để dùng ở các component
export default store;