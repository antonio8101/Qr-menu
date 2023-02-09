const baseUrl = process.env.BASE_ADDRESS;
export const httpClient = axios.create({
    baseURL: baseUrl
});
