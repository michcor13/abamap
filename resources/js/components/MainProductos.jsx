import React from 'react';
import ReactDOM from 'react-dom/client';

function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card">
                            <ul className="list-group list-group-flush">
                                <button type="button" className="list-group-item d-flex justify-content-between align-items-center body-1 color-gray-3 bg-light border-0 list-group-item-action collapsed" aria-expanded="false" aria-controls="adocreto-0">
                                    Adocreto
                                    <span className="when-opened"><i className="fas fa-chevron-down color-blue"></i></span> <span className="when-closed"><i className="fas fa-chevron-up color-blue"></i></span></button>
                                <li className="list-group-item">A second item</li>
                                <li className="list-group-item">A third item</li>
                            </ul>
                            <div className="card-footer">
                                Card footer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('productosServicio')) {
    const Index = ReactDOM.createRoot(document.getElementById("productosServicio"));

    Index.render(
        <React.StrictMode>
            <Example />
        </React.StrictMode>
    )
}
