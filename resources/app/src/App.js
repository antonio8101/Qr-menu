import React, {Suspense, useEffect, useState} from "react";
import {BrowserRouter, Link, Route, Routes, useNavigate} from 'react-router-dom';
import {useGetQueryParams} from "./hooks/useGetQueryParams";
import {BASE_ADDRESS, LOGIN_URL, LOGOUT_URL} from "./consts";
import {useStoredUser} from "./hooks/useStoredUser";
import {useLogin} from "./hooks/useLogin";

const baseURL = BASE_ADDRESS + '/';

console.log(baseURL);

export function App() {
    return (
        <>
            <BrowserRouter>
                <Suspense fallback={<Loading/>}>
                    <EnsureLoggedIn>
                        <Menu/>
                        <Routes>
                            <Route exact path={`${baseURL}`} element={<Dashboard/>}></Route>
                            <Route exact path={`${baseURL}profile`} element={<Profile/>}/>
                            <Route exact path={"*"} element={<div>NOT-FOUND</div>}></Route>
                        </Routes>
                        <ButtonLogout/>
                    </EnsureLoggedIn>
                </Suspense>
            </BrowserRouter>
        </>
    )
}

export function Loading() {
    return <>LOADING EFFECT...</>;
}
export function Menu() {
    return (<nav>
        <ul>
            <li><Link to={`${baseURL}`}>HOME</Link></li>
            <li><Link to={`${baseURL}profile`}>PROFILE</Link></li>
        </ul>
    </nav>);
}
export function EnsureLoggedIn({children}) {

    const [getStoredUser, setStoredUser] = useStoredUser();
    const [user, setUser] = useState();
    const login = useLogin();
    const getQueryParams = useGetQueryParams();
    const navigate = useNavigate();
    const url = LOGIN_URL;

    useEffect(() => {

        if (user){
            return;
        }

        const auth_code = getQueryParams('code');
        const storedUser = getStoredUser();
        if (storedUser) {
            setUser(storedUser);
        }
        else if (auth_code != null){

            async function doLogin(){

                await login(auth_code);

                setUser(getStoredUser());
                navigate('/' + BASE_ADDRESS);
            }

            doLogin().then();

        } else {

            window.location = LOGIN_URL;

        }

    }, [user, getQueryParams, getStoredUser, setStoredUser, login, navigate]);


    if (!user){
        return <><button onClick={() => { window.location = url}}>GO TO LOGIN</button></>;
    } else {
        return <>{children}</>;
    }
}
export function Dashboard() {

    const [getStoredUser] = useStoredUser();
    const [user] = useState(getStoredUser());

    return (
        <>
            <h1> DASHBOARD, Ciao {user.name} </h1>
        </>
    )
}
export function Profile() {
    return (
        <>
            <h1> PROFILE PAGE </h1>
        </>
    )
}
export function ButtonLogout() {

    const [, , removeUser] = useStoredUser();

    return (<button onClick={() => {
        removeUser();
        window.location = LOGOUT_URL;
    }}>LOGOUT</button>)
}
