<?php

class RouteDAO {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function createRoute(Route $route) {
        try {
            $sql = "INSERT INTO route (RouteID, VilleDepartID, VilleDestinationID, Distance, Duree, VilleID) VALUES (:routeID, :villeDepartID, :villeDestinationID, :distance, :duree, :villeID)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindValue(':routeID', $route->getRouteID());
            $stmt->bindValue(':villeDepartID', $route->getVilleDepartID());
            $stmt->bindValue(':villeDestinationID', $route->getVilleDestinationID());
            $stmt->bindValue(':distance', $route->getDistance());
            $stmt->bindValue(':duree', $route->getDuree());
            $stmt->bindValue(':villeID', $route->getVilleID());

            $result = $stmt->execute();

            return $result;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getRouteById($routeID) {
        try {
            $sql = "SELECT * FROM route WHERE RouteID = :routeID";
            $stmt = $this->db->prepare($sql);

            $stmt->bindValue(':routeID', $routeID);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new Route($result['RouteID'], $result['VilleDepartID'], $result['VilleDestinationID'], $result['Distance'], $result['Duree'], $result['VilleID']);
            } else {
                return null;
            }
        } catch (PDOException $e) {
            return null;
        }
    }

    public function updateRoute(Route $route) {
        try {
            $sql = "UPDATE route SET VilleDepartID = :villeDepartID, VilleDestinationID = :villeDestinationID, Distance = :distance, Duree = :duree, VilleID = :villeID WHERE RouteID = :routeID";
            $stmt = $this->db->prepare($sql);

            $stmt->bindValue(':routeID', $route->getRouteID());
            $stmt->bindValue(':villeDepartID', $route->getVilleDepartID());
            $stmt->bindValue(':villeDestinationID', $route->getVilleDestinationID());
            $stmt->bindValue(':distance', $route->getDistance());
            $stmt->bindValue(':duree', $route->getDuree());
            $stmt->bindValue(':villeID', $route->getVilleID());

            $result = $stmt->execute();

            return $result;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function deleteRoute($routeID) {
        try {
            $sql = "DELETE FROM route WHERE RouteID = :routeID";
            $stmt = $this->db->prepare($sql);

            $stmt->bindValue(':routeID', $routeID);

            $result = $stmt->execute();

            return $result;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getAllRoutes() {
        try {
            $sql = "SELECT * FROM route";
            $stmt = $this->db->query($sql);

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $routes = [];
            foreach ($results as $result) {
                $routes[] = new Route($result['RouteID'], $result['VilleDepartID'], $result['VilleDestinationID'], $result['Distance'], $result['Duree'], $result['VilleID']);
            }

            return $routes;
        } catch (PDOException $e) {
            return [];
        }
    }
}

?>
