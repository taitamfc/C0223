import {SET_CART,SET_USERS} from './action'

const initialState = {
    cart: ['Van','Su','Dia'],
    users: []
};

const rootReducer = (state = initialState, action) => {
    // Handle các actions gửi lên
    /*
        {
            type: SET_USERNAME,
            payload: 'NVA'
        }
    */
    switch (action.type) {
        case SET_CART:
            return { ...state, cart: action.payload };
            break;
        case SET_USERS:
            return { ...state, users: action.payload };
            break;
        default:
            return state;
    }
};

export default rootReducer;