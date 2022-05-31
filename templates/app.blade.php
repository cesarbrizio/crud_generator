import logo from './logo.svg';
import './App.css';
import React, { Component } from 'react';

//Router
import { BrowserRouter, Routes, Route, useParams } from 'react-router-dom';

//Globals
import Globals from './Components/Miscelania/Globals';

//Moment
import AdapterMoment from '@material-ui/lab/AdapterMoment';

//LocalizationProvider
import LocalizationProvider from '@material-ui/lab/LocalizationProvider';

//Views

//Login
import Login from './Components/Login/Login';

{!! htmlspecialchars_decode($data['imports']) !!}

function App() {
    {!! htmlspecialchars_decode($data['edits']) !!}

  return (
    <div>
      <div>
      <LocalizationProvider dateAdapter={AdapterMoment}></LocalizationProvider>
      </div>  
      <div>
        <BrowserRouter>
            <Routes>

                {/* Home */}
                <Route path="/" element={<Login />} />

                {/* Login */}
                <Route path="/login" element={<Login />} />
                {!! htmlspecialchars_decode($data['routes']) !!}
            </Routes>
        </BrowserRouter>
      </div>
    </div>
  );
}

export default App;