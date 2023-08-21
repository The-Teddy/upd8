import axios from "axios";

const api = process.env.REACT_APP_API_URL + "/api";

export function createCustomer(data) {
  return axios.post(`${api}/customer/create`, data);
}
export function getCustomers(data) {
  return axios.get(`${api}/customer/?params=${data}`);
}
export function updateCustomer(id, data) {
  return axios.put(`${api}/customer/update/${id}`, data);
}
export function deleteCustomer(id) {
  return axios.delete(`${api}/customer/delete/${id}`);
}

function urlAppend(url, data) {
  let urlAppend = "";
  if (data) {
    for (const [key, value] of Object.entries(data)) {
      urlAppend += urlAppend ? `&${key}=${value}` : `?${key}=${value}`;
    }
  }
  return `${api}/${url + urlAppend}`;
}
export function defaultPaginationList(url, searchData) {
  url = urlAppend(url, searchData);
  return axios.get(url);
}
