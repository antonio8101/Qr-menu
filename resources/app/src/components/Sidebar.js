import React from "react";
import { Icon } from "@iconify/react";
import { ButtonLogout, Menu } from "../App";
import { useGlobalContext } from "../context";
export function Sidebar() {
    const { show, setShow } = useGlobalContext();
    return (
        <>
            <button onClick={() => setShow(!show)} className="button-sidebar">
                <Icon icon="mdi:menu" />
            </button>
            {show && (
                <div className="navbar-show h-100 ">
                    <Menu />
                    <ButtonLogout />
                </div>
            )}
        </>
    );
}
