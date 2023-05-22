import {Link} from "react-router-dom";
import React from "react";
import {BASEURL} from "../consts";

export function Menu({setShow}) {
    return (
        <nav>
            <ul className="route-list p-0">
                <li>
                    <Link to={`${BASEURL}`} onClick={() => setShow(false)}>
                        My Menus
                    </Link>
                </li>
                <li>
                    <Link
                        to={`${BASEURL}profile`}
                        onClick={() => setShow(false)}
                    >
                        My Business
                    </Link>
                </li>

                <li>
                    <Link
                        to={`${BASEURL}invoices`}
                        onClick={() => setShow(false)}
                    >
                        Invoices
                    </Link>
                </li>

                <li>
                    <Link
                        to={`${BASEURL}myaccount`}
                        onClick={() => setShow(false)}
                    >
                        My account
                    </Link>
                </li>
                <li>
                    <Link
                        to={`${BASEURL}changepassword`}
                        onClick={() => setShow(false)}
                    >
                        Change Password
                    </Link>
                </li>
            </ul>
        </nav>
    );
}
