import React from 'react';
import ReactDOM from 'react-dom/client';
import { useState } from 'react';
import AccordionItems from './accordion/accordionItems';


export default function ProductosServicio() {
    const [accordionContent, setAccordionContent] = useState([]);
    return (
        <section className="container my-5">
            <div className="row">
                <div className="col-md-4 col-12">
                    <div className="accordion" id="productos">
                        <AccordionItems setAccordionContent={setAccordionContent}/>
                    </div>
                </div>
                {(<div className='col-md-8 col-12' tabIndex={0} id={accordionContent[0]}>
                    <div className={'row '+ (window.innerWidth > 767 ? 'ms-5': '')}>
                        <div className='col-md-12 col-12 mt-3'>
                            <h1 className='text-center misvisval'>{accordionContent[0]}</h1>
                                {accordionContent[1]}
                        </div>
                        <div className='text-center my-3'>
                            {accordionContent[2]}
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
