import React from 'react';
import ReactDOM from 'react-dom/client';
import { useState } from 'react';
import AccordionItems from './accordion/accordionItems';
export default function ProductosServicio() {
    const [accordionContent, setAccordionContent] = useState([]);
    return (
        <section className="container my-5 py-5">
            <div className="row">
                <div className="col-md-4 col-12">
                    <div className="accordion" id="productos">
                        <AccordionItems setAccordionContent={setAccordionContent}/>
                    </div>
                </div>
                {(<div className='col-md-8 col-12' id={accordionContent[0]}>
                    <div className='row' tabIndex={0} id='focusContent'>
                        <div className='col-md-12 col-12'>
                            <h1 className='text-center'>{accordionContent[0]}</h1>
                                {accordionContent[1]}
                        </div>
                    </div>
                </div>)}
            </div>
        </section>
    );
}

if (document.getElementById('productosServicio')) {
    const Index = ReactDOM.createRoot(document.getElementById("productosServicio"));

    Index.render(
        <React.StrictMode>
            <ProductosServicio />
        </React.StrictMode>
    )
}
