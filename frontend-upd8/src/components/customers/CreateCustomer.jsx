import React, { useState } from "react";
import "./Customers.scss";
import InputMask from "react-input-mask";
import { createCustomer } from "../helpers/Api";
import { toast } from "react-toastify";
import { useHistory } from "react-router-dom";

const CreateCustomer = () => {
  const [cpf, setCpf] = useState("");
  const [name, setName] = useState("");
  const [birthday, setBirthday] = useState("");
  const [gender, setGender] = useState("");
  const [state, setState] = useState("");
  const [city, setCity] = useState("");
  const [address, setAddress] = useState("");
  const [loading, setLoading] = useState(false);
  const history = useHistory();

  function handleCreateCustomer() {
    if (cpf.length < 14 || cpf.includes("_")) {
      return toast.error("Insira um cpf válido");
    } else if (name.length < 1) {
      return toast.error("Insira seu nome");
    } else if (birthday.length < 1) {
      return toast.error("Insira sua data de nascimento");
    } else if (gender.length < 1) {
      return toast.error("Insira seu gênero");
    } else if (address.length < 1) {
      return toast.error("Insira seu Endereço");
    } else if (state.length < 1) {
      return toast.error("Insira seu Estado");
    } else if (city.length < 1) {
      return toast.error("Insira sua cidade");
    }
    setLoading(true);
    let data = {
      document: cpf,
      name: name,
      birthday: birthday,
      gender: gender,
      address: address,
      state: state,
      city: city,
    };
    createCustomer(data)
      .then((res) => {
        handleCleanField();
        toast.success("Cliente criado com sucesso");
        history.push("/");
      })
      .catch((error) => {
        toast.error(error.response.data);
        console.log(error);
      })
      .finally(() => {
        setLoading(false);
      });
  }
  function handleCleanField() {
    setCpf("");
    setAddress("");
    setBirthday("");
    setCity("");
    setGender("");
    setName("");
    setState("");
  }
  function handlePush() {
    history.push("/");
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
        <p className="title">
          <span>Cadastrar cliente </span>
          <button
            className="create-customer-btn"
            style={{ marginTop: "15px" }}
            onClick={() => handlePush()}
          >
            Listar clientes{" "}
          </button>
        </p>
        <div className="personal-info">
          <label htmlFor="">
            CPF:{" "}
            <InputMask
              mask="999.999.999-99"
              placeholder="Ex: 158.736.974-87"
              value={cpf}
              onChange={(e) => setCpf(e.target.value)}
            />
          </label>
          <label htmlFor="">
            Nome:{" "}
            <input
              type="text"
              name="name"
              onChange={(e) => setName(e.target.value)}
              placeholder="Ex: Marcio"
              value={name}
            />
          </label>
          <label htmlFor="">
            Data de Nascimento:{" "}
            <input
              type="date"
              name="date"
              onChange={(e) => setBirthday(e.target.value)}
              value={birthday}
            />
          </label>
          <label htmlFor="">
            Sexo:{" "}
            <input
              type="radio"
              name="gender"
              value="M"
              onChange={(e) => setGender(e.target.value)}
            />
            <span>Masculino</span>
            <input
              type="radio"
              name="gender"
              value="F"
              onChange={(e) => setGender(e.target.value)}
            />
            <span>Feminino</span>
          </label>
        </div>
        <div className="last-section">
          <div className="address">
            <label htmlFor="">
              Endereço:
              <input
                type="text"
                name="state"
                onChange={(e) => setAddress(e.target.value)}
                placeholder="Ex: Rua projetada b c3 lote 12 Vila São Judas Tadeu"
                value={address}
              />
            </label>
            <label htmlFor="">
              Estado:
              <input
                type="text"
                name="state"
                onChange={(e) => setState(e.target.value)}
                placeholder="Ex: Rio da Janeiro"
                value={state}
              />
            </label>
            <label htmlFor="">
              Cidade:{" "}
              <input
                type="text"
                name="city"
                onChange={(e) => setCity(e.target.value)}
                placeholder="Ex: Duque de Caxias"
                value={city}
              />
            </label>
          </div>
          <div className="buttons">
            <button onClick={() => handleCreateCustomer()} disabled={loading}>
              {!loading ? "Cadastrar" : <small>Loading...</small>}
            </button>
            <button onClick={() => handleCleanField()}>Limpar</button>
          </div>
        </div>
      </section>
    </main>
  );
};

export default CreateCustomer;
