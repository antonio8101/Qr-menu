import styled from "styled-components";
import logo from "../assets/qr-menu-logo.svg";
import {ButtonLogout, Menu} from "../App";
import React, { useState } from 'react';
import { Icon } from '@iconify/react';
import '../sass/headerComponent.scss';

export function HeaderComponent() {
    return (
        <>
            <ContainerHeader className="header w-100">
                <Logo src={logo} alt="logo" className="logo"></Logo>
                <Sidebar/>
            </ContainerHeader>
        </>
    )
}

function Sidebar() {

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

const ContainerHeader = styled.div`
    display: flex;
    justify-content: space-between;
    align-items: start;
`;

const Logo = styled.img`
    margin-left: 20px;
    display: flex;
    width:80px;
    height: 80px;
`;
