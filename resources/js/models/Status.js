import Axios from "axios";

class Status{
    static find(id) {
        return axios.get('/statuses/' + id)
    }

    static all(then){
        return axios.get('/statuses')
        .then(( {data} ) => then(data))
    }
}

export default Status;