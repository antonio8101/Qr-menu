const USER_KEY = "user";
const ACCESS_TOKEN_KEY = "access_token";
const REFRESH_TOKEN_KEY = "refresh_token";

export function getUser() {
    const raw = localStorage.getItem(USER_KEY);
    return !!raw ? JSON.parse(raw) : null;
}

export function setUser(user) {
    localStorage.setItem(USER_KEY, JSON.stringify(user));
}

export function removeUser() {
    localStorage.removeItem(USER_KEY);
}
