import React from 'react';
import { Nav, NavItem, NavLink } from 'reactstrap';
import './Headers.css';

const Headers = (props) => {
  return (
    <div className="example">
      <Nav vertical className="nav-principal">
        <NavItem>
        <h4>Realengo Alimentos</h4>
        <br></br>
        </NavItem>
        <NavItem >
          <NavLink href="#">Orçamentos</NavLink>
        </NavItem>
        <NavItem >
          <NavLink href="#">Novo Orçamento</NavLink>
        </NavItem>
      </Nav>
    </div>

  );
}

export default Headers;