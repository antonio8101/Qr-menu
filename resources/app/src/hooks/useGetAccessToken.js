import {httpClient} from "../httpClient";

export function useGetAccessToken() {
    return async ({ authcode }) => {
        if (!authcode){
            return;
        }

        //httpClient.

    }
}
