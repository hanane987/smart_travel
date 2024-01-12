<!-- component -->
<style>
  body {
    font-family: 'Noto Sans', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  header {
    background-color: #000;
    color: #fff;
    height: 80px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .logo {
    display: flex;
    align-items: center;
  }

  .logo img {
    width: 70px; /* Adjust the size as needed */
    height: auto;
    margin-right: 20px;
  }

  .logo a {
    color: #fff;
    font-size: 20px;
    text-decoration: none;
    font-weight: bold;
  }

  .nav-links {
    display: flex;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .nav-links li {
    margin-right: 20px;
  }

  .nav-links a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    transition: color 0.3s ease;
  }

  .nav-links a:hover {
    color: #fcae04;
  }

  .search-button {
    background-color: #fcae04;
    color: #000;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .search-button:hover {
    background-color: #ffda63;
  }

  .contact-button {
    background-color: #fff;
    color: #000;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .contact-button:hover {
    background-color: #000;
    color: #fff;
  }
</style>

<header>
  <div class="logo">
    <a href="#">
      <img src="https://i.ibb.co/W6ZXdqN/2021-10-26-16h20-21.png" alt="Logo">
     
    </a>
  </div>
  <ul class="nav-links">
  <li><a href="index.php?action=home">Home page</a></li>
    <li><a href="index.php?action=buses">Bus</a></li>
    <li><a href="index.php?action=horaires">Horaire</a></li>
    <li><a href="index.php?action=routes">Route</a></li>
   
    
  </ul>
  <button class="search-button">
    <svg class="h-6" aria-hidden="true" focusable="false" data-prefix="far" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-3x">
      <path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"></path>
    </svg>
  </button>
  <button class="contact-button">Contact Me</button>
</header>
