export function login(credentials) {
    return new Promise((res, rej) => {
        axios.get('/sanctum/csrf-cookie').then(response => {
            // Login...
            axios.post('api/login', credentials)
                .then((response) => {
                    res(response.data)
                })
                .catch((err) => {
                    rej(err.message)
                })
        });
    })
}

export function logout(headers) {
    return new Promise((res, rej) => {
        axios.delete('api/logout', {headers: {Authorization: headers}})
            .then((response) => {
                res(response.data)
            })
            .catch((err) => {
                rej(err.message)
            });
    })
}

export function getLocalUser() {
    const userStr = localStorage.getItem("user");

    if (!userStr) {
        return null
    }

    return JSON.parse(userStr);
}
