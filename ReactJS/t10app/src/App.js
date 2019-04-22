import React, { Component } from 'react';
import Ninjas from './Ninjas';

class App extends Component {

  state = {
    ninjas : [
      {id : 1, name : 'Kartic', age : 27, job : 'Software Engineer'},
      {id : 2, name : 'Bablu', age : 30, job : 'Software Developer'},
      {id : 3, name : 'Atik', age : 35, job : 'Developer'},
      {id : 4, name : 'Bapon', age : 33, job : 'Graphic Designer'}
    ]
  };

  render() {
    return (
      <div className="App">
        <h1>My First React App</h1>
        <p>Welcome :)</p>
        <Ninjas ninjas = { this.state.ninjas } />
      </div>
    );
  }
}

export default App;
