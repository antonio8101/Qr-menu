import React, {useState} from "react";
import {Icon} from "@iconify/react";
import {ButtonLogout, Menu} from "../App";

export function Sidebar() {

    const [show, setShow] = useState(false);

    return (
        <>
            <button onClick={() => setShow(!show)} className="button-sidebar">
                <Icon icon="mdi:menu"/>
            </button>
            {show &&
                <div className="navbar-show h-100">
                    <Menu/>
                    <ButtonLogout/>
                </div>}
        </>
    );
}