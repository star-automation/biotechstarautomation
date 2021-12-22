

/* ----------------Screen 1 Requests-------------- */
export function screen1(headers) {
    return new Promise((res, rej) => {
        const timeInterval = 5000;
        setTimeout(function (){
            axios.get('api/screen1', {headers: {Authorization: headers}})
                .then((response) => {
                    res(response.data)
                })
                .catch((err) => {
                    rej(err.message)
                })
        }, timeInterval);
    })
}

/* ----------------Screen 1 Requests-------------- */

/* ----------------Screen 2 Requests-------------- */
export function screen2(headers) {
    return new Promise((res, rej) => {
        const timeInterval = 5000;
        setTimeout(function (){
            axios.get('api/screen2', {headers: {Authorization: headers}})
                .then((response) => {
                    res(response.data)
                })
                .catch((err) => {
                    rej(err.message)
                })
        }, timeInterval);
    })
}

/* ----------------Screen 1 Requests-------------- */

/* ----------------Screen 3 Requests-------------- */
export function screen3(headers) {
    return new Promise((res, rej) => {
        const timeInterval = 5000;
        setTimeout(function (){
            axios.get('api/screen3', {headers: {Authorization: headers}})
                .then((response) => {
                    res(response.data)
                })
                .catch((err) => {
                    rej(err.message)
                })
        }, timeInterval);
    })
}
/* ----------------Screen 3 Requests-------------- */

/* ----------------Graph Reporting Requests-------------- */
// export function GraphReporting(headers) {
//     return new Promise((res, rej) => {
//         const timeInterval = 1000;
//         setTimeout(function (){
//             axios.get('api/graphreporting', {headers: {Authorization: headers}})
//                 .then((response) => {
//                     res(response.data)
//                 })
//                 .catch((err) => {
//                     rej(err.message)
//                 })
//         }, timeInterval);
//     })
// }
/* ----------------Screen 1 Requests-------------- */
/* ----------------Graph Reporting Requests-------------- */
export function PDFReporting(headers) {
    return new Promise((res, rej) => {
        const timeInterval = 1000;
        setTimeout(function (){
            axios.get('api/screen1', {headers: {Authorization: headers}})
                .then((response) => {
                    res(response.data)
                })
                .catch((err) => {
                    rej(err.message)
                })
        }, timeInterval);
    })
}
/* ----------------Screen 1 Requests-------------- */
/* ----------------Graph Reporting Requests-------------- */
export function Viewallusers(headers) {
    return new Promise((res, rej) => {
        const timeInterval = 1000;
        setTimeout(function (){
            axios.get('api/viewallusers', {headers: {Authorization: headers}})
                .then((response) => {
                    res(response.data)
                })
                .catch((err) => {
                    rej(err.message)
                })
        }, timeInterval);
    })
}
/* ----------------Screen 1 Requests-------------- */
