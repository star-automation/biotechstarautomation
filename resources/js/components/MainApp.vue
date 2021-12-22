<template>
        <div id="main" >
        <div class="row" id="change-row" v-if="currentUser" style="">
<!--            <div v-if="collapsed" class="col-md-1">-->
<!--                <template>-->
<!--                    <sidebar-menu class="sidebar"-->
<!--                                  :menu="menu"-->
<!--                                  :width="'inherit'"-->
<!--                                  :hideToggle="true"-->
<!--                                  @item-click="onItemClick"-->
<!--                                  @toggle-collapse="onCollapse">-->
<!--                    </sidebar-menu>-->
<!--                </template>-->
<!--            </div>-->
            <div class="col-md-12 custom-top-menu" style="padding-right:0px;">
                <template>
                    <div>
                        <b-navbar class="navbar-expand" style="background-color: #212529 !important;" toggleable="lg" type="dark" variant="info">
                            <b-navbar-brand href="/"><img src="images/logo.png" style="width: 72px; position: absolute; top: 0px;"></b-navbar-brand>
                            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
                            <b-collapse id="nav-collapse" is-nav style="margin-left: 75px;">
                                <b-navbar-nav>
                                    <router-link class="nav-link" to="/">Home</router-link>
                                    <b-nav-item-dropdown text="Screens" right>
                                        <b-dropdown-item to="/screen1" style="/*border-bottom: 1px solid black*/">Pre Esterification</b-dropdown-item>
                                        <b-dropdown-item to="/screen2" >Methanol Recovery</b-dropdown-item>
                                        <b-dropdown-item to="/screen3" >Trans Esterification</b-dropdown-item>
                                        <b-dropdown-item to="/screen4" >Distillation Section</b-dropdown-item>
                                        <b-dropdown-item to="/screen5" >Cooling Tower</b-dropdown-item>
                                        <b-dropdown-item to="/screen6" >Boiler</b-dropdown-item>
                                    </b-nav-item-dropdown>
<!--                                    <b-nav-item-dropdown text="Graph Reports" right v-if="currentUser.role == 1 || currentUser.role == 2">-->
<!--                                        <b-dropdown-item to="/graphreporting" >RTD Graph Report</b-dropdown-item>-->
<!--                                        <b-dropdown-item to="/rdlgraphreport" >RDL Graph Report</b-dropdown-item>-->
<!--                                        <b-dropdown-item to="/dplgraphreport" >DPL Graph Report</b-dropdown-item>-->
<!--                                        <b-dropdown-item to="/ptgraphreport" >PT Graph Report</b-dropdown-item>-->
<!--                                        <b-dropdown-item to="/fmgraphreport" >FM Graph Report</b-dropdown-item>-->
<!--                                        <b-dropdown-item to="/vggraphreport" >VG Graph Report</b-dropdown-item>-->
<!--                                        <b-dropdown-item to="/multigraph" >Multi Graph</b-dropdown-item>-->
<!--                                    </b-nav-item-dropdown>-->
                                    <b-nav-item-dropdown text="PDF Reports" right v-if="currentUser.role == 1 || currentUser.role == 2">
<!--                                        <b-dropdown-item to="/pdfreporting" >RTD Report</b-dropdown-item>-->
<!--                                        <b-dropdown-item to="/rdlpdfreport" >RDL Report</b-dropdown-item>-->
<!--                                        <b-dropdown-item to="/dplpdfreport" >DPL Report</b-dropdown-item>-->
                                        <b-dropdown-item to="/ptpdfreport" >PT Report</b-dropdown-item>
                                        <b-dropdown-item to="/vgpdfreport" >VG Report</b-dropdown-item>
