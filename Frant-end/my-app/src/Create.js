import "bootstrap/dist/css/bootstrap.css" ;

import { useState } from "react";

function create () {
 
    return (
        <div className="container mt-3" >
             <div className="row">
                <div  className="col-lg-12">

                  <div className="pull-left">
                   <h2>create a New stagaiare</h2>
                  </div>
                  <div className="pull-right">
                   <a className="btn btn-outline-success" href="./Home" >
                   route -
                   </a>
                  </div>
                </div>
            </div>
            <form >
             <div className="row">
                <div className="form-group">
                 <strong>photo :</strong>
                <input type="file" className="form-control" name="photo"  />
                </div>
                <div className="group-form">
                 <strong>nom :</strong>
                <input type="text" className="form-control" name="nom"  />
                </div>
                <div className="group-form">
                 <strong>prenom :</strong>
                <input type="text" className="form-control" name="prenom"  />
                </div>
                <div className="group-form">
                 <strong>email :</strong>
                <input type="email" className="form-control" name="email"  />
                </div>
                <div className="group-form">
                 <strong>ville :</strong>
                <input type="text" className="form-control" name="ville"  />
                </div>
                <div className="group-form">
                 <strong>datenaissance :</strong>
                <input type="date" className="form-control" name="datenaissance"  />
                </div>
                <div className="group-form">
                 <strong>filiere :</strong>
                <input type="text" className="form-control" name="filiere"  />
                </div>
             </div>
            </form>
         </div>

    )
}

export default create ;