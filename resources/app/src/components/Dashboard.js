import {useStoredUser} from "../hooks/useStoredUser";
import React, {useState} from "react";
import {Section} from "./Section";

export function Dashboard() {
    const [getStoredUser] = useStoredUser();
    const [user] = useState(getStoredUser());

    return (
        <>
            <h1 className="mx-sm-2 mx-md-4"> Bentornato {user.name} </h1>
            <Section/>
        </>
    );
}
