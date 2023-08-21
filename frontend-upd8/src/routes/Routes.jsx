import React from "react";
import { Route, Switch } from "react-router-dom";
import ListCustomers from "../components/customers/ListCustomers";
import CreateCustomer from "../components/customers/CreateCustomer";

const Routes = () => {
  return (
    <>
      <Switch>
        <Route path="/" exact component={ListCustomers} />
        <Route path="/create" exact component={CreateCustomer} />
      </Switch>
    </>
  );
};

export default Routes;
