import React, {useState} from "react";
import styled from "styled-components";
import {Menu} from "./Menu";
import {ButtonLogout} from "./ButtonLogout";

export function Sidebar() {
    const [show, setShow] = useState(false);
    const [click, setClick] = useState(false);
    return (
        <>
            <MenuButtonContainer>
                <button onClick={() => {
                    setClick(false);
                    setShow(!show);
                    setClick(true);
                }}>

                    <span
                        className={show && click ? "menu-button forward_rotation1" : !show && click ? "menu-button back_rotation1" : "menu-button"}></span>
                    <span className={show ? "hide" : "menu-button center-bar"}></span>
                    <span
                        className={show && click ? "menu-button forward_rotation2" : !show && click ? "menu-button back_rotation2" : "menu-button"}></span>
                </button>
            </MenuButtonContainer>
            <div className={show ? "navbar show h-100 " : "navbar hide h-100 "}>
                <Menu setShow={setShow}/>
                <ButtonLogout/>


            </div>

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

            padding: 0;
        }
    }
`;
