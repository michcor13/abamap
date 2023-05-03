import React from 'react';
import ReactDOM from 'react-dom/client';

export default function ProductosServicio() {
    return (
        <section className="container my-5 py-5">
            <div className="row">
                <div className="col-md-4 col-12">
                    <div className="accordion" id="accordionExample">
                        <div className="accordion-item">
                            <h2 className="accordion-header" id="headingOne">
                                <button className="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Acidulantes
                                </button>
                            </h2>
                            <div id="collapseOne" className="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div className="accordion-body">
                                    <strong>Acético</strong>
                                </div>
                            </div>
                        </div>
                        <div className="accordion-item">
                            <h2 className="accordion-header" id="headingTwo">
                                <button className="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Hidrocoloides/Gomas
                                </button>
                            </h2>
                            <div id="collapseTwo" className="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div className="accordion-body">
                                    <strong>Guar</strong>
                                </div>
                            </div>
                        </div>
                        <div className="accordion-item">
                            <h2 className="accordion-header" id="headingThree">
                                <button className="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Conservadores
                                </button>
                            </h2>
                            <div id="collapseThree" className="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div className="accordion-body">
                                    <strong>Benzonato de sodio</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className='col-md-8 col-12'>
                    <div className='row'>
                        <div className='col-md-12 col-12'>
                            <h3 className='text-center'>Acético</h3>
                            <div className=''>
                                Ampliamente utilizado en la industria alimenticia por la estabilidad proporcionada en el pH y la acidez en los productos terminados. Por su sabor avinagrado es excelente para conservas y encurtidos.
                            </div>
                        </div>
                    </div>
                </div>
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
