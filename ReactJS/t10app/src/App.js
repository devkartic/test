import React, { Component } from 'react';
import Ninjas from './Ninjas';
import AddNinja from './AddNinja';

class App extends Component {

  state = {
    ninjas : [
      {id : 1, name : 'Kartic', age : 27, job : 'Software Engineer'},
      {id : 2, name : 'Bablu', age : 30, job : 'Software Developer'},
      {id : 3, name : 'Atik', age : 35, job : 'Developer'},
    ]
  };

  addNinja = (ninja) =>{
    ninja.id = Math.random();
    let ninjas = [...this.state.ninjas, ninja] // Spread Operator Use here
    this.setState({
      ninjas : ninjas
    })
  }

  deleteNinja = (id) =>{
      let ninjas = [this.state.ninjas.filter(ninja =>{
        return ninja.id !==id;
      })]

      this.setState({
        ninjas : ninjas
      })
  }

  render() {
    return (
      <div className="App">
        <h1>My First React App</h1>
        <p>Welcome :)</p>
        <Ninjas deleteNinja={ this.deleteNinja } ninjas = { this.state.ninjas } />
        <AddNinja addNinja={this.addNinja}/>
      </div>
    );
  }
}

export default App;
