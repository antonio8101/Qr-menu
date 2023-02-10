const { REACT_APP_SERVER_ADDRESS, REACT_APP_URL, REACT_APP_CLIENT_ID, REACT_APP_CLIENT_SECRET } = process.env;

export const LOGIN_URL = REACT_APP_SERVER_ADDRESS + 'login';
export const LOGOUT_URL = REACT_APP_SERVER_ADDRESS + 'logout';
export const GETACCESSTOKEN_URL = REACT_APP_SERVER_ADDRESS + 'oauth/token';
export const USER_INFO = REACT_APP_SERVER_ADDRESS + 'api/user';
export const BASE_ADDRESS = REACT_APP_URL;
export const CLIENT_ID = REACT_APP_CLIENT_ID;
export const CLIENT_SECRET = REACT_APP_CLIENT_SECRET;
export const APP_URL =  window.location.origin + '/' + BASE_ADDRESS;


