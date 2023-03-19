import '../sass/sectionComponent.scss';
import React, {useState} from "react";
import {Icon} from "@iconify/react";

const initialList = [];

export function SectionComponent() {

    const [list, setList] = useState(initialList);
    const [name, setName] = useState('');

    function handleChange(event){
        setName(event.target.value);

    }

    function handleAdd(){
        const newList = list.concat({name});

        setList(newList);
        setName('');
    }

    function MenuList(){
        return(
            <div className="container">
                <div className="d-flex flex-row-reverse me-3">Actions</div>
                <MenuItem/>
            </div>
        )
    }

    function MenuItem(){
        return(
            <>
                {list.map((item)=>(
                    <div className="menu-item d-flex justify-content-between">
                        <div className="menu-name">{item.name}</div>
                        <div className="actions-container d-flex">
                            <div className="form-check form-switch">
                                <input className="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"/>
                            </div>
                            <Icon icon="material-symbols:delete-outline" className="m-1"/>
                            <Icon icon="octicon:duplicate-24" className="m-1"/>
                        </div>
                    </div>
                ))}
            </>
        )
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

function AddMenu({name, onChange, onAdd}) {
    return(
        <div className="d-flex flex-row-reverse">
            <input type="text" value={name} onChange={onChange}/>
            <button type="button" onClick={onAdd}>
                Add
            </button>
        </div>
    )
}
