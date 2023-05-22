import {useStoredUser} from "../hooks/useStoredUser";
import React, {useEffect, useState} from "react";
import {useLogin} from "../hooks/useLogin";
import {useGetQueryParams} from "../hooks/useGetQueryParams";
import {useNavigate} from "react-router-dom";
import {APP_SUBFOLDER, LOGIN_URL} from "../consts";
import {Loading} from "./Loading";

export function EnsureLoggedIn({children}) {
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
        return <><Loading/></>;
    } else {
        return <>{children}</>;
    }
}
