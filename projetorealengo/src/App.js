
import './App.css';
import { Button, useState, useEffect } from "reactstrap";
import Headers from './Headers';
import Bodys from './Bodys';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Headers />        
        <body className="App-body">
        <Bodys />
        </body>
      </header>
    </div>
  );
}


export default App;
