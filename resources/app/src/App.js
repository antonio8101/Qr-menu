import React from "react";
import {BrowserRouter, Link, Route, Routes} from 'react-router-dom';

const UrlDestroySessionLaravel = 'http://localhost:8000/logout'
const baseURL = 'app';

function Menu() {
    return (<nav>
        <ul>
            <li><Link to={`${baseURL}/`}>HOME</Link></li>
            <li><Link to={`${baseURL}/profile`}>PROFILE</Link></li>
        </ul>
    </nav>);
}

export function App() {
    return (
        <div>
            <BrowserRouter>
                <Menu />
                <Routes>
                    <Route exact path={`${baseURL}/`} element={<Dashboard/>}></Route>
                    <Route exact path={`${baseURL}/profile`} element={<Profile/>}/>
                    <Route exact path={"*"} element={<div>NOT-FOUND</div>}></Route>
                </Routes>
            </BrowserRouter>
            <ButtonLogout/>
        </div>
    )
}

export function Dashboard() {
    return (
        <div>
            <h1> DASHBOARD </h1>
        </div>
    )
}


export function Profile() {
    return (
        <div>
            <h1> PROFILE PAGE </h1>
        </div>
    )
}

export function ButtonLogout() {
    return (
        <button onClick={urlLogout}>LOG OUT</button>
    )
}

function urlLogout() {
    return (window.location.assign(UrlDestroySessionLaravel))
}
