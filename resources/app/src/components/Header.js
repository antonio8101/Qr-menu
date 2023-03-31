import styled from "styled-components";
import React from 'react';
import {Sidebar} from "./Sidebar";
import {Logo} from "./Logo";

export function Header() {
    return (
        <>
            <ContainerHeader className="header w-100">
                <Logo />
                <Sidebar/>
            </ContainerHeader>
        </>
    )
}

const ContainerHeader = styled.div`
    display: flex;
    justify-content: space-between;
    align-items: start;

    img {
        max-height: var(--header-logo-height);
        padding: 0.5em;
    }
`;
