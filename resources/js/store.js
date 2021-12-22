import {getLocalUser} from "./helpers/auth";

const user = getLocalUser();

export default {
    state: {
        welcomeMessage: "Welcome to Vue",
        currentUser: user,
        isLoggedIn: !!user,
        loading: false,
        auth_error: null,
    },
    getters: {
        welcome(state){
            return state.welcomeMessage
        },
        currentUser(state){
            return state.currentUser
        },
        isLoggedIn(state){
            return state.isLoggedIn
        },
        isLoading(state){
            return state.loading
        },
        authError(state){
            return state.auth_error
        },
    },
    mutations: {
        login(state){
            state.loading = true;
            state.auth_error = null;
        },
        loginSuccess(state, payload){
            state.loading = false;
            state.auth_error = null;
            state.isLoggedIn = true;
            // console.log(payload)
            var token = {
                "token": payload.token,
            }
            state.currentUser = Object.assign({}, payload.user, token);

            localStorage.setItem("user", JSON.stringify(state.currentUser));
        },
        loginFailed(state, payload){
            state.loading = false;
            // console.log(payload)
            state.auth_error = payload.res.message;
            state.isLoggedIn = false;
        },
        logout(state, payload){
            state.loading = false;
            state.auth_error = null;
            state.isLoggedIn = false;
            //
            // state.currentUser = null;
            // localStorage.removeItem("user");
        },
        currentUser(state, payload){
            state.currentUser = payload
        },
    },
    actions: {
        login(context){
            context.commit('login');
        },
        logout(context){
            context.commit('logout');
        },
    },
}
