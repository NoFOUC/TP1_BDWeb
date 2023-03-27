import React, { useState } from 'react';
import './App.css'
import ClientsTable from './components/ClientsList';
import CountryFilter from './components/CountryFilter';
import { useEffect } from 'react';

const clients = [
  {"id":1 , "name":" Sidi Ahmed Mahmoudi ", "city":" Mons ", "country":" Belgium "} ,
  {"id":2 , "name":" Amine Roukh ", "city": " Mons ","country":" Belgium "} ,
  {"id":3 , "name":" Veronique Dupont ", "city":" Mons ", "country":" Belgium "} ,
  {"id":4 , "name":" Chris Gardner ", "city":"New York ", "country":" United States "}
];

function App () {
  const [error, setError] = useState(null);
  const [isLoaded, setIsLoaded] = useState(false);
  const [items, setItems] = useState([]);
  const [currentFilter, setFilter] = useState("All");
  // Note: the empty deps array [] means
  // this useEffect will run once
  // similar to componentDidMount()

  useEffect(() => {
    fetch("https://621ea12e849220b1fc9e06ad.mockapi.io/clients")
      .then(res => res.json())
      .then(
        (result) => {
          setIsLoaded(true);
          setItems(result);
        },
        // Note: it's important to handle errors here
        // instead of a catch() block so that we don't swallow
        // exceptions from actual bugs in components.
        (error) => {
          setIsLoaded(true);
          setError(error);
        }
      )
  }, [])

  if (error) {
    return <div>Error: {error.message}</div>;
  } else if (!isLoaded) {
    return <div>Loading...</div>;
  } else {
    return (
      <div>
        <CountryFilter clients={items} setFilter={setFilter}/>
        <ClientsTable clients={items} currentFilter={currentFilter}/>
    </div>
    );
  }
}

export default App ;
