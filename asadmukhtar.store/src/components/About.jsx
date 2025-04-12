import React from 'react';
import "./css/about.css";

export default function About() {
  return (
    <>
      {/* Hero Section */}
      <section className="hero-section">
        <div className="container">
          <h1 className="fw-bold">About Us</h1>
          <p className="lead">Empowering innovation, building trust, and delivering excellence.</p>
        </div>
      </section>

      {/* About Content */}
      <section className="about-content py-5">
        <div className="container">
          <div className="row align-items-center">
            <div className="col-lg-6">
              <h2 className="text-warning">Who We Are</h2>
              <p>
                At <strong>asadmukhtar.store</strong>, we are passionate about delivering high-quality solutions that drive success. Our mission is to provide cutting-edge services that empower individuals and businesses to reach their full potential.
              </p>
              <p>
                We believe in innovation, integrity, and customer satisfaction. With a team of skilled professionals, we constantly push boundaries to deliver outstanding results.
              </p>
            </div>
            <div className="col-lg-6">
              <img
                src="https://source.unsplash.com/600x400/?team,work"
                className="img-fluid rounded shadow-lg"
                alt="Our Team"
              />
            </div>
          </div>
        </div>
      </section>

      {/* Mission & Vision */}
      <section className="py-5 bg-light">
        <div className="container text-center">
          <div className="row">
            <div className="col-md-6">
              <div className="card p-4">
                <h3 className="text-warning">Our Mission</h3>
                <p>To create impactful solutions that drive growth and empower businesses globally.</p>
              </div>
            </div>
            <div className="col-md-6">
              <div className="card p-4">
                <h3 className="text-warning">Our Vision</h3>
                <p>To be a world-class leader in providing innovative and sustainable solutions for businesses.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Meet the Team */}
      <section className="container py-5">
        <h2 className="text-center text-warning mb-4">Meet Our Team</h2>
        <div className="row text-center">
          <div className="col-md-4 mb-4">
            <div className="team-card card p-3">
              <img src="https://source.unsplash.com/120x120/?man,face" alt="Team Member" />
              <h5 className="mt-3">Asad Mukhtar</h5>
              <p>Founder & CEO</p>
              <div>
                <a href="/"><i className="fa-brands fa-facebook text-warning mx-2"></i></a>
                <a href="/"><i className="fa-brands fa-twitter text-warning mx-2"></i></a>
                <a href="/"><i className="fa-brands fa-linkedin text-warning mx-2"></i></a>
              </div>
            </div>
          </div>
          <div className="col-md-4 mb-4">
            <div className="team-card card p-3">
              <img src="https://source.unsplash.com/120x120/?woman,face" alt="Team Member" />
              <h5 className="mt-3">Ayesha Khan</h5>
              <p>Marketing Head</p>
              <div>
                <a href="/"><i className="fa-brands fa-facebook text-warning mx-2"></i></a>
                <a href="/"><i className="fa-brands fa-twitter text-warning mx-2"></i></a>
                <a href="/"><i className="fa-brands fa-linkedin text-warning mx-2"></i></a>
              </div>
            </div>
          </div>
          <div className="col-md-4 mb-4">
            <div className="team-card card p-3">
              <img src="https://source.unsplash.com/120x120/?businessman,face" alt="Team Member" />
              <h5 className="mt-3">Ali Raza</h5>
              <p>Lead Developer</p>
              <div>
                <a href="/"><i className="fa-brands fa-facebook text-warning mx-2"></i></a>
                <a href="/"><i className="fa-brands fa-twitter text-warning mx-2"></i></a>
                <a href="/"><i className="fa-brands fa-linkedin text-warning mx-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
