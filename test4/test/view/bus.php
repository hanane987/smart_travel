
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
    <link rel="stylesheet" href="assets\css\style1.css">
</head>
<!-- component -->
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
    width: 90px; /* Adjust the size as needed */
    height: auto;
    margin-right: 10px;
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




    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div class="panel">
                    <div style="    background-color: linear-gradient(to right, #2980b9, #2c3e50);;" class="panel-heading">
                        <div class="row">
                            <div class="col col-sm-3 col-xs-12">
                                <h4 class="title">Bus <span>List</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Numero de bus </th>
                                    <th>Plaque Immatriculation</th>
                                    <th>IdEntre</th>
                                    <th>Capacité</th>
                                    <th>état</th>
                                </tr>
                            </thead>
                            <?php foreach ($buses as $bus) : ?>
                                <tr>
                                    <td><?= $bus->getNumBus() ?></td>
                                    <td><?= $bus->getImmat() ?></td>
                                    <td><?= $bus->getIdEntre() ?></td>
                                    <td><?= $bus->getCapacity() ?></td>
                                    <td>
                                        <ul class='action-list'>
                                            <li><a href='index.php?action=add_bus&id=<?= $bus->getIdBus() ?>' data-tip='add'><i class='fa fa-plus'></i></a></li>
                                            <li><a href='index.php?action=updateBus&id=<?= $bus->getIdBus() ?>' data-tip='edit'><i class='fa fa-edit'></i></a></li>
                                            <li><a href='index.php?action=delete_bus&id=<?= $bus->getIdBus() ?>' data-tip='delete'><i class='fa fa-trash'></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    include_once "footer.php"

    ?>
</body>

</html>

