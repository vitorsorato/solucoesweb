import React from 'react';
import {  } from 'reactstrap';
import './Bodys.css';

const Bodys = (props) => {
  return (
    <div >
    <div >
        <h1>Lista de Orçamentos</h1>
    </div>

    <a className="btn btn-success" href="">Relatorios</a>
    <a className="btn btn-success" href="">Novo Orçamento</a>

    <table className="table" >
        <thead>
            <tr>
                <th >Cód</th>
                <th >Centro de Custo</th>
                <th >Valor Total</th>
                <th >Data</th>
                <th >Ações</th>
            </tr>
        </thead>
        <tbody>


        </tbody>
    </table>
</div>

  );
}

export default Bodys;