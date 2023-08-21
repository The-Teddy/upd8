import React, { useEffect, useState } from "react";
import "./Custom.scss";

const CustomPagination = ({ ...props }) => {
  const [countPage, setCountPage] = useState([]);
  const handleNextPage = () => {
    if (props.data.current_page < props.data.last_page) {
      props.searchData.page = props.data.current_page + 1;
      props.onSearch(props.searchData);
    }
  };

  function handlePrevPage() {
    if (props.data.current_page > 1) {
      props.searchData.page = props.data.current_page - 1;
      props.onSearch(props.searchData);
    }
  }
  let totalPages = Math.ceil(props.data.total / props.data.per_page);
  let i = 0;
  let array = [];
  useEffect(() => {
    while (i < totalPages) {
      i++;
      array.push(i);
    }
    setCountPage(array);
  }, []);

  function handlePage(page) {
    props.searchData.page = props.data.current_page = page;
    props.onSearch(props.searchData);
  }

  return (
    <div className="">
      <div
        style={{
          marginTop: "15px",
          fontSize: "18px",
          fontWeight: "bold",
          color: "#363636",
        }}
      >
        <span style={{ margin: "5px" }}>Showing</span>
        <span style={{ margin: "5px" }}>
          {props.data.from ? props.data.from : "0"} to{" "}
        </span>
        <span style={{ margin: "5px" }}>
          {props.data.to ? props.data.to : "0"} of
        </span>
        <span style={{ margin: "5px" }}>
          {props.data.total ? props.data.total : "0"} entries
        </span>
      </div>
      <ul>
        <li onClick={handlePrevPage}>
          <button
            className="next-previous"
            disabled={props.data.from === props.data.current_page}
          >
            Previous
          </button>
        </li>
        <li>
          {countPage?.map((item, index) => (
            <button
              className={`btn-pagination ${
                item === props.data.current_page ? "active" : ""
              }`}
              onClick={() => handlePage(item)}
            >
              {item}
            </button>
          ))}
        </li>
        <li
          className={`page-item next ${
            props.data.current_page >= props.data.last_page ? "disabled" : ""
          } ${props.data.current_page ? "" : "disabled"}`}
          onClick={handleNextPage}
        >
          <button
            className="next-previous"
            disabled={props.data.last_page === props.data.current_page}
          >
            Next
          </button>
        </li>
      </ul>
    </div>
  );
};
export default CustomPagination;
