import React, {useState} from 'react';
import ReactDOM from 'react-dom/client';
import { SelectMaterial } from './selectCustom/materialSelect';
import swal from 'sweetalert';


export default function Contacto() {
    const [clearSelect, setClearSelect] = useState([]);
    const sendEmail = (e) => {
        e.preventDefault()
        const spinner = document.createElement("div");
        spinner.classList.add('row')
        spinner.innerHTML = '<div><span class="spinner-border spinner-border-sm text-primary" role="status" aria-hidden="true" style="width: 3rem; height: 3rem;"></span></div>'+
        '<span class="ml-2">Enviando correo...</span>';
        swal({
            content: spinner,
            button: false,
            closeOnClickOutside: false,
            closeOnEsc: false,
        })
        const data = new FormData(e.target)
        axios.post(e.target.action,data).then(res=>{
            console.log(res.data)
            swal({
                icon: res.data.status??'error',
                title: res.data.status==='success'?'Enviado':'Error',
                text: res.data.mensaje??'Error al recuperar la respuesta del servidor.'
            }).then(res=>{
                document.getElementById('form-productos').reset()
                clearSelect.clearValue()
            })
        }).catch(err=>{
            console.error(err)
            swal({
                icon: res.data.status??'error',
                title: res.data.status==='success'?'Enviado':'Error',
                text: res.data.mensaje??'Error al recuperar la respuesta del servidor.'
            })
        })
    }
    return (
        <section className="container my-5 py-5">
            <div className="row justify-content-center">
                <div className="col-md-6 col-12">
                    <h2 className="text-center">Contacta con nosotros</h2>
                    <form method="post" action="/send-email" onSubmit={sendEmail} id="form-productos">
                        <div className="mb-3">
                            <label htmlFor="material">Material</label>
                            <SelectMaterial idSelect={'Material'} setClearSelect={setClearSelect}/>
                        </div>
                        <div className="mb-3">
                            <label htmlFor="email" className="form-label">Correo electrónico</label>
                            <input type="email" className="form-control" name="email" id="email" placeholder="nombre@ejemplo.com" required/>
                        </div>
                        <div className="mb-3">
                            <label htmlFor="asunto" className="form-label">Asunto</label>
                            <input type="text" className="form-control" name="asunto" id="asunto" placeholder="..." />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="mensaje" className="form-label">Mensaje</label>
                            <textarea className="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                        </div>
                        <div className="row row-sm justify-content-center">
                            <div className="col-4 text-center">
                                <button type="submit" className="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    );
}

if (document.getElementById('contacto')) {
    const Index = ReactDOM.createRoot(document.getElementById("contacto"));

    Index.render(
        <React.StrictMode>
            <Contacto />
        </React.StrictMode>
    )
}