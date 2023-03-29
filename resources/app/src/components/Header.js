import styled from "styled-components";
import logo from "../assets/qr-menu-logo.svg";
import React from 'react';
import {Sidebar} from "./Sidebar";

export function Header() {
    return (
        <>
            <ContainerHeader className="header w-100">
                <Logo src={logo} alt="logo" className="logo"></Logo>
                <Sidebar/>
            </ContainerHeader>
        </>
    )
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
