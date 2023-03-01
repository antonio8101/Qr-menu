import axios from "axios";
import {getAccessToken} from "./localStorage";

const baseUrl = process.env.REACT_APP_SERVER_ADDRESS;
export const httpClient = axios.create({
    baseURL: baseUrl
});

export const getAuthenticatedHttpClient = () => {
    return axios.create({
        baseURL: baseUrl,
        headers: {
            Authorization: `Bearer ${getAccessToken()}`
        }
    });
};
