const { REACT_APP_SERVER_ADDRESS, REACT_APP_URL } = process.env;

export const LOGIN_URL = REACT_APP_SERVER_ADDRESS + 'login';
export const LOGOUT_URL = REACT_APP_SERVER_ADDRESS + 'logout';
export const BASE_ADDRESS = REACT_APP_URL;

export const APP_URL =  window.location.origin + BASE_ADDRESS;


