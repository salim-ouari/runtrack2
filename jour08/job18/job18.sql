-- Ecrivez dans le fichier “job18.sql” une requête
-- permettant de récupérer lenom de l'étage ayant
-- la salle avec la plus grande capacité 
-- (et afficher aussi le nom de cette salle ainsi
-- que sa capacité). Dans ce résultat, la colonne
-- “nom” de la salle doit être renommée 
-- en “Biggest Room”

SELECT etage.nom, salles.nom AS 'Biggest Room',
MAX(salles.capacite) FROM etage INNER JOIN
salles ON etage.id = salles.id_etage