<!--                                        <b-dropdown-item to="/fmpdfreport" >FM Report</b-dropdown-item>-->
<!--                                        <b-dropdown-item to="/flowtotalizepdfreport" >Flow Totalizer</b-dropdown-item>-->
                                        <b-dropdown-item to="/pumponoffreport" >Pump ON/OFF Report</b-dropdown-item>
                                    </b-nav-item-dropdown>
                                    <b-nav-item-dropdown text="Multiple Reporting" right v-if="currentUser.role == 1 || currentUser.role == 2">
                                        <b-dropdown-item to="/saveselectionreport" >Saved Selection</b-dropdown-item>
                                        <b-dropdown-item to="/multiplereporting" >Show Report</b-dropdown-item>
                                        <b-dropdown-item to="/multireportavg" >MultiReport Avg</b-dropdown-item>
                                    </b-nav-item-dropdown>
                                    <router-link class="nav-link" to="/multigraph">Multi Graph</router-link>
                                    <b-nav-item-dropdown text="User Management" right v-if="currentUser.role == 1">
                                        <b-dropdown-item to="/addusers" >Add User</b-dropdown-item>
                                        <b-dropdown-item to="/viewallusers" >View Users</b-dropdown-item>
                                    </b-nav-item-dropdown>
                                    <b-nav-item-dropdown text="PDF Upload" right >
                                        <b-dropdown-item to="/uploadreport" >Add New File</b-dropdown-item>
                                        <b-dropdown-item to="/showupload" >Show Files</b-dropdown-item>
                                    </b-nav-item-dropdown>
                                    <b-nav-item-dropdown text="Cataltst Cal" right >
                                        <b-dropdown-item to="/calculationeng" >Engeenier Cal</b-dropdown-item>
                                        <b-dropdown-item to="/calculationmanag" >Management Cal</b-dropdown-item>
                                    </b-nav-item-dropdown>
                                    <router-link class="nav-link" to=""></router-link>
                                    <a class="nav-link" href="#"  v-on:click="onItemClick">Logout</a>

                                </b-navbar-nav>
                            </b-collapse>
                        </b-navbar>
                    </div>
                </template>
            </div>
            <div v-if="collapsed" class="col-md-10">
                <!--                    <div class="row">-->
                <!--                        <div class="col-md-12" style="margin-right: 10px">-->
                <!--                            -->
                <!--                        </div>-->
                <!--                    </div>-->
                <div class="content">
                    <router-view></router-view>
                </div>
            </div>
            <div v-else class="col-md-12" style="padding:0px;">
                <!--                <div class="row">-->
                <!--                    <div class="col-md-12" style="margin-left: 20px">-->
                <!--                        -->
                <!--                    </div>-->
                <!--                </div>-->
                <div class="content">
                    <router-view></router-view>
                </div>
            </div>
        </div>
        <div class="row  justify-content-center align-items-center" v-else style="margin-left: 0; margin-right: 0; background-image: url('images/control.jpg');background-repeat:no-repeat;background-position: center;background-size: cover; width: 1920px; height: 978px;">
            <div class="content col-md-12" style="height:831px">
                <div class="justify-content-center">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import {SidebarMenu} from "vue-sidebar-menu";
import {logout} from "../helpers/auth";

const store = require('../store');
var user = "";
if (store.state != null && store.state.currentUser != null) {
    user = store.state.currentUser;
}

export default {
    name: "main-app",
    components: {SidebarMenu},
    data() {
        return {
            menu: [
                {
                    header: true,
                    title: 'Main Navigation',
                    hiddenOnCollapse: true
                },
                {
                    href: '/',
                    title: 'Home',
                    icon: 'fa fa-home'
                },
                {
                    // href: '/',
                    title: 'Screens',
                    icon: 'fa fa-desktop',
                    child: [
                        {
                            href: '/screen1',
                            title: 'Pre Esterification',
                            icon: 'fa fa-desktop',
                        },
                        {
                            href: '/screen2',
                            title: 'Methanol Recovery',
                            icon: 'fa fa-desktop',
                        },
                        {
                            href: '/screen3',
                            title: 'Trans Esterification',
                            icon: 'fa fa-desktop',
                        },
                        {
                            href: '/screen4',
                            title: 'Distillation Section',
                            icon: 'fa fa-desktop',
                        },
                        {
                            href: '/screen5',
                            title: 'Cooling Tower',
                            icon: 'fa fa-desktop',
                        },
                        {
                            href: '/screen6',
                            title: 'Boiler',
                            icon: 'fa fa-desktop',
                        },
                    ]
                },
                {
                    href: '/graphreporting',
                    title: 'Graph Report',
                    icon: 'fa fa-chart-line'
                },
                {
                    href: '/pdfreporting',
                    title: 'PDF Report',
                    icon: 'fa fa-file-pdf'
                },
                {
                    href: '/pumponoffreport',
                    title: 'Pump ON/OFF Report',
                    icon: 'fa fa-file-pdf'
                },
                {
                    // href: '/charts',
                    title: 'Logout',
                    icon: 'fa fa-sign-out-alt',
                }
            ],
            collapsed: false,
        }
    },
    methods: {

        onItemClick() {
                const token = "Bearer " + this.currentUser.token;
                logout(token)
                    .then((res) => {
                        this.$store.commit("currentUser", null);
                        localStorage.removeItem("user");
                        this.$router.push("/login")
                    })
                    .catch((err) => {
                        console.log(err)
                    });

        },
        onCollapse(c) {
            console.log("onCollapse");
            this.collapsed = c;
        }
    },
    computed: {
        currentUser() {

            return this.$store.getters.currentUser

        }
    },
    // props: {
    //     width: {
    //         type: String,
    //         default: "inherit"
    //     },
    // }
}

</script>

<style scoped>
ul.dropdown-menu-right{
    background-color: currentColor !important;
}
#view {
    padding-left: 350px;
}

#view.collapsed {
    padding-left: 50px;
}

.sidebar.v-sidebar-menu {
    /*max-width: fit-content;*/
    height: 100%;
}

.sidebar.v-sidebar-menu .vsm--mobile-item {
    z-index: 0 !important;
}

.sidebar.v-sidebar-menu.vsm_collapsed .vsm--link_level-1:hover {
    background-color: transparent;
}

.sidebar.v-sidebar-menu .vsm-arrow:after {
    content: "\f105";
    font-family: "FontAwesome";
}

.sidebar.v-sidebar-menu .collapse-btn:after {
    content: "\f07e";
    font-family: "FontAwesome";
}
#main{

}
</style>


