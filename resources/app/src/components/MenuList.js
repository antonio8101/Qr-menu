import {MenuItem} from "./MenuItem";
import React from "react";

export function MenuList() {
    return (
        <div className="container">
            <div className="d-flex flex-row-reverse me-3">Actions</div>
            <MenuItem/>
        </div>
    )
}
