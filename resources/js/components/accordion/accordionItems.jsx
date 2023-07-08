import React from 'react';
import {accordionTitleList, listItem, contentItem, contentImage} from './accordionResources'

const AccordionItems = ({setAccordionContent}) => {
    return (
        <>
            {accordionTitleList.map((titleId, tId) => (
                <div key={tId} className="accordion-item">
                    <h2 className="accordion-header" id={'producto' + tId}>
                        <button className="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target={'#collapse' + tId} aria-expanded="false" aria-controls={'collapse' + tId}>
                            {titleId}
                        </button>
                    </h2>
                    <div id={'collapse' + tId} className="accordion-collapse collapse" aria-labelledby={'producto' + tId} data-bs-parent="#productos">
                        {listItem[titleId] &&
                            [...listItem[titleId]].map((listId, lId) => (
                                <div key={lId} className="list-group list-group-flush pt-1">
                                    <button
                                        type='button'
                                        className='list-group-item list-group-item-action list-group-item-secondary w-100 ps-5'
                                        onClick={(e) => {
                                            const classActive = document.querySelector('.list-group-item.active');
                                            classActive !== null?classActive.classList.remove('active'): ''
                                            e.target.classList.add('active')
                                            setAccordionContent([listId,contentItem[listId],contentImage[listId]])
                                            window.innerWidth > 767 ? window.scrollTo({ top: 0, behavior: 'smooth' }) : setTimeout(()=>document.getElementById(listId).focus(),200)
                                        }}
                                    >{listId}</button>
                                </div>
                            )
                            )}
                    </div>
                </div>
            ))}
        </>
    )
}
export default AccordionItems
