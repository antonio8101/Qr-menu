import React, {Suspense} from "react";
import {BrowserRouter, Route, Routes,} from "react-router-dom";
import {BASEURL} from "./consts";
import "bootstrap/dist/css/bootstrap.min.css";
import {Header} from "./components/Header";
import {EnsureLoggedIn} from "./components/EnsureLoggedIn";
import {Profile} from "./components/Profile";
import {Loading} from "./components/Loading";
import {Dashboard} from "./components/Dashboard";

export function App() {
    return (
        <>
            <BrowserRouter>
                <Suspense fallback={<Loading />}>
                    <EnsureLoggedIn>
                        <Header />
                        <Routes>
                            <Route
                                exact
                                path={`${BASEURL}`}
                                element={<Dashboard />}
                            ></Route>
                            <Route
                                exact
                                path={`${BASEURL}profile`}
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
        </>
    );
}

