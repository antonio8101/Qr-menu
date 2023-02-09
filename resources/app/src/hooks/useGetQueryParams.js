export function useGetQueryParams() {
    return (paramName) => {
        const queryParameters = new URLSearchParams(window.location.search);
        return queryParameters.get(paramName);
    }
}
