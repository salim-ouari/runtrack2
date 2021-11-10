-- Ecrivez dans le fichier “job07.sql” une requête permettant de sélectionner
-- l’ensemble des informations des étudiants qui ont plus de 18 ans.

SELECT `naissance` FROM `etudiants` WHERE DATEDIFF(CURRENT_DATE,`naissance`)>= 365*18 