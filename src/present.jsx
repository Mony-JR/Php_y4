import { Component } from "react";
class Presentation extends Component{
    render(){
        return (
         <>
          <h2>Presentation in class</h2>  
          <p>{`I'm ${this.props.name}.`}</p>
          <p>{`I'm ${this.props.title}.`}</p>
         </>
          
        );
    }
}
export default Presentation