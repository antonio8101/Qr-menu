import React from "react";

export function AddMenu({name, onChange, onAdd}) {
    return (
        <div className="d-flex flex-row-reverse">
            <input type="text" value={name} onChange={onChange}/>
            <button type="button" onClick={onAdd}>
                Add
            </button>
        </div>
    )
}
