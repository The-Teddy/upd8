import React from "react";
import { Box, Modal } from "@mui/material";

const ConfirmModal = ({ ...props }) => {
  return (
    <>
      <Modal
        open={props.open}
        onClose={() => []}
        aria-labelledby="modal-modal-title"
        aria-describedby="modal-modal-description"
      >
        <Box className="confirm-modal">
          <main>
            <p className="feed-delete">
              Tem certeza que deseja excluir este cliente?
            </p>
            <button className="back" onClick={() => props.setFalseModal()}>
              Cancelar
            </button>
            <button
              className="delete"
              onClick={() => props.handleRequest()}
              disabled={props.loadingDelete}
            >
              {props.loadingDelete ? "Loading..." : "Deletar"}
            </button>
          </main>
        </Box>
      </Modal>
    </>
  );
};

export default ConfirmModal;
