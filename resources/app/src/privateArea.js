const Url = 'http://localhost:8000/logout'

export function PrivateArea(){
   return <div>react SPA</div>

}
export function ButtonLogout() {
    return <button onClick={urlLogout}>Log Out</button>
}

function urlLogout(){
    return window.location.assign(Url)
}
