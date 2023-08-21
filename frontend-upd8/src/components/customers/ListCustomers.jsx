import React, { useEffect, useState } from "react";
import "./Customers.scss";
import InputMask from "react-input-mask";
import { defaultPaginationList, deleteCustomer } from "../helpers/Api";
import moment from "moment";
import EditCustomerModal from "./EditCustomerModal";
import { useHistory } from "react-router-dom";
import ConfirmModal from "./ConfirmModal";
import { toast } from "react-toastify";
import CustomPagination from "../CustomPagination/CustomPagination";

let searchData = {
  page: 1,
  perpage: 5,
  document: "",
  name: "",
  birthday: "",
  gender: "",
  state: "",
  city: "",
};
const ListCustomers = () => {
  const [cpf, setCpf] = useState("");
  const [name, setName] = useState("");
  const [birthday, setBirthday] = useState("");
  const [gender, setGender] = useState("");
  const [state, setState] = useState("");
  const [city, setCity] = useState("");
  const [data, setData] = useState([]);
  const [loading, setLoading] = useState(false);
  const [openEditModal, setOpenEditModal] = useState(false);
  const [dataEdit, setDataEdit] = useState({});
  const history = useHistory();
  const [openModalConfirm, setOpenModalConfirm] = useState(false);
  const [idCustomer, setIdCustomer] = useState("");
  const [loadingDelete, setLoadingDelete] = useState(false);

  function handleListCustomers() {
    setLoading(true);

    searchData.document = cpf;
    searchData.name = name;
    searchData.birthday = birthday;
    searchData.gender = gender;
    searchData.state = state;
    searchData.city = city;

    if (cpf.includes("_")) {
      return toast.error("Insira um cpf válido");
    }

    defaultPaginationList("customer/", searchData)
      .then((res) => {
        setData(res.data);
      })
      .catch((error) => {
        console.log(error);
      })
      .finally(() => {
        setLoading(false);
      });
  }

  useEffect(() => {
    handleListCustomers();
  }, []);

  function converteData2(data) {
    const dataConvertida = moment(data).format("DD/MM/YYYY");
    return dataConvertida;
  }
  function handlePush() {
    history.push("/create");
  }

  function handleDeleteCustomer() {
    setLoadingDelete(true);
    deleteCustomer(idCustomer)
      .then((res) => {
        toast.success("Cliente deletado com sucesso");
        handleListCustomers();
      })
      .catch((error) => {
        console.log(error);
        toast.error(error.response.data);
      })
      .finally(() => {
        setLoadingDelete(false);
        setOpenModalConfirm(false);
      });
  }
  function handleCleanField() {
    setCpf("");
    setBirthday("");
    setCity("");
    setGender("");
    setName("");
    setState("");
  }
  return (
    <main className="customers">
      <section className="box-logo">
        <div>
          <i className="fa-solid fa-cloud"></i>
        </div>
        <div className="text-logo">
          <span className="blue-text">:</span>
          <span className="yellow-text">up</span>
          <span className="blue-text">d8</span>
        </div>
      </section>
      <section className="customers-header">
        <p className="title">Consultar cliente</p>
        <div className="personal-info">
          <label htmlFor="">
            CPF:
            <InputMask
              mask="999.999.999-99"
              placeholder="Ex: 158.736.974-87"
              value={cpf}
              onChange={(e) => setCpf(e.target.value)}
            />
          </label>
          <label htmlFor="">
            Name:{" "}
            <input
              type="text"
              name="name"
              value={name}
              onChange={(e) => setName(e.target.value)}
              placeholder="Ex: Marcio"
              style={{ width: "150px" }}
            />
          </label>
          <label htmlFor="">
            Data Nasc.{" "}
            <input
              type="date"
              name="date"
              value={birthday}
              onChange={(e) => setBirthday(e.target.value)}
            />
          </label>
          <label htmlFor="">
            Sexo:{" "}
            <input
              type="radio"
              name="gender"
              value="M"
              checked={gender === "M"}
              onChange={(e) => setGender(e.target.value)}
            />
            <span>Masculino</span>
            <input
              type="radio"
              name="gender"
              value="F"
              checked={gender === "F"}
              onChange={(e) => setGender(e.target.value)}
            />
            <span>Feminino</span>
          </label>
        </div>
        <div className="last-section">
          <div className="address">
            <label htmlFor="">
              Estado:
              <input
                type="text"
                name="state"
                value={state}
                onChange={(e) => setState(e.target.value)}
                placeholder="Ex: Rio da Janeiro"
                style={{ width: "150px" }}
              />
            </label>
            <label htmlFor="">
              Cidade:{" "}
              <input
                type="text"
                name="city"
                value={city}
                onChange={(e) => setCity(e.target.value)}
                placeholder="Ex: Duque de Caxias"
                style={{ width: "150px" }}
              />
            </label>
          </div>
          <div className="buttons">
            <button onClick={() => handleListCustomers()}>Pesquisar</button>
            <button onClick={() => handleCleanField()}>Limpar</button>
          </div>
        </div>
      </section>
      <section className="content-customer">
        <p className="title">
          <span>Resultado da Pesquisa</span>{" "}
          <button className="create-customer-btn" onClick={() => handlePush()}>
            Cadastrar cliente
          </button>
        </p>

        {loading ? (
          <p className="loading">Loading...</p>
        ) : (
          <>
            {data.length < 1 ? (
              <p className="feed-content">
                Não há clientes cadastrados
                <br />{" "}
                <button
                  className="create-customer-btn"
                  style={{ marginTop: "15px" }}
                  onClick={() => handlePush()}
                >
                  Cadastrar cliente
                </button>
              </p>
            ) : (
              <>
                <table>
                  <thead>
                    <tr>
                      <th>Cliente</th>
                      <th>CPF</th>
                      <th>Data Nasc.</th>
                      <th>Estado</th>
                      <th>Cidade</th>
                      <th>Sexo</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    {data?.data?.map((item, index) => (
                      <tr
                        key={index}
                        onMouseMove={() => setIdCustomer(item.id)}
                      >
                        <td>{item.name}</td>
                        <td>{item.document}</td>
                        <td>{converteData2(item.birthday)}</td>
                        <td>{item.state}</td>
                        <td>{item.city}</td>
                        <td>{item.gender}</td>
                        <td>
                          <button
                            className="btn-edit"
                            onClick={() => [
                              setDataEdit(item),
                              setOpenEditModal(true),
                            ]}
                          >
                            Editar
                          </button>
                        </td>
                        <td>
                          <button
                            className="btn-delete"
                            onClick={() => setOpenModalConfirm(true)}
                          >
                            Excluir
                          </button>
                        </td>
                      </tr>
                    ))}
                  </tbody>
                </table>
                <CustomPagination
                  data={data}
                  onSearch={handleListCustomers}
                  searchData={searchData}
                />
              </>
            )}
          </>
        )}
      </section>
      <EditCustomerModal
        open={openEditModal}
        setFalseModal={() => setOpenEditModal(false)}
        data={dataEdit}
        realoadList={() => handleListCustomers()}
      />
      <ConfirmModal
        loadingDelete={loadingDelete}
        open={openModalConfirm}
        setFalseModal={() => setOpenModalConfirm(false)}
        handleRequest={() => handleDeleteCustomer()}
      />
    </main>
  );
};

export default ListCustomers;
