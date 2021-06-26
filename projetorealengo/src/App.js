import logo from './logo.svg';
import './App.css';
import { Button } from 'reactstrap';
import Headers from './Headers';


function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Headers />
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Teste
        </p>
        <Button 
          color="danger"
          onClick={event =>{
            event.preventDefault();
            alert('Danger!! KKKKKKK')
          }}>
            Clica aqui... !
        </Button>
        <body>
        </body>
      </header>
    </div>
  );
}


export default App;
