import React from 'react';
import {  } from 'reactstrap';
import './Bodys.css';

const Bodys = (props) => {
  return (
    <div>
     <table class="table table-bordered table-hover">
      <thead>
      <caption className="caption">Centro de Custo: Produção</caption>
      <tr className="trs">
        <th class="col-md-4">Conta Contábil</th>
        <th class="col-md-4">Valor </th>
      </tr>
      </thead>
      <tbody>
      <tr className="trs">
        <td>Materia Prima</td>
        <td><input className="inputs" type="text" step='0.01' class="form-control" required="required" placeholder='0.00' inputMode='decimal' pattern='\d*' /></td>
      </tr>
      <tr className="trs">
        <td>Despesas de Conservação</td>
        <td><input className="inputs" type="text" step='0.01' class="form-control" required="required" placeholder='0.00' inputMode='decimal' pattern='\d*' /></td>
      </tr>
      <tr className="trs">
        <td>Despesas com Veíulos</td>
        <td><input className="inputs" type="text" step='0.01' class="form-control" required="required" placeholder='0.00' inputMode='decimal' pattern='\d*' /></td>
      </tr>
      <tr className="trs">
        <td>Despesas com taxas</td>
        <td><input className="inputs" type="text" step='0.01' class="form-control" required="required" placeholder='0.00' inputMode='decimal' pattern='\d*' /></td>
      </tr>


      </tbody>
      </table>
      <button type="submit" className="btn btn-primary">
        Cadastrar Orçamento
      </button>
    </div>

  );
}

export default Bodys;