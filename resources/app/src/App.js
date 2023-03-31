import React, { Suspense, useEffect, useState } from "react";
import {
    BrowserRouter,
    Link,
    Route,
    Routes,
    useNavigate,
} from "react-router-dom";
import { useGetQueryParams } from "./hooks/useGetQueryParams";
import { APP_SUBFOLDER, LOGIN_URL, LOGOUT_URL } from "./consts";
import { useStoredUser } from "./hooks/useStoredUser";
import { useLogin } from "./hooks/useLogin";
import "bootstrap/dist/css/bootstrap.min.css";
import { Header } from "./components/Header";
import { Section } from "./components/Section";
import { AppProvider, useGlobalContext } from "./context";
const baseURL = APP_SUBFOLDER + "/";

console.log(baseURL);

export function App() {
    return (
        <>
            <AppProvider>
                <BrowserRouter>
                    <Suspense fallback={<Loading />}>
                        <EnsureLoggedIn>
                            <Header />
                            <Routes>
                                <Route
                                    exact
                                    path={`${baseURL}`}
                                    element={<Dashboard />}
                                ></Route>
                                <Route
                                    exact
                                    path={`${baseURL}profile`}
                                    element={<Profile />}
                                />
                                <Route
                                    exact
                                    path={"*"}
                                    element={<div>NOT-FOUND</div>}
                                ></Route>
                            </Routes>
                        </EnsureLoggedIn>
                    </Suspense>
                </BrowserRouter>
            </AppProvider>
        </>
    );
}

export function Loading() {
    return <>LOADING EFFECT...</>;
}
export function Menu() {
    const { setShow } = useGlobalContext();
    return (
        <nav>
            <ul className="route-list p-0">
                <li>
                    <Link to={`${baseURL}`} onClick={() => setShow(false)}>
                        My Menus
                    </Link>
                </li>
                <li>
                    <Link
                        to={`${baseURL}profile`}
                        onClick={() => setShow(false)}
                    >
                        My Business
                    </Link>
                </li>

                <li>
                    <Link
                        to={`${baseURL}invoices`}
                        onClick={() => setShow(false)}
                    >
                        Invoices
                    </Link>
                </li>

                <li>
                    <Link
                        to={`${baseURL}myaccount`}
                        onClick={() => setShow(false)}
                    >
                        My account
                    </Link>
                </li>
                <li>
                    <Link
                        to={`${baseURL}changepassword`}
                        onClick={() => setShow(false)}
                    >
                        Change Password
                    </Link>
                </li>
            </ul>
        </nav>
    );
}
export function EnsureLoggedIn({ children }) {
    const [getStoredUser, setStoredUser] = useStoredUser();
    const [user, setUser] = useState();
    const login = useLogin();
    const getQueryParams = useGetQueryParams();
    const navigate = useNavigate();

    useEffect(() => {
        if (user) {
            return;
        }

        const auth_code = getQueryParams("code");
        const storedUser = getStoredUser();
        if (storedUser) {
            setUser(storedUser);
        } else if (auth_code != null) {
            async function doLogin() {
                await login(auth_code);

                setUser(getStoredUser());
                navigate("/" + APP_SUBFOLDER);
            }

            doLogin().then();
        } else {
            window.location = LOGIN_URL;
        }
    }, [user, getQueryParams, getStoredUser, setStoredUser, login, navigate]);

    if (!user) {
        return <>redirecting..</>;
    } else {
        return <>{children}</>;
    }
}
export function Dashboard() {
    const [getStoredUser] = useStoredUser();
    const [user] = useState(getStoredUser());

    return (
        <>
            <h1 className="mx-sm-2 mx-md-4"> Bentornato {user.name} </h1>
            <Section />
        </>
    );
}

export function Profile() {
    return (
        <>
            <h1> PROFILE PAGE </h1>
        </>
    );
}
export function ButtonLogout() {
    const [, , removeUser] = useStoredUser();

    return (
        <button
            onClick={() => {
                removeUser();
                window.location = LOGOUT_URL;
            }}
            className="button-logout"
        >
            LOGOUT
        </button>
    );
}
