import React, {useState} from "react";
import {MenuList} from "./MenuList";
import {AddMenu} from "./AddMenu";

export function Section() {

    const [name, setName] = useState('');

    const [list, setList] = useState([]);

    function handleChange(event){
        setName(event.target.value);
    }

    function handleAdd(){
        const newList = list.concat({name});

        setList(newList);
        setName('');
    }

    return(
        <>
            <div className="section mx-3 mx-sm-3 mx-md-4 mx-lg-4 shadow-sm">
                <h1 className="ms-2">I miei menù</h1>
                <p className="m-2">Gestisci in autonomia i Menu, da questa sezione puoi crearli, modificarli, eliminarli e decidere quali
                   Menu rendere visibili.</p>
                <div>
                    <MenuList list={list}/>
                    <AddMenu
                    name={name}
                    onChange={handleChange}
                    onAdd={handleAdd}/>
                </div>
            </div>
        </>
    )
}

