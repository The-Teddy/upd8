import React, { useEffect, useState } from "react";
import { Box, Modal } from "@mui/material";
import InputMask from "react-input-mask";
import { toast } from "react-toastify";
import { updateCustomer } from "../helpers/Api";

const EditCustomerModal = ({ ...props }) => {
  const [cpf, setCpf] = useState("");
  const [name, setName] = useState("");
  const [birthday, setBirthday] = useState("");
  const [gender, setGender] = useState("");
  const [state, setState] = useState("");
  const [city, setCity] = useState("");
  const [address, setAddress] = useState("");
  const [loading, setLoading] = useState(false);

  useEffect(() => {
    setCpf(props?.data?.document);
    setName(props?.data?.name);
    setBirthday(props?.data?.birthday);
    setGender(props?.data?.gender);
    setState(props?.data?.state);
    setCity(props?.data?.city);
    setAddress(props?.data?.address);
  }, [props.data]);

  function handleEditCustomer() {
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
    updateCustomer(props?.data?.id, data)
      .then((res) => {
        toast.success("Cliente Editado com sucesso");
        props.setFalseModal();
        props.realoadList();
      })
      .catch((error) => {
        toast.error(error.response.data);
        console.log(error);
      })
      .finally(() => {
        setLoading(false);
      });
  }

  return (
    <>
      <Modal
        open={props.open}
        onClose={() => []}
        aria-labelledby="modal-modal-title"
        aria-describedby="modal-modal-description"
      >
        <Box className="edit-customer">
          <section className="close-title">
            <p>Editar Cliente</p>
            <p>
              <i
                className="fa-solid fa-xmark"
                onClick={() => props.setFalseModal()}
              ></i>
            </p>
          </section>
          <section className="edit-content">
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
              <label htmlFor="" className="label-gender">
                Sexo:{" "}
                <input
                  type="radio"
                  name="gender"
                  value="M"
                  checked={gender === "M"}
                  onChange={(e) => setGender(e.target.value)}
                />
                <small>Masculino</small>
                <input
                  type="radio"
                  name="gender"
                  value="F"
                  checked={gender === "F"}
                  onChange={(e) => setGender(e.target.value)}
                />
                <small>Feminino</small>
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
                <button onClick={() => handleEditCustomer()} disabled={loading}>
                  {!loading ? "Salvar" : <small>Loading...</small>}
                </button>
              </div>
            </div>
          </section>
        </Box>
      </Modal>
    </>
  );
};

export default EditCustomerModal;
