import Home from "./components/Home";
import Login from "./components/auth/Login";
import Screen1 from "./components/Screen1";
import Screen2 from "./components/Screen2";
import Screen3 from "./components/Screen3";
import Screen4 from "./components/Screen4";
import Screen5 from "./components/Screen5";
import Screen6 from "./components/Screen6";
import PumpOnOffReport from "./components/PumpOnOffReport";
import GraphReporting from "./components/GraphReporting";
import PDFReporting from "./components/PDFReporting";
import RDLPDFreport from "./components/RDLPDFreport";
import DPLPDFreport from "./components/DPLPDFreport";
import PTPDFreport from "./components/PTPDFreport";
import VGPDFreport from "./components/VGPDFreport";
import FMPDFreport from "./components/FMPDFreport";
import RDLGraphReport from "./components/RDLGraphReport";
import DPLGraphReport from "./components/DPLGraphReport";
import PTGraphReport from "./components/PTGraphReport";
import FMGraphReport from "./components/FMGraphReport";
import VGGraphReport from "./components/VGGraphReport";
import FlowTotalize from "./components/FlowTotalize";
import AddUsers from "./components/AddUsers";
import ViewAllUsers from "./components/ViewAllUsers";
import editUser from "./components/editUser";
import MultipleReporting from "./components/MultipleReporting";
import SaveSelectionReport from "./components/SaveSelectionReport";
import MultiGraph from "./components/MultiGraph";
import UploadReport from "./components/UploadReport";
import ShowUpload from "./components/ShowUpload";
import CalculationEng from "./components/CalculationEng";
import MultireportAvg from "./components/MultireportAvg";




export const routes = [
    {
        path: '/',
        component: Home,
        meta: {
            requiresAuth: true,

        },
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/screen1',
        component: Screen1,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/screen2',
        component: Screen2,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/screen3',
        component: Screen3,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/screen4',
        component: Screen4,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/screen5',
        component: Screen5,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/screen6',
        component: Screen6,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/graphreporting',
        component: GraphReporting,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/pdfreporting',
        component: PDFReporting,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/pumponoffreport',
        component: PumpOnOffReport,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/rdlpdfreport',
        component: RDLPDFreport,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/dplpdfreport',
        component: DPLPDFreport,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/ptpdfreport',
        component: PTPDFreport,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/vgpdfreport',
        component: VGPDFreport,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/fmpdfreport',
        component: FMPDFreport,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/rdlgraphreport',
        component: RDLGraphReport,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/dplgraphreport',
        component: DPLGraphReport,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/ptgraphreport',
        component: PTGraphReport,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/fmgraphreport',
        component: FMGraphReport,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/vggraphreport',
        component: VGGraphReport,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/flowtotalizepdfreport',
        component: FlowTotalize,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/addusers',
        component: AddUsers,
        meta: {
            requiresAuth: true
        },
    },
    {
        path: '/viewallusers',
        component: ViewAllUsers,
        meta: {
            requiresAuth: true
        },
    },
    {
        path:'/editUser/:id',
        component: editUser,
        name:'editUser',
        meta: {
            requiresAuth: true
        },
    },
    {
        path:'/multiplereporting',
        component: MultipleReporting,
        name:'multiplereporting',
        meta: {
            requiresAuth: true
        },
    },
    {
        path:'/saveselectionreport',
        component: SaveSelectionReport,
        name:'saveselectionreport',
        meta: {
            requiresAuth: true
        },
    },
    {
        path:'/multigraph',
        component: MultiGraph,
        name:'multigraph',
        meta: {
            requiresAuth: true
        },
    },
    {
        path:'/uploadreport',
        component: UploadReport,
        name:'uploadreport',
        meta: {
            requiresAuth: true
        },
    },
    {
        path:'/showupload',
        component: ShowUpload,
        name:'showupload',
        meta: {
            requiresAuth: true
        },
    },
    {
        path:'/calculationeng',
        component: CalculationEng,
        name:'calculationeng',
        meta: {
            requiresAuth: true
        },
    },
    {
        path:'/multireportavg',
        component: MultireportAvg,
        name:'MultireportAvg',
        meta: {
            requiresAuth: true
        },
    },

];
