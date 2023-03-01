import {getAccessToken, getUserInfo} from "../api";
import {useCallback} from "react";
import {setAccessToken, setRefreshToken, setUser} from "../localStorage";

export function useLogin() {

    // TODO: use maybe Recoil

    return useCallback(
        async (auth_code) => {

            if (!auth_code) {
                return;
            }

            const { access_token, refresh_token } = await getAccessToken(auth_code);

            setAccessToken(access_token);
            setRefreshToken(refresh_token);

            const userInfo = await getUserInfo();

            // TODO: use maybe with Recoil
            setUser(userInfo);
        },
        []
    );
}
