import React from 'react';
import { Routes, Route } from "react-router";
import Home from "./components/Home";
import About from "./components/About";
import Contact from "./components/Contact";
import Login from "./components/Login";
import Products from "./components/Products";
import View from "./components/View";
import Cart from "./components/Cart";
import Checkout from "./components/Checkout";
import Header from './components/includes/Header';
import Footer from './components/includes/Footer';

export default function App() {
  return (
    <div>
      <Header />
      <Routes>
        <Route path='/' element={<Home />} />
        <Route path='/about' element={<About />} />
        <Route path='/contact' element={<Contact />} />
        <Route path='/login' element={<Login />} />
        <Route path='/products' element={<Products />} />
        <Route path='/products/:id' element={<View />} />
        <Route path='/cart' element={<Cart />} />
        <Route path='/checkout' element={<Checkout />} />
      </Routes>
      <Footer />
    </div>
  );
}
