import React from "react";
import {BrowserRouter, Route, Routes} from 'react-router-dom';


const UrlDestroySessionLaravel = 'http://localhost:8000/logout'

 export function App() {
  return  (
      <div>
          <BrowserRouter>
              <Routes>
              <Route path={"/profile"} element={<Profile/>}>
              </Route>
              </Routes>
          </BrowserRouter>
      </div>
  )
}
 export function Profile (){
    return (
        <div>
        <h1> Profile test page </h1>
    </div>
    )
}

export function ButtonLogout(){
    return (
        <button onClick={urlLogout} >LOG OUT</button>
    )
}
function urlLogout(){
    return (window.location.assign(UrlDestroySessionLaravel))
}
