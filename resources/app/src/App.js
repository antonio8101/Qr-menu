import React, {useEffect, useState} from "react";
import {BrowserRouter, Link, Route, Routes, useNavigate} from 'react-router-dom';
import Button from "bootstrap/js/src/button";
import {useGetQueryParams} from "./hooks/useGetQueryParams";
import {APP_URL, BASE_ADDRESS, LOGIN_URL, LOGOUT_URL} from "./consts";
import {useStoredUser} from "./hooks/useStoredUser";

const UrlDestroySessionLaravel = LOGOUT_URL;
const baseURL = BASE_ADDRESS;

function Menu() {
    return (<nav>
        <ul>
            <li><Link to={`${baseURL}`}>HOME</Link></li>
            <li><Link to={`${baseURL}/profile`}>PROFILE</Link></li>
        </ul>
    </nav>);
}

const EnsureLoggedIn = ({children}) => {

    const [getStoredUser, setStoredUser] = useStoredUser();
    const [user, setUser] = useState();
    const getQueryParams = useGetQueryParams();
    const navigate = useNavigate();
    const url = LOGIN_URL;

    const auth_code = getQueryParams('code');

    useEffect(() => {

        if (user){
            return;
        }

        let storedUser = getStoredUser();
        if (storedUser) {
            setUser(storedUser);
        }
        else if (auth_code != null){

            // TODO: recupera in qualche modo l'utente e lo setta nello stato

            setStoredUser({
                id: 1,
                name: 'test'
            });

            setUser(getStoredUser());
            navigate(BASE_ADDRESS);
        } else {

            window.location = LOGIN_URL;

        }

    }, [user]);


    if (!user){
        return <><button onClick={() => { window.location = url}}>GO TO LOGIN</button></>;
    } else {
        return <>{children}</>;
    }
}

export function App() {
    return (
        <div>
            <BrowserRouter>
                <EnsureLoggedIn>
                    <Menu/>
                    <Routes>
                        <Route exact path={`${baseURL}`} element={<Dashboard/>}></Route>
                        <Route exact path={`${baseURL}/profile`} element={<Profile/>}/>
                        <Route exact path={"*"} element={<div>NOT-FOUND</div>}></Route>
                    </Routes>
                    <ButtonLogout/>
                </EnsureLoggedIn>
            </BrowserRouter>

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

    const [getStoredUser, , removeUser] = useStoredUser();

    return (<button onClick={() => {
        removeUser();
        window.location = LOGOUT_URL;
    }}>LOGOUT</button>)
}

