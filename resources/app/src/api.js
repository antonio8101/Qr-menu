import {getAuthenticatedHttpClient, httpClient} from "./httpClient";
import {APP_URL, CLIENT_ID, CLIENT_SECRET, GETACCESSTOKEN_URL, USER_INFO} from "./consts";

export async function getAccessToken(auth_code) {

    if (!auth_code){
        return;
    }

    const formData = new FormData();

    formData.append("grant_type", "authorization_code");
    formData.append("client_id", CLIENT_ID);
    formData.append("client_secret", CLIENT_SECRET);
    formData.append("redirect_uri", APP_URL);
    formData.append("code", auth_code);

    const headers = new Headers();
    headers.append("Accept", "application/json");

    const service_response = await httpClient.post(GETACCESSTOKEN_URL, formData, {
        headers : headers
    });

    return {
        access_token: service_response.data.access_token,
        refresh_token: service_response.data.refresh_token,
    }
}

export async function getUserInfo(){
    const httpClient = getAuthenticatedHttpClient();
    const service_response = await httpClient.get(USER_INFO);
    return service_response.data;
}
