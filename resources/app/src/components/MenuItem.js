import React, {useState} from "react";
import {Icon} from "@iconify/react";

export function MenuItem() {

    const [list] = useState([]);

    return (
        <>
            {list.map((item) => (
                <div className="menu-item d-flex justify-content-between">
                    <div className="menu-name">{item.name}</div>
                    <div className="actions-container d-flex">
                        <div className="form-check form-switch">
                            <input className="form-check-input" type="checkbox" role="switch"
                                   id="flexSwitchCheckDefault"/>
                        </div>
                        <Icon icon="material-symbols:delete-outline" className="m-1"/>
                        <Icon icon="octicon:duplicate-24" className="m-1"/>
                    </div>
                </div>
            ))}
        </>
    )
}
