/* eslint-disable react/jsx-pascal-case */
// import { useEffect,useState } from "react";
import "bootstrap/dist/css/bootstrap.css" ;
import axios from "axios";
import {useEffect,useState} from "react" ;
 function Home() {
   const [data,setData] =useState(null) ;
    console.log(data)
   useEffect ( () => {
      axios.get("http://127.0.0.1:8000/api/stagiaires").then( response =>setData(response.data)) 
},[])
   
  return (
    <div className="container mt-3">
        <div className="row">
            <div className="col-lg-12">
            <div className="pull-left" >
               <h2>hello in index</h2>
            </div>
            <div className="pull-right" >
                <a className="btn btn-outline-info" href="./Create">
                create a new item</a>
            </div>
            </div>
        </div>
        <table className="table table-bordered mt-2">
        <thead>
            <tr className="text-center">
              <th>id</th>
              <th>photo</th>
              <th>nom</th>
              <th>prenom</th> 
              <th>email</th> 
              <th>ville</th>
              <th>datenaissance</th>
              <th>filiere</th>
              <th>action</th>
            </tr>
        </thead>
        <tbody>
        {
          data && data.map((item) => (
            <Table_data  info = {item}  / >
          ))
        }
        </tbody>
        </table>
          
    </div>
    // here i will add alert message ;
    
  );
}
function Table_data (props) {
  return(
   <tr>
     <td>{props.info.id}</td>
     <td><img src={props.info.photo}  alt="echo-_-!"/></td>
     <td>{props.info.nom}</td>
     <td>{props.info.prenom}</td>
     <td>{props.info.email}</td>
     <td>{props.info.ville}</td>
     <td>{props.info.datenaissance}</td>
     <td>{props.info.filiere}</td>
     <td>
        <form >
           <a className="btn btn-outline-success" href="./edit" >Edit</a>
           <button type="submit" className="btn btn-outline-danger ml-2" >Delete</button>
        </form>
     </td>
   </tr>

   )
}

export default Home;
