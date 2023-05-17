import "bootstrap/dist/css/bootstrap.css";
import React from 'react';
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom';
import Home from "./Home" ;
import Create from "./Create" ;
import Edit from "./Edit" ;
import Login from "./login";
function Menu() {
  return (
    <Router >
    <div className='mt-3'>
    <nav className='navbar navbar-expand-lg'>
            <ul className='navbar-nav mr-auto'>
                <li><Link  className='nav-link btn btn-outline-primary ' to={"/home"} >home</Link></li>
                <li><Link className='nav-link btn btn-outline-primary ' to={"/create"}>create</Link></li>
                <li><Link className='nav-link btn btn-outline-primary ' to={"/edit"}>edit</Link></li>
            </ul>
        </nav>
        <Routes>
          <Route path='/' element={<Login/>} />
          <Route path='/Home' element={<Home/>} />
          <Route path='/Create' element={<Create/>} />
          <Route path='/Edit' element={<Edit/>} />
        </Routes>
      </div>
     </Router>
     
  )
}

export default Menu ;