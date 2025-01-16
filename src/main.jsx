// import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
// import "./index.css";
import Welcome from "./welcome.jsx";
import Greeting from "./greeting.jsx";
import Presentation from "./present.jsx";
import Click from "./click.jsx";
import ClickParamter from "./clickParameter.jsx"
import Change from "./change.jsx";
// import App from "./App.jsx";

// createRoot(document.getElementById("root")).render(
//   <StrictMode>
//     <App />
//   </StrictMode>
// );
createRoot(document.getElementById("welcome")).render(<Welcome />);
createRoot(document.querySelector('#greet')).render(<Greeting name='Bomrey' title='Student E1-Y4-G25'/>);
createRoot(document.querySelector('#present')).render(<Presentation name='Phannan' title='Manager'/>);
createRoot(document.querySelector('#click')).render(<Click/>)
createRoot(document.querySelector('#clickPara')).render(<ClickParamter/>)
createRoot(document.querySelector('#change')).render(<Change/>)
