import React, {useState} from "react";
import { Icon } from "@iconify/react";
import { ButtonLogout, Menu } from "../App";
import styled from "styled-components";

export function Sidebar() {
    const [ show, setShow ] = useState(false);

    return (
        <>
            <MenuButtonContainer>
                <button onClick={() => setShow(!show)}>
                    <Icon icon="mdi:menu" />
                </button>
            </MenuButtonContainer>
            {show && (
                <div className="navbar-show h-100 ">
                    <Menu />
                    <ButtonLogout />
                </div>
            )}
        </>
    );
}

const MenuButtonContainer = styled.div`

    width: var(--menu-button-continaer-size);
    height: var(--menu-button-continaer-size);
    background-color: transparent;
    display: flex;
    align-items: center;
    justify-content: center;

    position: fixed;
    z-index: 99;
    top: 0;
    right: 0;

    button {
        border: none;
        background-color: transparent;
        font-size: var(--menu-button-fontsize);
        line-height: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        * {
            margin: 0;
            padding: 0;
        }
    }
`;
