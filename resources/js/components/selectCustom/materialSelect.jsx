import React, {useRef} from 'react';
import Select from 'react-select'
import { groupSelectOptions } from '../accordion/accordionResources'

export const SelectMaterial = ({ idSelect, setClearSelect }) => {
    return (
        <Select
            key={idSelect}
            placeholder="Seleccion..."
            required
            multiple
            name="material[]"
            isMulti
            options={groupSelectOptions}
            ref={(e) => setClearSelect(e)}
        />
        // <select className="form-select" multiple name="material[]" id="material" key={idSelect}>
        //     <option></option>
        //     {
        //         accordionTitleList.map((titleId, tId) => (
        //             <optgroup key={tId} label={titleId}>
        //                 {
        //                     [...listItem[titleId]].map((listId, lId) => (
        //                         <option key={listId} value={listId}>{listId}</option>
        //                     ))
        //                 }
        //             </optgroup>
        //         ))
        //     }
        // </select>
    )
}

