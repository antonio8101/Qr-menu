import {useStoredUser} from "../hooks/useStoredUser";
import {LOGOUT_URL} from "../consts";
import React from "react";

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
