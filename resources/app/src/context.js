import React from "react";
import { useContext, useState } from "react";

const AppContext = React.createContext();

const AppProvider = ({ children }) => {
    const [show, setShow] = useState(false);
    return (
        <AppContext.Provider value={{ show, setShow }}>
            {children}
        </AppContext.Provider>
    );
};

const useGlobalContext = () => {
    return useContext(AppContext);
};

export { AppProvider, useGlobalContext };
