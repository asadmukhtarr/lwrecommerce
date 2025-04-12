import React from 'react';
import { Link } from 'react-router-dom';
import logo from "../images/logo.png";

export default function Header() {
  return (
    <div>
      <nav className="navbar navbar-expand-lg navbar-light bg-light border-bottom border-warning shadow-lg">
        <div className="container-fluid">
          <Link className="navbar-brand" to="/">
            <img src={logo} height="50px" alt="Logo" />
          </Link>
          <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse" id="navbarNav">
            <ul className="navbar-nav me-auto">
              <li className="nav-item">
                <Link className="nav-link" to="/"><i className="fa-solid fa-house"></i> Home</Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to="/about"><i className="fa-solid fa-circle-info"></i> About</Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to="/products"><i className="fa-solid fa-box"></i> Products</Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to="/contact"><i className="fa-solid fa-envelope"></i> Contact</Link>
              </li>
            </ul>
            <ul className="navbar-nav">
              <li className="nav-item dropdown">
                <a className="nav-link dropdown-toggle" href="/" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i className="fa-solid fa-user"></i> My Account
                </a>
                <ul className="dropdown-menu" aria-labelledby="accountDropdown">
                  <li>
                    <Link className="dropdown-item" to="/login"><i className="fa-solid fa-right-to-bracket"></i> Login</Link>
                  </li>
                  <li>
                    <Link className="dropdown-item" to="#"><i className="fa-solid fa-user-plus"></i> Register</Link> {/* Add actual route if Register page exists */}
                  </li>
                </ul>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to="/cart"><i className="fa-solid fa-cart-shopping"></i> Cart</Link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  );
}
