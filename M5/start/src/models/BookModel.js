import axios from "axios";

class BookModel {

    constructor(){
        this.api_url = 'https://jsonplaceholder.typicode.com/';
    }

    all(){
        return new Promise( (resolve, reject) => {
            axios.get( this.api_url + 'users' )
            .then( (res) => {
                resolve(res.data)
            }).catch( (err) => {
                reject(err)
            } )
        })   
    }

    async find(id){
        const data = await axios.get(this.api_url + 'users/' + id);
        return data.data;
    }

    store(data){

    }

    update(id,data){

    }

    delete(id){

    }
}
export default new BookModel();