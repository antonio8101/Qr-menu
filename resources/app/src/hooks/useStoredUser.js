import {getUser, removeUser, setUser} from "../localStorage";

export function useStoredUser() {

    let user = getUser();

    return [
        () => user,
        (user) => setUser(user),
        () => {
            user = null
            removeUser();
        }
    ]
}
